<?php $this->view('includes/header') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f4;
  }

  .container {
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  .data-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
  }

  .card {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    flex: 1 1 200px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .card h2 {
    margin: 0 0 10px 0;
  }

  .charts {
    display: flex;
    gap: 20px;
    padding-bottom: 20px
  }

  .chart-container1 {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .chart-container2 {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .timeline {
    position: relative;
    width: 500px;
    margin: 30px auto;
  }

  .timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: -8px;
    bottom: 0;
    transform: translateX(-50%);
    width: 3px;
    background-color: #ddd;
  }

  .timeline ul {
    padding: 0;
  }

  .timeline li {
    list-style: none;
    padding: 20px;
    background-color: #fff;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }

  .timeline li .content-timeline {
    position: relative;
  }

  .timeline li .icon {
    position: absolute;
    left: -42px;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    background-color: #4CAF50;
    color: #fff;
    border-radius: 50%;
  }

  .timeline li h3 {
    margin: 0 0 5px 0;
  }

  /* Hover Interaction */
  .timeline li:hover {
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  }

  .tables {
    display: flex;
    gap: 20px;
    padding-bottom: 20px;
    min-width: 0px;
  }

  .table-containers {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .bar_chart-container {
    overflow-x: auto;
    /* Enable horizontal scrolling */
    width: 100%;
    /* Adjust width as needed */
  }

  #complaintChart {
    /* Ensure canvas takes up full width of container */
    display: block;
    width: 100%;
    height: auto;
    /* Adjust height as needed */
  }
</style>

<body style="display: flex;">
  <div class="container">
    <h1>Storekeeper Dashboard</h1>

    <div class="data-cards">
      <?php if ($rows1) : ?>
        <div class="card">
          <h2>New Requests </h2>
          <p id="userCount"><?= $rows1[0]->total_rows ?></p>
        </div>
      <?php endif; ?>
      <div class="card">
        <h2>Low Materials</h2>
        <p id="orderCount"><?= $rows2[0]->request_count ?></p>
      </div>

    </div>

    <div class="charts">
      <?php if (count($rows3) == 2) : ?>
        <div class="chart-container">
          <h2>Requests</h2>
          <canvas id="pieChart"></canvas>
          <script>
            // Extracting data from $rows3 and constructing the chart data
            const userData = {
              labels: ['<?= $rows3[0]->status ?>', '<?= $rows3[1]->status ?>'], // Assuming 'status' property holds label data
              datasets: [{
                data: [<?= $rows3[0]->request_count ?>, <?= $rows3[1]->request_count ?>], // Assuming 'request_count' property holds count data
                backgroundColor: ['#4CAF50', '#FF9800']
              }]
            };

            // Chart configuration
            const pieChartConfig = {
              type: 'pie',
              data: userData
            };

            // Create the chart when the window is loaded
            document.addEventListener('DOMContentLoaded', function() {
              new Chart(document.getElementById('pieChart'), pieChartConfig);
            });
          </script>
        </div>
      <?php elseif (count($rows3) == 3) : ?>
        <div class="chart-container">
          <h2>Product Sales</h2>
          <canvas id="pieChart"></canvas>
          <script>
            // Extracting data from $rows3 and constructing the chart data
            const userData = {
              labels: [
                '<?= $rows3[0]->status ?>',
                '<?= $rows3[1]->status ?>',
                '<?= $rows3[2]->status ?>' // Assuming there are at least 3 elements in $rows3
              ], // Assuming 'status' property holds label data
              datasets: [{
                data: [
                  <?= $rows3[0]->request_count ?>,
                  <?= $rows3[1]->request_count ?>,
                  <?= $rows3[2]->request_count ?> // Assuming there are at least 3 elements in $rows3
                ], // Assuming 'request_count' property holds count data
                backgroundColor: [
                  '#4CAF50',
                  '#FF9800',
                  '#0098sd' // Make sure to replace this with valid color values
                ]
              }]
            };

            // Chart configuration
            const pieChartConfig = {
              type: 'pie',
              data: userData
            };

            // Create the chart when the window is loaded
            document.addEventListener('DOMContentLoaded', function() {
              new Chart(document.getElementById('pieChart'), pieChartConfig);
            });
          </script>



        </div>
      <?php endif; ?>

      <?php if ($rows4) : ?>
      <div class="chart-container">
        <h2>Complaint Status</h2>
        <canvas id="complaintChart"></canvas>
        <script>
          // Sample complaint data
          const complaintData = {
            labels: [
              <?php foreach ($rows4 as $data) : ?> '<?= $data['district'] ?>',
              <?php endforeach; ?>
            ],
            datasets: [{
              label: 
              <?php foreach ($rows4 as $data) : ?> '<?= $data['district'] ?>',
              <?php endforeach; ?> ,
              data: [
              <?php foreach ($rows4 as $data) : ?> '<?= $data['request_count'] ?>',
              <?php endforeach; ?>
            ],
              backgroundColor: [
                '#4CAF50',
                '#4CAF50', // Green for resolved
                '#FF9800' // Orange for unresolved
              ]
            }]
          };

          // Chart configuration
          const complaintChartConfig = {
            type: 'bar',
            data: complaintData,
            options: {
              scales: {
                y: {
                  beginAtZero: true // Start the y-axis at 0
                }
              }
            }
          };

          // Render charts
          window.onload = function() {
            // new Chart(document.getElementById('pieChart'), pieChartConfig);
            new Chart(document.getElementById('complaintChart'), complaintChartConfig);
          };
        </script>
      </div>
      <?php endif; ?>
    </div>

  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="scripts.js"></script> -->
</body>