<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>


    <div class="table">
        <div class="table_header">
            <h1>Complaints</h1>

        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows) : ?>

                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?= $row->project_id ?></td>
                                <td><?= $row->type ?></td>
                                <td><?= $row->date ?></td>
                                <td><?= $row->status ?></td>

                                <td>
                                    <a href="<?= ROOT ?>/Pmcomplaint/man_view_complaint/<?= $row->id ?>"><button><i class="fa-solid fa-eye"></i></button></a>



                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else : ?>
                        <h3>No Complaints Yet</h3>

                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>






    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>