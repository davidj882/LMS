<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Add</h3>
            </div>
            <?php echo form_open('course/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="code" class="control-label"><span class="text-danger">*</span>Code</label>
						<div class="form-group">
							<input type="text" name="code" value="<?php echo $this->input->post('code'); ?>" class="form-control" id="code" />
							<span class="text-danger"><?php echo form_error('code');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="directory" class="control-label">Directory</label>
						<div class="form-group">
							<input type="text" name="directory" value="<?php echo $this->input->post('directory'); ?>" class="form-control" id="directory" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo $this->input->post('date_created'); ?>" class="has-datetimepicker form-control" id="date_created" />
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