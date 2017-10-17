<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Classes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('class/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Class</th>
						<th>Name</th>
						<th>Is Parent</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($classes as $c){ ?>
                    <tr>
						<td><?php echo $c['id_class']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['is_parent']; ?></td>
						<td>
                            <a href="<?php echo site_url('class/edit/'.$c['id_class']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('class/remove/'.$c['id_class']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
