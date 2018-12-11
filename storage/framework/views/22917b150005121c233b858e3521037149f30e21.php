<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    DETIL RESERVASI
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
                    <a href="<?php echo e(route('reservasi.tampil')); ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <a href="<?php echo e(route('reservasi.konfirmasi', $reservasi->ID_BOOKING)); ?>" class="btn btn-success"><i class="fa fa-money"></i> Konfirmasi Pembayaran</a>
                </div>
                <div class="col-sm-12">
                <table class="table table-striped table-bordered" id="dataTables-example">
                <?php 
                    $hargaKamar = $reservasi->reservasi->kamar->tarifkamar['HARGA_KAMAR'] * $reservasi->JUMLAH_KAMAR;
                    $tarifPaket = $reservasi->reservasi->tarif['HARGA_TARIF'];
                    $total = $hargaKamar + $tarifPaket;
                ?>
                    <thead>
                        <tr>
                            <th colspan="2">RESERVASI KAMAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="200px">ID BOOKING</td>
                            <td><?php echo e($reservasi->ID_BOOKING); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">JENIS TAMU</td>
                            <td><?php echo e($reservasi->JENIS_TAMU); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">JUMLAH TAMU</td>
                            <td><?php echo e($reservasi->JUMLAH_TAMU); ?> orang, terdiri &emsp;Anak : <?php echo e($reservasi->JUMLAH_ANAK); ?> orang &emsp; 
                                Dewasa : <?php echo e($reservasi->JUMLAH_DEWASA); ?> orang</td>
                        </tr>
                        <tr>
                            <td width="200px">STATUS BATAL</td>
                            <td><?php echo e($reservasi->STATUS_BATAL); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">JUMLAH KAMAR</td>
                            <td><?php echo e($reservasi->JUMLAH_KAMAR); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">KOTA</td>
                            <td><?php echo e($reservasi->reservasi->kota['NAMA_KOTA']); ?></td>
                        </tr>
                        <tr>
                            <td>TANGGAL RESERVASI</td>
                            <td><?php echo e(date("d-M-Y h:m:s", strtotime($reservasi->reservasi['TGL_RESERVASI']))); ?></td>
                        </tr>
                        <tr>
                            <td>TANGGAL PEMAKAIAN</td>
                            <td><?php echo e(date("d-M-Y", strtotime($reservasi->reservasi['TGL_MENGINAP']))); ?> s/d
                                <?php echo e(date("d-M-Y", strtotime($reservasi->reservasi['TGL_SELESAI']))); ?>

                            </td>
                        </tr>
                        <tr>
                            <td width="200px">TARIF PAKET</td>
                            <td>Rp. <?php echo e(number_format($tarifPaket, 2, ',', '.')); ?></td>
                        </tr> 
                        <tr>
                            <td width="200px">STATUS PEMBAYARAN</td>
                            <td><?php echo e($reservasi->reservasi->transaksi['JENIS_STATUS']); ?></td>
                        </tr> 
                    </tbody>
                </table>

                <?php if($paket->count()): ?>
                <table class="table table-striped table-bordered" id="dataTables-example">
                    <thead>
                        <tr>
                            <th colspan="4">PAKET TAMBAHAN</th>
                        </tr>
                        <tr>
                            <th>NAMA ITEM</th>
                            <th>HARGA</th>
                            <th>JUMLAH</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->item['NAMA_ITEM']); ?></td>
                            <td align="right">Rp. <?php echo e(number_format($data->item['HARGA_ITEM'], 2, ',', '.')); ?></td>
                            <td><?php echo e($data->JUMLAH_ITEM); ?></td>
                            <td align="right">Rp. <?php echo e(number_format($data->item['HARGA_ITEM'] * $data->JUMLAH_ITEM, 2, ',', '.')); ?></td>
                        </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <table class="table table-striped table-bordered" id="dataTables-example">
                    <thead>
                        <tr>
                            <th colspan="2">DATA DIRI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="200px">NAMA KAMAR</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['NAMA']); ?></td>
                        </tr>                        
                        <tr>
                            <td width="200px">NO. IDENTITAS</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['NO_IDENTITAS']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">NAMA INSTITUSI</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['NAMA_INSTITUSI']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">NO TELP</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['NO_TELEPON']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">EMAIL</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['EMAIL']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">ALAMAT</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['ALAMAT']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">JENIS KELAMIN</td>
                            <td><?php echo e($reservasi->reservasi->datadiri['JENIS_KELAMIN']); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered" id="dataTables-example">
                    <thead>
                        <tr>
                            <th colspan="2">DETIL KAMAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="200px">NAMA KAMAR</td>
                            <td><?php echo e($reservasi->reservasi->kamar->detilkamar['NAMA_KAMAR']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">ID KAMAR</td>
                            <td><?php echo e($reservasi->reservasi->kamar['ID_KAMAR']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">TEMPAT TIDUR</td>
                            <td><?php echo e($reservasi->reservasi->kamar['TEMPAT_TIDUR']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">SMOKING</td>
                            <td><?php echo e($reservasi->reservasi->kamar['STAUS_SMOKING']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">STATUS BOOKING</td>
                            <td><?php echo e($reservasi->reservasi->kamar['STATUS_BOOKING']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">FASILITAS KAMAR</td>
                            <td><?php echo e($reservasi->reservasi->kamar->detilkamar['FASILITAS']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">SEASON KAMAR</td>
                            <td><?php echo e($reservasi->reservasi->kamar->tarifkamar->season['NAMA_SEASON']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">HARGA KAMAR</td>
                            <td>Rp. <?php echo e(number_format($hargaKamar, 2, ',', '.')); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">TANGGAL KAMAR</td>
                            <td>Tgl. Mulai: <?php echo e($reservasi->reservasi->kamar->tarifkamar['TGL_MULAI']); ?> 
                                &emsp;Tgl. Selesai: <?php echo e($reservasi->reservasi->kamar->tarifkamar['TGL_SELESAI']); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right" style="font-weight: bold;">TOTAL TRANSAKSI: Rp. <?php echo e(number_format($total, 2, ',', '.')); ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>