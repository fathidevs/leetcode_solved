<?

$r1 =[1, 3, 4];
$r2 =[7, 8, 10];
$r3 =[7, 8, 9];
$r4 =[10, 11];

function result($r1, $r2){
  $arr = array_merge($r1, $r2);
  sort($arr);
  $size = sizeof($arr);
  $median = 0;
  
  if($size % 2 == 0){
    $a = $size / 2;
    $b = $a - 1;
    $median = ($arr[$a]+$arr[$b]) / 2;
  }else{
    $median = $arr[intval($size/2)];
  }
  return $median;
}
function result2($r1, $r2){
  $size = sizeof($r1)+sizeof($r2);
  $r1p = 0;
  $r2p = 0;
  $nr = [];
  
  for($i = 0; $i < $size; $i++){
    
    if($r1p < sizeof($r1) && $r1[$r1p] < $r2[$r2p] ){
      
      echo "pushing r1 $r1[$r1p]\n";
      array_push($nr, $r1[$r1p]);
      $r1p++;
    }else{
      echo "pushing r2 $r2[$r2p]\n";
      
      array_push($nr, $r2[$r2p]);
      $r2p++;
      
    }
  }
  return $nr;
}
#var_dump(result2($r1, $r2));
result2($r3, $r4);