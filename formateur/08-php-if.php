<?php
$a = true;
if($a){
  echo "ok";
}

echo "<hr>";

$a = false;
if($a){
    echo "ok";
}else{
    echo "ko";
}

echo "<hr>";

$a = mt_rand(0,2);
if($a==0){
    echo "Pas de chance, tu perds un point";
  // sinon si
  }elseif($a==1){
    echo "Super, un point gagné !";
  }else{
    echo "Magnifique, tu gagnes encore 2 points";
  }