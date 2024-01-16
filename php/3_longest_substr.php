<?php
$s = "pwwkew";
$s0 = "xpwwwwkewa";
$s1 = "abcabcbb";
$s2 = "bbbbb";
function result($s){
  $a = str_split($s);
  $bag = 0;
  $bags = [[]];
  
  for($i = 0; $i < count($a); $i++){
    
    $exists = in_array(
      $a[$i], 
      $bags[$bag]);
      
    if($exists){
      $bag++;
     array_push($bags, []);
    }
    array_push(
      $bags[count($bags)-1],
      $a[$i]);
      
    if(sizeof($bags) > 2){
      
      if(sizeof($bags[0]) > sizeof($bags[1])){
        unset($bags[1]);
        
      }else{
        unset($bags[0]);
      }
    }  
  }
  $res = $bags[0] > $bags[1] ? 
  $bags[0] : $bags[1];
  
  return sizeof($res);
}
function result2($s){
  $a = str_split($s);
  $strP = 0;
  $endP = 0;
  $maxLen = 0;
  $currentLen = 0;
  #die($a);
  for($i = 1; $i < sizeof($a); $i++){
    if($a[$i] == $a[$i-1] 
    || $a[$strP] == $a[$i]){
      $strP = $i;
    }
    $endP = $i;
    $currentLen = $i - $strP + 1;
    if($currentLen > $maxLen){
      $maxLen = $currentLen;
    }
  }
  return $maxLen;
}
function result3 ($s){
  $a = str_split($s);
  $x = array_fill(0,sizeof($a), -1);
  $m = array_combine($a, $x);
  foreach ($m as $k => $v){
    
  }
  return $m;
}
function result4 ($s){
  $arr = str_split($s);
  $l = 0;
  $r = 0;
  $maxLen = 0;
  $hash = Array();
  
  while ($r < sizeof($arr)){
    if(
      array_key_exists($arr[$r], $hash)
      ){
        unset($hash[$arr[$l]]);
        $l++;
      }else{
        $hash[$arr[$r]] = 0;
      if($maxLen < ($r - $l + 1) ){
        $maxLen = $r - $l + 1;
      }
        $r++;
      }
  }

  return $maxLen;
}
var_dump(result4($s1));