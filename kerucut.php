<?php
// pembuatan fungsi
$r =28;
$t =40;
$phi =22/7;
function volumekerucut($r,$t,$phi){
    retrun(1/3*($phi*$r*$r*$t));
}
// menampilkan fungsi
echo "volume kerucut tersebut adalah:" .volumekerucut($r,$t,$phi). "cm"
