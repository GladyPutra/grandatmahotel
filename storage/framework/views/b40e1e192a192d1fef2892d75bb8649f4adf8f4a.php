<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    LAPORAN JUMLAH TAMU PER JENIS KAMAR
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <!--  -->
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                    <?php echo Form::open(['method'=>'GET','route'=>'filterlaporan.LaporanJumlahTamuPerJenisKamar']); ?>

                        <div class="col-sm-4 col-xs-8 form-group pull-left input-group">
                            <input type="number" name="tahun" class="form-control" value="<?php echo e($tahun); ?>" onChange="this.form.submit()">
                        </div>
                    <?php echo Form::close(); ?>

                    
                    <?php if($laporan->count()): ?>
                        <table class="table table-striped table-bordered" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>BULAN</th>
                                <th>JUMLAH TARIF</th>
                                <th>JENIS TAMU</th>
                            </tr>
                            </thead>
                            <?php $no = 0; ?>
                            <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $no++; ?>
                                <tbody>
                                <tr>
                                    <td width="10px"><?php echo e($no); ?></td>
                                    <td><?php echo e(date("F", strtotime($data->TGL_TRANSAKSI))); ?></td>
                                    <td><?php echo e($data->reservasi->kamar->detilkamar['NAMA_KAMAR']); ?></td>
                                    <td align="center"><?php echo e($data->detilreservasi['JUMLAH_TAMU']); ?></td>
                                    
                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    <?php else: ?>
                        <div class="alert">
                            <i class="fa fa-exclamation-triangle"></i> Data Tidak Tersedia...
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>