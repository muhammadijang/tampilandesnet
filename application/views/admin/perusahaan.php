<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Data Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/dashboard')?>"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Master Pelanggan</li>
      </ol>
    </section>
    <section class="content">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan</h3>
              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 20px">No</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th style="width: 10%">Aksi</th>
                </tr>
                <!-- <tr>
		</tr> -->
		<?php 
		$no = 1;
		foreach($pelanggan as $p){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->nama_pelanggan ?></td>
			<td><?php echo $p->alamat ?></td>
			<td><?php echo $p->telepon ?></td>
			<td><?php echo $p->email ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$p->id_pelanggan,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$p->id_pelanggan,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>