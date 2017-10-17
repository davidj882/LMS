<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Courses Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('course/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Course</th>
						<th>Name</th>
						<th>Code</th>
						<th>Directory</th>
						<th>Date Created</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($courses as $c){ ?>
                    <tr>
						<td><?php echo $c['id_course']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['code']; ?></td>
						<td><?php echo $c['directory']; ?></td>
						<td><?php echo $c['date_created']; ?></td>
						<td>
                            <a href="<?php echo site_url('course/edit/'.$c['id_course']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('course/remove/'.$c['id_course']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
