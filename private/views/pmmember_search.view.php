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
    <h2 style="margin-bottom: 20px">SELECT SUPERVISOR</h2>
    <form action="" method="GET">
    <?php 
    $district = "";
    if(isset($_GET['district'])){
        $district=$_GET['district'];
    } ?>
    <div class="top1">
        <select name="district" class="form-control" type="text" placeholder="--Select District--">
            <option <?= get_select2('district','');?> value="">--Select District--</option >
            <option <?= get_select2('district','ampara');?> value="ampara" <?php if($district == 'ampara') {echo "selected" ;} ?>>Ampara</option>
            <option <?= get_select2('district','anuradhapura');?> value="anuradhapura" <?php if($district == 'anuradhapura') {echo "selected" ;} ?>>Anuradhapura</option>
            <option <?= get_select2('district','badulla');?>value="badulla" <?php if($district == 'badulla') {echo "selected" ;} ?>>Badulla</option>
            <option <?= get_select2('district','batticaloa');?>value="batticaloa" <?php if($district == 'batticaloa') {echo "selected" ;} ?>>Batticaloa</option>
            <option <?= get_select2('district','colombo');?>value="colombo" <?php if($district == 'colombo') {echo "selected" ;} ?>>Colombo</option>
            <option <?= get_select2('district','galle');?>value="galle" <?php if($district == 'galle') {echo "selected" ;} ?>>Galle</option>
            <option <?= get_select2('district','gampaha');?>value="gampaha" <?php if($district == 'gampaha') {echo "selected" ;} ?>>Gampaha</option>
            <option <?= get_select2('district','hambantota');?>value="hambantota" <?php if($district == 'hambantota') {echo "selected" ;} ?>>Hambantota</option>
            <option <?= get_select2('district','jaffna');?>value="jaffna" <?php if($district == 'jaffna') {echo "selected" ;} ?>>Jaffna</option>
            <option <?= get_select2('district','kaluthara');?>value="kaluthara" <?php if($district == 'kaluthara') {echo "selected" ;} ?>>Kaluthara</option>
            <option <?= get_select2('district','kandy');?>value="kandy" <?php if($district == 'kandy') {echo "selected" ;} ?>>Kandy</option>
            <option <?= get_select2('district','kegalle');?>value="kegalle" <?php if($district == 'kegalle') {echo "selected" ;} ?>>Kegalle</option>
            <option <?= get_select2('district','kilinochchi');?>value="kilinochchi" <?php if($district == 'kilinochchi') {echo "selected" ;} ?>>Kilinochchi</option>
            <option <?= get_select2('district','kurunegala');?>value="kurunegala" <?php if($district == 'kurunegala') {echo "selected" ;} ?>>Kurunegala</option>
            <option <?= get_select2('district','mannar');?>value="mannar" <?php if($district == 'mannar') {echo "selected" ;} ?>>Mannar</option>
            <option <?= get_select2('district','matara');?>value="matara" <?php if($district == 'matara') {echo "selected" ;} ?>>Matara</option>
            <option <?= get_select2('district','monaragala');?>value="monaragala" <?php if($district == 'monaragala') {echo "selected" ;} ?>>Monaragala</option>
            <option <?= get_select2('district','mulathivu');?>value="mulathivu" <?php if($district == 'mulathivu') {echo "selected" ;} ?>>Mulathivu</option>
            <option <?= get_select2('district','nuwara eliya');?>value="nuwara eliya" <?php if($district == 'nuwara eliya') {echo "selected" ;} ?>>Nuwara Eliya</option>
            <option <?= get_select2('district','polonnaruwa');?>value="polonnaruwa" <?php if($district == 'polonnaruwa') {echo "selected" ;} ?>>Polonnaruwa</option>
            <option <?= get_select2('district','puttalam');?>value="puttalam" <?php if($district == 'puttalam') {echo "selected" ;} ?>>Puttalam</option>
            <option <?= get_select2('district','rathnapura');?>value="rathnapura" <?php if($district == 'rathnapura') {echo "selected" ;} ?>>Rathnapura</option>
            <option <?= get_select2('district','trincomalee');?>value="trincomalee" <?php if($district == 'trincomalee') {echo "selected" ;} ?>>Trincomalee</option>
            <option <?= get_select2('district','vavuniya');?>value="vavuniya" <?php if($district == 'vavuniya') {echo "selected" ;} ?>>Vavuniya</option>
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
                        <th>Currently working project count</th>
                        <th>Number of projects completed in last month</th>
                        <th>Number of done projects</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                                <a href="<?=ROOT?>/Pmmember_search/view_sup/<?=$row->id?>/">
                                <button><i class="fa-solid fa-eye"></i></button>
                                </a>
                                <a href="<?=ROOT?>/Pmmember_search/add_sup/<?=$row->id?>/<?= $row->firstname?>/<?= $row->lastname?>/<?=$p_id?>/<?=$q_id?>/<?= $months?>/">
                                <button><i class="fa-solid fa-add"></i></button>
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






