
<?php
define("SERVEUR","localhost");
define("NOMBASE","devis");
define("USER","root");
define("MDP","");
    
   
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
   $telephone = $_POST["telephone"];
    $adress= $_POST["adress"];
   $nom_entreprise = $_POST["nom_entreprise"];
   $prestaion = $_POST["prestation"];
   $description = $_POST["msg"];
  
   
   
 
    $dbco=mysqli_connect(SERVEUR,USER,MDP,NOMBASE) or die ("err conn");
    
    
       
        
        $req="INSERT INTO donne VALUES ('','$nom','$prenom','$email','$telephone','$adress','$nom_entreprise','$prestaion','$description')";
        $res=mysqli_query($dbco,$req) or die (mysqli_error($dbco));

        if ($res) {
          echo "ok";
        }

        else {
          echo mysqli_error($dbco);
        }
        
       

       
  
    

$to="benromdhan.azza99@gmail.com";
$subject="demande de devis";
$msg=$description."\n";
$msg.=$prestaion;

mail($to,$subject,$msg,'From:benromdhan.azza99@gmail.com');

?>