<?php if(Auth::getRole()== 'Supervisor'): ?>
<?php $this->view('includes/header')?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
        
        canvas {
            display: block;
            margin: 0 auto;
            height: 300px;
            width: 300px;
        }
        .pieChart{
            display: block;
            margin: 0 auto;
            height: 300px;
            width: 300px;
        }
</style>

<div class="table_header" >
        <h1>  Tasks</h1>
</div>

<canvas id="myPieChart" class="pieChart" width="300" height="300"></canvas>
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
                    <th class="v_data">Allocate</th>
                    <th class="v_data">Subtask</th>
                    <th class="v_data">Evidence</th>
                </tr>
            </thead>
            <tbody>
            <?php if(isset($rows)): ?>
                <?php foreach ($rows as $row):?>

                <tr>
                    <td class="v_data"><?=$row->task_name?></td>
                    <td class="v_data"><?=$row->status?></td>
                    <td class="v_data">
                        <div class="progress-bar"  style="width: 250px;">
                            <div class="progress-done" data-value=<?=$row->progress?> id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data" style="text-align: right;"><?=$row->progress?></td>
                    <td class="v_data"><?=$row->est_start_date?></td>

                    <td class="v_data">
                        <a href="<?= ROOT ?>/task/addCoworker/<?= $row->id ?>" 
                            style="<?= ($row->status == 'Complete') ? 'display: none;' : '' ?>">
                            <button class="v_action_button">Allocation</button>
                        </a>
                    </td>

                    <td class="v_data">
                        <a href="<?= ROOT ?>/task/edit/<?= $row->id ?>">
                            <button class="v_action_button">Subtask</button>
                        </a>
                        
                    </td>

                    <td class="v_data">
                        <a href="<?= ROOT ?>/progress/viewPhotograph/<?= $row->id ?>">
                            <button class="v_action_button">Photo</button>
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

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>