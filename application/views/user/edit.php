<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="profile_id" class="control-label">Profile</label>
						<div class="form-group">
							<select name="profile_id" class="form-control">
								<option value="">select profile</option>
								<?php 
								foreach($all_profiles as $profile)
								{
									$selected = ($profile['id_profile'] == $user['profile_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$profile['id_profile'].'" '.$selected.'>'.$profile['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('profile_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastname" class="control-label"><span class="text-danger">*</span>Lastname</label>
						<div class="form-group">
							<input type="text" name="lastname" value="<?php echo ($this->input->post('lastname') ? $this->input->post('lastname') : $user['lastname']); ?>" class="form-control" id="lastname" />
							<span class="text-danger"><?php echo form_error('lastname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="picture" class="control-label">Picture</label>
						<div class="form-group">
							<input type="text" name="picture" value="<?php echo ($this->input->post('picture') ? $this->input->post('picture') : $user['picture']); ?>" class="form-control" id="picture" />
							<span class="text-danger"><?php echo form_error('picture');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>