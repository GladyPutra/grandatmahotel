<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	TAMBAH KAMAR
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
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered" id="dataTables-example">
                            <tbody>
                                <form action = "<?php echo e(route('kamar.simpankamar')); ?>" method="post" role="form">
                                    <?php echo e(csrf_field()); ?>

                                    <tr>
                                        <td width="50px">NAMA KAMAR</td>
                                        <td width="300px">
                                            <select class="form-control" name="tipekamar">
                                                <?php $__currentLoopData = $tipekamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->ID_DETIL_KAMAR); ?>"><?php echo e($data->NAMA_KAMAR); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50px">TEMPAT TIDUR</td>
                                        <td width="300px">
                                            <input type="radio" name="tempat_tidur" id="optionsRadiosInline1" value="King" checked> King &emsp;
                                            <input type="radio" name="tempat_tidur" id="optionsRadiosInline2" value="Double"> Double
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50px">TARIF KAMAR</td>
                                        <td width="300px">
                                            <select class="form-control" name="tarifseason">
                                                <?php $__currentLoopData = $tarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->ID_TARIF_SEASON); ?>"><?php echo e($data->season['NAMA_SEASON']); ?> - Rp. <?php echo e(number_format($data->HARGA_KAMAR, 2, ',', '.')); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50px">SMOOKING</td>
                                        <td width="300px">
                                            <input type="checkbox" name="smoking" id="optionsRadiosInline1" value="IYA"> Iya
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                                            <a href="<?php echo e(route('kamar.tampil')); ?>" class="btn btn-danger"> Batal</a>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
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