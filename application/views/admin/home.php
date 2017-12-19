	<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
      		<div class="table-responsive">

            
            
            <a href="<?php echo base_url('Laporan');?>" method="post" enctype="multipart/form-data" class="btn btn-primary">Export</a>
            
            

            <br>
            <br>
            


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
                            <a href ="<?php echo site_url('admin/delete/'.$list['id_aduan']);?>" onclick=" return confirm('Are You Sure Want To Delete?');"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                          </li>
                          <li>
                            <a href ="<?php echo site_url('admin/edit/'.$list['id_aduan']);?>"><span class="glyphicon glyphicon-edit">Edit</span></a>
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