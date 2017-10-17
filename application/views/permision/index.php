<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Permisions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('permision/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Permission</th>
						<th>Name</th>
						<th>Icon</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($permisions as $p){ ?>
                    <tr>
						<td><?php echo $p['id_permission']; ?></td>
						<td><?php echo $p['name']; ?></td>
						<td><?php echo $p['icon']; ?></td>
						<td>
                            <a href="<?php echo site_url('permision/edit/'.$p['id_permission']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('permision/remove/'.$p['id_permission']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
