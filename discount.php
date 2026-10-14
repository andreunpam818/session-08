<?php 
    $price = 100000;
    $discount = 10;

    $total_price = $price - ($price * $discount / 100);

    //echo $total_price;

    function calculateDiscount($price, $discount){
        $total_price = $price - ($price * $discount / 100);

        return $total_price;
    }

    $total_price = calculateDiscount(2000000, 10);
    echo $total_price;

    echo "<hr>";

    function disnplayPrice($price){
        return $price;
    }
echo disnplayPrice(1500000);

/*

Tugas :
Buat function untuk menghitung biaya yg dikenai pajak 12%

Budi membeli makanan seharga 250.000. dan makanan tersebut 
biayanya di  kenai pajak 12%
Hitung, berapa yg harus budi keluarkan untuk membayar
makanan tersebut ?

ketentuan function, total bayar dan jumlah pajak harus dinamis.

*/

echo "<hr>";

    function calculatePajak($price, $pajak){
        $total_price = $price + ($price * $pajak / 100);

        return $total_price;
    }

    $total_price = calculatePajak(250000, 12);
    echo $total_price;

    /*
    $transactions = [1000000, 2000000, 990000, 300000, 200000, 100000];

    Tugas :
    1.Cetak dgn menggunakan looping data yg ada di dalam $transactions
    2.Buat function untuk ngecek mana yg transaksi dibawah 500.000 dan 
    transaksi di atas >= 500.000

    Outputnya, data transaksi tercetak semua dan jumlah transaksi dibawah 500.0000
    dan transaksi di atas >= 500.000;


    */

    echo "<hr>";

    $transactions = [1000000, 2000000, 990000, 300000, 200000, 100000];

    function calculateTransactions ($transactions){
        $aboveOrEqual = 0;
        $below = 0;

        foreach($transactions as $transaction){
            if($transaction >= 500000){
                $aboveOrEqual++;
            }else{
                $below++;
            }
        }
        echo "Jumlah transaksi >= 500.000 = " . $aboveOrEqual . "<br>";
        echo "Jumlah transaksi < 500.000 = " . $below . "<br>";

       
    }

    foreach($transactions as $transaction){
        echo $transaction . "<br>";
    }

    calculateTransactions ($transactions);



?>