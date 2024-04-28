<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>
    <style>
        body {
            overflow: hidden;
        }

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
    </style>

    <div class="pro-id1" style="display:flex;  justify-content: center; padding: 0 0 40px 0;">

        <div class="pro-id" style="padding: 0 0 20px 0;">
            <div class="pro-id-details">
                <form action="" method="post" id="form">
                    <div class="title-id" style="display:flex; justify-content:center; padding-top:5px;">
                        <div class="p-title">
                            <h3 style="width:400px">Remaining Material Reaquests</h3>
                        </div>
                    </div>


                    <?php if ($rows) : ?>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Project ID :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly style="height:35px; width:100px; border-color:#E5863D; text-align:center" value="<?= $rows[0]->project_id ?>" type="text" name="project_id">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Level :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly style="height:35px; width:100px; border-color:#E5863D; text-align:center" value="<?= $rows[0]->level ?>" type="text" name="level">
                                <input readonly style="display:none" value="<?= $rows[0]->send_district ?>" type="text" name="district">
                            </div>
                        </div>
                        <div class="table">
                            <div class="table_header">
                                <h3>Materials and Equipment</h3>
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
                                        <?php if ($rows) : ?>
                                            <?php foreach ($rows as $row) : ?>
                                                <?php if ($row->remain_quantity > 0) : ?>
                                                    <tr>
                                                        <td><input readonly value="<?= $row->material_or_item_id ?>" name="m_id[]"></td>
                                                        <td><input readonly value="<?= $row->material_or_item_name ?>" name="m_name[]"></td>
                                                        <td><input readonly value="<?= $row->mesure_unit ?>" name="m_unit[]"></td>
                                                        <td><input value="<?= $row->quantity ?>" name="m_quantity[]"></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <pre><?= print_r($_POST) ?></pre>
                            </div>
                        </div>
                    <?php endif; ?>
                    <br>
                    <br>
                </form>
                <div class="table_header" style="align-items: center; background-color:white">
                    <a href="<?= ROOT ?>//Pmmaterial">
                        <input class="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                    </a>
                    <input id="request-button" class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Request">
                </div>



            </div>
        </div>
        <!-- <script>
            let form = document.getElementById('form');
            let requestButton = document.getElementById('request-button');
            requestButton.addEventListener('click', function(e) {
                e.preventDefault();
                form.add
                form.submit();
            });
        </script> -->
        <script>
            let form = document.getElementById('form');
            let requestButton = document.getElementById('request-button');

            requestButton.addEventListener('click', function(e) {
                let formData = new FormData(form)
                var hiddenForm = document.createElement('form');
                hiddenForm.setAttribute('method', 'POST');
                hiddenForm.setAttribute('action', '');

                for (var pair of formData.entries()) {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', pair[0]);
                    hiddenInput.setAttribute('value', pair[1]);
                    hiddenForm.appendChild(hiddenInput);
                }
                document.body.appendChild(hiddenForm);
                hiddenForm.submit();
            });
        </script>

        <?php $this->view('includes/footer'); ?>
    <?php else : ?>
        <?php $this->view('404'); ?>
    <?php endif; ?>