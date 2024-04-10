<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Daily Progress Reports</h1>
            <div>
            <?php if(isset($check)): ?>
               <a href="<?=ROOT?>/dailyprogressreport/add" style="<?= ($check> 0) ? 'display: none;' : '' ?>"><button class="add___">Add New</button></a>   
               <?php endif; ?>

            </div>
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th style="width:400px;">General Note</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->date?></td> 
                        <td><?=$row->comment?></td>
                        <td>

                        <?php if($row->date === date('Y-m-d')): ?>

                            <a href="<?=ROOT?>/dailyprogressreport/viewReport/<?=$row->date?>"><button ><i class="fa-solid fa-eye"></i></button></a>
                            <a href="<?=ROOT?>/clientcomplaint/viewComplaint/<?=$row->id?>"><button ><i class="fas fa-edit"></i></button></a>
                            <a href="<?=ROOT?>/dailyprogressreport/delete/<?=$row->date?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

                        <?php else: ?>
                            <a href="<?=ROOT?>/dailyprogressreport/viewReport/<?=$row->date?>"><button><i class="fa-solid fa-eye"></i></button></a>
                            <a href="<?=ROOT?>/clientcomplaint/viewComplaint/<?=$row->id?>"><button disabled style="background-color: #ddd; cursor: not-allowed;"><i class="fas fa-edit"></i></button></a>
                            <a href="<?=ROOT?>/dailyprogressreport/delete/<?=$row->date?>"><button disabled style="background-color: #ddd; cursor: not-allowed;"><i class="fas fa-trash-alt"></i></button></a> 

                        <?php endif; ?>
                         

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

