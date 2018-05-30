<div class="container">
	<div class="card" style="width:18rem;">
		<img class="card-img-top" src="/img/profilepic.png" />
		<p id="profile-name" class="profile-name-card"></p>

		<div class="col-auto">
			<div class="input-group mb-3">
				<?php if (isset($info)): ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php echo $info; ?>
						<button type="button" class="btn btn-lg close" data-dismiss="alert" aria-label="Close" placeholder="error">
		    					<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="col-auto">
			<div class="input-group mb-3">
    			<?php if (isset($error)): ?>
    				<div class="alert alert-warning alert-dismissible fade show" role="alert">
    					<?php echo $error; ?>
    					<button type="button" class="btn btn-lg close" data-dismiss="alert" aria-label="Close" placeholder="error">
	    					<span aria-hidden="true">&times;</span>
						</button>
    				</div>
					<?php endif; ?>
			</div>
  	</div>

		<form method="post" action="/user/actionRegister">
			<input style="margin: 5px;" class="form-control" type="text" placeholder="Login"
				pattern=".{3,}" title="The login must be at least 3 characters long" maxlength=20
				name="login" value="<?php if (isset($user)): $user->echo('login'); endif; ?>" required />

			<input style="margin: 5px;" class="form-control" type="password" placeholder="Password"
				pattern=".{4,}" title="The password must be at least 4 characters long" maxlength=30
				name="password" value="<?php if (isset($user)): $user->echo('password'); endif; ?>" required />

			<input style="margin: 5px;" class="form-control" type="password" placeholder="Password (again)"
				pattern=".{4,}" title="The password must be at least 4 characters long" maxlength=30
				value="<?php if (isset($user)): $user->echo('passwordRetype'); endif; ?>" name="passwordRetype" required />

			<input style="margin: 5px;" class="form-control" type="email" placeholder="Email" name="email" maxlengt=320
				value="<?php if (isset($user)): $user->echo('email'); endif; ?>" required />

			<div class="text-center"><button style="margin: 5px;" class="btn btn-lg btn-info" type="submit" value="Register!">Register</button></div>
		</form>
	</div>
</div>
