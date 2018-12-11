<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	UBAH PROFIL
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
                                        <?php echo Form::model($profil, ['route'=>['customer.simpanperubahan', $profil->ID_DATA_DIRI], 'method'=> 'PATCH', 'role'=>'form']); ?>

                                        <tr>
                                            <td width="200px">NAMA LENGKAP</td>
                                            <td width="300px"><input class="form-control" name="nama" value="<?php echo e($profil->NAMA); ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">NO. IDENTITAS</td>
                                            <td width="300px"><input class="form-control" name="no_identitas" value="<?php echo e($profil->NO_IDENTITAS); ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">JENIS KELAMIN</td>
                                            <td width="300px">
                                                <input type="radio" name="kelamin" id="optionsRadiosInline1" value="Laki-laki" <?php if($profil->JENIS_KELAMIN == "Laki-laki") echo "checked"; ?>> Laki-laki &emsp;
                                                <input type="radio" name="kelamin" id="optionsRadiosInline2" value="Perempuan" <?php if($profil->JENIS_KELAMIN == "Perempuan") echo "checked"; ?>> Perempuan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="200px">NAMA INSTITUSI</td>
                                            <td width="300px"><input class="form-control" name="institusi" value="<?php echo e($profil->NAMA_INSTITUSI); ?>"></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">NO. TELP</td>
                                            <td width="300px"><input class="form-control" name="telp" value="<?php echo e($profil->NO_TELEPON); ?>"></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">EMAIL</td>
                                            <td width="300px"><input class="form-control" name="email" value="<?php echo e($profil->EMAIL); ?>"></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">ALAMAT</td>
                                            <td width="300px"><textarea class="form-control" name="alamat" required><?php echo e($profil->ALAMAT); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">USERNAME</td>
                                            <td width="300px"><input class="form-control" name="username" value="<?php echo e(Session::get('username')); ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                                                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-danger"><i class="fa fa-arrow-left fa-fw"></i> Batal</a>
                                            </td>
                                        </tr>
                                        <?php echo Form::close(); ?>

                                    </tbody>
                                </table>
                                </div>

                                <div class="col-lg-6">
                                <table class="table table-striped table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th colspan="2">GANTI PASSWORD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo Form::model($profil, ['route'=>['customer.gantipassword', $profil->ID_DATA_DIRI], 'method'=> 'PATCH', 'role'=>'form']); ?>

                                        <tr>
                                            <td width="200px">PASSWORD LAMA</td>
                                            <td width="300px"><input type="password" class="form-control" name="passwordlama" required></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">PASSWORD BARU</td>
                                            <td width="300px"><input type="password" class="form-control" name="passwordbaru" required></td>
                                        </tr>
                                        <tr>
                                            <td width="200px">KONFIRMASI</td>
                                            <td width="300px"><input type="password" class="form-control" name="konfirmasi" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-key fa-fw"></i> Ganti Password</button>
                                            </td>
                                        </tr>
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
<?php echo $__env->make('layouts.masterCustomer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>