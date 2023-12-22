<?php if(Auth::getRole()== 'Project Manager'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}

.top1{
    background-color: white;
    display: flex;
    justify-content: center;
    align-content: center;
    border-radius: 20px 20px 0 0;
    padding: 20px;
}

.top1 .form-control{
    width: 150px;
    text-align: center;
    border-radius: 10px;
    border-color: #E5863D;
    margin-right: 5%;
}

@media screen and (max-width: 600px) {
            .top1 a, .top1 input[type="text"] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type="text"] {
                border: 1px solid #ccc;
            }
        }
</style>
    <h2 style="margin-bottom: 20px">SEARCH SUPERVISORS</h2>
    <form action="" method="GET">
    <?php if(isset($_GET['district'])){
        $district=$_GET['district'];
    } ?>
    <div class="top1">
        <select name="district" class="form-control" type="text" placeholder="--Select District--">
            <option <?= get_select2('district','');?> value="">--Select District--</option >
            <option <?= get_select2('district','ampara');?> value="ampara" <?php if($district == 'ampara') {echo "selected" ;} ?>>Ampara</option>
            <option <?= get_select2('district','anuradhapura');?> value="anuradhapura" <?php if($district == 'anuradhapura') {echo "selected" ;} ?>>Anuradhapura</option>
            <option <?= get_select2('district','district');?>value="other">Badulla</option>
            <option <?= get_select2('district','district');?>value="other">Batticaloa</option>
            <option <?= get_select2('district','district');?>value="other">Colombo</option>
            <option <?= get_select2('district','galle');?>value="galle" <?php if($district == 'galle') {echo "selected" ;} ?>>Galle</option>
            <option <?= get_select2('district','district');?>value="other">Gampaha</option>
            <option <?= get_select2('district','district');?>value="other">Hambantota</option>
            <option <?= get_select2('district','district');?>value="other">Jaffna</option>
            <option <?= get_select2('district','district');?>value="other">Kaluthara</option>
            <option <?= get_select2('district','district');?>value="other">Kandy</option>
            <option <?= get_select2('district','district');?>value="other">Kegalle</option>
            <option <?= get_select2('district','district');?>value="other">Kilinochchi</option>
            <option <?= get_select2('district','district');?>value="other">Kurunegala</option>
            <option <?= get_select2('district','district');?>value="other">Mannar</option>
            <option <?= get_select2('district','district');?>value="other">Matara</option>
            <option <?= get_select2('district','district');?>value="other">Monaragarla</option>
            <option <?= get_select2('district','district');?>value="other">Mulathivu</option>
            <option <?= get_select2('district','district');?>value="other">Nuwara Eliya</option>
            <option <?= get_select2('district','district');?>value="other">Polonnaruwa</option>
            <option <?= get_select2('district','district');?>value="other">Puttalam</option>
            <option <?= get_select2('district','district');?>value="other">Rathnapura</option>
            <option <?= get_select2('district','district');?>value="other">Trincomalee</option>
            <option <?= get_select2('district','district');?>value="vavuniya">Vavuniya</option>
          </select>
        <button style="background-color:#E5863D; color:white" class="" type="submit">Search</button>
    </div>
    </form>
    <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>District</th>
                        <th>Experience</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows1):?>
                    <?php foreach ($rows1 as $row):?>
                    <tr>
                        <td><?= $row->id?></td>
                        <td><?= $row->firstname?></td>
                        <td><?= $row->lastname?></td>
                        <td><?= $row->district ?></td>
                        <td><?= $row->experience?></td>
                        <td>
                            <a href="<?=ROOT?>/Pmmember_search/view_sup_details/<?=$row->id?>">
                            <button><i class="fa-solid fa-eye"></i></button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    
                <?php else: ?>
                    <h3>No Members were found at this time</h3>
                <?php endif; ?>
                </tbody>
            </table>
    </div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

