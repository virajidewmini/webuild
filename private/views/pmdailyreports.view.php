<?php $this->view('includes/header') ?>

<?php if (isset($rows)) : ?>

    <h1 style="text-align: center;">Daily Progress Report - <?= $rows[0]->date ?></h1>

<?php endif; ?>

<div class="report-container">
    <h2 style="color:#E5863D;">Weather Report</h2>

    <div class="report-section">
        <div class="report-section-header">Rain Hours</div>
        <div class="report-section-content">
            <table class="report-table" style="min-width:800px">
                <tr>
                    <th>Time</th>
                    <th>Weather</th>
                </tr>
                <?php if (isset($weatherDetail)) : ?>
                    <tr>
                        <td>8.00am-9.00am</td>
                        <td><?= $weatherDetail[0]->hour_8 ?></td>
                    </tr>

                    <tr>
                        <td>9.00am-10.00am</td>
                        <td><?= $weatherDetail[0]->hour_9 ?></td>
                    </tr>

                    <tr>
                        <td>10.00am-11.00am</td>
                        <td><?= $weatherDetail[0]->hour_10 ?></td>
                    </tr>

                    <tr>
                        <td>11.00am-12.00am</td>
                        <td><?= $weatherDetail[0]->hour_11 ?></td>
                    </tr>

                    <tr>
                        <td>1.00pm-2.00pm</td>
                        <td><?= $weatherDetail[0]->hour_1 ?></td>
                    </tr>

                    <tr>
                        <td>2.00pm-3.00pm</td>
                        <td><?= $weatherDetail[0]->hour_2 ?></td>
                    </tr>

                    <tr>
                        <td>3.00pm-4.00pm</td>
                        <td><?= $weatherDetail[0]->hour_3 ?></td>
                    </tr>

                    <tr>
                        <td>4.00pm-5.00pm</td>
                        <td><?= $weatherDetail[0]->hour_4 ?></td>
                    </tr>

            </table>
        </div>
    </div>

    <div class="report-section">
        <div class="report-section-header">Temperature</div>
        <div class="report-section-content">
            <p><?= $weatherDetail[0]->temperature ?>°C</p>
        </div>
    </div>

    <div class="report-section">
        <div class="report-section-header">Overall Weather</div>
        <div class="report-section-content">
            <p><?= $weatherDetail[0]->overall ?></p>
        <?php endif; ?>
        </div>
    </div>
    <br>
    <hr><br>
    <h2 style="color:#E5863D;">Work Description</h2>
    <br>

    <div class="report-section">
        <div class="report-section-header">Work Description</div>
        <div class="report-section-content">
            <?php if (isset($rows)) : ?>
                <p><?= $rows[0]->work_description ?></p>
            <?php endif; ?>
        </div>
    </div>

    <br>
    <hr><br>
    <h2 style="color:#E5863D;">Challenges</h2>
    <br>

    <?php if (isset($challengeDetail)) : ?>
        <div class="report-section">
            <div class="report-section-header">Nature of the Challenge</div>
            <div class="report-section-content">
                <p><?= $challengeDetail[0]->challenge ?></p>
            </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">Description</div>
            <div class="report-section-content">
                <p>L<?= $challengeDetail[0]->description ?></p>
            </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">Impact of the Schedule</div>
            <div class="report-section-content">
                <p><?= $challengeDetail[0]->impact ?></p>
            </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">Root Cause</div>
            <div class="report-section-content">
                <p><?= $challengeDetail[0]->root_case ?></p>
            </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">How to Face It</div>
            <div class="report-section-content">
                <p><?= $challengeDetail[0]->face_it ?></p>
            </div>
        </div>
    <?php endif; ?>
    <br>
    <hr><br>
    <h2 style="color:#E5863D;">General Note</h2>
    <br>
    <div class="report-section">
        <div class="report-section-header">General Note & Comments</div>
        <div class="report-section-content">
            <?php if (isset($rows)) : ?>
                <p><?= $rows[0]->comment ?></p>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>
    <div class="table_header" style="align-items: center; background-color:none; border-radius: 10px;">
        <a href="<?= ROOT ?>/Pmdashboard">
            <input class="in_a_c" style="border:none; color:#E5863D; background-color:white;"  type="button" value="Cancel">
        </a>
        <a href="<?= ROOT ?>/Pmdashboard">
            <input id="print" class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Download">
        </a>
    </div>

</div>
<!-- <a href="<?= ROOT ?>/dailyprogressreport"> <button class="v_submit_button" type="button" style="margin-left:780px;">Ok</button></a> -->