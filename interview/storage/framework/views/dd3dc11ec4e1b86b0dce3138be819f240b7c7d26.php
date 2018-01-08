;
<?php $__env->startSection('content'); ?>;
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
                    <form action="<?php echo e(route('admin.update',['id'=>$oldInfo->id])); ?>" method="post">
                        <?php echo e(method_field('PUT')); ?>

                        <?php echo e(csrf_field()); ?>

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo e($oldInfo->name); ?>"/>
                        <label for="tel">Tel:</label>
                        <input type="text" id="tel" name="tel" class="form-control" value="<?php echo e($oldInfo->tel); ?>"/>
                        <label for="mat">Material:</label>
                        <input type="text" id="mat" name="mat" class="form-control" value="<?php echo e($oldInfo->material); ?>"/><br>
                        <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>