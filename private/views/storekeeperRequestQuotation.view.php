<?php if (Auth::getRole() == 'Storekeeper') : ?>
    <?php $this->view('includes/header'); ?>

    <form method="post" action="a" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>> <!-- Replace "add.php" with the appropriate action URL -->
        <div class="table_header" style="margin-left: 0rem;">
            <h1>Send Quotations</h1>
        </div>

        <div class="form_container" style="width: 160%; margin-left: 0rem;">
            <form method="post">
                <input value="<?= $r_id ?>" type="text" name="request_id" class="v_form-control send_quantity" style="display:none;" readonly>
                <input value="<?= $district ?>" type="text" name="district" class="v_form-control send_quantity" style="display:none;" readonly>
                <table id="quotation_table" class="v_table" style="width: 150%; margin-left: -1.5rem; margin-top:-2rem; margin-right:4rem;">
                    <thead>
                        <tr>
                            <th>Material and Equipment ID</th>
                            <th>Material and Equipment Name</th>
                            <th>Measure Unit</th>
                            <th>Requested Quantity</th>
                            <th>Batch 1 Quantity</th>
                            <th>Unit Price 1</th>
                            <th>Batch 2 Quantity</th>
                            <th>Unit Price2</th>
                            <th>Total Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($rows) && !empty($rows)) : ?>
                            <?php foreach ($rows as $row) : ?>
                                <tr class="materials">

                                    <td><input value="<?= $row->m_id ?>" type="text" name="m_id[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <td><input value="<?= $row->material_or_item_name ?>" type="text" name="material_or_item_name[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <td><input value="<?= $row->mesure_unit ?>" type="text" name="mesure_unit[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <td><?= $row->quantity ?></td>
                                    <?php if (($row->batch_1_quantity + $row->batch_2_quantity) < $row->quantity) : ?>
                                        <td><input value="<?= $row->batch_1_quantity ?>" type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                        <td><input value="<?= $row->unit_price_1 ?>" type="text" name="unit_Price_1[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" readonly></td>
                                        <td><input value="<?= $row->batch_2_quantity ?>"  type="text" name="send_quantity2[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                        <td><input value="<?= $row->unit_price_2 ?>" type="text" name="unit_Price_2[]" class="v_form-control unit_price" style="height: 30px; width:5rem;" readonly></td>

                                    <?php elseif ($row->batch_1_quantity < $row->batch_2_quantity) : ?>
                                        <?php if ($row->quantity == $row->batch_1_quantity || $row->quantity < $row->batch_1_quantity) : ?>
                                            <td><input value="<?= $row->quantity ?>" type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                            <td><input value="<?= $row->unit_price_1 ?>" type="text" name="unit_Price_1[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" readonly></td>
                                            <td><input type="text" name="send_quantity2[]" class="v_form-control send_quantity" style="height: 30px; width:5rem; background-color: #ff0000;" readonly></td>
                                            <td><input type="text" name="unit_Price_2[]" class="v_form-control unit_price" style="height: 30px; width:5rem; background-color: #ff0000;" readonly></td>


                                        <?php else : ?>
                                            <td><input value="<?= $row->batch_1_quantity ?>" type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                            <td><input value="<?= $row->unit_price_1 ?>" type="text" name="unit_Price_1[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" readonly></td>
                                            <td><input value="<?= $row->quantity - $row->batch_1_quantity ?>" type="text" name="send_quantity2[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                            <td><input value="<?= $row->unit_price_2 ?>" type="text" name="unit_Price_2[]" class="v_form-control unit_price" style="height: 30px; width:5rem;" readonly></td>
                                        <?php endif ?>
                                    <?php elseif ($row->batch_1_quantity > $row->batch_2_quantity) : ?>
                                        <?php if ($row->quantity == $row->batch_2_quantity || $row->quantity < $row->batch_2_quantity) : ?>
                                            <td><input type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem; background-color: #ff0000;" readonly></td>
                                            <td><input type="text" name="unit_Price_[]" class="v_form-control unit_price" style="height: 30px; width:5rem; background-color: #ff0000;" readonly></td>
                                            <td><input value="<?= $row->quantity ?>" type="text" name="send_quantity2[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                            <td><input value="<?= $row->unit_price_2 ?>" type="text" name="unit_Price_2[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" readonly></td>




                                        <?php else : ?>
                                            <td><input value="<?= $row->batch_2_quantity ?>" type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                            <td><input value="<?= $row->unit_price_2 ?>" type="text" name="unit_Price_1[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" readonly></td>
                                            <td><input value="<?= $row->quantity - $row->batch_2_quantity ?>" type="text" name="send_quantity2[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                            <td><input value="<?= $row->unit_price_1 ?>" type="text" name="unit_Price_2[]" class="v_form-control unit_price" style="height: 30px; width:5rem;" readonly></td>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <td><input type="text" name="total_quantity[]" class="v_form-control total_price" style="height: 30px; width:5rem;" readonly></td>
                                    <td><input type="text" name="total_price[]" class="v_form-control total_price" style="height: 30px; width:5rem;" readonly></td>

                                </tr>
                                <?php if (($row->batch_1_quantity + $row->batch_2_quantity) < $row->quantity) : ?>
                                    <input value="Remain" type="text" name="status" class="v_form-control send_quantity" style="display:none;" readonly>
                                <?php endif; ?>   
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </form>
            <?php print_r($_POST) ?>
            <div>
                <!-- <label>Total Amount:</label>
            <input type="text" id="full_total_amout" name="full_total_amout" class="v_form-control" style="height: 30px; width: 20%" readonly> -->


                <button class="v_submit_button" type="submit">Submit</button>
            </div>
    </form>

    <!-- <script>
   
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

    
    document.querySelectorAll('.send_quantity, .unit_price').forEach(function(input) {
        input.addEventListener('input', function() {
            updateTotalPriceAndAmount();
        });
    });
</script> -->


    <?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>