<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>
    <style>
        .pro-id {
            background-color: white;
            display: flex;
            padding: 0 0 20px 0;
            border-radius: 20px;
            width: 90%;
            max-width: 1100px;
            height: auto;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        .pro-id-details {
            width: 100%;
        }

        .title-id {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            width: 100%;
        }

        .p-title {
            min-width: 200px;
            width: 20%;
            margin: 10px 0 0 20px;
        }

        .p-title-detail {
            margin-top: 5%;
        }

        .unit-d {

            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 10px;
        }

        .unit {
            min-width: 150px;
            width: 100%;
            margin: 5px;
        }

        .table_header {
            width: 100%;
            height: auto;
        }

        .task_d::placeholder {
            color: black;
        }

        .task_d {
            border: 1px solid black;
            border-radius: 7px;
            padding: 10px 10px 10px 20px;
            margin-left: 10px;
            width: 300px;
            height: 100px;
        }

        .square-f {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 5%;
            margin-bottom: 10px;
            margin-top: 30px;
        }

        .defm {
            background-color: #ececec;
            border-radius: 20px;
            padding: 15px
        }

        .modm {
            background-color: #ffd699;
            border-radius: 20px;
            padding: 15px
        }

        .bd {
            border: #E5863D 1px solid;
            border-radius: 20px;
            padding: 15px
        }

        .in_a_c:hover {
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
        }

        .in_a_c:active {
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }

        /* style of bill */

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
    <?php if (true) : ?>
        <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">

            <div class="pro-id" style="padding: 0 0 40px 0; ">

                <div class="pro-id-details">
                    <form method="post" id="form">
                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                            <h2 style="margin-top: 20px;margin-bottom: 20px">MODIFICATION</h2>
                        </div>
                        <div style="display:none">
                            <?php if ($rowk) : ?>
                                <div class="m-part" id="kitchen">
                                    <div class="m-part-top">
                                        <h3 style="margin-left:20px;margin-top:20px;">Kitchen</h3>
                                    </div>
                                    <div class="unit-d">

                                        <div class="defm">
                                            <h4 style="text-align:center;">Default</h4>
                                            <?php if ($rowk[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->kitchenTile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square feet :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input style="width:150px;" readonly value="<?= $model[0]->kitchenTile->price_per_square_feet ?>" type="text" id="k-dtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowk[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultColor->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $model[0]->defaultColor->price_per_square_feet ?>" type="text" id="k-dpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modm">
                                            <h4 style="text-align:center;">Modification</h4>
                                            <?php if ($rowk[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowk[0]->tile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowk[0]->tile->price_per_square_feet ?>" type="text" id="k-mtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowk[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowk[0]->paint->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowk[0]->paint->price_per_square_feet ?>" type="text" id="k-mpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="square-f">
                                        <div style="margin-right:5%">
                                            <h4>No. Square foot for</h4>
                                        </div>
                                        <div>
                                            <?php if ($rowk[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tiling :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_tiling_kitchens ?>" type="text" key="kitchen" id="k-s_q_t">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowk[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Painting :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_painting_kitchens ?>" type="text" key="kitchen" id="k-s_q_p">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="unit-d bd" style="margin-top:30px; ">

                                        <div>
                                            <h4 style="text-align:center;">Default price</h4>
                                            <?php if ($rowk[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dktileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowk[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dkpaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h4 style="text-align:center;">New price</h4>
                                            <?php if ($rowk[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mktileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowk[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mkpaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-top:40px">
                                </div>
                            <?php endif; ?>
                            <?php if ($rowba) : ?>
                                <div class="m-part" id="bathroom">
                                    <div class="m-part-top">
                                        <h3 style="margin-left:20px;margin-top:20px">Bathroom</h3>
                                    </div>
                                    <div class="unit-d">

                                        <div class="defm">
                                            <h4 style="text-align:center;">Default</h4>
                                            <?php if ($rowba[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->bathroomTile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square feet :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input style="width:150px;" readonly value="<?= $model[0]->bathroomTile->price_per_square_feet ?>" type="text" id="ba-dtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowba[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultColor->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $model[0]->defaultColor->price_per_square_feet ?>" type="text" id="ba-dpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modm">
                                            <h4 style="text-align:center;">Modification</h4>
                                            <?php if ($rowba[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowba[0]->tile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowba[0]->tile->price_per_square_feet ?>" type="text" id="ba-mtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowba[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowba[0]->paint->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowba[0]->paint->price_per_square_feet ?>" type="text" id="ba-mpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="square-f">
                                        <div style="margin-right:5%">
                                            <h4>No. Square foot for</h4>
                                        </div>
                                        <div>
                                            <?php if ($rowba[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tiling :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_tiling_bathrooms ?>" type="text" key="kitchen" id="ba-s_q_t">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowba[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Painting :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_painting_bathrooms ?>" type="text" key="kitchen" id="ba-s_q_p">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="unit-d bd" style="margin-top:30px; ">

                                        <div>
                                            <h4 style="text-align:center;">Default price</h4>
                                            <?php if ($rowba[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dbatileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowba[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dbapaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h4 style="text-align:center;">New price</h4>
                                            <?php if ($rowba[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mbatileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowba[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mbapaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-top:40px">
                                </div>
                            <?php endif; ?>
                            <?php if ($rowd) : ?>
                                <div class="m-part" id="Dining">
                                    <div class="m-part-top">
                                        <h3 style="margin-left:20px;margin-top:20px">Dining</h3>
                                    </div>
                                    <div class="unit-d">

                                        <div class="defm">
                                            <h4 style="text-align:center;">Default</h4>
                                            <?php if ($rowd[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->diningTile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square feet :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input style="width:150px;" readonly value="<?= $model[0]->diningTile->price_per_square_feet ?>" type="text" id="d-dtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowd[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultColor->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $model[0]->defaultColor->price_per_square_feet ?>" type="text" id="d-dpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modm">
                                            <h4 style="text-align:center;">Modification</h4>
                                            <?php if ($rowd[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowd[0]->tile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowd[0]->tile->price_per_square_feet ?>" type="text" id="d-mtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowd[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowd[0]->paint->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowd[0]->paint->price_per_square_feet ?>" type="text" id="d-mpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="square-f">
                                        <div style="margin-right:5%">
                                            <h4>No. Square foot for</h4>
                                        </div>
                                        <div>
                                            <?php if ($rowd[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tiling :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_tiling_dining ?>" type="text" key="kitchen" id="d-s_q_t">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowd[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Painting :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_painting_dining ?>" type="text" key="kitchen" id="d-s_q_p">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="unit-d bd" style="margin-top:30px; ">

                                        <div>
                                            <h4 style="text-align:center;">Default price</h4>
                                            <?php if ($rowd[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="ddtileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowd[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="ddpaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h4 style="text-align:center;">New price</h4>
                                            <?php if ($rowd[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mdtileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowd[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mdpaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-top:40px">
                                </div>
                            <?php endif; ?>
                            <?php if ($rowbe) : ?>
                                <div class="m-part" id="living_room">
                                    <div class="m-part-top">
                                        <h3 style="margin-left:20px;margin-top:20px">Living Room</h3>
                                    </div>
                                    <div class="unit-d">

                                        <div class="defm">
                                            <h4 style="text-align:center;">Default</h4>
                                            <?php if ($rowbe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultTile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square feet :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input style="width:150px;" readonly value="<?= $model[0]->defaultTile->price_per_square_feet ?>" type="text" id="be-dtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultColor->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $model[0]->defaultColor->price_per_square_feet ?>" type="text" id="be-dpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modm">
                                            <h4 style="text-align:center;">Modification</h4>
                                            <?php if ($rowbe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowbe[0]->tile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowbe[0]->tile->price_per_square_feet ?>" type="text" id="be-mtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowbe[0]->paint->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowbe[0]->paint->price_per_square_feet ?>" type="text" id="be-mpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="square-f">
                                        <div style="margin-right:5%">
                                            <h4>No. Square foot for</h4>
                                        </div>
                                        <div>
                                            <?php if ($rowbe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tiling :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_tiling_bedrooms ?>" type="text" key="kitchen" id="be-s_q_t">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Painting :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_painting_bedrooms ?>" type="text" key="kitchen" id="be-s_q_p">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="unit-d bd" style="margin-top:30px; ">

                                        <div>
                                            <h4 style="text-align:center;">Default price</h4>
                                            <?php if ($rowbe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dbetileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dbepaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h4 style="text-align:center;">New price</h4>
                                            <?php if ($rowbe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mbetileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowbe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mbepaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-top:40px">
                                </div>
                            <?php endif; ?>
                            <?php if ($rowl) : ?>
                                <div class="m-part" id="living_area">
                                    <div class="m-part-top">
                                        <h3 style="margin-left:20px;margin-top:20px">Living Area</h3>
                                    </div>
                                    <div class="unit-d">

                                        <div class="defm">
                                            <h4 style="text-align:center;">Default</h4>
                                            <?php if ($rowl[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultTile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square feet :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input style="width:150px;" readonly value="<?= $model[0]->defaultTile->price_per_square_feet ?>" type="text" id="l-dtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowl[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultColor->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $model[0]->defaultColor->price_per_square_feet ?>" type="text" id="l-dpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modm">
                                            <h4 style="text-align:center;">Modification</h4>
                                            <?php if ($rowl[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowl[0]->tile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowl[0]->tile->price_per_square_feet ?>" type="text" id="l-mtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowl[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowl[0]->paint->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowl[0]->paint->price_per_square_feet ?>" type="text" id="l-mpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="square-f">
                                        <div style="margin-right:5%">
                                            <h4>No. Square foot for</h4>
                                        </div>
                                        <div>
                                            <?php if ($rowl[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tiling :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_tiling_living_area ?>" type="text" key="kitchen" id="l-s_q_t">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowl[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Painting :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_painting_living_area ?>" type="text" key="kitchen" id="l-s_q_p">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="unit-d bd" style="margin-top:30px; ">

                                        <div>
                                            <h4 style="text-align:center;">Default price</h4>
                                            <?php if ($rowl[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dltileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowl[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="dlpaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h4 style="text-align:center;">New price</h4>
                                            <?php if ($rowl[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mltileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowl[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mlpaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-top:40px">
                                </div>
                            <?php endif; ?>
                            <?php if ($rowe) : ?>
                                <div class="m-part" id="exterior">
                                    <div class="m-part-top">
                                        <h3 style="margin-left:20px;margin-top:20px">Exterior</h3>
                                    </div>
                                    <div class="unit-d">

                                        <div class="defm">
                                            <h4 style="text-align:center;">Default</h4>
                                            <?php if ($rowe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultTile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square feet :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input style="width:150px;" readonly value="<?= $model[0]->defaultTile->price_per_square_feet ?>" type="text" id="e-dtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $model[0]->defaultColor->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $model[0]->defaultColor->price_per_square_feet ?>" type="text" id="e-dpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modm">
                                            <h4 style="text-align:center;">Modification</h4>
                                            <?php if ($rowe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tile :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowe[0]->tile->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowe[0]->tile->price_per_square_feet ?>" type="text" id="e-mtprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Color :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input readonly value="<?= $rowe[0]->paint->name ?>" type="text">
                                                </div>
                                                <div class="unit">
                                                    <p>Price per square foot :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" value="<?= $rowe[0]->paint->price_per_square_feet ?>" type="text" id="e-mpprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="square-f">
                                        <div style="margin-right:5%">
                                            <h4>No. Square foot for</h4>
                                        </div>
                                        <div>
                                            <?php if ($rowe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>Tiling :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_tiling_exterior ?>" type="text" key="kitchen" id="e-s_q_t">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>Painting :</p>
                                                </div>
                                                <div class="e-id-d">
                                                    <input value="<?= $model[0]->number_of_s_feet_for_painting_exterior ?>" type="text" key="kitchen" id="e-s_q_p">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="unit-d bd" style="margin-top:30px; ">

                                        <div>
                                            <h4 style="text-align:center;">Default price</h4>
                                            <?php if ($rowe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="detileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="depaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h4 style="text-align:center;">New price</h4>
                                            <?php if ($rowe[0]->tile_id) : ?>
                                                <div class="unit">
                                                    <p>For Tiling :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="metileprice">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($rowe[0]->paint_id) : ?>
                                                <div class="unit">
                                                    <p>For Painting :</p>
                                                </div>
                                                <div class="e-id-d" style="display:flex;align-items: center;">
                                                    <p style="margin-left: 20px">Rs.</p>
                                                    <input readonly style="width:150px;" type="text" id="mepaintprice">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr style="margin-top:40px">
                                </div>
                            <?php endif; ?>
                            <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                                <h2 style="margin-top: 20px">Price Details</h2>
                            </div>
                            <div class="m-part">
                                <div class="unit-d">

                                    <div>
                                        <div class="unit">
                                            <h4>Different in price :</h4>
                                        </div>
                                        <div class="e-id-d" style="display:flex;align-items: center;">
                                            <p style="margin-left: 20px">Rs.</p>
                                            <input readonly style="width:150px;" value="0" type="text" id="dprice">
                                        </div>
                                        <div class="unit">
                                            <h4>Old price :</h4>
                                        </div>
                                        <div class="e-id-d" style="display:flex;align-items: center;">
                                            <p style="margin-left: 20px">Rs.</p>
                                            <input readonly style="width:150px;" value="<?= $price ?>" type="text" id="oprice">
                                        </div>
                                        <div class="unit">
                                            <h4>New price :</h4>
                                        </div>
                                        <div class="e-id-d" style="display:flex;align-items: center;">
                                            <p style="margin-left: 20px">Rs.</p>
                                            <input readonly style="width:150px;" value="<?= $price ?>" type="text" id="nprice" name="new_price">
                                        </div>
                                        <div class="title-id" style="display:flex; justify-content:center;flex-direction:column; padding-top:5px;">
                                            <h3 style="margin-top: 20px">According to payment plan</h3>
                                        </div>
                                        <div class="unit">
                                            <h4>Interest Precentage :</h4>
                                        </div>
                                        <div class="e-id-d" style="display:flex;align-items: center;">
                                            <p style="margin-left: 40px"></p>
                                            <input readonly style="width:150px;" type="text" value="<?= $interest ?> %" id="interestp" name="interestp">
                                        </div>
                                        <div class="unit">
                                            <h4>Interest :</h4>
                                        </div>
                                        <div class="e-id-d" style="display:flex;align-items: center;">
                                            <p style="margin-left: 20px">Rs.</p>
                                            <input readonly style="width:150px;" value="<?= ($interest*$price)/100 ?>" type="text" id="interest" name="interest">
                                        </div>
                                        <div class="unit">
                                            <h4>Total price :</h4>
                                        </div>
                                        <div class="e-id-d" style="display:flex;align-items: center;">
                                            <p style="margin-left: 20px">Rs.</p>
                                            <input readonly style="width:150px;" value="<?= (($interest*$price)/100)+$price ?>" type="text" id="totalprice" name="totalprice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div id="pdf">
                            <div class="header">
                                <h1>WEBUILD</h1>
                            </div>

                            <div class="main">
                                <div class="bill-details">
                                    <h2>Details</h2>
                                    <p><strong>Date : </strong><?= date("y-m-d") ?></p>
                                    <p><strong>Request Id : </strong><?= $rows[0]->id ?></p>
                                </div>

                                <div class="customer-info">
                                    <h2>Customer Information</h2>
                                    <p><strong>ID : </strong><?= $rows[0]->user_id ?></p>
                                    <p><strong>Name : </strong><?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?></p>
                                    <p><strong>Address : </strong><?= $rows[0]->user->address ?></p>
                                </div>

                                <div class="items">
                                    <h2>Paint Modification Details</h2>
                                    <table style="width: 10px;">
                                        <tr>
                                            <th>Place</th>
                                            <th>DefaultPaint</th>
                                            <th>New Paint</th>
                                            <th>No. Square feett</th>
                                            <th>Default Price</th>
                                            <th>New Price</th>
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
                                <div class="items">
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
                                </div>
                                <div class="payment-info">
                                    <h2>Payment Information</h2>
                                    <p><strong>Payment ID : </strong><?= $rows[0]->payment->id ?></p>
                                    <p><strong>Payment Name : </strong><?= $rows[0]->payment->name ?></p>
                                    <p><strong>Interest Precentage : </strong><?= $rows[0]->payment->interest ?> %</p>
                                </div>
                                <div class="totals">
                                    <h2>Totals</h2>
                                    <p><strong>Subtotal : </strong>RS. <strong id="new_price"><?= $price ?></strong></p>
                                    <p><strong>Interest : </strong>RS. <strong id="inter"><?= (($interest*$price)/100) ?></strong></p>
                                    <p><strong>Total : </strong>RS. <strong id="t_tal"><?= (($interest*$price)/100)+$price ?></strong></h5>
                                    </p>
                                </div>
                            </div>
                            <div class="footer">
                                <p>WEBUILD PVT.</p>
                            </div>
                        </div>

                        <div class="table_header" style="align-items: center; background-color:white;">
                            <a href="<?= ROOT ?>/Pmdashboard">
                                <input class="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                            </a>
                            <a href="<?= ROOT ?>/Pmdashboard">
                                <input id="print" class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Download">
                            </a>
                        </div>
                        <div class="hide" style="display:none">
                            <div class="column">
                                <label for="user_id">Customer ID :</label>
                                <input readonly type="text" name="user_id" value="<?= $rows[0]->user_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Customer Name :</label>
                                <input readonly type="text" value="<?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?>">
                            </div>
                            <div class="column">
                                <label for="manager_id">Project Manager ID :</label>
                                <input readonly type="text" name="manager_id" value="<?= $rows[0]->manager_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Project Manager Name :</label>
                                <input readonly type="text" id="occupation" value="<?= $rows[0]->staff->firstname ?> <?= $rows[0]->staff->lastname ?>">
                            </div>
                            <div class="column">
                                <label for="request_id">Request ID: :</label>
                                <input readonly type="text" id="request_id" name="request_id" value="<?= $rows[0]->id ?>">
                            </div>
                            <div class="column">
                                <label for="modification_id">Modification ID: :</label>
                                <input readonly type="text" id="occupation" name="modification_id" value="<?= $rows[0]->modification_id ?>">
                            </div>
                            <div class="column">
                                <label for="model_id">Model ID: :</label>
                                <input readonly type="text" name="model_id" id="occupation" value="<?= $rows[0]->model_id ?>">
                            </div>
                            <div class="column">
                                <label for="model_name">Model Name :</label>
                                <input readonly type="text" id="occupation" value="<?= $rows[0]->mdl->name ?>">
                            </div>
                            <div class="column">
                                <label for="payment_package_id">Payment Package ID: :</label>
                                <input readonly type="text" name="payment_package_id" id="occupation" value="<?= $rows[0]->payment_plan_id ?>">
                            </div>
                            <div class="column">
                                <label for="payment_package_name">Payment Package Name: :</label>
                                <input readonly type="text" value="<?= $rows[0]->payment->name ?>">
                            </div>
                        </div>
                    </form>

                </div>


            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
        <script>
            var request_id = parseInt(document.getElementById('request_id').value);
                var tol = parseInt(document.getElementById('totalprice').value);



                //download button
                const options = {
                    // margin: 0.1,
                    // height: auto,
                    filename: '',
                    image: {
                        type: 'jpeg',
                        quality: 500
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: [14, 11],
                        orientation: 'portrait',
                        compress: true
                    }
                }

                $('#print').click(function(e) {
                    e.preventDefault();
                    const element = document.getElementById('pdf');
                    const name = 'quotation';
                    var currentDate = new Date();
                    options.filename = name + '_' + currentDate + '_' + request_id + '.pdf';
                    html2pdf().from(element).set(options).save().then(() => {

                        window.location.href = 'http://localhost/webuild/public/Pmquotation/' + request_id + '/' + tol + '/';



                    });
                });
        </script>

        <script>
            function calculate() {
                // Get the values from input elements
                var k_dtprice = parseFloat(document.getElementById('k-dtprice').value);
                var k_dpprice = parseFloat(document.getElementById('k-dpprice').value);
                var k_mtprice = parseFloat(document.getElementById('k-mtprice').value);
                var k_mpprice = parseFloat(document.getElementById('k-mpprice').value);
                var k_s_q_t = parseFloat(document.getElementById('k-s_q_t').value);
                var k_s_q_p = parseFloat(document.getElementById('k-s_q_p').value);


                var dktileprice = k_dtprice * k_s_q_t;
                form.querySelector("#dktileprice").value = dktileprice;
                var dkpaintprice = k_dpprice * k_s_q_p;
                form.querySelector("#dkpaintprice").value = dkpaintprice;

                var mktileprice = k_mtprice * k_s_q_t;
                form.querySelector("#mktileprice").value = mktileprice;
                var mkpaintprice = k_mpprice * k_s_q_p;
                form.querySelector("#mkpaintprice").value = mkpaintprice;

                var ba_dtprice = parseFloat(document.getElementById('ba-dtprice').value);
                var ba_dpprice = parseFloat(document.getElementById('ba-dpprice').value);
                var ba_mtprice = parseFloat(document.getElementById('ba-mtprice').value);
                var ba_mpprice = parseFloat(document.getElementById('ba-mpprice').value);
                var ba_s_q_t = parseFloat(document.getElementById('ba-s_q_t').value);
                var ba_s_q_p = parseFloat(document.getElementById('ba-s_q_p').value);


                var dbatileprice = ba_dtprice * ba_s_q_t;
                form.querySelector("#dbatileprice").value = dbatileprice;
                var dbapaintprice = ba_dpprice * ba_s_q_p;
                form.querySelector("#dbapaintprice").value = dbapaintprice;

                var mbatileprice = ba_mtprice * ba_s_q_t;
                form.querySelector("#mbatileprice").value = mbatileprice;
                var mbapaintprice = ba_mpprice * ba_s_q_p;
                form.querySelector("#mbapaintprice").value = mbapaintprice;

                var d_dtprice = parseFloat(document.getElementById('d-dtprice').value);
                var d_dpprice = parseFloat(document.getElementById('d-dpprice').value);
                var d_mtprice = parseFloat(document.getElementById('d-mtprice').value);
                var d_mpprice = parseFloat(document.getElementById('d-mpprice').value);
                var d_s_q_t = parseFloat(document.getElementById('d-s_q_t').value);
                var d_s_q_p = parseFloat(document.getElementById('d-s_q_p').value);


                var ddtileprice = d_dtprice * d_s_q_t;
                form.querySelector("#ddtileprice").value = ddtileprice;
                var ddpaintprice = d_dpprice * d_s_q_p;
                form.querySelector("#ddpaintprice").value = ddpaintprice;

                var mdtileprice = d_mtprice * d_s_q_t;
                form.querySelector("#mdtileprice").value = mdtileprice;
                var mdpaintprice = d_mpprice * d_s_q_p;
                form.querySelector("#mdpaintprice").value = mdpaintprice;

                var be_dtprice = parseFloat(document.getElementById('be-dtprice').value);
                var be_dpprice = parseFloat(document.getElementById('be-dpprice').value);
                var be_mtprice = parseFloat(document.getElementById('be-mtprice').value);
                var be_mpprice = parseFloat(document.getElementById('be-mpprice').value);
                var be_s_q_t = parseFloat(document.getElementById('be-s_q_t').value);
                var be_s_q_p = parseFloat(document.getElementById('be-s_q_p').value);


                var dbetileprice = be_dtprice * be_s_q_t;
                form.querySelector("#dbetileprice").value = dbetileprice;
                var dbepaintprice = be_dpprice * be_s_q_p;
                form.querySelector("#dbepaintprice").value = dbepaintprice;

                var mbetileprice = be_mtprice * be_s_q_t;
                form.querySelector("#mbetileprice").value = mbetileprice;
                var mbepaintprice = be_mpprice * be_s_q_p;
                form.querySelector("#mbepaintprice").value = mbepaintprice;

                var l_dtprice = parseFloat(document.getElementById('l-dtprice').value);
                var l_dpprice = parseFloat(document.getElementById('l-dpprice').value);
                var l_mtprice = parseFloat(document.getElementById('l-mtprice').value);
                var l_mpprice = parseFloat(document.getElementById('l-mpprice').value);
                var l_s_q_t = parseFloat(document.getElementById('l-s_q_t').value);
                var l_s_q_p = parseFloat(document.getElementById('l-s_q_p').value);


                var dltileprice = l_dtprice * l_s_q_t;
                form.querySelector("#dltileprice").value = dltileprice;
                var dlpaintprice = l_dpprice * l_s_q_p;
                form.querySelector("#dlpaintprice").value = dlpaintprice;

                var mltileprice = l_mtprice * l_s_q_t;
                form.querySelector("#mltileprice").value = mltileprice;
                var mlpaintprice = l_mpprice * l_s_q_p;
                form.querySelector("#mlpaintprice").value = mlpaintprice;


                var e_dtprice = parseFloat(document.getElementById('e-dtprice').value);
                var e_dpprice = parseFloat(document.getElementById('e-dpprice').value);
                var e_mtprice = parseFloat(document.getElementById('e-mtprice').value);
                var e_mpprice = parseFloat(document.getElementById('e-mpprice').value);
                var e_s_q_t = parseFloat(document.getElementById('e-s_q_t').value);
                var e_s_q_p = parseFloat(document.getElementById('e-s_q_p').value);


                var detileprice = e_dtprice * e_s_q_t;
                form.querySelector("#detileprice").value = detileprice;
                var depaintprice = e_dpprice * e_s_q_p;
                form.querySelector("#depaintprice").value = depaintprice;

                var metileprice = e_mtprice * e_s_q_t;
                form.querySelector("#metileprice").value = metileprice;
                var mepaintprice = e_mpprice * e_s_q_p;
                form.querySelector("#mepaintprice").value = mepaintprice;

                var dtileprice = parseFloat(dktileprice + dbatileprice + ddtileprice + dbetileprice + dltileprice + detileprice);

                var dpaintprice = parseFloat(dkpaintprice + dbapaintprice + ddpaintprice + dbepaintprice + dlpaintprice + depaintprice);

                var mpaintprice = parseFloat(mkpaintprice + mbapaintprice + mdpaintprice + mbepaintprice + mlpaintprice + mepaintprice);

                var mtileprice = parseFloat(mktileprice + mbatileprice + mdtileprice + mbetileprice + mltileprice + metileprice);

                var differentprice = parseFloat(mpaintprice + mtileprice - dtileprice - dpaintprice);
                form.querySelector("#dprice").value = differentprice;




                var oldprice = parseFloat(document.getElementById('oprice').value);

                var newprice = parseFloat(differentprice + oldprice);

                form.querySelector("#nprice").value = newprice;


                var interestp = parseFloat(document.getElementById('interestp').value);
                var interest = parseInt((parseFloat(newprice) * (parseFloat(interestp) / 100)));

                form.querySelector("#interest").value = interest;

                var totalprice = parseInt(newprice + interest);
                form.querySelector("#totalprice").value = totalprice;


                var kit_p_d_price = document.getElementById('kit_p_d_price');
                kit_p_d_price.innerHTML = dkpaintprice;
                var kit_p_m_price = document.getElementById('kit_p_m_price');
                kit_p_m_price.innerHTML = mkpaintprice;

                var kit_t_d_price = document.getElementById('kit_t_d_price');
                kit_t_d_price.innerHTML = dktileprice;
                var kit_t_m_price = document.getElementById('kit_t_m_price');
                kit_t_m_price.innerHTML = mktileprice;

                var bath_p_d_price = document.getElementById('bath_p_d_price');
                bath_p_d_price.innerHTML = dbapaintprice;
                var bath_p_m_price = document.getElementById('bath_p_m_price');
                bath_p_m_price.innerHTML = mbapaintprice;

                var bath_t_d_price = document.getElementById('bath_t_d_price');
                bath_t_d_price.innerHTML = dbatileprice;
                var bath_t_m_price = document.getElementById('bath_t_m_price');
                bath_t_m_price.innerHTML = mbatileprice;

                var bed_p_d_price = document.getElementById('bed_p_d_price');
                bed_p_d_price.innerHTML = dbepaintprice;
                var bed_p_m_price = document.getElementById('bed_p_m_price');
                bed_p_m_price.innerHTML = mbepaintprice;

                var bed_t_d_price = document.getElementById('bed_t_d_price');
                bed_t_d_price.innerHTML = dbetileprice;
                var bed_t_m_price = document.getElementById('bed_t_m_price');
                bed_t_m_price.innerHTML = mbetileprice;

                var din_p_d_price = document.getElementById('din_p_d_price');
                din_p_d_price.innerHTML = ddpaintprice;
                var din_p_m_price = document.getElementById('din_p_m_price');
                din_p_m_price.innerHTML = mdpaintprice;

                var din_t_d_price = document.getElementById('din_t_d_price');
                din_t_d_price.innerHTML = ddtileprice;
                var din_t_m_price = document.getElementById('din_t_m_price');
                din_t_m_price.innerHTML = mdtileprice;

                var liv_p_d_price = document.getElementById('liv_p_d_price');
                liv_p_d_price.innerHTML = dlpaintprice;
                var liv_p_m_price = document.getElementById('liv_p_m_price');
                liv_p_m_price.innerHTML = mlpaintprice;

                var liv_t_d_price = document.getElementById('liv_t_d_price');
                liv_t_d_price.innerHTML = dltileprice;
                var liv_t_m_price = document.getElementById('liv_t_m_price');
                liv_t_m_price.innerHTML = mltileprice;


                var ext_p_d_price = document.getElementById('ext_p_d_price');
                ext_p_d_price.innerHTML = depaintprice;
                var ext_p_m_price = document.getElementById('ext_p_m_price');
                ext_p_m_price.innerHTML = mepaintprice;

                var ext_t_d_price = document.getElementById('ext_t_d_price');
                ext_t_d_price.innerHTML = detileprice;
                var ext_t_m_price = document.getElementById('ext_t_m_price');
                ext_t_m_price.innerHTML = metileprice;

                var new_price = document.getElementById('new_price');
                new_price.innerHTML = newprice;
                var interest1 = document.getElementById('inter');
                interest1.innerHTML = interest;
                var t_tal = document.getElementById('t_tal');
                t_tal.innerHTML = totalprice;


                var request_id = parseInt(document.getElementById('request_id').value);
                var tol = parseInt(document.getElementById('totalprice').value);



                //download button
                const options = {
                    // margin: 0.1,
                    // height: auto,
                    filename: '',
                    image: {
                        type: 'jpeg',
                        quality: 500
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: [14, 11],
                        orientation: 'portrait',
                        compress: true
                    }
                }

                $('#print').click(function(e) {
                    e.preventDefault();
                    const element = document.getElementById('pdf');
                    const name = 'quotation';
                    var currentDate = new Date();
                    options.filename = name + '_' + currentDate + '_' + request_id + '.pdf';
                    html2pdf().from(element).set(options).save().then(() => {

                        window.location.href = 'http://localhost/webuild/public/Pmquotation/' + request_id + '/' + tol + '/';



                    });
                });

            }

            calculate();
        </script>

        <script>
            // const options = {
            //     // margin: 0.1,
            //     // height: auto,
            //     filename: '',
            //     image: {
            //         type: 'jpeg',
            //         quality: 500
            //     },
            //     html2canvas: {
            //         scale: 2
            //     },
            //     jsPDF: {
            //         unit: 'in',
            //         format: [14, 11],
            //         orientation: 'portrait',
            //         compress: true
            //     }
            // }

            // // $('#print').click(function(e) {
            // //     e.preventDefault();
            // //     const element = document.getElementById('pdf');
            // //     const name = 'pramuka';
            // //     options.filename = name + '.pdf';
            // //     html2pdf().from(element).set(options).save();
            // //     window.location.href = 'http://localhost/webuild/public/pmdashboard';
            // // });

            // $('#print').click(function(e) {
            //     e.preventDefault();
            //     const element = document.getElementById('pdf');
            //     const name = 'pramuka';
            //     options.filename = name + '.pdf';
            //     html2pdf().from(element).set(options).save().then(() => {
            //         // This code will execute after the PDF is saved
            //         window.location.href = 'http://localhost/webuild/public/pmdashboard';
            //     });
            // });
        </script>





    <?php endif; ?>
<?php endif; ?>