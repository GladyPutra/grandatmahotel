<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    NOTA RESERVASI
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="<?php echo e(route('customer.print', 'UnduhReservasi')); ?>" class="btn btn-primary"><i class="fa fa-download"></i> Unduh</a>
                <a href="<?php echo e(route('customer.print', 'PrintReservasi')); ?>" class="btn btn-warning"><i class="fa fa-print"></i> Print</a>
            </div>
            <div class="panel-body">
                <div class="col-sm-4 col-xs-8 form-group">
                    <label>Tanggal : <?php echo e(DATE('d-M-Y')); ?></label>
                </div>
                <div class="col-sm-12">
                <table class="table table-striped table-bordered" id="dataTables-example">
                    <thead>
                        <tr>
                            <th colspan="2">TANDA TERIMA PEMESANAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="200px">ID BOOKING</td>
                            <td><?php echo e($reservasi->ID_BOOKING); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">NAMA</td>
                            <td><?php echo e($reservasi->datadiri['NAMA']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">ALAMAT</td>
                            <td><?php echo e($reservasi->datadiri['ALAMAT']); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered" id="dataTables-example">
                    <thead>
                        <tr>
                            <th colspan="2" align="center">DETIL PEMESANAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="200px">Check In</td>
                            <td><?php if(!empty($reservasi->checkinout)) echo date("d-M-Y", strtotime($reservasi->checkinout['TGL_CHECKIN']));?></td>
                        </tr>                        
                        <tr>
                            <td width="200px">Check Out</td>
                            <td><?php if(!empty($reservasi->checkinout)) echo date("d-M-Y", strtotime($reservasi->checkinout['TGL_CHECKOUT']));?></td>
                        </tr>
                        <tr>
                            <td width="200px">Dewasa</td>
                            <td><?php echo e($reservasi->detilreservasi['JUMLAH_DEWASA']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Anak-Anak</td>
                            <td><?php echo e($reservasi->detilreservasi['JUMLAH_ANAK']); ?></td>
                        </tr>
                        <tr>
                            <td width="200px">Tgl Pembayaran</td>
                            <td><?php echo e(date("d-M-Y", strtotime($reservasi->transaksi['TGL_TRANSAKSI']))); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="table-responsive">
                <?php if($reservasi->count()): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th colspan="5"></th>
                        </tr>
                        <tr>
                            <th>JENIS KAMAR</th>
                            <th>BED</th>
                            <th>JUMLAH</th>
                            <th>HARGA</th>
                            <th>SUBTOTAL</th>
                        </tr>
                        </thead>
                        <?php $total = 0; ?>
                        <?php $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <?php 
                                $subtotal = $data->tarifkamar['HARGA_KAMAR'] * $data->reservasi->detilreservasi['JUMLAH_KAMAR'];
                                $start = new DateTime($data->reservasi['TGL_MENGINAP']);
                                $end = new DateTime($data->reservasi['TGL_SELESAI']);
                                $interval = $start->diff($end)->days;
                            ?>
                            <td><?php echo e($data->detilkamar['NAMA_KAMAR']); ?></td>
                            <td><?php echo e($data->TEMPAT_TIDUR); ?></td>
                            <td><?php echo e($data->reservasi->detilreservasi['JUMLAH_KAMAR']); ?> x <?php echo e($interval); ?> hari</td>
                            <td align="right">Rp. <?php echo e(number_format($data->tarifkamar['HARGA_KAMAR'], 2, ',', '.')); ?></td>
                            <td align="right">Rp. <?php echo e(number_format($interval * $subtotal, 2, ',', '.')); ?></td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <thead>
                        <tr>
                            <th colspan="5">EKSTRA ITEM</th>
                        </tr>
                        <tr>
                            <th colspan="2">ITEM</th>
                            <th>JUMLAH</th>
                            <th>HARGA</th>
                            <th>SUBTOTAL</th>
                        </tr>
                        </thead>
                        <?php $__currentLoopData = $ekstraitem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <td colspan="2"><?php echo e($data2->ID_ITEM); ?>. <?php echo e($data2->item['NAMA_ITEM']); ?></td>
                                <td><?php echo e($data2->JUMLAH_ITEM); ?></td>
                                <td align="right">Rp. <?php echo e(number_format($data2->item['HARGA_ITEM'], 2, ',', '.')); ?></td>
                                <td align="right">Rp. <?php echo e(number_format($data2->JUMLAH_ITEM * $data2->item['HARGA_ITEM'], 2, ',', '.')); ?></td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="4" align="right">TOTAL</td>
                            <td align="right" style="font-weight: bold;">Rp. <?php echo e(number_format($data->reservasi->transaksi['JUMLAH_TARIF'], 2, ',', '.')); ?></td>
                        </tr>
                    </table>
                </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterCustomer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>