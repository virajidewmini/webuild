<?php if (Auth::getRole() == 'Admin') : ?>
    <?php $this->view('includes/header') ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: content-box;

        }

        .item {
            background: lightblue;
            padding: 1rem;
            border-radius: 1rem;
            background: #f5f5f5;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* border: 1px solid #c41212; */
        }

        .container1 {
            padding: 1rem;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(6, 1fr);
            grid-gap: 1rem;
            grid-template-areas:
                "a b e e e e e e"
                "a b e e e e e e"
                "d d e e e e e e"
                "d d c c c c c c"
                "d d c c c c c c"
                "d d c c c c c c"



        }

        .item-1 {
            grid-area: a;
        }

        .item-2 {
            grid-area: b;
        }

        .item-3 {
            grid-area: d;
        }


        .item-5 {
            grid-area: c;
        }

        .item-6 {
            grid-area: e;
        }

        .role-box {
            width: 200px;
            /* background-color: #e5863d; Change background color before hovering */
            border-radius: 15px;
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            /* transition: box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out; */
        }

        .role-box:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background-color: white;
            /* Keep background color same after hovering */
        }

        .total-employees {
            font-size: 24px;
            /* Increase font size before hovering */
            font-weight: bold;
            /* Make text bold before hovering */
            text-align: center;
            /* Center text before hovering */
        }

        .role-box hr {
            width: 80%;
            border: 1px solid #ccc;
        }

        .role {
            margin: 5px 0;
            text-align: center;
        }

        .chart-container {}

        .role-box .role {
            display: none;
        }

        .role-box:hover .total-employees {
            display: none;
        }

        .role-box:hover .role {
            display: block;
        }

        .role-box hr {
            display: none;
            /* Hide the horizontal lines initially */
        }

        .role-box:hover hr {
            display: block;
            /* Display horizontal lines when hovering over .role-box */
        }

















        /* item 3 */
        .item-3 {
            position: relative;
        }

        .chart-container {
            position: relative;
        }

        .select-wrapper {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
        }

        .select-dropdown {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 14px;
            margin-right: 5px;
        }

        .search-button {
            background-color: #E5863D;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .pie-chart-container {
            position: relative;
        }

        .legend-container {
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: right;
            font-size: 14px;

        }
    </style>

    <div class="container1">

        <div class="item item-1" style="display: flex;width: fit-content;padding: 0;">
            <!-- Employees -->
            <div class="role-box">

                <div class="total-employees">Total Employees<br>
                    <div style="font-size: 60px"><?= $rows["all"][0]->total ?></div>
                </div>

                <div class="role">Project Managers: <?= $rows["man"][0]->total ?></div>
                <hr>
                <div class="role">Supervisors: <?= $rows["sup"][0]->total ?></div>
                <hr>
                <div class="role">Storekeepers: <?= $rows["sk"][0]->total ?></div>
                <hr>
                <div class="role">Project Coordinators: <?= $rows["coo"][0]->total ?></div>
            </div>
        </div>

        <div class="item item-2" style="display: flex;width: fit-content;padding: 0;">
            <!-- Employees -->
            <div class="role-box">

                <div class="total-employees">Total Complaints<br>
                    <div style="font-size: 60px"><?= $rows["AllComp"]; ?></div>
                </div>

                <div class="role">Quality and the number of the photograph: <?= $rows["AllQP"][0]->total ?></div>
                <hr>
                <div class="role">Construction project delay: <?= $rows["AllCP"][0]->total ?></div>
                <hr>
                <div class="role">Quality of workmanship and materials: <?= $rows["AllQW"][0]->total ?></div>
                <hr>
                <div class="role">Poor Communication: <?= $rows["AllPC"][0]->total ?></div>
                <hr>
                <div class="role">Other: <?= $rows["AllOT"][0]->total ?></div>
            </div>
        </div>


        <!-- complaints -->
        <div class="item item-3">
            <div style="text-align: center; font-size: 24px; font-weight: bold; color: black;">
                Complaints Recieved in Month ,
            </div>

            <div class="chart-container">
                <div style="text-align: center;">
                    <form action="<?= ROOT ?>/admindashboard/getMonth" method="post">

                        <select name="month" class="select-dropdown" value="<?= get_select2('month', ''); ?>">
                            <option <?= get_select2('month', 'January'); ?> value="January">January</option>
                            <option <?= get_select2('month', 'February'); ?> value="February">February</option>
                            <option <?= get_select2('month', 'March'); ?> value="March">March</option>
                            <option <?= get_select2('month', 'April'); ?> value="April">April</option>
                            <option <?= get_select2('month', 'May'); ?> value="May">May</option>
                            <option <?= get_select2('month', 'June'); ?> value="June">June</option>
                            <option <?= get_select2('month', 'July'); ?> value="July">July</option>
                            <option <?= get_select2('month', 'August'); ?> value="August">August</option>
                            <option <?= get_select2('month', 'September'); ?> value="September">September</option>
                            <option <?= get_select2('month', 'October'); ?> value="October">October</option>
                            <option <?= get_select2('month', 'November'); ?> value="November">November</option>
                            <option <?= get_select2('month', 'December'); ?> value="Desember">December</option>

                        </select>

                        <button style="background-color:#E5863D; color:white" class="search-button" type="submit">Search</button>


                    </form>
                </div>
                <br><br>

                <?php if ($rows["QOP"][0]->total != 0 || $rows["CPD"][0]->total != 0 || $rows["QWM"][0]->total != 0 || $rows["PC"][0]->total != 0 || $rows["O"][0]->total != 0) : ?>
                    <div class="pie-chart-container">
                        <canvas id="myPieChart" width=300px height=300px></canvas>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var ctx = document.getElementById('myPieChart').getContext('2d');
                            var myPieChart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: ['Quality OF Photographs', 'Construction Project Delay', 'Quality of Workmanship & Materials', 'Poor Communication', 'Other'],
                                    datasets: [{
                                        data: [<?= $rows["QOP"][0]->total ?>, <?= $rows["CPD"][0]->total ?>, <?= $rows["QWM"][0]->total ?>, <?= $rows["PC"][0]->total ?>, <?= $rows["O"][0]->total ?>],
                                        backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffff00', '#e47200']
                                    }]
                                },
                                options: {
                                    title: { // Add title here
                                        display: true,
                                        text: 'Complaints Recieved in Month',
                                        fontSize: 24, // Adjust font size as needed
                                        fontStyle: 'bold' // Adjust font style as needed
                                    },
                                    legend: {
                                        position: 'right',
                                        align: 'start'
                                    }
                                }
                            });
                        });
                    </script>

                <?php else : ?>
                    <h5> No Complaints recieved in this month.</h5>
                <?php endif; ?>

            </div>
            <!-- </div> -->
        </div>








        <!-- project requests -->

        <div class="item item-5">
            <canvas id="lineChart" width="200" height="200"></canvas>

            <script>
                // Sample data
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    datasets: [{
                        label: "Project Requests Recieved In Each Month",
                        fill: true,
                        borderColor: "#7B1FA2",
                        backgroundColor: "#7B1FA2",
                        data: [<?= $rows["JANPR"][0]->total ?>, <?= $rows["FEBPR"][0]->total ?>, <?= $rows["MARPR"][0]->total ?>, <?= $rows["APRPR"][0]->total ?>, <?= $rows["MAYPR"][0]->total ?>, <?= $rows["JUNPR"][0]->total ?>, <?= $rows["JULPR"][0]->total ?>, <?= $rows["AUGPR"][0]->total ?>, <?= $rows["SEPPR"][0]->total ?>, <?= $rows["OCTPR"][0]->total ?>, <?= $rows["NOVPR"][0]->total ?>, <?= $rows["DECPR"][0]->total ?>],
                    }]
                };

                // Configuration options
                var options = {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Project Requests Overview',
                            font: {
                                size: 24, // Increase font size for the title
                                weight: 'bold', // Make title bold
                                color: "light blue"
                            }
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
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
            <div style="max-width: 100%; height: 100%; ">
                <canvas id="myBarChart"></canvas>
            </div>


            <script>
                // Sample data for the 2-line bar chart
                var data = {
                    labels: ['January-March', 'April-June', 'July-September', 'October-December'],
                    datasets: [{
                            label: 'Ongoing Projects',
                            backgroundColor: 'rgba(255, 82, 82, 1)',
                            borderColor: 'rgba(255, 82, 82, 1)',
                            borderWidth: 1,
                            data: [<?= $rows["FOG"][0]->total ?>, <?= $rows["SOG"][0]->total ?>, <?= $rows["TOG"][0]->total ?>, <?= $rows["EOG"][0]->total ?>],
                        },
                        {
                            label: 'Cancelled Projects',
                            backgroundColor: 'rgba(194, 24, 91, 1)',
                            borderColor: 'rgba(194, 24, 91, 1)',
                            borderWidth: 1,
                            data: [<?= $rows["FRE"][0]->total ?>, <?= $rows["SRE"][0]->total ?>, <?= $rows["TRE"][0]->total ?>, <?= $rows["ERE"][0]->total ?>],
                        },
                        {
                            label: 'Completed Projects',
                            backgroundColor: 'rgba(233, 30, 99, 1)',
                            borderColor: 'rgba(233, 30, 99, 1)',
                            borderWidth: 1,
                            data: [<?= $rows["FFI"][0]->total ?>, <?= $rows["SFI"][0]->total ?>, <?= $rows["TFI"][0]->total ?>, <?= $rows["EFI"][0]->total ?>],
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
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Projects Overview In Each Quarter',
                            font: {

                                size: 24,
                                weight: 'bold'
                            },
                            color: 'black'
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
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>