    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <hr>
          <legend>Form Pengaduan

            <?php echo validation_errors(); ?>

            <?php echo form_open('home/insert'); ?>
            <!--form-->
            <form method="post" action="<?php echo base_url().'home/insert';?>" enctype="multipart/form-data">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>NIK(Nomor Induk KTP)</label>
                  <input type="text" name="nik" class="form-control" placeholder="NIK">
                  <!--NIK-->
                  <hr>
                  <label>Nama Pengadu</label>
                  <input type="text" name="nama_pengadu" class="form-control" placeholder="Nama Anda">
                  <hr>
                </div>

                <div class="form-group floating-label-form-group controls">
                  <label>Jenis Layanan</label>
                  <select class="form-control" name="id_layanan">
                  <option value="">Pilih jenis layanan</option>
                  <?php foreach($layanan as $layanan){ ?>
                  <option value="<?php echo $layanan['id_layanan']; ?>"><?php echo $layanan['nama_layanan']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>

                <div class="form-group floating-label-form-group controls">
                  <!--Nama Pengadu-->
                  <label>Deskripsi Aduan</label>
                  <textarea class="form-control" name="deskripsi" rows="5" placeholder="deksripsi"></textarea>
                </div>

                  <hr>

                <div class="form-group floating-label-form-group controls">
                  <!--status>
                  <label>Status</label>
                   <select class="form-control" name="id_status">
                  <option value="">Status</option>
                  <?php foreach($status as $status){ ?>
                  <option value="<?php echo $status['id_status']; ?>">
                  <?php echo $status['status']; ?>
                  </option>
                  <?php } ?>
                  </select--> 
                </div>
                  
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

