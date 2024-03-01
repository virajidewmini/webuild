<?php $this->view('includes/header'); ?>

<form method="post" action="add.php"> <!-- Replace "add.php" with the appropriate action URL -->
    <div class="table_header" style="margin-left: 0rem;">
        <h1>Send Quotations</h1>
    </div>

    <div class="form_container" style="width: 150%; margin-left: 0rem;">
        <table id="quotation_table" class="v_table" style="width: 100%; margin-left: -1.5rem; margin-top:-2rem;">
            <thead>
                <tr>
                    <th>Project ID</th>
                    <th>Request ID</th>
                    <th>Material Name</th>
                    <th>Material Code</th>
                    <th>Measure Unit</th>
                    <th>Requested Quantity</th>
                    <th>Batch No</th>
                    <th>Send Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                    <!-- <th>Issue Date</th> -->
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows) && !empty($rows)): ?>
                    <?php foreach ($rows as $row):?>
                        <tr class="materials">
                            <td><?= $row->project_id ?></td>
                            <td><?= $row->request_id ?></td>
                            <td><?= $row->material_or_item_name ?></td>
                            <td><?= $row->material_or_item_id ?></td>
                            <td><?= $row->mesure_unit ?></td>
                            <td><?= $row->quantity ?></td>
                            <td>
                                <select name="batch_NO[]" class="v_form-control" style="height: 30px;" required>
                                    <option value="batch1">Batch 1</option>
                                    <option value="batch2">Batch 2</option>
                                    <!-- Add more options if needed -->
                                </select>
                            </td>
                            <td><input type="text" name="send_quantity[]" class="v_form-control send_quantity" style="height: 30px;" required></td>
                            <td><input type="text" name="unit_Price[]" class="v_form-control unit_price" style="height: 30px;" required></td>
                            <td><input type="text" name="total_price[]" class="v_form-control total_price" style="height: 30px;" required readonly></td>
                            <!-- <td><input type="text" name="quotation_issue_date[]" class="v_form-control" style="height: 30px;" required></td> -->
                        </tr>
                    <?php endforeach;?>
                <?php endif; ?>
            </tbody>
        </table>
        <div>
            <label>Total Amount:</label>
            <input type="text" id="full_total_amout" name="full_total_amout" class="v_form-control" style="height: 30px;" readonly>

            <label>Date:</label>
            <input type="text" id="quotation_issue_date" name="quotation_issue_date" class="v_form-control" style="height: 30px;" required>
        </div>
        <button class="v_submit_button" type="submit">Submit</button>
    </div>
</form>

<script>
    // Function to calculate the total amount
    function calculateTotalAmount() {
        var totalAmount = 0;
        var total_price_inputs = document.querySelectorAll('.total_price');
        total_price_inputs.forEach(function(input) {
            totalAmount += parseFloat(input.value) || 0;
        });
        return totalAmount;
    }

    // Update total amount when any total price input changes
    document.querySelectorAll('.send_quantity, .unit_price').forEach(function(input) {
        input.addEventListener('input', function() {
            var row = input.closest('tr');
            var quantity = parseFloat(row.querySelector('.send_quantity').value) || 0;
            var unitPrice = parseFloat(row.querySelector('.unit_price').value) || 0;
            var totalPrice = quantity * unitPrice;
            row.querySelector('.total_price').value = totalPrice.toFixed(2); // Adjust decimal places as needed

            var totalAmount = calculateTotalAmount();
            document.getElementById('full_total_amout').value = totalAmount.toFixed(2); // Adjust decimal places as needed
        });
    });
</script>

<?php $this->view('includes/footer'); ?>
