<?php
$user = getUserToken(1);
var_dump($user);
?>
<?php require_once "mvc/views/blocks/onTop.php" ?>
<div  class="row" style="margin: 70px auto 0;width:50%">
	<div class="col-md-12 table-responsive">
		<h3> Account Management</h3>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h5 style="color: red;"></h5>
			</div>
			<div class="panel-body">
				<form method="post" action="http://localhost/bkstore/UserAdmin/updateUser/">
					<div class="form-group">
					  <label for="usr">Full name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=($user != null) ? $user["fullname"] : ""?>">
					  <input type="text" name="id" value="<?=$user["id"]?>" hidden="true">
					  <input type="text" name="updateInfoUser" value="1" hidden="true">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=($user != null) ? $user["email"] : ""?>">
					</div>
					<div class="form-group">
					  <label for="phone_number">Phone number:</label>
					  <input required="true" type="tel" class="form-control" id="phone_number" name="phone_number" value="<?=($user != null) ?$user["phone_number"]: ""?>">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" value="<?=($user != null) ?$user["address"]: ""?>">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" name="password" minlength="6">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
