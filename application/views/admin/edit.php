
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <hr>
          <legend>Edit Status

            <?php foreach($aduan as $ad){ ?>
            <form action="<?php echo base_url(). 'admin/update'; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_aduan" value="<?php echo $ad->id_aduan; ?>">
              <select name="id_status" id="id_status" class="form-control">  
                    <?php foreach ($satuan as $s) { ?>
                      <option value="<?php echo $s['id_status'];?>"><?php echo $s['status'];?></option>
                    <?php } ?>        
                   
              </select>
              
              <div class="form-group floating-label-form-group controls">
                  <!--Nama Pengadu-->
                  <label>Deskripsi Aduan</label>
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="deksripsi"></textarea>
              </div>


              
              <input type="submit" name="submit" class="btn btn-primary">
            </form> 
            <?php } ?>

          </legend>
          <hr>

         
        </div>
      </div>
    </div>

    <hr>


