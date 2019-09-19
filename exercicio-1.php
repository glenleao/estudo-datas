<?php
//tutorial canal webdesignemfoco - trabalhando co datas no php: https://www.youtube.com/watch?v=T7IAriI1zoY&t=102s

date_default_timezone_set("America/Sao_Paulo");

// echo "data atual: ". date('Y-m-d H:i:s') . "<br>";
echo "data atual: " . date('d/m/Y')."<br>";

$now = strtotime(date('Y-m-d'));
$otherDate = strtotime('2019-10-16');
// echo $now . "<br>";
// echo date ('Y-m-d H:i:s', $now);
if($now > $otherDate) {
	echo "A data ". date("d/m/Y", $now)." é maior <br>";
	echo date ("d/m/Y", $otherDate)."<br>";
} else {
	echo "A data atual é menor!";
}

//Orientação a objetos
 $now = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
 $otherDate = new DateTime("2019-03-16 17:00:00", new DateTimeZone("America/Sao_Paulo"));
//  var_dump($now);
// var_dump($otherDate);

 //Format
 $dateBr = $now->format('d/m/Y');
 $timeBr = $now->format('H:i:s');
 // $dateOtherBr=$now->format('d/m/Y');
 echo "Leio esse código as ". $timeBr." do dia ".$dateBr;

 echo "<br>";

 //Modify
 // $dateModify = $now->modify('-23 days')->format('d/m/Y');
 // $dateModify = $now->modify('+1 year +1 month +10 days +30 minutes')->format('d/m/Y');
 // echo $dateModify;

  echo "<br>";

//Diff

 $dateDiff=$now->diff($otherDate);
 var_dump($dateDiff);
 //  echo "<br>";
  if($dateDiff->m > 2){
  	echo "Sua conta foi bloqueada";
  } else{
  	echo "Ok";
  }