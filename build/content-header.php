<?php
// header('Content-type: application/xml');
$url = 'http://pf.tradetracker.net/?aid=1&type=xml&encoding=utf-8&fid=251713&categoryType=2&additionalType=2&limit=10';
$xml=simplexml_load_file($url) or die("Error: Cannot create object");
echo $xml->product[0]->name . "<br>";
echo $xml->product[1]->name;
// $handle = fopen($url, "r");
// if ($handle) {
//     while (($buffer = fgets($handle, 4096)) !== false) {
//         echo $buffer;
//     }
//     if (!feof($handle)) {
//         echo "Error: unexpected fgets() fail\n";
//     }
//     fclose($handle);
// }
 ?>
