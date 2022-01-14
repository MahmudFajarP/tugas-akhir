
    <div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left"">
						<div class="content">
							<div class="header">
								
								<p class="lead">Login</p>
								<?php echo $this->session->flashdata('notify');?>
							</div>
							<?php echo form_open('login/signin',array('class' => 'form-auth-small'));?>
							    
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signin-email" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
								</div>
								
								<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login">
								
							<?php echo form_close();?>
						
							
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	