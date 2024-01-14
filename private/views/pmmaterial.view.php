<?php if(Auth::getRole()== 'Project Manager'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <h2 style="margin-bottom: 20px">MATERIALS</h2>
    <div class="table">
        <div class="table_header">
            <h3>To be recieved</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RQT013</td>
                        <td>012</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>RQT010</td>
                        <td>009</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>RQT009</td>
                        <td>007</td>
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
            <h3>Materials details</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Material ID</th>
                        <th>Material name</th>
                        <th>Mesure unit</th>
                        <th>Available Quantity</th>
                        <th>Used Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MTL001</td>
                        <td>Sand</td>
                        <td>Cube</td>
                        <td>06</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>MTL002</td>
                        <td>6x9 Rock</td>
                        <td>Cube</td>
                        <td>03</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>MTL006</td>
                        <td>Cement</td>
                        <td>Num</td>
                        <td>03</td>
                        <td>6</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>Items details</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ITM025</td>
                        <td>Concrete pump</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>ITM005</td>
                        <td>Power drill</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ITM010</td>
                        <td>Wacker</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>Sent request</h3>
            <div>
                <a href="<?=ROOT?>/Pmmaterial_r"><button class="add___">Request</button></a>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RQT013</td>
                        <td>11/05/2022</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>RQT013</td>
                        <td>11/05/2022</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>RQT013</td>
                        <td>11/05/2022</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>RQT013</td>
                        <td>11/05/2022</td>
                        <td>
                            <button><i class="fa-solid fa-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
