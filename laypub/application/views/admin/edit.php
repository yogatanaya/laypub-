<?php include('header.php'); ?>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <hr>
          <legend>Edit Status

            
            <form action="<?php echo base_url('admin/update'); ?>" method="post">
                <select name="id_status" class="form-control" id="id_status">
                
                <?php foreach($status as $s){
                    echo '<option value="'.$s['id_status'].'">'.$s['status']."</option>";
                } ?>
                </select>

              
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
          </form> 
            
          </legend>
          <hr>
         
        </div>
      </div>
    </div>

    <hr>
<?php include('footer.php'); ?>

