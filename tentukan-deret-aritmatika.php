<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini


$selisih = $arr[1] - $arr[0];
 
for($a=0;$a<sizeof($arr);$a++){

    $jumlah = $arr[0] + $selisih;
    $f = ($a-1);

if( $selisih != ($arr[$a] - $arr[$f])){

return "false";

}

return "true"; 
}


}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>