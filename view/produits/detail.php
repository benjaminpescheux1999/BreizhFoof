
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('<?= IMAGE ?>bretagne.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>      </h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
<script type="text/javascript">
  
  function fonctionpanier(prod) {
    var url = '<?= WEBROOT ?>panier/mettreaupanier/' + prod;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('=> ' + xhr.responseText);
        }
        else {
            console.log('=> !' + xhr.status);
        }
    };
    xhr.send();
    console.log(url);
  }
</script>



    <section class="section element-animate">
        
          <?php foreach($variable['produit'] as $ligne) {   ?>
             <div class="row">
          <div class="container">
              <div class="col-md-12">
                <div class="blog d-block d-lg-flex">
                  <div class="bg-image" style="background-image: url(<?= IMAGE . $ligne->img_produit  ?>);"></div>
                  <div class="text">
                    <h3><?= $ligne->lib_produit ?></h3>  
                    <p><span class="badge badge-warning" style="font-size:12px"><?= $px=($ligne->prix_produit!=null)?$ligne->prix_produit:0 ?> &euro; </span></p>             
                    <p><a onclick="fonctionpanier(<?= $ligne->id_produit ?>)" class="btn btn-outline-danger">Ajouter au panier</a></p>
                    
                  </div>
              </div>
             </div>
             <br>
            <?php } ?>
        

    </section>