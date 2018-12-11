<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	PENGELOLAAN TAMU
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        <!--  -->
        </div>
        <div class="col-lg-6">
            
        </div>

        <div class="panel-body">
                <div class="col-sm-4 col-xs-8 form-group">
                    <a href="<?php echo e(route('tamu.baru')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo e(route('tamu.tampil')); ?>" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh</a>
                    
                </div>
                <?php echo Form::open(['method'=>'GET','url'=>'/tamu/cari']); ?>

                <div class="col-sm-4 col-xs-8 form-group pull-right input-group">
                    <input type="text" name="katakunci" class="form-control" placeholder="Pencarian...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <?php echo Form::close(); ?>


                <div class="table-responsive">
                <?php if($tamu->count()): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA TAMU</th>
                            <th>NO IDENTITAS</th>
                            <th>EMAIL</th>
                            <th>INSTITUSI</th>
                            <th>NO. TELP</th>
                            <th>USERNAME</th>
                            <th>KONTROL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $tamu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td class="center" width="50px"><?php echo e($data->ID_DATA_DIRI); ?></td>
                            <td><?php echo e($data->NAMA); ?></td>
                            <td><?php echo e($data->NO_IDENTITAS); ?></td>
                            <td><?php echo e($data->EMAIL); ?></td>
                            <td><?php echo e($data->NAMA_INSTITUSI); ?></td>
                            <td><?php echo e($data->NO_TELEPON); ?></td>
                            <td><?php echo e($data->user['USERNAME']); ?></td>
                            <td width="130px">
                               <a href="<?php echo e(route('tamu.ubah', $data->ID_DATA_DIRI)); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                               <a href="<?php echo e(route('tamu.detil', $data->ID_DATA_DIRI)); ?>" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i> Detil</a>
                            </td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <?php echo $tamu->links(); ?>

                <?php else: ?>
                <div class="alert table-responsive">
                    <i class="fa fa-exclamation-triangle"></i> Data Tidak Tersedia...
                </div>
                <?php endif; ?>
            </div>
        <div class="panel-footer">
    <!--  -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>