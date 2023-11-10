<?php $this->view('includes/header')?>
<style>
main {
  background-image:url("<?=ROOT?>/img/pm.jpg");
}
body{
    overflow: hidden;
}
</style>
    <div class="project-details">
        <div class="table_header">
            <p>Projects</p>
        </div>
        <div class="project">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/on_pro.png');">
                    <p>Ongoing</p>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cm_pro.png');">
                    <p>Completed</p>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cn_pro.png');">
                    <p>Canceled</p>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right" style="padding-left: 4px;"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <p>Daily Progress report</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Project ID</th>
                        <th>Report ID</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SV013</td>
                        <td><img src="<?=ROOT?>/img/profile.png"></td>
                        <td>M.P. Savani</td>
                        <td>P003</td>
                        <td>P003R025</td>
                        <td>10/05/2023</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>SV013</td>
                        <td><img src="<?=ROOT?>/img/profile.png"></td>
                        <td>M.P. Savani</td>
                        <td>P003</td>
                        <td>P003R025</td>
                        <td>10/05/2023</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>SV013</td>
                        <td><img src="<?=ROOT?>/img/profile.png"></td>
                        <td>M.P. Savani</td>
                        <td>P003</td>
                        <td>P003R025</td>
                        <td>10/05/2023</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>SV013</td>
                        <td><img src="<?=ROOT?>/img/profile.png"></td>
                        <td>M.P. Savani</td>
                        <td>P003</td>
                        <td>P003R025</td>
                        <td>10/05/2023</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <p>On going sub task</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Task ID</th>
                        <th>Sub Task ID</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P003</td>
                        <td>TSK001</td>
                        <td>TSK001S023</td>
                        <td>Foundation excavation</td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>TSK001</td>
                        <td>TSK001S023</td>
                        <td>Foundation excavation</td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>TSK001</td>
                        <td>TSK001S023</td>
                        <td>Foundation excavation</td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>TSK001</td>
                        <td>TSK001S023</td>
                        <td>Foundation excavation</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>

