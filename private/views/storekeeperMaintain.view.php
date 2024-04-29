<!-- <?php if (Auth::getRole() == 'Storekeeper') : ?> -->
    <?php $this->view('includes/header') ?>

    <form method="GET" action="<?= ROOT ?>/maintain/index">
    <input type="text" name="material_name" placeholder="Enter material name...">
    <button type="submit" class="filter-button">Filter</button>
</form>


<div class="table">
    <div class="table_header">
        <h1>Details of Store Materials</h1>
    </div>
    <div class="table_section" style="height: 700px;">
        <table>
            <thead>
                <tr>
                    <th>Material Name</th>
                    <th>Material Code</th>
                    <th>Mesure Unit</th>
                    <th>Total Quantity</th>
                    <th>Remain Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($rows)) : ?>
                    <?php foreach ($rows as $row) : ?>
                        <?php if ($row->status == 'LOW') : ?>
                            <tr style="background-color: #FF6347;">
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="<?= ROOT ?>/maintainrequests/add/<?= $row->id ?>"><?= $row->status ?></a></button></td>

                            </tr>
                        <?php elseif ($row->status == 'NORMAL') : ?>
                            <tr>
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="#"><?= $row->status ?></a></button></td>
                            </tr>
                        <?php elseif ($row->status == 'NOTIFIED') : ?>
                            <tr style="background-color: #FCF4A3;">
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="#"><?= $row->status ?></a></button></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <h3>Tiles Maintain</h3>
        <table >
            <thead>
                <tr>
                    <th>Tiles Name</th>
                    <th>Tiles Code</th>
                    <th>Total Quantity</th>
                    <th>Remain Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($tiles)) : ?>
                    <?php foreach ($tiles as $row) : ?>
                        <?php if ($row->status == 'LOW') : ?>
                            <tr style="background-color: #FF6347;">
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="<?= ROOT ?>/maintainrequests/add/<?= $row->id ?>"><?= $row->status ?></a></button></td>

                            </tr>
                        <?php elseif ($row->status == 'NORMAL') : ?>
                            <tr>
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="#"><?= $row->status ?></a></button></td>
                            </tr>
                        <?php elseif ($row->status == 'NOTIFIED') : ?>
                            <tr style="background-color: #FCF4A3;">
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="#"><?= $row->status ?></a></button></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <h3>Paint Maintain</h3>
        <table >
            <thead>
                <tr>
                    <th>Paint Name</th>
                    <th>Paint Code</th>
                    <th>Total Quantity</th>
                    <th>Remain Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($paints)) : ?>
                    <?php foreach ($paints as $row) : ?>
                        <?php if ($row->status == 'LOW') : ?>
                            <tr style="background-color: #FF6347;">
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="<?= ROOT ?>/maintainrequests/add/<?= $row->id ?>"><?= $row->status ?></a></button></td>

                            </tr>
                        <?php elseif ($row->status == 'NORMAL') : ?>
                            <tr>
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="#"><?= $row->status ?></a></button></td>
                            </tr>
                        <?php elseif ($row->status == 'NOTIFIED') : ?>
                            <tr style="background-color: #FCF4A3;">
                                <td><?= $row->material_name ?></td>
                                <td><?= $row->material_code ?></td>
                                <td><?= $row->measure_unit ?></td>
                                <td><?= $row->total_quantity ?></td>
                                <td><?= $row->remain_quantity ?></td>
                                <!-- <td>
                                <button><a href="<?= ROOT ?>/maintainrequests/add"><?= $row->status ?></a></button>
                            </td> -->
                                <td><button><a href="#"><?= $row->status ?></a></button></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>


    </div>
</div>
<?php $this->view('includes/footer'); ?>

<!-- <?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?> -->