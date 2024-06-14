      <!-- <h1>Welcome to <?php// echo "$dbTitle";?> </h1> -->
            <div class="text-center">

      <h1>Welcome to the Chickpea 10K Database</h1>
      <!-- <h4 class="p_font18">
        This is a template to write your own welcome page.
        Please, follow the instructions to create your own custom_text folder and include the path in the configuration file.
      </h4> -->
          </div>

      <div class="text-justify">
      <p>
        Chickpea 10K is a public repository global map of genome variation based on sequencing of 10,225 <i>Cicer arietinum</i> genomes.
      </p>
    </div>


  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 ">
        <a href="/easy_gdb/tools/vcf/vcf_extract_input.php" class="d-flex align-items-center justify-content-center flex-column zoom-img">
          <img src="<?php echo $images_path.'/SNP.png'?>" alt="Genotypes" width="220px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle">
        </a>
        <div class="text-center">
          <strong>Genotype calls</strong>
          <br>
          Query for SNPs
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <a href="/easy_gdb/tools/passport/02_pass_file_to_datatable.php?dir_name=Chickpea_10K" class="d-flex align-items-center justify-content-center flex-column zoom-img">
          <img src="<?php echo $images_path.'/passport.png'?>" alt="Genotypes" width="220px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle" >
        </a>
        <div class="text-center">
          <strong>Passport</strong>
          <br>
          Passport data
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <a href="/jbrowse/" target="_blank" class="d-flex align-items-center justify-content-center flex-column zoom-img">
          <img src="<?php echo $images_path.'/jbrowse.png'?>" alt="Genotypes" width="220px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle">
        </a>
        <div class="text-center">
          <strong>Genome Browser</strong>
          <br>
          JBrowse
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <a href="/easy_gdb/custom_view.php?file_name=synteny_viewer.php" class="d-flex align-items-center justify-content-center flex-column zoom-img">
          <img src="<?php echo $images_path.'/synteny.png'?>" alt="Genotypes" width="220px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle">
        </a>
        <div class="text-center">
          <strong>Synteny Viewer</strong>
          <br>
          Jbrowse 2
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- <img class='rounded' src='<?php// echo "$images_path/header_img3.jpg";?>' width="900px" alt='img example'> -->
      