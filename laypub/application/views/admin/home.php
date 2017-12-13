<?php include('header.php');?>
	<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
      		<div class="table-responsive">

            
            <a href="<?php echo base_url();?>Laporan" method="post" enctype="multipart/form-data" class="btn btn-primary">Export</a>
        



      			<table class="table" class="dataTable">
      				<thead>
      					<th>No.</th>
      					<th>NIK</th>
      					<th>Nama</th>
      					<th>Layanan</th>
      					<th>Status</th>
               			 <th>Deskripsi</th>
                     <th>Tanggal</th>
               			 <th>Opsi</th>
      				</thead>
      				<tbody>
                <?php
                  $no=1;
                  foreach($aduan as $list) { ?>
      					<tr>
      						
      						<td><?php echo $no++; ?></td>
      						<td><?php echo $list['nik']; ?></td>
      						<td><?php echo $list['nama_pengadu']; ?></td>
      						<td><?php echo $list['nama_layanan']; ?></td>
      						<td><?php echo $list['status']; ?></td>
                  <td><?php echo $list['deskripsi']; ?></td>
                  <td><?php echo $list['date']; ?></td>
                  			<td>
                        <ul>
                  				<li>
                            <a href ="<?php echo site_url('admin/delete/'.$list['id_aduan']);?>" onclick=" return confirm('Are You Sure Want To Delete?');">delete</a>
                          </li>
                          <li>
                            <a href ="<?php echo site_url('admin/edit/'.$list['id_aduan']);?>">Edit</a>
                          </li>
                        </ul>
                  			</td>
      						<?php } ?>
      					</tr>
      				</tbody>
      			</table>
      		</div>
      	</div>
    </div>
</div>
<?php include('footer.php');?>