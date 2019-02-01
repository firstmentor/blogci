
<?php include "layouts/navbar.php"; ?>

<div class="container" style="margin-top: 20px;">
	
	 <!--<form action="">-->
	<h1>Admin Form</h1>
	 	
	 	<?php echo form_open('Admin/index'); ?>
   <div class="row">
   <div class="col-lg-6">	
  <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
    <?php echo form_input(['class'=>'form-control',' placeholder' =>'Enter Username','name'=>'uname']); ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top: 40px;">
    <?php echo form_error('uname'); ?>

  </div>
  </div>

  
 <div class="row">
   <div class="col-lg-6">

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <!--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
   <?php echo form_password(['class'=>'form-control',' placeholder' =>'Enter Password', 'name'=>'pass']); ?>

  </div>
  </div>
  <div class="col-lg-6" style="margin-top: 40px;">
    <?php echo form_error('pass'); ?>

  </div>
  </div>




  <?php echo form_submit(['type' =>'submit','class'=>'btn btn-info', 'value' =>'Submit']); ?>
  <?php echo form_submit(['type'=> 'reset','class'=>'btn btn btn-success','value'=>'Reset']); ?>
  
  <!--<button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->


</div><!--c end-->
