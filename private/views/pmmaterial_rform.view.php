<?php $this->view('includes/header')?>
<style>
    label{
        padding: 5px;
    }
    input{
        margin: 3px;
    }
    table{
        min-width: 300px;
    }
    table th{
        color: black;
    }
    .table_header{
        background-color: white;
    }
    .form_fill{
        color: black;
        height: 30px;
        width: 100px;
        min-width: 50px;
    }
    .table_section{
        height: auto;
    }
</style>
    <div style="background-color: white; padding: 20px; border-radius: 20px">
        <h2>Request form</h2>
        <div style="margin:20px">
            <label>Project ID :</label>
            <input class="mreq_d"><br>
            <label>Manager ID :</label>
            <input class="mreq_d"><br>
            <label>Request ID :</label>
            <input class="mreq_d"><br>
        </div>
        <div>
            <div class="table">
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Material or Item ID</th>
                                <th>Material or Item Name</th>
                                <th>Mesure Unit</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                            <tr>
                                <td><input class="form_fill"></td>
                                <td><input class="form_fill"></td>
                                <td><input class="form_fill"></td>
                                <td><input class="form_fill" ></td>
                                <td>
                                <button onclick="remove_tr(this)"><i class="fa-solid fa-trash"></i></button></td>
                        </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table_header">
                    <p></p>
                    <div>
                        <button class="add___" onclick="create_tr('table_body')">Add</button>
                        <button class="add___" style="background-color:white; color: #E5863D; border: 1px solid #E5863D;" >Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
<script src="<?=ROOT?>/js/pmmaterial_rform.js"></script>
<?php $this->view('includes/footer'); ?>