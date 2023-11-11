<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <div class="table">
        <div class="table_header">
            <p>To be recieved</p>
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
            <p>Materials details</p>
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
            <p>Items details</p>
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
            <p>Sent request</p>
            <div>
                <button class="add___">Request</button>
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

