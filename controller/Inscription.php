<?php
include('controller/Panier.php');
class Seconnecter extends Controller
{
    public $panier;
    function index(){
        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
        $this-> set($variable);
        $this->render('index');
    }
    
    function connect($personne=null){
        $login=null;
        $mdp=null;
        
        if(isset($_POST['login']) && isset($_POST['mdp'])){
            $login=$_POST['login'];
            $mdp=$_POST['mdp'];
        }
 
        if($personne!=null && isset($_SESSION['auteurtmp'])){
            $login= $_SESSION['auteurtmp']['login'];
            $mdp=$_SESSION['auteurtmp']['mdp'];
           // unset( $_SESSION['auteurtmp']);
        }
        
        $tables = Model::load("auteur");        
        $tableRes['variable']=
        array("auteur"=>$tables->find(Model::connexion(), 
            array('condition'=>"pseudo_auteur='".$login."' and mdp_auteur='".md5($mdp)."'")));
        Model::deconnexion();
       
        
        if(count($tableRes['variable']['auteur']) ==1 || isset($_SESSION['auteur'])){
            $_SESSION['auteur']=$tableRes['variable']['auteur'];
            //var_dump($_SESSION['auteur']);
            $this->render('connexion');
        }else{
            $this->render('inscription');
        }
        
        //$this-> set($tableRes);
        
    }
    
    function deconnect(){
        unset($_SESSION['auteur']);
        header('Location:'.WEBROOT.'seconnecter'); 
    }
function commander(){
		//L'appel de cette commande se fait seulement si des blagues ont déjà été commander donc pas besoin
		// de faire une verification dessus
        $Produit="(";
		foreach($_SESSION['panier'] as $ligne => $value){
			$Produit.=$ligne.",";
		}
		$Produit.="0)";
		$blague = Model::load("blagues");
		$blagueRes = array("produit"=>$blague->find(Model::connexion(), array('condition'=>"id_blague in $Produit")));
		$variables['cmde']=array('mescommandes'=>$blagueRes['produit']);
		$this->set($variables);
		Model::deconnexion();
		$today = date("Y-m-d");
		$idA = $_SESSION['auteur'][0]->id_auteur;
		$total = 0;
		foreach($blagueRes['produit'] as $ligne => $prop){
			$total = $total + $prop -> px_blague;
		}
		$data= array(
			"id_auteur"=>$idA,
			"dated_commande"=>$today,
			"tot_commande"=>$total
		);
		$tabCom = Model::load("commande");
		$tabCom -> save(Model::connexion(),$data);
		
		$lcommandeRes = array("produit"=>$tabCom->find(Model::connexion(), array('condition'=>"id_auteur = $idA && dated_commande = '$today' && tot_commande = $total")));
		Model::deconnexion();
		
		$tabLCom = Model::load("lcommande");
		foreach($blagueRes['produit'] as $ligne => $prop) {
			$data2 = array(
				"id_commande"=>$lcommandeRes['produit'][0]->id_commande,
				"id_blague"=>$prop -> id_blague
			);
			$tabLCom -> save(Model::connexion(),$data2);
		}
		Model::deconnexion();
		$_SESSION['panier'] = null;
		
        $this->render('commander');
    }
    
    
    function commanderfinaliser(){
    
    	$this->render('commanderfinaliser');    
        
    }
    
    function inscription(){
       
    }
    
    function modifier(){
        $this->render('connexion');
    }
    
    function ajouterblague(){
        
    }
    
    function ajouterCB(){
        
    }
    
    function modifierCB($i){
        
    }
    function facture(){
        
    }
}
?>
