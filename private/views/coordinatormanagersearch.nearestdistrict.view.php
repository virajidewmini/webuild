<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}


</style>
<h4 style="padding:20px">No Project Managers are in this district.</h4>
                
                <div style="border: 2px solid black; margin: 20px;padding:20px">
                    <h5>Select the nearest disistrict to the project</h5>
                    <br>
                    <form method="post">
                        <?php if(isset($_POST['district'])){
                            $district=$_POST['district'];
                        } ?>
                       
                        <select name="district" class="" type="text" placeholder="--Select District--" style="width: auto;padding: 8px;font-size: 16px;border: 1px solid #ccc; border-radius: 5px;outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); ">
                            <option <?= get_select2('district','');?> value="">Select District</option >
                            <option <?= get_select2('district','ampara');?> value="ampara">Ampara</option>
                            <option <?= get_select2('district','anuradhapura');?> value="anuradhapura">Anuradhapura</option>
                            <option <?= get_select2('district','badulla');?>value="badulla">Badulla</option>
                            <option <?= get_select2('district','batticaloa');?>value="batticaloa">Batticaloa</option>
                            <option <?= get_select2('district','colombo');?>value="colombo">Colombo</option>
                            <option <?= get_select2('district','galle');?>value="galle">Galle</option>
                            <option <?= get_select2('district','gampaha');?>value="gampaha">Gampaha</option>
                            <option <?= get_select2('district','hambantota');?>value="hambantota">Hambantota</option>
                            <option <?= get_select2('district','jaffna');?>value="jaffna">Jaffna</option>
                            <option <?= get_select2('district','kaluthara');?>value="kaluthara">Kaluthara</option>
                            <option <?= get_select2('district','kandy');?>value="kandy">Kandy</option>
                            <option <?= get_select2('district','kegalle');?>value="kegalle">Kegalle</option>
                            <option <?= get_select2('district','kilinochchi');?>value="kilinochchi">Kilinochchi</option>
                            <option <?= get_select2('district','kurunegala');?>value="kurunegala">Kurunegala</option>
                            <option <?= get_select2('district','mannar');?>value="mannar">Mannar</option>
                            <option <?= get_select2('district','matara');?>value="matara">Matara</option>
                            <option <?= get_select2('district','monaragala');?>value="monaragala">Monaragala</option>
                            <option <?= get_select2('district','mulathivu');?>value="mulathivu">Mulathivu</option>
                            <option <?= get_select2('district','nuwara eliya');?>value="nuwara eliya">Nuwara Eliya</option>
                            <option <?= get_select2('district','polonnaruwa');?>value="polonnaruwa">Polonnaruwa</option>
                            <option <?= get_select2('district','puttalam');?>value="puttalam">Puttalam</option>
                            <option <?= get_select2('district','rathnapura');?>value="rathnapura">Rathnapura</option>
                            <option <?= get_select2('district','trincomalee');?>value="trincomalee">Trincomalee</option>
                            <option <?= get_select2('district','vavuniya');?>value="vavuniya" >Vavuniya</option>
                        </select>
                        <t>
                        <button style="background-color:#E5863D; color:white" class="" type="submit">Search</button>
                        
            </select>
                    </form>
                </div>






    <h2 style="margin-bottom: 20px">SEARCH SUPERVISORS</h2>
    <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>District</th>
                        <th>No. of Projects Currently Working On</th>
                        <th>No. of Projects Completed in the Past Two Months</th>
                        <th>Assign</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows1):?>
                    <?php foreach ($rows1 as $row):?>
                    <tr>
                        <td><?= $row->id?></td>
                        <td><?= $row->firstname?><?= $row->lastname?></td>
                        <td><?= $row->district ?></td>
                        <td></td>
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






