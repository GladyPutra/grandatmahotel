<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	PROFIL
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
                            <td width="200px">NAMA LENGKAP</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->NAMA); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">NO. IDENTITAS</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->NO_IDENTITAS); ?> <?php endif; ?></td>
                        </tr>   
                        <tr>
                            <td width="200px">JENIS KELAMIN</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->JENIS_KELAMIN); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">INSTITUSI</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->NAMA_INSTITUSI); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">NO. TELP</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->NO_TELEPON); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">EMAIL</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->EMAIL); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">ALAMAT</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->ALAMAT); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">TGL PENDAFTARAN</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->TGL_BUAT); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">EMAIL</td>
                            <td><?php if($profil != null): ?> <?php echo e($profil->EMAIL); ?> <?php endif; ?></td>
                        </tr>
                        <tr>
                            <td width="200px">USERNAME</td>
                            <td><?php if($profil != null): ?> <?php echo e(Session::get('username')); ?> <?php endif; ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?php echo e(route('customer.ubah', $profil->ID_DATA_DIRI)); ?>" class="btn btn-default"><i class="fa fa-edit"></i> Ubah</a>
                </div>
            </div>
        </div>    
    <!--End Advanced Tables -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterCustomer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>