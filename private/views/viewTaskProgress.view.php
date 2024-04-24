<?php $this->view('includes/header')?>

<div  class="table_header" >
        <h1>  Tasks</h1>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
        
        canvas {
            display: block;
            margin: 0 auto;
        }
</style>

<canvas id="myPieChart" width="300" height="300"></canvas>
<br><br><br>

<div class="v_table">
    
    <div class="v_table_section">
        <table>
            <thead class="v_thead">
                <tr>
                    <th class="v_data">Task</th>
                    <th class="v_data">Status</th>
                    <th class="v_data">Progress</th>
                    <th class="v_data"></th>
                    <th class="v_data">Start Date</th>
                    <th class="v_data">Evidence</th>
                </tr>
            </thead>
            <tbody>
            <?php if(isset($rows) && !empty($rows)): ?>
                <?php foreach ($rows as $row):?>

                <tr>
                    <td class="v_data"><?=$row->task_name?></td>
                    <td class="v_data"><?=$row->status?></td>
                    <td class="v_data">
                        <div class="progress-bar"  style="width: 350px;">
                            <div class="progress-done" data-value=<?=$row->progress?> id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data" style="text-align: right;"><?=$row->progress?></td>
                    <td class="v_data"><?=$row->est_start_date?></td>


                    <td class="v_data">
                        <a href="<?= ROOT ?>/clienttask/viewProgress/<?= $row->id ?>">
                            <button class="v_action_button">View</button>
                        </a>
                        
                    </td>
                </tr>
                <?php endforeach;?>
                <?php else: ?>
                <h3>No task allocated Yet</h3>
                <?php endif; ?>

                
            </tbody>
        </table>
    </div>
</div>
            </div>
        </div>
    </body>

    <script>
        
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Complete', 'Not Complete'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?=(int)$avg[0]->average?>,<?=100-(int)$avg[0]->average?>],
                    backgroundColor: [
                        '#4CAF50',
                        '#F44336',
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                
            }
        });
    </script>
</html>

<?php $this->view('includes/footer'); ?>