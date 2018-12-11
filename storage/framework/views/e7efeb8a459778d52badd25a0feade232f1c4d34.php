<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	UBAH TIPE KAMAR
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
                                <?php echo Form::model($kamar, ['route'=>['tipekamar.simpanperubahan', $kamar->ID_DETIL_KAMAR], 'method'=> 'PATCH', 'role'=>'form']); ?>

                                <form>
                                    <tr>
                                        <td width="50px">NAMA KAMAR</td>
                                        <td width="300px"><input class="form-control" name="namakamar" value="<?php echo e($kamar->NAMA_KAMAR); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="50px">Jumlah Kamar</td>
                                        <td width="300px"><input type="number" class="form-control" name="jumlah" value="<?php echo e($kamar->JUMLAH_KAMAR); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px" colspan="2">FASILITAS</td>
                                    </tr>
                                    <tr>
                                        <td width="300px" colspan="2"><textarea class="form-control" name="fasilitas" rows="5"><?php echo e($kamar->FASILITAS); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                                            <a href="<?php echo e(route('tipekamar.tampil')); ?>" class="btn btn-danger"> Batal</a>
                                        </td>
                                    </tr>
                                </form>
                                <?php echo Form::close(); ?>

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