<?php

session_start();
error_reporting(E_ALL);
ob_start();

session_cache_limiter('nocache');

header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');
  
$daten=[];
 
define('DATABASE', 'usr_web14_1'); 
require 'dbstart.php' ;

echo "<pre>";
print_r($_POST);
echo "</pre>"


foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}

if ( !isset( $_SESSION['origURL'] ) )
    $_SESSION['origURL'] = $_SERVER['HTTP_REFERER'];
if (isset($_SESSION['v']) )
{
    $verteiler =$_SESSION['v'] ;
}
  else  
  {
     $verteiler =0;
  }   
 if (isset($_SESSION['cc']) )
{
    $cc =$_SESSION['cc'] ;
    $id = $database->insert("clicktracker", ["campaign" => 1, "verteiler" => $verteiler,
                "crosscampaign" => $cc, "lead" => 1, "date" => date("Y-m-d"), "day" => date("l"),
                "time" => date("H:i:s")]);  
}
    
$urlend = basename(parse_url($_SESSION['origURL'], PHP_URL_PATH));


$vorname = $_POST['input_15'];
$name = $_POST['input_14'];
$k_email = $_POST['input_2'];
$geburtsdatum = $_POST['input_16'];
$ort = $_POST['input_11'];
//$str = $_POST['input_8'];
//$plz = $_POST['input_10'];
//$sparte = $_POST['input_12'];
//$quelle = $_POST['input_13'];
//$datum=date("Y-m-d");
$seite = $urlend;
$datenschutz = 'Ja'; 
// if ($datenschutz != 'Nein') {
// 	$datenschutz = 'Ja';
// }


//$tarife = unserialize($_POST['tarife']);

// $alter=alter(substr(date('d.m.Y',strtotime($_POST['input_16'])), -4));
// $alter2=$alter+1; 
// $beitrage =$database->select($sparte, "*", ["Alter" => $alter]);
// $beitrage2 = $database->select($sparte,"*" , ["Alter" => $alter2]); 




$last_user_id = $database->insert("kunden_fuzzi", [
	"name" => $_POST['input_14'],
    "vorname" => $_POST['input_15'],
	"email" => $_POST['input_2'],
	"geburtsdatum" => $_POST['input_16'],
    "ort" => $_POST['input_11']	
]);



echo "<pre>";
print_r($last_user_id);
echo "</pre>";
die;






$k_id=$database->id();
$id = $database->insert("clicktracker", [
	"campaign" => 2,
    "verteiler" => $verteiler,    
	"lead" => 1,
    "date"  => date("Y-m-d"),
    "day"  => date("l"),
    "time"  => date("H:i:s")
]);

//Email Start
$to = 'selbstgeneriert@vfd-kassel.de';
$subject = $quelle.'Angebot/Vergleich angefordert';
if($to) {
    $email = 'service@meinversicherungsfuzzi.de';
	$fields = array(
		0 => array(
			'text' => 'Sparte',
			'val' => $sparte
		),
		1 => array(
			'text' => 'Vorname',
			'val' => $vorname
		),
		2 => array(
			'text' => 'Nachname',
			'val' => $name
		),
		3 => array(
			'text' => 'Geburtsdatum',
			'val' => date('d.m.Y',strtotime( $geburtsdatum))
		),
		4 => array(
			'text' => 'Email',
			'val' => $k_email
		),
		5 => array(
			'text' => 'Straße/Nr',
			'val' => $str
		),
		// 6 => array(
		// 	'text' => 'Telefon',
		// 	'val' => $tel
		// ),
		// 7 => array(
		// 	'text' => 'PLZ',
		// 	'val' => $plz
		// ),
		8 => array(
			'text' => 'Ort',
			'val' => $ort
		),
		9 => array(
			'text' => 'von Seite',
			'val' => $seite
		),
        // 10 => array(
		// 	'text' => 'Verteiler',
		// 	'val' => $verteiler
		// ),
        // 11 => array(      
		// 	'text' => 'Absicherung',
		// 	'val' => $absicherung
		// ) ,
        // 12 => array(
		// 	'text' => 'Quelle',
		// 	'val' => $quelle
		// ),
        // 13 => array(
		// 	'text' => 'Fuzzi ID',
		// 	'val' => $k_id
        //     ),
        // 14 => array(
		// 	'text' => 'Beruf',
		// 	'val' => $beruf
		// ),
        // 15 => array(
		// 	'text' => 'Fehlende Zähne mitversichern?',
		// 	'val' => $mitversichern
		// ),
        // 16 => array(
		// 	'text' => 'Fehlende Zähne',
		// 	'val' => $_POST['zahn']
		// ), 
        // 17 => array(
		// 	'text' => 'Netto',
		// 	'val' => $_POST['netto']
		// ),
        // 18 => array(
		// 	'text' => 'Versorgungslücke',
		// 	'val' => $daten['luecke']
		// ),
        // 19 => array(                                                         
		// 	'text' => 'Versicherter Tagessatz',
		// 	'val' => $daten['tagessatz']
		// ),
        // 20 => array(
		// 	'text' => 'Monatsleistung',
		// 	'val' => $daten['monatszahlung']
		// ),  
        // 21 => array(
		// 	'text' => 'Beitrag',
		// 	'val' => $daten['beitrag']
		// ),  
        // 22 => array(
		// 	'text' => 'bereits Sehilfe',
		// 	'val' => $_POST['sehhilfe']
		// ), 
		29 => array(
			'text' => 'Datenschutzerklärung Haken gesetzt',
			'val' => $datenschutz
			
		),    
        // 30 => array(
		// 	'text' => 'Timestamp',
		// 	'val' => date("Y-m-d").' '.date("H:i:s")
        //     )
	);
	$message = "";
	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
}
$message.="<br>\n";
$message .=json_encode($beitrage);
$message.="<br>\n";
$message .=json_encode($beitrage2);
$headers = '';	
$headers .= 'From: ' . $email . ' <' . $email . '>' . "\r\n";
$headers .= "Reply-To: " .  $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	if (mail($to, $subject, $message, $headers)){	
		$arrResult = array ('response'=>'success');
		//wp_redirect(home_url("/danke"));
	} else{
		$arrResult = array ('response'=>'error');
	}
// Email End

echo json_encode($arrResult);
die();
 } else {    
    $arrResult = array ('response'=>'error');
	echo json_encode($arrResult);
}
       function alter($was)
{
    $str = (date("Y") - $was);
    return $str;
}

?>


