<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	TAMBAH RESERVASI
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
                            <thead>
                                <tr>
                                    <th colspan="2">DATA DIRI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action = "<?php echo e(route('reservasi.simpan')); ?>" method="post" role="form">
                                <?php echo e(csrf_field()); ?>

                                    <tr>
                                        <td width="200px">NAMA LENGKAP</td>
                                        <td><?php echo e($customer->NAMA); ?><input type="hidden" name="id_data_diri" value="<?php echo e($customer->ID_DATA_DIRI); ?>">
                                        </td>
                                    </tr>
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
                                    <tr>
                                        <td width="200px">TGL MULAI</td>
                                        <td><input type="date" class="form-control" name="tgl_mulai" value="<?php echo e(old('tgl_mulai')); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">TGL SELESAI</td>
                                        <td><input type="date" class="form-control" name="tgl_selesai" value="<?php echo e(old('tgl_selesai')); ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">KATEGORI</td>
                                        <td>
                                            <input type="radio" name="kategori" id="optionsRadiosInline1" value="Personal" checked> Personal &emsp;
                                        </td>
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
                                            <a href="<?php echo e(route('customer.datareservasi')); ?>" class="btn btn-danger"> Batal</a>
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
<?php echo $__env->make('layouts.masterCustomer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>