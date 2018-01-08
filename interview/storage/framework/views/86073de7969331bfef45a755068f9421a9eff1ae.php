<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                 <div class="panel-heading">Put Information</div>
                   <div class="panel-body">
                        <form action="<?php echo e(route('logName')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="put your name">
                            <label for="pass">Password:</label>
                            <input type="password" id="pass" class="form-control" name="password" placeholder="put your password">
                            <br>
                            <input type="submit" value="Log By Name" class="btn btn-primary">
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>