<div class="container">

	  <?php
	    $title = "Connexion";

			
	   ?>

	    <?php ob_start(); ?>
				<div class="row">
					<div class="mx-auto">
						<div class="card" style="width:18rem;">
							<div class="container">
								<img class="card-img-top" src="/img/avatar.png"/>
								<div class="col-auto">
									<div class="input-group mb-3">

									</div>
								</div>

								<div class="col-auto">
									<div class="input-group mb-3">
										<?php if (isset($message)): ?>
											<div class="alert alert-warning alert-dismissible fade show" role="alert">
												<?php echo $message; ?>
												<button type="button" class="btn btn-lg close" data-dismiss="alert" aria-label="Close" placeholder="error">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php endif; ?>
									</div>
								</div>

								<form class="form-signin" method="post" action="Connexion.php" >
									<div class = form-group>
										<input class="form-control" type="text" placeholder="Email"
											name="user_email" endif; required />
									</div>
									<div class = form-group>
										<input class="form-control" type="password" placeholder="Mot de passe"
										name="user_password" required />
									</div>
									<button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> CONNEXION </button>
								</form>
							</div>
						</div>
					</div>
				</div>
	    <?php $content = ob_get_clean(); ?>
	  <?php require('template.php'); ?>	</div>
</div>
