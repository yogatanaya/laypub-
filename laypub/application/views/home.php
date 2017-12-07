<?php include('layouts/header.php'); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <hr>
          <legend>Form Pengaduan
            <!--form-->
            <form method="post" action="<?php echo base_url().'home/insert';?>" enctype="multipath/form-data">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>NIK(Nomor Induk KTP)</label>
                  <input type="text" name="nik" class="form-control" placeholder="NIK">
                  <!--NIK-->
                  <hr>
                  <label>Nama Pengadu</label>
                  <input type="text" name="nama_pengadu" class="form-control" placeholder="Nama Anda">
                  <hr>


                   <label>Jenis Layanan</label>
                  <select class="form-control" name="layanan">
                    <?php foreach ($layanan as $data) {?>
                      <option value="<?php echo $data->id_layanan; ?>"><?php echo $data->nama_layanan;?></option>    
                    <?php } ?>
                  </select>

                  <!--Nama Pengadu-->
                  <label>Deskripsi Aduan</label>
                  <textarea class="form-control" name="deskripsi" rows="10" placeholder="deksripsi"></textarea>
                  <hr>

                 
                  
                </div>
                <input type="submit" name="submit" class="btn btn-primary" id="sendMessageButton">
            </div>
            </form>
            
          </legend>
          <hr>
         
        </div>
      </div>
    </div>

    <hr>

<?php include('layouts/footer.php'); ?>
