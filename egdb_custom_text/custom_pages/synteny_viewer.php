<!-- HELP -->
<div class="margin-20">
  <a class="float-right" href="https://jbrowse.org/jb2/docs/user_guide/" target="_blank"><i class='fa fa-info' style='font-size:20px;color:#229dff'></i> Help</a>
</div>
<br>

<div>
  <div class="row">
    <div class="col-12">

      <h1 class="text-center">Synteny Viewer <i class="fas fa-stream" style="color:#555"></i></h1>
      <br>
      
      <div class="margin-20 tool-container" style="margin:auto; max-width:1100px;">

        <div class="alert alert-primary" role="alert" style="display:block;margin:0px">
          <div class="card-body" style="padding:0px;text-align:center">
            Explore, compare, and analyze chromosome-scale synteny across the pan-genomic data available in <strong>Chickpea<span style="color:#ffc107">10K</span></strong>.
            <br>
            Check out the <a href="https://jbrowse.org/jb2/docs/user_guide/" target="_blank">JBrowse2</a> documentation for additional information and options.
          </div>
        </div>

        <div class="row">

          <div class="col-12 col-md-6" style="margin-top: 30px;">
            <div class="card h-100 synteny-card">
              <a href="/jbrowse2/?config=data/config.json" class="jbrowse_link" style="text-decoration: none;">
                <div class="card-header-img">
                  <img src="<?php echo $images_path.'/jbrowse2.png'?>" alt="Custom Builder" style="max-height: 130px; max-width: 300px; border: 1px solid #671E57;">
                </div>
                <div class="card-body" style="padding: 15px; text-align:center;">
                  <h4 style="font-weight: 600; color: #f6c23e; margin-bottom: 5px;">Custom Synteny Builder</h4>
                  <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">
                    Start a blank JBrowse2 session. Choose your own assemblies and dynamically build your custom synteny views.
                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6" style="margin-top: 30px;">
            <div class="card h-100 synteny-card">
              <a href="/jbrowse2/?config=data/config_pangenome.json" class="jbrowse_link" style="text-decoration: none;">
                <div class="card-header-img">
                  <img src="<?php echo $images_path.'/jbrowse2_pangenome.png'?>" alt="Pan-Genome" style="max-height: 130px; max-width: 300px; border: 1px solid #671E57;">
                </div>
                <div class="card-body" style="padding: 15px; text-align:center;">
                  <h4 style="font-weight: 600; color: #f6c23e; margin-bottom: 5px;">Chickpea Pan-Genome Synteny</h4>
                  <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">
                    Launch the complete cascade alignment of the 20 genomes available mapped simultaneously against the Ca_v2.0 reference genome.
                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6" style="margin-top: 30px;">
            <div class="card h-100 synteny-card">
              <a href="/jbrowse2/?config=data/config_linear.json" class="jbrowse_link" style="text-decoration: none;">
                <div class="card-header-img">
                  <img src="<?php echo $images_path.'/jbrowse2_linear.png'?>" alt="Linear Example" style="max-height: 130px; max-width: 300px; border: 1px solid #671E57;">
                </div>
                <div class="card-body" style="padding: 15px; text-align:center;">
                  <h4 style="font-weight: 600; color: #36b9cc; margin-bottom: 5px;">Linear Synteny View (Example)</h5>
                  <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">
                    A simple, intuitive comparison using multi-genome parallel tracks connected by collinear blocks.
                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6" style="margin-top: 30px;">
            <div class="card h-100 synteny-card">
              <a href="/jbrowse2/?config=data/config_dotplot.json" class="jbrowse_link" style="text-decoration: none;">
                <div class="card-header-img">
                  <img src="<?php echo $images_path.'/jbrowse2_dotplot.png'?>" alt="Dotplot Example" style="max-height: 130px; max-width: 300px; border: 1px solid #671E57;">
                </div>
                <div class="card-body" style="padding: 15px; text-align:center;">
                  <h4 style="font-weight: 600; color: #36b9cc; margin-bottom: 5px;">Dotplot View (Example)</h5>
                  <p class="text-muted" style="font-size: 14px; margin-bottom: 0px;">
                    Classic dotplot view to identify large-scale chromosomal inversions and translocations.
                  </p>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<style>
  .synteny-card {
    border: 1px solid #e3e6f0 !important;
    box-shadow: 0 4px 6px rgba(0,0,0,0.04) !important;
    transition: transform 0.2s, box-shadow 0.2s !important;
    overflow: hidden !important;
    background: #ffffff !important;
  }
  .synteny-card:hover {
    transform: translateY(-4px) !important;
    box-shadow: 0 8px 15px rgba(0,0,0,0.08) !important;
    border-color: #b7b9cc !important;
  }
  .card-header-img {
    background: #f8f9fc;
    padding: 20px;
    border-bottom: 1px solid #e3e6f0;
    display: flex;
    justify-content: center;
  }
</style>
