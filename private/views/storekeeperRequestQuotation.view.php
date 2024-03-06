<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header'); ?>

<form method="post" action="a"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>""> <!-- Replace "add.php" with the appropriate action URL -->
    <div class="table_header" style="margin-left: 0rem;">
        <h1>Send Quotations</h1>
    </div>

    <div class="form_container" style="width: 160%; margin-left: 0rem;">
        <table id="quotation_table" class="v_table" style="width: 150%; margin-left: -1.5rem; margin-top:-2rem; margin-right:4rem;">
            <thead>
                <tr>
                    <th>Project ID</th>
                    <th>Request ID</th>
                    <th>Material Name</th>
                    <th>Material Code</th>
                    <th>Measure Unit</th>
                    <th>Requested Quantity</th>
                    <th>Batch No</th>
                    <th>Batch 1 Quantity</th>
                    <th>Unit Price 1</th>
                    <th>Batch 2 Quantity</th>
                    <th>Unit Price2</th>
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
                            <td><input type="text" name="batch_1_quantity[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" required></td>
                            <td><input type="text" name="unit_Price_1[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" required></td>
                            <td><input type="text" name="batch_2_quantity[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" required></td>
                            <td><input type="text" name="unit_Price_2[]" class="v_form-control unit_price" style="height: 30px; width:5rem;" required></td>
                            <td><input type="text" name="total_price[]" class="v_form-control total_price" style="height: 30px; width:5rem;" required readonly></td>
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
    // Update total price and full total amount
    function updateTotalPriceAndAmount() {
        var rows = document.querySelectorAll('.materials');
        var fullTotalAmount = 0;
        rows.forEach(function(row) {
            var batch1Quantity = parseFloat(row.querySelector('input[name="batch_1_quantity[]"]').value) || 0;
            var unitPrice1 = parseFloat(row.querySelector('input[name="unit_Price_1[]"]').value) || 0;
            var batch2Quantity = parseFloat(row.querySelector('input[name="batch_2_quantity[]"]').value) || 0;
            var unitPrice2 = parseFloat(row.querySelector('input[name="unit_Price_2[]"]').value) || 0;

            var totalPrice = (batch1Quantity * unitPrice1) + (batch2Quantity * unitPrice2);
            row.querySelector('input[name="total_price[]"]').value = totalPrice.toFixed(2);

            fullTotalAmount += totalPrice;
        });

        document.getElementById('full_total_amout').value = fullTotalAmount.toFixed(2);
    }

    // Update total price and full total amount when input values change
    document.querySelectorAll('.send_quantity, .unit_price').forEach(function(input) {
        input.addEventListener('input', function() {
            updateTotalPriceAndAmount();
        });
    });
</script>


<?php $this->view('includes/footer'); ?>
