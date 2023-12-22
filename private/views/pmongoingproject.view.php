<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <div class="table">
        <div class="table_header">
            <p>On Going</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Model ID</th>
                        <th>Customer Name</th>
                        <th>Supervisor Name</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                <?php if ($rows):?>
                    <?php foreach ($rows as $row):?>
                        <tr>
                            <td><?= $row->project_id?></td>
                            <td><?= $row->model_id?></td>
                            <td><?= $row->customer_name?></td>
                            <td><?= $row->s_user_id?></td>
                            <td><?= $row->location?></td>
                            <td>
                                <a href="<?=ROOT?>/Pmongoingproject/show/<?=$row->project_id?>">
                                <button><i class="fa-solid fa-eye"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No Project were found at this time</h3>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>

