<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>
    <style>
        body {
            overflow: hidden;

            .pro-id {
                background-color: white;
                display: flex;
                padding: 0 0 20px 0;
                border-radius: 20px;
                width: 100%;
                max-width: 1200px;
                height: auto;
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
            }

            .pro-id-details {
                width: 100%;
            }

            .pro-id {
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
                align-items: center;
                margin-left: 5%;
                margin-bottom: 10px;
            }

            .unit {
                min-width: 150px;
                width: 30%;
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

            .btnnext {
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
            }




            .form-control {
                width: 150px;
                height: 40px;
                text-align: center;
                border-radius: 10px;
                border-color: #E5863D;
                margin-right: 5%;
            }

            .in_a_c:hover {
                box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
            }

            .in_a_c:active {
                box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
            }
        }
    </style>

    <div class="pro-id1" style="display:flex;  justify-content: center; padding: 0 0 40px 0;">

        <div class="pro-id" style="padding: 0 0 20px 0;">

            <div class="pro-id-details" >
                <div class="title-id" style="display:flex; justify-content:center;">
                    <div class="p-title" style="width:600px;">
                        <h2>Materials and Equipment Details From the Store</h2>
                    </div>
                </div>
                <div class="unit-d">
                    <div class="unit">
                        <h4>Project ID :</h4>
                    </div>
                    <div class="e-id-d">
                        <h4><?= $project_id ?></h4>
                    </div>
                </div>
                <div class="unit-d">
                    <div class="unit">
                        <h4>Request ID :</h4>
                    </div>
                    <div class="e-id-d">
                        <h4 ><?= $rows[0]->request_id ?></h4>
                    </div>
                </div>
                <div class="unit-d">
                    <div class="unit">
                        <h4>Quotation ID :</h4>
                    </div>
                    <div class="e-id-d">
                        <h4 ><?= $rows[0]->quotation_id ?></h4>
                    </div>
                </div>
                <div class="unit-d">
                    <div class="unit">
                        <h4>Level :</h4>
                    </div>
                    <div class="e-id-d">
                        <h4 ><?= $level ?></h4>
                    </div>

                </div>
                <div class="unit-d">
                    <div class="unit">
                        <h4>Requested Date :</h4>
                    </div>
                    <div class="e-id-d">
                        <h4 ><?= $rows[0]->date ?></h4>
                    </div>
                </div>
                <br>
                <?php if ($rows) : ?>
                    <div class="table">

                        <div class="table_header">
                            <h3>Materials and Equipments</h3>
                        </div>


                        <div class="table_section">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Material or Equipment ID</th>
                                        <th>Material or Equipment Name</th>
                                        <th>Measure Unit</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows as $row) : ?>
                                        <?php if($row->send_total_quantity): ?>
                                        <tr>
                                            <td><?= $row->material_or_item_id ?></td>
                                            <td><?= $row->material_or_item_name ?></td>
                                            <td><?= $row->mesure_unit ?></td>
                                            <td><?= $row->send_total_quantity ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>





            </div>
        </div>
    </div>


    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>