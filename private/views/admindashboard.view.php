<?php if(Auth::getRole()== 'Admin'): ?>
<?php $this->view('includes/header')?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: content-box;

        }
    .item{
        background : lightblue;
        padding: 1rem;
            
            border: 1px solid blue;
    }
    .container{
        display : grid;
        grid-template-columns: 1fr 1fr 4fr;
        grid-template-rows: repeat(2, 2fr) repeat(1, 4fr);
        grid-gap: 1rem;
        grid-template-areas:
            "a a b b c c c c" 
            "a a b b c c c c" 
            "d d d d c c c c" 
            "d d d d c c c c" 
            "e e e e f f f f" 
            "e e e e f f f f" 
            "e e e e f f f f" 
            "e e e e f f f f"  

    }
    .item-1{
        grid-area: a;
    }
    .item-2{
        grid-area: b;
    }

    .item-3{
        grid-area: c;
    }

    .item-4{
        grid-area: d;
    }
    .item-5{
        grid-area: e;
    }
    .item-6{
        grid-area: f;
    }

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
     <div class="container">  

        <div class="item item-1">
            <!-- Employees -->
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
        </div>
        lllllllllllllllllllllllllllllll
        <pre>
            <?php print_r($rows) ;?>
        </pre>
        <div class="item item-2">
            <!-- Employees -->
            <div class="role-box">
                
                <div class="total-employees"><?=$rows["AllComp"][0]?></div>
            
                <div class="role">Quality of the photograph: <?=$rows["AllQP"][0]->total?></div>
                <hr>
                <div class="role">Construction project delay: <?=$rows["AllCP"][0]->total?></div>
                <hr>
                <div class="role">Quality of workmanship and materials: <?=$rows["AllQW"][0]->total?></div>
                <hr>
                <div class="role">Poor Communication: <?=$rows["AllPC"][0]->total?></div>
                <hr>
                <div class="role">Other: <?=$rows["AllOT"][0]->total?></div>
            </div>
        </div>


        <!-- complaints -->
        <div class="item item-3">
            <!-- <div style="display:flex"> -->
                <div class="chart-container" style="">

                    <form action="<?=ROOT?>/admindashboard/getMonth" method="post">
                        <select name="month" class="" value="<?= get_select2('month','');?>">
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
                
                    <?php if(  $rows["QOP"][0]->total !=0 || $rows["CPD"][0]->total !=0 || $rows["QWM"][0]->total !=0 || $rows["PC"][0]->total!=0 || $rows["O"][0]->total!=0):?>
                        
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

                    <?php else:?>
                        <h5> No Complaints recieved in this month.</h5>
                    <?php endif;?>

                </div>
            <!-- </div> -->
        </div>

        
          


        
        

        <!-- project requests -->
        <div class="item item-5">
            <!-- <div style="width: 50%; margin: auto; height: 50%"> -->
                <canvas id="lineChart"></canvas>
            <!-- </div> -->

            <script>
                // Sample data
                var data = {
                    labels: ["January", "February", "March", "April", "May","June", "July", "August", "September", "October","November", "December"],
                    datasets: [{
                        label: "Project Requests Recieved",
                        fill: false,
                        borderColor: "#e79556",
                        data: [<?=$rows["JANPR"][0]->total?>, <?=$rows["FEBPR"][0]->total?>, <?=$rows["MARPR"][0]->total?>, <?=$rows["APRPR"][0]->total?>, <?=$rows["MAYPR"][0]->total?>, <?=$rows["JUNPR"][0]->total?>, <?=$rows["JULPR"][0]->total?>, <?=$rows["AUGPR"][0]->total?>, <?=$rows["SEPPR"][0]->total?>, <?=$rows["OCTPR"][0]->total?>, <?=$rows["NOVPR"][0]->total?>, <?=$rows["DECPR"][0]->total?>],
                    }]
                };

                // Configuration options
                var options = {
                    responsive: true,
                    maintainAspectRatio: false, // To make the chart responsive
                    scales: {
                        x: {
                            type: 'category',
                            position: 'bottom'
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Get the context of the canvas element
                var ctx = document.getElementById('lineChart').getContext('2d');

                // Create the line chart
                var lineChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: options
                });
            </script>
        </div>
        
        
        
        
        



        <!-- for projects -->
        <div class="item item-6">
            <div style="max-width: 50%; height: auto; ">
                <canvas id="myBarChart"></canvas>
            </div>
    

            <script>
            // Sample data for the 2-line bar chart
            var data = {
                labels: ['January-March', 'April-June', 'July-September', 'October-December'],
                datasets: [
                {
                    label: 'Ongoing Projects',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    data: [<?=$rows["FOG"][0]->total?>,<?=$rows["SOG"][0]->total?> , <?=$rows["TOG"][0]->total?>, <?=$rows["EOG"][0]->total?>],
                },
                {
                    label: 'Rejected Projects',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    data: [<?=$rows["FRE"][0]->total?>, <?=$rows["SRE"][0]->total?>, <?=$rows["TRE"][0]->total?>,<?=$rows["ERE"][0]->total?>],
                },
                {
                    label: 'Finished Projects',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [<?=$rows["FRE"][0]->total?>, <?=$rows["SRE"][0]->total?>, <?=$rows["TRE"][0]->total?>,<?=$rows["ERE"][0]->total?>],
                }
                ]
            };

            // Configuration options
            var options = {
                responsive: true,
                maintainAspectRatio: false, // Disable aspect ratio to make it fully responsive
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            };

            // Get the canvas element
            var ctx = document.getElementById('myBarChart').getContext('2d');

            // Create the 2-line bar chart
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });
            </script>
        </div>

    </div> 

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
