<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <div class="table">
        <div class="table_header">
            <h2>On Going Projects</h2>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Supervisor Name</th>
                        <th>Project Request ID</th>
                        <th>Final Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows):?>
                        <?php foreach ($rows as $row):?>
                            <tr>
                                <td><?= $row->id?></td>
                                <td><?= $row->staff->firstname?> <?= $row->staff->lastname?></td>
                                <td><?= $row->project_request_id?></td>
                                <td><?=get_date($row->date)?></td>
                                <td>
                                    <a href="<?=ROOT?>/Pmongoingproject/show/<?=$row->id?>">
                                    <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h3>No Projects were found at this time</h3>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table" style="margin-top:60px">
        <div class="table_header">
            <h2>To Start</h2>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Manager Name</th>
                        <th>Supervisor Name</th>
                        <th>Project Request ID</th>
                        <th>Final Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows):?>
                        <?php foreach ($rows as $row):?>
                            <tr>
                                
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h3>No Projects were found at this time</h3>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    

<?php $this->view('includes/footer'); ?>

