<?php if (Auth::getRole() == 'Admin' || Auth::getRole() == 'Project Coordinator' || Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>

    <div class="profile_area" style="margin-top:100px;">
        <div class="profile_row" >
            <div class="profile_col-4" style="display: grid; place-content: center; justify-items: center;">
                <img src="<?= ROOT ?>/img/profile.jpg" alt="User Image" class="profile_img" style="width: 200px;">
                <h2 style="text-align:center; margin-top:10px;"><?= Auth::getFirstname() ?> <?= Auth::getLastname() ?></h2>
            </div>
            <div class="profile_col-8">
                <table class="profile_table" >
                    <tr>
                        <th style="display:felx; text-align:left;">User ID:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getId() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">First Name:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getFirstname() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Second Name:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getLastname() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Gender:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getGender() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Role:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getRole() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Contact:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getContactnumber() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Address:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getAddress() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Email Address:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getEmail() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Joined Date:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getJoineddate() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Qualification:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getQualification() ?></td>
                    </tr>
                    <tr>
                        <th style="display:felx; text-align:left;">Experience:</th>
                        <td style="display:felx; text-align:left;"><?= Auth::getExperience() ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
    </div>

    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>