<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	TAMBAH TAMU
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
                        <table class="table table-striped table-bordered" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th colspan="2">DATA DIRI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action = "<?php echo e(route('tamu.simpan')); ?>" method="post" role="form">
                                    <?php echo e(csrf_field()); ?>

                                    <tr>
                                        <td width="200px">NAMA LENGKAP</td>
                                        <td width="300px"><input class="form-control" name="nama" value="<?php echo e(old('nama')); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">NO. IDENTITAS</td>
                                        <td width="300px"><input class="form-control" name="no_identitas" value="<?php echo e(old('no_identitas')); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">JENIS KELAMIN</td>
                                        <td width="300px">
                                            <input type="radio" name="kelamin" id="optionsRadiosInline1" value="Laki-laki" checked> Laki-laki &emsp;
                                            <input type="radio" name="kelamin" id="optionsRadiosInline2" value="Perempuan"> Perempuan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">NAMA INSTITUSI</td>
                                        <td width="300px"><input class="form-control" name="institusi" value="<?php echo e(old('institusi')); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">NO. TELP</td>
                                        <td width="300px"><input class="form-control" name="telp" value="<?php echo e(old('telp')); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">EMAIL</td>
                                        <td width="300px"><input class="form-control" name="email" value="<?php echo e(old('email')); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">ALAMAT</td>
                                        <td width="300px"><textarea class="form-control" name="alamat" required><?php echo e(old('alamat')); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">KATEGORI</td>
                                        <td width="300px">
                                            <input type="radio" name="kategori" id="optionsRadiosInline1" value="Personal" checked> Personal &emsp;
                                            <input type="radio" name="kategori" id="optionsRadiosInline2" value="Grup"> Grup
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                                            <a href="<?php echo e(route('tamu.tampil')); ?>" class="btn btn-danger"> Batal</a>
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