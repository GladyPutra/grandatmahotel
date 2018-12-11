<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	KONFIRMASI PEMBAYARAN
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
                                <form action = "<?php echo e(route('reservasi.simpankonfirmasi')); ?>" method="post" role="form">
                                <?php echo e(csrf_field()); ?>

                                    <tr>
                                        <td width="200px">ID BOOKING</td>
                                        <td><input class="form-control" value="<?php echo e($transaksi->ID_BOOKING); ?>" readonly="">
                                            <input type="hidden" name="id_booking" value="<?php echo e($transaksi->ID_BOOKING); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">JENIS PEMBAYARAN</td>
                                        <td>
                                            <input type="radio" name="pembayaran" id="optionsRadiosInline1" value="Transfer"> Transfer &emsp;
                                            <input type="radio" name="pembayaran" id="optionsRadiosInline2" value="Kredit"> Kredit
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">NO. KARTU KREDIT</td>
                                        <td><input class="form-control" name="rekening" value="<?php echo e(old('rekening')); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">STATUS PEMBAYARAN</td>
                                        <td><input type="checkbox" name="statusbayar" value="LUNAS"> LUNAS</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                                            <a href="<?php echo e(route('reservasi.tampil')); ?>" class="btn btn-danger"> Batal</a>
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