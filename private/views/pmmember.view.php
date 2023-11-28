<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <div class="table">
        <div class="table_header">
            <p>Supervisors</p>
            <div>
                <button class="add___">Add members</button>
            </div>
        </div>
        <div class="table_section" style="height: 250px;">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Since</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SV013</td>
                        <td><img src="<?=ROOT?>/img/profile.png"></td>
                        <td>M.P. Savani</td>
                        <td>10/05/2023</td>
                        <td>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <p>Wokers</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Skill</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>EM025</td>
                        <td>K.H. Shantha</td>
                        <td>Masons</td>
                    </tr>
                    <tr>
                        <td>EM024</td>
                        <td>P.I. Sanath</td>
                        <td>Welders</td>
                    </tr>
                    <tr>
                        <td>EM020</td>
                        <td>L.H. Arun</td>
                        <td>Tile setters</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>