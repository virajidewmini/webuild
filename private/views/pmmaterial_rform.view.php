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
    .mreq_d{
        color: black;
    }
</style>
    <div style="background-color: white; padding: 20px; border-radius: 20px">
    
        <h2>Request form</h2>
        <div style="margin:20px">
            <label>Last Request ID :</label>
        </div>
        <div>
        <form action="#" method="post" id="add_mform">
            <div class="table">
        
                <div class="table_header">
                        <p></p>
                        <button type="button" class="add___" id="add_item_button">Add</button>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th >No.</th>
                                <th>Material or Item ID</th>
                                <th>Material or Item Name</th>
                                <th>Mesure Unit</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                        <tr >
                            <td><input type="number" id="number" name="number[]" class="form_fill"
                            value="1"
                            style="width:80px"></td>
                            <td><input type="material_or_item_id" id="material_or_item_id" name="material_or_item_id[]" value="<?=get_var('material_or_item_id[]')?>" class="form_fill"></td>
                            <td><input  type="material_or_item_name" id="material_or_item_name" name="material_or_item_name[]" value="<?=get_var('material_or_item_name[]')?>"  class="form_fill"></td>
                            <td><input type="mesure_unit" id="mesure_unit" name="mesure_unit[]" value="<?=get_var('mesure_unit[]')?>" class="form_fill"></td>
                            <td><input  type="quantity" id="quantity" name="quantity[]"            value="<?=get_var('quantity[]')?>" class="form_fill" ></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table_header">
                        <button class="add___">Cancel</button>
                        <button type="submit" class="add___"
                         style="background-color:white; color: #E5863D; border: 1px solid #E5863D; width: 75px;" >Send
                        </button>
            </div>
        </form>
        </div>
    </form>
    </div>
     
<script src="<?=ROOT?>/js/pmmaterial_rform.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#add_item_button').click(function(){
        var length = $('.form_fill').length/5;
        var i = parseInt(length)+1;
        var newrow = $('#table_body').append(`<tr>
        <td><input type="number" id="number" name="number[]" class="form_fill" value="`+i+`"
        style="width:80px"></td>
        <td><input type="material_or_item_id" id="material_or_item_id" name="material_or_item_id[]" value="<?=get_var('material_or_item_id[]')?>" class="form_fill"></td>
        <td><input  type="material_or_item_name" id="material_or_item_name" name="material_or_item_name[]" value="<?=get_var('material_or_item_name[]')?>" class="form_fill"></td>
        <td><input type="mesure_unit" id="mesure_unit" name="mesure_unit[]" value="<?=get_var('mesure_unit[]')?>" class="form_fill"></td>
        <td><input  type="quantity" id="quantity" name="quantity[]" value="<?=get_var('quantity[]')?>"  class="form_fill" ></td>
        <td> <button id="dlt" class="delete"> Delete </button> </td>
        </tr>`);
    });

    $('body').on('click','#dlt',function(){
        $(this).closest('tr').remove()
    });
</script>
<?php $this->view('includes/footer'); ?>