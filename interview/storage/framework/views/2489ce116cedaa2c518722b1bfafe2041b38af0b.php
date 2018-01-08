<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('admin.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control"/>
                        <label for="tel">Tel:</label>
                        <input type="text" id="tel" name="tel" class="form-control"/>
                        <label for="mat">Material:</label>
                        <input type="text" id="mat" name="mat" class="form-control"/><br>
                        <input type="submit" name="submit" value="Add Teacher" class="btn btn-success"/>
                    </form>

                </div>
                <br><hr>
                <table class=" table table-responsive table-bordered">
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Material</th>
                    <th>Update Info</th>
                    <th>Delete Teacher</th>
                    <?php for($i = 0; $i<count($data);$i++): ?>
                        <tr>
                            <td><?php echo e($data[$i]->name); ?></td>
                            <td><?php echo e($data[$i]->tel); ?></td>
                            <td><?php echo e($data[$i]->material); ?></td>
                            <td><form method="get" action="<?php echo e(route('admin.edit',['id'=>$data[$i]->id])); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <button class="btn btn-primary" name="updte" type="submit">Update</button>
                                </form>
                            </td>
                            <td><form method="post" action="<?php echo e(route('admin.destroy',['id'=>$data[$i]->id])); ?>">
                                    <?php echo e(method_field('Delete')); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <button class="btn btn-danger" name="delete" type="submit">Delete</button>
                                </form></td>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>