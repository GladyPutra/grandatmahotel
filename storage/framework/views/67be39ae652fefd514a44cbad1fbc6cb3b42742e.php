<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	DATA RESERVASI
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
                    <a href="<?php echo e(route('customer.tambahreservasi')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo e(route('customer.historireservasi')); ?>" class="btn btn-warning"><i class="fa fa-folder"></i> Riwayat</a>
                </div>

                <div class="table-responsive">
                <?php if($reservasi->count()): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID BOOKING</th>
                            <th>NAMA KAMAR</th>
                            <th>KOTA</th>
                            <th>TGL RESERVASI</th>
                            <th>TGL PEMESANAN</th>
                            <th>KONTROL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $reservasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td class="center"><?php echo e($data->ID_BOOKING); ?></td>
                            <td><?php echo e($data->reservasi->kamar->detilkamar['NAMA_KAMAR']); ?> (<?php echo e($data->reservasi->kamar['ID_KAMAR']); ?>)</td>
                            <td class="center"><?php echo e($data->reservasi->kota['NAMA_KOTA']); ?></td>
                            <td><?php echo e(date("d-M-Y h:m:s", strtotime($data->reservasi['TGL_RESERVASI']))); ?></td>
                            <td><?php echo e(date("d-M-Y", strtotime($data->reservasi['TGL_MENGINAP']))); ?></td>
                            <td>
                                <form method="POST" action="<?php echo e(route('customer.batalreservasi', $data->ID_DETIL_RESERVASI)); ?>" accept-charset="UTF-8">
                                  <input name="_method" type="hidden" value="DELETE">
                                  <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                                    <a href="<?php echo e(route('customer.detilreservasi', $data->ID_DETIL_RESERVASI)); ?>" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i> Detil</a>
                                    <input type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Ingin Membatalkan Reservasi?');" value="Batal">
                                </form>
                            </td>
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
<?php echo $__env->make('layouts.masterCustomer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>