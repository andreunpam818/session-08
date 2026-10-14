<?php 
  $transactions = [1000000, 2000000, 990000, 300000, 200000, 100000];

  function calculateTotalTransaction($data){
    $total = 0;
    foreach ($data as $dt){
    $total += $dt;
}
    return $total;

  }
  echo calculateTotalTransaction ($transactions);
  echo "<br>";
 /*
    function calculateDiscont ($transactions, $discont){
    $totalTransaction = calculateTotalTransaction ($transactions);

    $totalPrice = 0;
    if($totalTransaction > 9000000){
        $totalPrice = $totalTransaction - ($totalTransaction * $discont / 100);
    }else {
        $totalPrice = $totalTransaction;

    }
    return $totalPrice;
      echo "<hr>";

  echo calculateDiscont ($transactions);

  }
  */

 



?>