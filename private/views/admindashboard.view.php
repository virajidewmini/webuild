<?php if(Auth::getRole()== 'Admin'): ?>
<?php $this->view('includes/header')?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .role-box {
        width: 200px; /* Increased width to accommodate changes */
        background-color: #f2f2f2;
        border-radius: 15px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: box-shadow 0.3s ease-in-out;
    }

    .role-box:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .total-employees {
        font-size: 32px; /* Increased font size for emphasis */
        font-weight: bold;
        background-color: #e79556; /* Highlighted color */
        padding: 10px 0; /* Adjusting padding to extend horizontally */
        border-radius: 10px; /* Round corners for the highlighted box */
        margin-bottom: 5px; /* Space between total and roles */
        width: 100%; /* Take the whole horizontal space */
        text-align: center; /* Center the text horizontally */
    }

    .role-box hr {
        width: 80%;
        /* margin: 8px 0; */
        border: 1px solid #ccc;
    }

    .role {
        margin: 5px 0;
    }

    .chart-container {
            /* width: 500px;
            height: 500px; */
            /* border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden; */
        }

</style>

<div style="display:flex">
    <div class="role-box">
        
        <div class="total-employees"><?=$rows["all"][0]->total?></div>
       
        <div class="role">Project Managers: <?=$rows["man"][0]->total?></div>
        <hr>
        <div class="role">Supervisors: <?=$rows["sup"][0]->total?></div>
        <hr>
        <div class="role">Storekeepers: <?=$rows["sk"][0]->total?></div>
        <hr>
        <div class="role">Project Coordinators: <?=$rows["coo"][0]->total?></div>
    </div>

    <div class="chart-container">

    <form action="<?=ROOT?>/admindashboard/getMonth" method="post">
        <select name="month" class="v_form-control" value="<?= get_select2('month','');?>">
            <option <?= get_select2('month','January');?> value="January">January</option>
            <option <?= get_select2('month','February');?> value="February">February</option>
            <option <?= get_select2('month','March');?> value="March">March</option>
            <option <?= get_select2('month','April');?>  value="April">April</option>
            <option <?= get_select2('month','May');?> value="May">May</option>
            <option <?= get_select2('month','June');?> value="June">June</option>
            <option <?= get_select2('month','July');?> value="July">July</option>
            <option <?= get_select2('month','August');?> value="August">August</option>
            <option <?= get_select2('month','September');?> value="September">September</option>
            <option <?= get_select2('month','October');?> value="October">October</option>
            <option <?= get_select2('month','November');?> value="November">November</option>
            <option <?= get_select2('month','December');?> value="Desember">December</option>
            
        </select>
        
        <button style="background-color:#E5863D; color:white" class="" type="submit">Search</button>
    </form>
    <canvas id="myPieChart" width=300px height=300px></canvas>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Quality OF Photographs', 'Construction Project Delay', 'Quality of Workmanship & Materials','Poor Communication','Other'],
                datasets: [{
                    data: [<?=$rows["QOP"][0]->total?>, <?=$rows["CPD"][0]->total?>, <?=$rows["QWM"][0]->total?>,<?=$rows["PC"][0]->total?>,<?=$rows["O"][0]->total?>],
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe','#ffff00','#e47200']
                }]
            },
            options: {
                // Additional options go here
            }
        });
    });
</script>


<canvas id="myPieChart2" width=300px height=300px></canvas>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myPieChart2').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Quality OF Photographs', 'Construction Project Delay', 'Quality of Workmanship & Materials','Poor Communication','Other'],
                datasets: [{
                    data: [<?=$rows["QOP"][0]->total?>, <?=$rows["CPD"][0]->total?>, <?=$rows["QWM"][0]->total?>,<?=$rows["PC"][0]->total?>,<?=$rows["O"][0]->total?>],
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe','#ffff00','#e47200']
                }]
            },
            options: {
                // Additional options go here
            }
        });
    });
</script>

    </div>
    </div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
