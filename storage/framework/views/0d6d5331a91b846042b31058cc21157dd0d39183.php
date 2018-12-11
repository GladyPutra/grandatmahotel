<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	BERANDA
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <!--  -->
            </div>
            <div class="panel-body">
                <div class="col-sm-4 col-xs-8 form-group">
                    <!--  -->
                </div>
                <div class="col-sm-12">
                <table class="table table-striped table-bordered" id="dataTables-example">
                    <thead>
                        <tr>
                            <th colspan="2">DATA DIRI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="200px">USERNAME</td>
                            <td><?php if($user != null): ?> <?php echo e($user->USERNAME); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">ROLE</td>
                            <td><?php if($user != null): ?> <?php echo e($user->role['NAMA_ROLE']); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">KOTA</td>
                            <td><?php if($user != null): ?> <?php echo e($user->kota['NAMA_KOTA']); ?> <?php endif; ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>    
    <!--End Advanced Tables -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>