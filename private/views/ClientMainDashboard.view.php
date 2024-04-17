<?php $this->view('includes/header')?>

<style>body {
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

.chart-container {
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
</style>

<body>
    <div class="container">
        <h1>Admin Dashboard</h1>

        <div class="data-cards">
            <div class="card">
                <h2>Total Users</h2>
                <p id="userCount">125</p> 
            </div>
            <div class="card">
                <h2>New Orders</h2>
                <p id="orderCount">32</p> 
            </div>
            <div class="card">
                <h2>Total Users</h2>
                <p id="userCount">125</p> 
            </div>
            <div class="card">
                <h2>New Orders</h2>
                <p id="orderCount">32</p> 
            </div>
            </div>

        <div class="charts">
            <div class="chart-container">
                <h2>Product Sales</h2> 
                <canvas id="pieChart" ></canvas>
            </div>

            <div class="chart-container">
                <h2>Revenue Distribution</h2>
                <canvas id="donutChart"></canvas>
            </div>
        </div>
        <div class="charts">
            <div class="chart-container">
                <h2>Complaint Status</h2>
                <canvas id="complaintChart"></canvas>
            </div>

            <div class="timeline">
                <ul>
                    <li>
                        <div class="content-timeline">
                            <i class="icon fa-solid fa-credit-card"></i>
                            <h3>Subscription Renewal</h3>
                            <p>Amount: $49.99</p>
                            <p>Date: 2023-12-22</p>
                        </div>
                    </li>
                    <li>
                        <div class="content-timeline">
                            <i class="icon fa-solid fa-money-bill"></i>
                            <h3>Invoice Due</h3>
                            <p>Amount: $125.00</p>
                            <p>Date: 2023-12-28</p>
                        </div>
                    </li>
                    </ul>
            </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="scripts.js"></script>
</body>

<script>
    // Sample data (replace with your own data fetching logic)
const userData = {
  labels: ['Active', 'Inactive', 'New'],
  datasets: [{
      data: [50, 25, 25],
      backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'] 
  }]
};
const revenueData = {
  labels: ['Sales', 'Subscriptions', 'Other'],
  datasets: [{
      data: [60, 30, 10],
      backgroundColor: ['#F44336', '#E91E63', '#9C27B0']
  }]
};

// Chart configurations
const pieChartConfig = {type: 'pie', data: userData};
const donutChartConfig = {type: 'doughnut', data: revenueData };

// Sample complaint data
const complaintData = {
    labels: ['Resolved', 'Unresolved'],
    datasets: [{
        label: 'Complaints',
        data: [35, 15],
        backgroundColor: [
            '#4CAF50', // Green for resolved
            '#FF9800'  // Orange for unresolved
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
  new Chart(document.getElementById('pieChart'), pieChartConfig);
  new Chart(document.getElementById('donutChart'), donutChartConfig);
  new Chart(document.getElementById('complaintChart'), complaintChartConfig);
};




</script>