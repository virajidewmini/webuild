<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <?php if($rows["managers"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on Qualiy of Photographs </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Client Name</th>
                            <th>Date</th>
                            <th>Project ID</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["Qualiy_of_Photographs"] as $row) :?>
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td></td>
                                <td><?=$row->count?></td> 
                                <td><?=$row->joineddate?></td> 
                                <td>
                                    <a href="">
                                        <button><i class="fa-solid fa-sheet-plastic"></i></button>
                                    </a>
                                </td> 
                                
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Photograph's Quality.</h4>
    <?php endif;?> 
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
