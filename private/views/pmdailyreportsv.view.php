<?php $this->view('includes/header') ?>
<style>
    .unit-d {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<?php $project_id = isset($_GET['project_id']) ? $_GET['project_id'] : ""; ?>
<div class="table">
    <div class="table_header">
        <h1 style="margin-bottom: 20px;">Daily Progress Reports</h1>
    </div>
    <form action="" method="GET">
            <?php
            if (isset($_GET['project_id'])) {
            ?>
                <div class="unit-d">
                    <div class="unit">
                        <h3 style="margin-left:20px;">Project ID :</h3>
                    </div>
                    <div class="e-id-d">

                        <select style="height:35px; width:100px; margin-left:20px; border-radius:10px;" name="project_id" class="" type="text">
                            <option value="" <?= get_select2('project_id', ''); ?>>--Select ID--</option>
                            <?php if ($rows) : ?>
                                <?php foreach ($rows as $row) : ?>
                                    <option style="text-align:center;" <?= get_select2('project_id', $row->id); ?> value="<?= $row->id; ?>" <?php if ($project_id == $row->id) {
                                                                                                                                                echo "selected";
                                                                                                                                            } ?>>
                                        <?= $row->id; ?>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option <?= get_select2('project_id', ''); ?> value="">No Project Found</option>
                                <?php endif; ?>
                        </select>
                        <button style="background-color:#E5863D; color:white; margin-left: 20px;" class="" type="submit">Filter</button>
                    </div>

                </div>
            <?php
            } else {
            ?>
                <div class="unit-d">
                    <div class="unit">
                        <h3 style="margin-left:20px;">Project ID :</h3>
                    </div>
                    <div class="e-id-d">
                        <select style="height:35px; width:100px; margin-left:20px; border-radius:10px;" name="project_id" class="" type="text">
                            <option value="<?= $project_id ?>" <?= get_select2('project_id', ''); ?>>--Select ID--</option>
                            <?php if ($rows) : ?>
                                <?php foreach ($rows as $row) : ?>
                                    <option style="text-align:center;" <?= get_select2('project_id', $row->id); ?> value="<?= $row->id; ?>" <?php if ($project_id == $row->id) {
                                                                                                                        echo "selected";
                                                                                                                    } ?>>
                                        <?= $row->id; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <option <?= get_select2('project_id', ''); ?> value="">No Project Found</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="btnnext">
                        <button style="background-color:#E5863D; color:white; margin-left: 20px;" type="submit">Filter</button>
                    </div>
                </div>

            <?php
            }
            ?>
        </form>
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
                <?php if (isset($rows1) && !empty($rows)) : ?>

                    <?php foreach ($rows1 as $row) : ?>
                        <tr>
                            <td><?= $row->date ?></td>
                            <td><?= $row->comment ?></td>
                            <td>

                                <a href="<?= ROOT ?>/Pmdailyreports/viewDPR/<?= $row->project_id ?>/<?= $row->date ?>/"><button><i class="fa-solid fa-eye"></i></button></a>

                            </td>
                        </tr>

                    <?php endforeach; ?>

                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>


<?php $this->view('includes/footer'); ?>