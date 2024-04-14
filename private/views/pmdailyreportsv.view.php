<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Daily Progress Reports</h1>
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th style="width:400px;">General Note</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)&& !empty($rows)): ?>
                
                    <?php foreach ($rows as $row ):?>
                         <tr>
                        <td><?=$row->date?></td> 
                        <td><?=$row->comment?></td>
                        <td>

                            <a href="<?=ROOT?>/Pmdailyreports/viewDPR/<?=$row->project_id?>/<?=$row->date?>/"><button ><i class="fa-solid fa-eye"></i></button></a> 

                        </td>
                        
                    </tr>

                    <?php endforeach;?>

            <?php else: ?>
                <h3>No Daily Progress Report Yet</h3>

            <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
     

<?php $this->view('includes/footer'); ?>