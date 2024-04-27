<?php if (Auth::getRole() == 'Storekeeper') : ?>
    <?php $this->view('includes/header') ?>


    <div class="table">
        <div class="table_header">
            <h1>Send Requests for Maintain Store</h1>
            <!-- <div>
               <a href="clientcomplaint/add"><button class="add___">Add New</button></a>   
            </div> -->
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Material Or Equipment ID</th>
                        <th>Material Or Equipment Name</th>
                        <th>Material Or Equipment Code</th>
                        <!-- <th>Remain Quantity</th> -->
                        <th>Requested Quntity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($rows)) : ?>

                        <?php foreach ($rows as $row) : ?>
                            <?php if ($row->status == 'Recieved') : ?>
                                <tr style="background-color:#2ecc71
;">
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->material_name ?></td>
                                    <td><?= $row->material_code ?></td>
                                    <!-- <td><?= $row->remain_quantity ?></td> -->
                                    <td><?= $row->requested_quantity ?></td>
                                    <td>
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->material_name ?></td>
                                    <td><?= $row->material_code ?></td>
                                    <!-- <td><?= $row->remain_quantity ?></td> -->
                                    <td><?= $row->requested_quantity ?></td>
                                    <td>
                                        <a href="<?= ROOT ?>/maintainrequests/update/<?= $row->id ?>/"><button><i class="fa-regular fa-pen-to-square"></i></button>
                                        <a href="<?= ROOT ?>/maintainrequests/delete/<?= $row->id ?>/"><button><i class="fas fa-trash-alt"></i></button></a>
                                        <a href="<?= ROOT ?>/maintainrequests/updatestore/<?= $row->id ?>/<?= $row->id ?>/"><button style="background-color:#e5863d; color:white; ">Recieved</button></a>
                                    </td>
                                </tr>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    <?php else : ?>
                        <!-- <h3>No Complaints Yet</h3> -->

                    <?php endif; ?>

                </tbody>
            </table>

        </div>
    </div>


    <?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>