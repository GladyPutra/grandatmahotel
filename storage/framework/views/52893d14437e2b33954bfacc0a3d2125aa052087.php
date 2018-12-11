<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	PENGELOLAAN AKUN PEGAWAI
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        <!--  -->
        </div>
        <div class="col-lg-6">
            
        </div>

        <div class="panel-body">
                <div class="col-sm-4 col-xs-8 form-group">
                    <!-- <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
                    <a href="<?php echo e(route('pegawai.tampil')); ?>" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh</a>
                    
                </div>
                <?php echo Form::open(['method'=>'GET','url'=>'/pegawai/cari']); ?>

                <div class="col-sm-4 col-xs-8 form-group pull-right input-group">
                    <input type="text" name="katakunci" class="form-control" placeholder="Pencarian...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <?php echo Form::close(); ?>


                <div class="table-responsive">
                <?php if($user->count()): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA PEGAWAI</th>
                            <th>ROLE</th>
                            <th>KOTA</th>
                            <th>KONTROL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td class="center" width="50px"><?php echo e($data->ID_USER); ?></td>
                            <td><?php echo e($data->USERNAME); ?></td>
                            <td><?php echo e($data->role['NAMA_ROLE']); ?></td>
                            <td><?php echo e($data->kota['NAMA_KOTA']); ?></td>
                            <td width="250px">
                                <form method="POST" action="<?php echo e(route('pegawai.hapus', $data->ID_USER)); ?>" accept-charset="UTF-8">
                                  <input name="_method" type="hidden" value="DELETE">
                                  <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                                    <a href="<?php echo e(route('pegawai.ubah', $data->ID_USER)); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="<?php echo e(route('pegawai.resetpassword', $data->ID_USER)); ?>" class="btn btn-primary btn-xs"  onclick="return confirm('Apakah Anda Ingin Menghapus Reset Password?');" ><i class="fa fa-key"></i> Reset Password</a>
                                    <input type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Ingin Menghapus Akun Pengguna?');" value="Hapus">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <?php echo $user->links(); ?>

                <?php else: ?>
                <div class="alert">
                    <i class="fa fa-exclamation-triangle"></i> Data Tidak Tersedia...
                </div>
                <?php endif; ?>
            </div>
        <div class="panel-footer">
        <table>
            <form action="<?php echo e(route('pegawai.simpan')); ?>" method="post" role="form">
            <?php echo e(csrf_field()); ?>

                <td><input type="text"class="form-control" name="username" placeholder="Masukkan Username Baru" 
                    value="<?php if($dataUser!=null) echo $dataUser->USERNAME; else ""; ?>" required>
                    <input type="hidden" name="idUser" value="<?php if($dataUser!=null) echo $dataUser->ID_USER; else ""; ?>"></td>
                <td>
                    <select class="form-control" name="role">
                        <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->ID_ROLE); ?>" <?php if($dataUser!=null&&$dataUser->ID_ROLE == $data->ID_ROLE) echo "Selected";?>><?php echo e($data->NAMA_ROLE); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td>
                    <select class="form-control" name="kota">
                        <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->ID_KOTA); ?>" <?php if($dataUser!=null&&$dataUser->ID_KOTA == $data->ID_KOTA) echo "Selected";?>><?php echo e($data->NAMA_KOTA); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td>&emsp;<button type="submit" class="btn btn-primary">Simpan</button></td>
                <td>&emsp;<a href="<?php echo e(route('pegawai.tampil')); ?>" class="btn btn-danger">Batal</a></td>
            </form>
        </table>            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>