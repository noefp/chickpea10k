<div class="text-center margin-20">
  <br>
  <h1>Welcome to the Chickpea<span style="color:#ffc107">10K</span> Database</h1>
</div>

<div class="margin-20 tool-container" style="margin:auto; max-width:1200px;">

  <div class="alert alert-primary" role="alert" style="display:block; margin:0px 0px 30px 0px;">
    <div class="card-body" style="padding:0px; text-align:center; font-size: 16px;">
      <strong>Chickpea<span style="color:#ffc107">10K</span></strong> is a public repository global map of genome variation based on sequencing of <strong>10,225</strong> <i>Cicer arietinum</i> genomes.
    </div>
  </div>

  <div class="row">
    
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 welcome-card">
        <a href="/easy_gdb/tools/vcf/vcf_extract_input.php" style="text-decoration: none;">
          <div class="card-header-full-img">
            <img src="<?php echo $images_path.'/SNP.png'?>" alt="Genotypes">
          </div>
          <div class="card-body" style="padding: 15px; text-align:center;">
            <h5 style="font-weight: 600; color: #dfab27; margin-bottom: 5px;">Genotype Calls</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">Query for SNPs</p>
          </div>
        </a>
      </div>
    </div>
    

    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 welcome-card">
        <a href="/easy_gdb/tools/passport/02_pass_file_to_datatable.php?dir_name=chickpea" style="text-decoration: none;">
          <div class="card-header-full-img">
            <img src="<?php echo $images_path.'/passport.png'?>" alt="Passport">
          </div>
          <div class="card-body" style="padding: 15px; text-align:center;">
            <h5 style="font-weight: 600; color: #dfab27; margin-bottom: 5px;">Passport Data</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">Accession metadata</p>
          </div>
        </a>
      </div>
    </div>
    
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 welcome-card">
        <a href="/jbrowse/" target="_blank" style="text-decoration: none;">
          <div class="card-header-full-img">
            <img src="<?php echo $images_path.'/jbrowse.png'?>" alt="Genome Browser">
          </div>
          <div class="card-body" style="padding: 15px; text-align:center;">
            <h5 style="font-weight: 600; color: #dfab27; margin-bottom: 5px;">Genome Browser</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">Classic JBrowse view</p>
          </div>
        </a>
      </div>
    </div>
    
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card h-100 welcome-card">
        <a href="/easy_gdb/custom_view.php?file_name=synteny_viewer.php" style="text-decoration: none;">
          <div class="card-header-full-img">
            <img src="<?php echo $images_path.'/jbrowse2_pangenome.png'?>" alt="Synteny Viewer">
          </div>
          <div class="card-body" style="padding: 15px; text-align:center;">
            <h5 style="font-weight: 600; color: #dfab27; margin-bottom: 5px;">Synteny Viewer</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">JBrowse 2 comparative tools</p>
          </div>
        </a>
      </div>
    </div>
    
  </div> <br>
<?php
//include_once realpath("$custom_text_path/db_citation.php");
?>

</div>

<style>
  .welcome-card {
    border: 1px solid #e3e6f0 !important;
    box-shadow: 0 4px 6px rgba(0,0,0,0.04) !important;
    transition: transform 0.2s, box-shadow 0.2s !important;
    overflow: hidden !important;
    background: #ffffff !important;
  }
  .welcome-card:hover {
    transform: translateY(-4px) !important;
    box-shadow: 0 8px 15px rgba(0,0,0,0.08) !important;
    border-color: #b7b9cc !important;
  }
  .card-header-full-img {
    width: 100%;
    height: 150px; /* Altura fija para la sección de la imagen */
    overflow: hidden;
    border-bottom: 1px solid #e3e6f0;
    background: #f8f9fc;
  }
  .card-header-full-img img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Esto hace que la imagen rellene todo el espacio sin deformarse */
    object-position: center;
  }
</style>
