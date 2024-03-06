<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>
<div class="form_container">
<form method="post">
			 	<h3 style="text-align: center;"> Are you sure you want to delete?</h3>

 
			 	<input type="hidden" name="id">
			 	<input style="margin-top: 20px; display: block; margin-left: auto; margin-right: 0; color: white; background-color: #E5863D;" 
					class="btn btn-danger float-end"  type="submit" value="Delete">
					
					<a href="<?=ROOT?>/quotationorder"> <button class="v_submit_button" type="submit">Submit</button></a>

			 </form>
</div>
<?php $this->view('includes/footer'); ?>