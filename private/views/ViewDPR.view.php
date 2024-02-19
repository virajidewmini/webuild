<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Daily Progress Reports</h1>
            <div>
               <a href="<?=ROOT?>/dailyprogressreport/add"><button class="add___">Add New</button></a>   
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
                         <a href="<?=ROOT?>/dailyprogressreport/viewReport"><button ><i class="fa-solid fa-eye"></i></button></a>
                         <a href="<?=ROOT?>/clientcomplaint/viewComplaint/<?=$row->id?>"><button ><i class="fas fa-edit"></i></button></a>
                         <a href="<?=ROOT?>/clientcomplaint/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

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

