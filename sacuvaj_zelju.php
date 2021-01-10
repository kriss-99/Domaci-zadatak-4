<?php

require './datab.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{

if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['gradovi']) && isset($_POST['dane']) && isset($_POST['zelje']))
    {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $grad = $_POST['gradovi'];
        $zelja = $_POST['zelje'];
        $dobar = $_POST['dane'];
        if(isset($dobar[0]))
        {
            $dbr=$dobar[0];
        }
        else
        {
            $dbr=$dobar[1];
        }
    

$provjeri_ime  = ctype_alpha($ime);
$provjeri_prezime = ctype_alpha($prezime);}

if(!$provjeri_ime or !$provjeri_prezime or null==$dbr or empty($zelja))
{
    header('location: ./index.html');
}
else{

    $korisnik = ['ime'=> $ime, 'prezime' => $prezime, 'grad' => $grad, 'dobar' => $dbr, 'zelja'=> $zelja];
    $JSON = json_encode($korisnik);

    insert($JSON);
    

    header('location: ./zelja_poslata.html');
}
}

?>



