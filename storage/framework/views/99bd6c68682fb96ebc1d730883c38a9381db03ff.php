<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	PENGELOLAAN TIPE KAMAR
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
                    <a href="<?php echo e(route('tipekamar.tambah')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo e(route('tipekamar.tampil')); ?>" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh</a>
                    
                </div>
                <?php echo Form::open(['method'=>'GET','route'=>'tipekamar.cari']); ?>

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
                            <th>ID</th>
                            <th>NAMA KAMAR</th>
                            <th>JML KAMAR</th>
                            <th>FASILITAS</th>
                            <th>KONTROL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td class="center"><?php echo e($data->ID_DETIL_KAMAR); ?></td>
                            <td><?php echo e($data->NAMA_KAMAR); ?></td>
                            <td><?php echo e($data->JUMLAH_KAMAR); ?></td>
                            <td><?php echo e($data->FASILITAS); ?></td>
                            <td width="130px">
                                <form method="POST" action="<?php echo e(route('tipekamar.hapus', $data->ID_DETIL_KAMAR)); ?>" accept-charset="UTF-8">
                                  <input name="_method" type="hidden" value="DELETE">
                                  <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                                    <a href="<?php echo e(route('tipekamar.ubah', $data->ID_DETIL_KAMAR)); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                                    <input type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Ingin Menghapus Tipe Kamar?');" value="Hapus">
                                </form>
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