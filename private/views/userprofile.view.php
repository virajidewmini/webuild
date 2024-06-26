<?php $this->view('includes/header') ?>

<div class="profile_area">
    <div class="profile_row">
        <div class="profile_col-4">
            <?php if (Auth::getGender() == 'female') { ?>
                <img src="<?= ROOT ?>/img/profilefemale.png" alt="User Image" class="profile_img" style="width: 200px;">
            <?php } else { ?>
                <img src="<?= ROOT ?>/img/profilemale.png" alt="User Image" class="profile_img" style="width: 200px;">
            <?php } ?>
            <h3 style="text-align:center"><?= Auth::getFirstname() ?> <?= Auth::getLastname() ?></h3>
        </div>
        <div class="profile_col-8">
            <table class="profile_table">
                <tr>
                    <th>User ID:</th>
                    <td><?= Auth::getId() ?></td>
                </tr>
                <tr>
                    <th>First Name:</th>
                    <td><?= Auth::getFirstname() ?></td>
                </tr>
                <tr>
                    <th>Second Name:</th>
                    <td><?= Auth::getLastname() ?></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?= Auth::getGender() ?></td>
                </tr>
                <tr>
                    <th>Contact:</th>
                    <td><?= Auth::getContactnumber() ?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><?= Auth::getAddress() ?></td>
                </tr>
                <tr>
                    <th>Email Address:</th>
                    <td><?= Auth::getEmail() ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
</div>


<?php $this->view('includes/footer'); ?>