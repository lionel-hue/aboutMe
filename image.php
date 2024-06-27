<?php 

//Definir donne ou lien pour crypter dans le Code Qr.
$data = 'https://img.freepik.com/photos-gratuite/femme-afro-americaine-peau-sombre-heureuse-se-tient-dans-espace-dechire-rit-joyeusement-pose-dans-trou-papier_273609-38584.jpg?w=900&t=st=1719509718~exp=1719510318~hmac=33221e329fe5c527cdac259736df20ad4dcca4cfafe1d744c9cdf46d60cbe075';

//Fixe Le parametere pour la generation du code Qr...
$size = 200; //taille en pixel 
$margin = 10; //Borduure autour du code Qr.

//Construire le code Qr...
$qr_url = "https://api.qrserver.com/v1/create-qr-code/?data=". urlencode( $data ). "&size=". $size. "&margin". $margin;

//Obtenir Le contenu du code Qr ( Ici c'est une image )
$qr_image = file_get_contents( $qr_url );

//La sortie du Code Qr
header('Content-type : image/png '); 
echo $qr_image;

?>