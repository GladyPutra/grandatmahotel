<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	RIWAYAT RESERVASI KAMAR
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
                    <!-- <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
                    <a href="<?php echo e(route('reservasi.history')); ?>" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh</a>
                    <a href="<?php echo e(route('reservasi.tampil')); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                    
                </div>
                <?php echo Form::open(['method'=>'GET','route'=>'reservasi.carihistory']); ?>

                <div class="col-sm-4 col-xs-8 form-group pull-right input-group">
                    <input type="text" name="katakunci" class="form-control" placeholder="Pencarian...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <?php echo Form::close(); ?>


                <div class="table-responsive">
                <?php if($reservasi->count()): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID BOOKING</th>
                            <th>NAMA KAMAR</th>
                            <th>PEMESAN</th>
                            <th>KOTA</th>
                            <th>TGL RESERVASI</th>
                            <th>BATAL</th>
                            <th>KONTROL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $reservasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td class="center"><?php echo e($data->reservasi['ID_BOOKING']); ?></td>
                            <td><?php echo e($data->reservasi->kamar->detilkamar['NAMA_KAMAR']); ?> (<?php echo e($data->reservasi['ID_KAMAR']); ?>)</td>
                            <td><?php echo e($data->reservasi->datadiri['NAMA']); ?> (<?php echo e($data->reservasi->datadiri['NO_IDENTITAS']); ?>)</td>
                            <td class="center"><?php echo e($data->reservasi->kota['NAMA_KOTA']); ?></td>
                            <td><?php echo e($data->reservasi['TGL_RESERVASI']); ?></td>
                            <td><?php echo e($data->STATUS_BATAL); ?></td>
                            <td><a href="<?php echo e(route('reservasi.detil', $data->ID_DETIL_RESERVASI)); ?>" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i> Detil</a></td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <?php echo $reservasi->links(); ?>

                <?php else: ?>
                <div class="alert">
                    <i class="fa fa-exclamation-triangle"></i> Data Tidak Tersedia...
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>