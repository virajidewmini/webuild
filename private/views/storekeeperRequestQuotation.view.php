<?php if (Auth::getRole() == 'Storekeeper') : ?>
    <?php $this->view('includes/header'); ?>
    <style>
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black overlay */
            z-index: 9998;
            /* Lower z-index than popup container */
        }

        .popup-container {
            height: 250px;
            width: 500px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 9999;
            text-align: center;
            border-radius: 10px;
            display: flex;
            /* Use flexbox for centering */
            flex-direction: column;
            /* Stack items vertically */
            justify-content: center;
            /* Center items vertically */
            align-items: center;
            /* Center items horizontally */
        }

        .btn-close {
            height: 50px;
            width: 70px;
            background-color: #E5863D;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>

    <form method="post" action="a" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>> <!-- Replace "add.php" with the appropriate action URL -->
        <div class="table_header" style="margin-left: 0rem;">
            <h1>Send Quotations</h1>
        </div>
        <?php if (count($errors) > 0) : ?>
            <div class="popup-overlay"></div> <!-- Add overlay -->
            <div class="popup-container">
                <strong><i style="color: red; font-size: 80px; margin:10px 0 10px 0 ;" class="fa-solid fa-circle-exclamation"></i></strong>
                <?php foreach ($errors as $error) : ?>
                    <br>
                    <h3 style="margin-bottom:10px;"><?= $error ?></h3>
                <?php endforeach; ?>
                <br><button style="background-color: #E5863D; color:#ffffff;" type="button" class="btn-close">OK</button>
            </div>
        <?php endif; ?>


        <div class="form_container" style="width: 160%; margin-left: 0rem;">
            <form method="post">
                <input value="<?= $r_id ?>" type="text" name="request_id" class="v_form-control send_quantity" style="display:none;" readonly>
                <input value="<?= $district ?>" type="text" name="district" class="v_form-control send_quantity" style="display:none;" readonly>
                <table id="quotation_table" class="v_table" style="width: 140%; margin-left: -1.5rem; margin-top:-2rem; margin-right:4rem;">
                    <thead>
                        <tr>
                            <th style="display:none;">Material and Equipment ID</th>
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

                                    <td style="display:none;"><input value="<?= $row->m_id ?>" type="text" name="m_id[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <td><input value="<?= $row->material_or_item_name ?>" type="text" name="material_or_item_name[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <td><input value="<?= $row->mesure_unit ?>" type="text" name="mesure_unit[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <td><input value="<?= $row->quantity ?>" type="text" name="" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                    <?php if (($row->batch_1_quantity + $row->batch_2_quantity) < $row->quantity) : ?>
                                        <td><input value="<?= $row->batch_1_quantity ?>" type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
                                        <td><input value="<?= $row->unit_price_1 ?>" type="text" name="unit_Price_1[]" class="v_form-control unit_price_1" style="height: 30px;width:5rem;" readonly></td>
                                        <td><input value="<?= $row->batch_2_quantity ?>" type="text" name="send_quantity2[]" class="v_form-control send_quantity" style="height: 30px; width:5rem;" readonly></td>
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
                                        <?php endif; ?>
                                    <?php elseif ($row->batch_1_quantity > $row->batch_2_quantity) : ?>
                                        <?php if ($row->quantity == $row->batch_2_quantity || $row->quantity < $row->batch_2_quantity) : ?>
                                            <td><input type="text" name="send_quantity1[]" class="v_form-control send_quantity" style="height: 30px; width:5rem; background-color: #ff0000;" readonly></td>
                                            <td><input type="text" name="unit_Price_1[]" class="v_form-control unit_price" style="height: 30px; width:5rem; background-color: #ff0000;" readonly></td>
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
                                    <td><input type="text" name="total_price[]" class="v_form-control total_price" style="height: 30px; width:7rem;" readonly></td>

                                </tr>
                                <?php if (($row->batch_1_quantity + $row->batch_2_quantity) < $row->quantity) : ?>
                                    <input value="Remain" type="text" name="status" class="v_form-control send_quantity" style="display:none;" readonly>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </form>
            <div>
                <!-- <label>Total Amount:</label>
            <input type="text" id="full_total_amout" name="full_total_amout" class="v_form-control" style="height: 30px; width: 20%" readonly> -->


                <button class="v_submit_button" type="submit">Submit</button>
            </div>
    </form>

    <script>
        function updateTotalQuantityAndPrice() {
            var rows = document.querySelectorAll('.materials');
            rows.forEach(function(row) {
                var batch1Quantity = parseFloat(row.querySelector('input[name="send_quantity1[]"]').value) || 0;
                var batch2Quantity = parseFloat(row.querySelector('input[name="send_quantity2[]"]').value) || 0;
                var unitPrice1 = parseFloat(row.querySelector('input[name="unit_Price_1[]"]').value) || 0;
                var unitPrice2 = parseFloat(row.querySelector('input[name="unit_Price_2[]"]').value) || 0;

                var totalQuantity = parseInt((batch1Quantity || 0)) + parseInt((batch2Quantity || 0));
                row.querySelector('input[name="total_quantity[]"]').value = parseInt(totalQuantity.toFixed(2));

                var totalPrice = ((unitPrice1 * batch1Quantity) || 0) + ((unitPrice2 * batch2Quantity) || 0);
                row.querySelector('input[name="total_price[]"]').value = parseInt(totalPrice.toFixed(2));
            });
        }

       
        document.querySelectorAll('input[name^="send_quantity"], input[name^="unit_Price_"]').forEach(function(input) {
            input.addEventListener('input', function() {
                updateTotalQuantityAndPrice();
            });
        });

        updateTotalQuantityAndPrice();
    </script>
    <script>
        function link(link) {
            location.href = link.value;
        }

        document.addEventListener('DOMContentLoaded', function() {
            var popupContainer = document.querySelector('.popup-container');
            var closeButton = popupContainer.querySelector('.btn-close');

            // Close the popup when the close button is clicked
            closeButton.addEventListener('click', function() {
                popupContainer.style.display = 'none';
                document.querySelector('.popup-overlay').style.display = 'none';
            });
        });
    </script>


    <?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>