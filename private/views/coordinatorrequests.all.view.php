<?php if (Auth::getRole() == 'Project Coordinator') : ?>
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
   

<div style="text-align: center;" >
        <h2>All Project Requests</h2>
        
    
        <br>
        <form method="post">
        
            <?php if(isset($_POST['year'])){
                $year=$_POST['year'];
            } ?>
            
            <select name="year" class="" type="text" placeholder="Select Year" style="width: auto;padding: 8px;font-size: 16px;border: 1px solid #ccc; border-radius: 5px;outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); ">
                <?php for ($year = date('Y'); $year >= 2022; $year--) : ?>
                    <option <?= get_select2('year',$year);?> value="<?= $year ?>"><?= $year ?></option>
                 <?php endfor; ?>
            </select>
            
            &nbsp;
        
            <button style="background-color:#E5863D; color:white"  type="submit">Search</button>

        </form>
        </div>
<br><br><br>
<div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">

<div class="pro-id" style="padding: 0 0 40px 0; ">

    <div class="pro-id-details">


<!-- <pre><?php print_r($rows['all_project_requests']);?></pre> -->
<!-- <br>
<?php print_r($rows['all_requests_count'][0]->total);?>
<br><?php print_r($rows['rejected_requests_count'][0]->total);?> -->
        <div id="pdf">
            <div class="header">
                <h1>WEBUILD</h1>
            </div>
            <div style="text-align: center;" >
                <h2 style="margin-top: 20px;margin-bottom: 20px">Analysis of All Project Requests Recieved in the Year <?=$rows['year'];?></h2>
            </div>
                <div class="main">
                <div class="bill-details">
                    <h2>Basic Information</h2>
                    <p><strong>All Requests Recieved : </strong><?= $rows['all_requests_count'][0]->total; ?></p>
                    <p><strong>Rejected Requests : </strong><?= $rows['rejected_requests_count'][0]->total;?></p>
                    <p><strong>Completed Requests: </strong><?= $rows['all_requests_count'][0]->total; ?></p>
                    <?php if ($rows['year']==date('Y')):?>
                        <p><strong>Still Ongoing Requests : </strong><?= $rows['rejected_requests_count'][0]->total;?></p>
                    <?php endif;?>
                </div>
                <br><br>

                <div class="customer-info">
                    <h2>Most Selected Model Information</h2>
                    <p><strong>Model ID : </strong> <?= $rows['most_selected_model_details']->model_id;?></p>
                    <p><strong>Model Name : </strong> <?= $rows['most_selected_model_details']->model->name;?></p>
                </div>
                <br><br>
                <div class="items">
                    <h2>Project Requet Details</h2>
                    <table style="width: 10px;">
                        <tr>
                            <th>Request ID</th>
                            <th>Customer</th>
                            <th>Model</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                        <?php if ($rows['all_project_requests']) : ?>
                            <?php foreach ($rows['all_project_requests'] as $row) :?>
                                <tr>
                                    <td><?= $row->id;?></td>
                                    <td><?= $row->user->firstname; ?> <?= $row->user->lastname; ?></td>
                                    <td><?= $row->model->name; ?></td>
                                    <td><?= $row->status?></td>
                                    <td><?= $row->date?></td>

                                    <?php
                                        // Assuming $row->date is in a format like "Y-m-d" (e.g., "2024-04-23")
                                        $date = new DateTime($row->date);
                                        $duration = new DateInterval('P' . $row->model->time_duration_in_months . 'M');
                                        $date->add($duration);
                                        // echo $date->format('Y-m-d'); // Display the resulting date in the desired format
                                    ?>
                                    <td><?= $date->format('Y-m-d');?></td>
                                </tr>
                            <?php endforeach;?>
                        <?php endif; ?>
                    </table>
                </div>

                <div class="footer">
                    <p>WEBUILD PVT.</p>
                </div>
            </div>
        </div>
   

        <div class="table_header" style="align-items: center; background-color:white;">
            <a href="<?= ROOT ;?>/coordinatorrequests">
                <input class="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
            </a>
            <a href="<?= ROOT ;?>/coordinatorrequests">
                <input id="print" class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Download">
            </a>
        </div>

    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

        <script>
            function calculate() {
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
















    <?php endif;?>
<?php $this->view('includes/footer') ?>