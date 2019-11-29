

 <section class="page-section" id="panier">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 text-center">
        <?php if(isset($_SESSION['panier']) && $_SESSION['totalpanier']!=0)
        {?>
        <fieldset>
    		<legend>Notre panier</legend>
        <table id="panier" style="width:90%">
        
        <tr><th>N&ordm;</th><th>Titre</th><th colspan="2">prix</th><th>Supprimer</th></tr>
        	<?php 
        	$totalprix=0.0;
            foreach($variable['produit'] as $ligne)
            {
                $totalprix+=$ligne->prix_produit;
            ?>
        <tr id="lignepanier<?= $ligne->id_produit?>"><td><?= $ligne->id_produit?></td><td><?= $ligne->lib_produit?></td><td class="prix text-right" style="border-left:none"><?= $px=($ligne->prix_produit!=null)?$ligne->prix_produit:0 ?></td><td class="text-left" > &euro;</td>
        	<td>
        		<a href="<?= WEBROOT . "panier/supprimerdupanier/" . $ligne->id_produit ?>">
                    <button type="button" style="margin:10px">
              			[ - ]
            		</button>
                </a>
        	</td>
        </tr>
            <?php 
            }
            ?>
            <tr class="ligne_total"><td class="ligne_total text-right" id="total_prix3"  colspan=2 >Total </td><td id="total_prix1" class="text-right"><?= $totalprix ?></td> <td class="text-left" id="total_prix2" > &euro;</td><td style="border:none"></td></tr>
        </table>
        </fieldset>
        </div>
        
         <div class="col-xs-12 col-md-12 col-lg-12 text-left">
         <?php if(isset($_SESSION['auteur']) && isset($_SESSION['totalpanier'])){
            if($_SESSION['totalpanier'] !=0){         
       		echo "<a href='".WEBROOT."seconnecter/commander'>";
            }
            }else{
             echo "<a href='".WEBROOT."seconnecter' >";
            }            
            ?>
            <button type="button" style="margin:20px" >
          			COMMANDER 
        	</button>
             
        	</a>
       	</div>
        <?php 
        }else{
            echo "Le panier est vide";
        }
        
        
        ?>
        
        
       	
       </div>
    </div>
</section>