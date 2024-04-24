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


<pre><?php print_r($rows['most_selected_model_details']);?></pre>
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

                <div class="customer-info">
                    <h2>Most Selected Model Information</h2>
                    <p><strong>Model ID : </strong><?= $rows['most_selected_model_details']?></p>
                    <!-- <p><strong>Model Name : </strong><?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?></p> -->
                </div>

    <?php endif;?>
<?php $this->view('includes/footer') ?>