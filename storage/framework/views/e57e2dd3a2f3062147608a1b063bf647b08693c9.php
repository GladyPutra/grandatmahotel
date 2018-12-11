<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	DATA RESERVASI
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
                            <form action = "<?php echo e(route('reservasinonlogin.simpan')); ?>" method="post" role="form">
                                <?php echo e(csrf_field()); ?>

                                <thead>
                                    <tr>
                                        <th colspan="2">DATA DIRI</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                                <thead>
                                    <tr>
                                        <th colspan="2">DATA RESERVASI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="200px">KOTA</td>
                                        <td><select class="form-control" name="kota">
                                                <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->ID_KOTA); ?>"><?php echo e($data->NAMA_KOTA); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">KAMAR</td>
                                        <td><select class="form-control" name="kamar">
                                                <?php $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->ID_KAMAR); ?>">
                                                        <?php 
                                                        echo $data->ID_KAMAR .' ('. $data->detilkamar['NAMA_KAMAR'] . ')' .
                                                            ' ; Tempat Tidur: '. $data->TEMPAT_TIDUR .
                                                            ' ; Smoking: '. $data->STAUS_SMOKING
                                                        ; ?>
                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">TARIF</td>
                                        <td><select class="form-control" name="tarif">
                                                <?php $__currentLoopData = $tarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($data->ID_TARIF); ?>">Rp. <?php echo e(number_format($data->HARGA_TARIF, 2, ',', '.')); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                    </tr>
                                        <td width="200px">TGL MULAI</td>
                                        <td><input type="date" class="form-control" name="tgl_mulai" value="<?php echo e(old('tgl_mulai')); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">TGL SELESAI</td>
                                        <td><input type="date" class="form-control" name="tgl_selesai" value="<?php echo e(old('tgl_selesai')); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">JUMLAH TAMU</td>
                                        <td>DEWASA : <input type="number" name="tamu_dewasa" value="0" required>
                                            ANAK : <input type="number" name="tamu_anak" value="0" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">JUMLAH KAMAR</td>
                                        <td><input type="number" name="jumlah_kamar" value="0" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                                            <a href="<?php echo e(route('home')); ?>" class="btn btn-danger"> Batal</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </form>
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
<?php echo $__env->make('layouts.masterCustomerCopy', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>