<?php if ($_SESSION['role'] == 'Client') : ?>
<?php $this->view('includes/header')?>

<style>
    .errors{
    padding-bottom: 20px;
    color: red;
  }
</style>
<div style="margin-left: 285px;" class="table_header" >
        <h1>  Complaints, Let's Us Know !</h1>
</div>
    <div class="form_container">
        <form method="post"  class="v_form" enctype="multipart/form-data">
        <?php if (isset($errors)) : ?>
            <div class="errors">
                <?php foreach ($errors as $error) : ?>
                    <p class="error"><?= $error ?></p>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <label class="v_label" id="complaintType">Complaint Type</label>
           
            <select id="type" name="type" class="v_form-control" >
                <option value="" disabled selected>Select Complaint Type</option>
                <option value="Quality and the number of the photograph">Quality and the number of the photograph</option>
                <option value="Construction project delay">Construction project delay</option>
                <option value="Quality of workmanship and materials">Quality of workmanship and materials </option>
                <option value="Poor Communication">Poor Communication </option>
                <option value="other">Other</option>
            </select>

            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="v_form-control" style="height: 150px;">

             <input type="hidden" name="status" value="Pending">
           <label for="fileUpload">Select files:</label>
           <input type="file" name="files[]" id="files" multiple accept="application/pdf,image/*">

            <a href="<?=ROOT?>/clientcomplaint"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>