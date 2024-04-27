<!-- <?php if(Auth::getRole()== 'Storekeeper'): ?> -->
  <?php $this->view('includes/header')?>

<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            color: #000;
            padding: 20px;
            text-align: center;
        }

        .main {
            padding: 20px;
        }

        .footer {
            color: #000;
            text-align: center;
            padding: 10px;
            bottom: 0;
            width: 100%;
        }

        /* Existing styles */

        .bill-details,
        .customer-info,
        .items,
        .totals,
        .payment-info {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #333;
            padding: 8px;
        }

        table th {
            background-color: #f2f2f2;
        }

        /* Additional styles for gentlemanly appearance */

        .bill-details h2,
        .customer-info h2,
        .items h2,
        .totals h2,
        .payment-info h2 {
            font-size: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .footer p {
            border-top: 4px solid #333;
            padding-top: 5px;
            margin-top: 10px;
        }

        .header h1 {
            border-bottom: 4px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        strong {
            font-weight: bold;
        }

        table th {
            background-color: #333;
            color: #fff;
        }

        table td {
            text-align: center;
        }

        /* Adjustments for mobile responsiveness */

        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
        }
</style>
<div id="pdf">
                            <div class="header">
                                <h1>WEBUILD</h1>
                            </div>

                            <div class="main">
                                <div class="bill-details">
                                    <h2>Details</h2>
                                    <p><strong>Date : </strong><?= date("y-m-d") ?></p>
                                    <p><strong>Project Id : </strong><?= $rows[0]->id ?></p>
                                    <p><strong>Request Id : </strong><?= $rows[0]->id ?></p>
                                </div>

                                <!-- <div class="customer-info">
                                    <h2>Customer Information</h2>
                                    <p><strong>ID : </strong><?= $rows[0]->user_id ?></p>
                                    <p><strong>Name : </strong><?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?></p>
                                    <p><strong>Address : </strong><?= $rows[0]->user->address ?></p>
                                </div> -->

                                <div class="items">
                                    <h2>Send Total Material Details</h2>
                                    <table style="width: 10px;">
                                        <tr>
                                            <th>Materials Id</th>
                                            <th>Material Name</th>
                                            <th>Total Quantity</th>
                                            <th>Total Amout</th>
                                        </tr>
                                        <?php if ($rowk) : ?>
                                            <?php if ($rowk[0]->paint_id) : ?>
                                                <tr>
                                                    <td>Kitchen</td>
                                                    <td><?= $model[0]->defaultColor->name ?></td>
                                                    <td><?= $rowk[0]->paint->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_painting_kitchens ?></td>
                                                    <td id="kit_p_d_price"></td>
                                                    <td id="kit_p_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowba) : ?>
                                            <?php if ($rowba[0]->paint_id) : ?>
                                                <tr>
                                                    <td>Bathroom</td>
                                                    <td><?= $model[0]->defaultColor->name ?></td>
                                                    <td><?= $rowba[0]->paint->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_painting_bathrooms ?></td>
                                                    <td id="bath_p_d_price"></td>
                                                    <td id="bath_p_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowd) : ?>
                                            <?php if ($rowd[0]->paint_id) : ?>
                                                <tr>
                                                    <td>Dining</td>
                                                    <td><?= $model[0]->defaultColor->name ?></td>
                                                    <td><?= $rowd[0]->paint->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_painting_dining ?></td>
                                                    <td id="din_p_d_price"></td>
                                                    <td id="din_p_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowbe) : ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <tr>
                                                    <td>Bedroom</td>
                                                    <td><?= $model[0]->defaultColor->name ?></td>
                                                    <td><?= $rowbe[0]->paint->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_painting_bedrooms ?></td>
                                                    <td id="bed_p_d_price"></td>
                                                    <td id="bed_p_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowl) : ?>
                                            <?php if ($rowl[0]->paint_id) : ?>
                                                <tr>
                                                    <td>Living Area</td>
                                                    <td><?= $model[0]->defaultColor->name ?></td>
                                                    <td><?= $rowl[0]->paint->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_painting_living_area ?></td>
                                                    <td id="liv_p_d_price"></td>
                                                    <td id="liv_p_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowbe) : ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <tr>
                                                    <td>Exterior</td>
                                                    <td><?= $model[0]->defaultColor->name ?></td>
                                                    <td><?= $rowbe[0]->paint->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_painting_exterior ?></td>
                                                    <td id="ext_p_d_price"></td>
                                                    <td id="ext_p_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </table>
                                </div>
                                <!-- <div class="items">
                                    <h2>Tile Modification Details</h2>
                                    <table style="width: 10px;">
                                        <tr>
                                            <th>Place</th>
                                            <th>Default Tile</th>
                                            <th>New Tile</th>
                                            <th>No. Square feet</th>
                                            <th>Default Price</th>
                                            <th>New Price</th>
                                        </tr>
                                        <?php if ($rowk) : ?>
                                            <?php if ($rowk[0]->tile_id) : ?>
                                                <tr>
                                                    <td>Kitchen</td>
                                                    <td><?= $model[0]->kitchenTile->name ?></td>
                                                    <td><?= $rowk[0]->tile->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_tiling_kitchens ?></td>
                                                    <td id="kit_t_d_price"></td>
                                                    <td id="kit_t_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowba) : ?>
                                            <?php if ($rowba[0]->tile_id) : ?>
                                                <tr>
                                                    <td>Bathroom</td>
                                                    <td><?= $model[0]->bathroomTile->name ?></td>
                                                    <td><?= $rowba[0]->tile->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_tiling_bathrooms ?></td>
                                                    <td id="bath_t_d_price"></td>
                                                    <td id="bath_t_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowd) : ?>
                                            <?php if ($rowd[0]->tile_id) : ?>
                                                <tr>
                                                    <td>Dining</td>
                                                    <td><?= $model[0]->diningTile->name ?></td>
                                                    <td><?= $rowd[0]->tile->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_tiling_dining ?></td>
                                                    <td id="din_t_d_price"></td>
                                                    <td id="din_t_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowbe) : ?>
                                            <?php if ($rowbe[0]->tile_id) : ?>
                                                <tr>
                                                    <td>Bedroom</td>
                                                    <td><?= $model[0]->defaultTile->name ?></td>
                                                    <td><?= $rowbe[0]->tile->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_tiling_bedrooms ?></td>
                                                    <td id="bed_t_d_price"></td>
                                                    <td id="bed_t_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowl) : ?>
                                            <?php if ($rowl[0]->tile_id) : ?>
                                                <tr>
                                                    <td>Living Area</td>
                                                    <td><?= $model[0]->defaultTile->name ?></td>
                                                    <td><?= $rowl[0]->tile->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_tiling_living_area ?></td>
                                                    <td id="liv_t_d_price"></td>
                                                    <td id="liv_t_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($rowe) : ?>
                                            <?php if ($rowe[0]->tile_id) : ?>
                                                <tr>
                                                    <td>Exterior</td>
                                                    <td><?= $model[0]->defaultTile->name ?></td>
                                                    <td><?= $rowe[0]->tile->name ?></td>
                                                    <td><?= $model[0]->number_of_s_feet_for_tiling_exterior ?></td>
                                                    <td id="ext_t_d_price"></td>
                                                    <td id="ext_t_m_price"></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </table>
                                </div> -->
                                <!-- <div class="payment-info">
                                    <h2>Payment Information</h2>
                                    <p><strong>Payment ID : </strong><?= $rows[0]->payment->id ?></p>
                                    <p><strong>Payment Name : </strong><?= $rows[0]->payment->name ?></p>
                                    <p><strong>Interest Precentage : </strong><?= $rows[0]->payment->interest ?> %</p>
                                </div> -->
                                <div class="totals">
                                    <h2>Totals</h2>
                                    <p><strong>Subtotal : </strong>RS. <strong id="new_price"></strong></p>
                                    <!-- <p><strong>Interest : </strong>RS. <strong id="inter"></strong></p> -->
                                    <p><strong>Total : </strong>RS. <strong id="t_tal"></strong></h5>
                                    </p>
                                </div>
                            </div>
                            <div class="footer">
                                <p>WEBUILD PVT.</p>
                            </div>
                        </div>

<?php $this->view('includes/footer'); ?>

<!-- <?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?> -->