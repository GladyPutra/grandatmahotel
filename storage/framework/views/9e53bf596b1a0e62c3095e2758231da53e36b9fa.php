<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	PENGELOLAAN KAMAR
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
                <?php if(Session::get('role') == 1): ?>
                    <a href="<?php echo e(route('kamar.tambah')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                <?php endif; ?>
                    <a href="<?php echo e(route('kamar.tampil')); ?>" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh</a>
                    
                </div>
                <?php echo Form::open(['method'=>'GET','url'=>'/pengelolaan-kamar/cari']); ?>

                <div class="col-sm-4 col-xs-8 form-group pull-right input-group">
                    <input type="text" name="katakunci" class="form-control" placeholder="Pencarian...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <?php echo Form::close(); ?>


                <div class="table-responsive">
                <?php if($kamar->count()): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID KAMAR</th>
                            <th>NAMA KAMAR</th>
                            <th>TEMPAT TIDUR</th>
                            <th>JUMLAH</th>
                            <th>SMOKING</th>
                            <th>BOOKING</th>
                            <th>HARGA</th>
                            <th>KONTROL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td class="center"><?php echo e($data->ID_KAMAR); ?></td>
                            <td><?php echo e($data->detilkamar['NAMA_KAMAR']); ?></td>
                            <td><?php echo e($data->TEMPAT_TIDUR); ?></td>
                            <td><?php echo e($data->detilkamar['JUMLAH_KAMAR']); ?></td>
                            <td class="center"><?php echo e($data->STAUS_SMOKING); ?></td>
                            <td class="center"><?php echo e($data->STATUS_BOOKING); ?></td>
                            <td>Rp. <?php echo e(number_format($data->tarifkamar['HARGA_KAMAR'], 2, ',', '.')); ?></td>
                            <td>
                                <a href="<?php echo e(route('kamar.detil',$data->ID_KAMAR)); ?>" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i> Detil</a>
                                <?php if(Session::get('role') == 1): ?>
                                    <a href="<?php echo e(route('kamar.ubah',$data->ID_KAMAR)); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <?php echo $kamar->links(); ?>

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