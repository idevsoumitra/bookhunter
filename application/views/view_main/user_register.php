<div class="card bg-light mb-3" style="margin: 0 auto; margin-top: 100px; width: 90%; ">
	<article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create an Account</h4>
        <hr>
		<?php 
			$this->load->library('form_validation');
			echo validation_errors('<div class="alert alert-danger">', '</div>') 
		;?>
		<form class="form-horizontal" action="<?php base_url()?>user-register" method="post" enctype="multipart/form-data">
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user-plus"></i> </span>
				</div>
				<input name="user_fullname" class="form-control" placeholder="Full Name" type="text" required>
			</div> 
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
				</div>
				<input name="user_username" class="form-control" placeholder="User Name" type="text"required>
			</div> 

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				</div>
				<input name="user_email" class="form-control" placeholder="Email address" type="email" required>
			</div> 

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
				</div>
				<select name="user_phone_code" class="custom-select" style="max-width: 80px;">
					<option value=""selected>CC</option>
					<option value="+88 ">+88 </option>
					<option value="+91 ">+91</option>
					<option value="+99 ">+99</option>
					<option value="+09 ">+09</option>
				</select>
				<input name="user_phone" class="form-control" placeholder="Phone number" type="text">
			</div> 
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-building"></i> </span>
				</div>
				<input type="text" name="user_city" value="" placeholder="Enter your city name" class="form-control">
			</div> 

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input name="user_password" value="<?php echo set_value('user_password'); ?>" class="form-control" placeholder="password" type="password"required>
			</div> 

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input name="user_conf_password" value="<?php echo set_value('user_conf_password'); ?>" class="form-control" placeholder="Repeat password" type="password"required>
			</div> 
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-image"></i> </span>
				</div>
				<input name="user_dp" class="form-control" placeholder="Profile" type="File" style="height: 45px;"> 
			</div> 

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block"> Sign up  </button>
			</div>                                                                
		</form>
	</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->