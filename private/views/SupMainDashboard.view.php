<?php if(Auth::getRole()== 'Supervisor'): ?>
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
  background-color: #BDBDBD;
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

.tables{
  display: flex;
  gap: 20px; 
  padding-bottom: 20px;
  min-width: 0px;
}
.table-containers{
  flex:1;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.table-bottom{
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  background-color: #fff;
  margin-bottom: 30px;
  min-width: auto;
  
}
.reviewDiv{
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  background-color: #fff;
  margin-bottom: 30px;
  min-width: auto;
}
.reviews__heading {
  font-size: 32px;
  color: #323357;
  font-family: "Muli";
  font-weight: 700;
  text-align: center;
  margin: 28px 0;
}

.reviews__average-ratings {
  margin-bottom: 63px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.average-ratings__stars {
  display: flex;
  align-items: center;
  padding: 0 25px;
  width: 347px;
  height: 63px;
  border-radius: 32px;
  background-color: #f5f8ff;
  margin-bottom: 8px;
}

.stars__average-rating-score {
  font-size: 16px;
  color: #323357;
  font-family: "Muli";
  font-weight: 400;
  margin-left: auto;
}

</style>

<body>
    <div class="container">
        <h1>Client Dashboard</h1>
        

        <div class="data-cards">
            <div class="card">
                <h2>Total Tasks</h2>
                <p  style="font-size: larger;"><?=$rows[0]->total?></p> 
            </div>
            <div class="card">
                <h2>Complete Tasks</h2>
                <p  style="font-size: larger;"><?=$complete[0]->completeCount?></p> 
            </div>
            <div class="card">
                <h2>Ongoing Tasks</h2>
                <p  style="font-size: larger;"><?=$ongoing[0]->ongoingCount?></p> 
            </div>
            <div class="card">
                <h2>Pending Tasks</h2>
                <p  style="font-size: larger;"><?=$pending?></p> 
            </div>
        </div>


        <div class="data-cards">
        <?php foreach($coworkers as $cowoker): ?>
            <div class="card" style="background-color: #607D8B;">
                <h2><?=$cowoker->role?></h2>
                <p  style="font-size: larger;"><?=$cowoker->row_count?></p> 
            </div>
        <?php endforeach?>
            
        </div>

        <div class="charts">
            <div class="chart-container">
                <h2>Progress</h2> 
                <canvas id="pieChart" ></canvas>
            </div>

            <div class="chart-container">
                <h2>Complaint Status</h2>
                <canvas id="complaintChart"></canvas>
            </div>

        </div>
        

            <div class="tables">
            <div class="table-containers">
            <table class="table-bottom" >
                <caption style="font-size: larger; font-weight: bold;">Unresolved Complaint</caption>
                <thead>
                    <tr>
                        <th >Type</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($complaints)&&empty($complaints)): ?>
                    <h3>No Unresolve Complaint</h3>
                <?php else:?>
                
                    <?php foreach($complaints as $complaint): ?>
                        <tr>
                            <td><?=$complaint->type?></td>
                            <td><?=$complaint->date?></td>
                        </tr>
                    <?php endforeach?>
                <?php endif?>
                </tbody>
            </table>
            </div>

            <div class="table-containers">
            <table class="table-bottom" >
                <caption style="font-size: larger; font-weight: bold;">Today Daily Progress Report</caption>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Work Desciption</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($report)&&empty($report)):?>
                    <h3>No added Daily Progress Report Yet</h3>
                <?php else:?>
                
                    
                        <tr>
                            <td><?=$report[0]->date?></td>
                            <td><?=$report[0]->work_description?></td>
                            <td><a href="<?=ROOT?>/dailyprogressreport/viewReport/<?=$report[0]->date?>"><button ><i class="fa-solid fa-eye"></i></button></a></td>
                        </tr>
                    
                <?php endif?>
                </tbody>
            </table>
            
              </div>
        </div>
        </div>
            
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="scripts.js"></script> -->
</body>

<script>
    // Sample data (replace with your own data fetching logic)
const userData = {
  labels: ['Complete', 'Not Complete'],
  datasets: [{
      data: [<?=$complete[0]->completeCount?>, <?=(int)$rows[0]->total-(int)$complete[0]->completeCount?>],
      backgroundColor: ['#4CAF50', '#FF9800'] 
  }]
};


// Chart configurations
const pieChartConfig = {type: 'pie', data: userData};

// Sample complaint data
const complaintData = {
    labels: ['Resolved', 'Unresolved'],
    datasets: [{
        
        data: [<?=$completeComplaint[0]->completeComplaintCount?>, <?=$pendingComplaint[0]->pendingComplaintCount?>],
        backgroundColor: [
            '#4CAF50', 
            '#FF9800'  
        ]
    }]
};

// Chart configuration
const complaintChartConfig = {
    labels: ['Resolved', 'Unresolved'],
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
  new Chart(document.getElementById('complaintChart'), complaintChartConfig);
};




</script>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>