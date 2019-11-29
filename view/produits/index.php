
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('asset/img/bretagne.jpg');">

        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Nos produits</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>


    <section class="section element-animate" >
        
          <?php foreach($variable['categorie'] as $ligne) {   ?>
             <div class="row">
          <div class="container">
              <div class="col-md-12">
                <div class="blog d-block d-lg-flex">
                  <div class="bg-image" style="background-image: url(<?= IMAGE . $ligne->img_categorie  ?>);"></div>
                  <div class="text">
                    <h3><?= $ligne->lib_categorie ?></h3>               
                    <p><a href="<?= WEBROOT.'produits/detail/' .$ligne->id_categorie ?>" class="btn btn-primary btn-sm">Voir les produits</a></p>
                    
                  </div>
              </div>
             </div>
             <br>
            <?php } ?>
        

    </section> <!-- .section -->

    

    