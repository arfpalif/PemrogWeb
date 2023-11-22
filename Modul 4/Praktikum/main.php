<?php

function hello_world($n){
    for($angka =1; $angka <= $n; $angka++){
        if($angka % 3 == 0 && $angka %5== 0){
            echo "hello world\n";
        }
        elseif($angka %3 == 0){
            echo "hello\n";
        }
        elseif($angka %5== 0){
            echo "world";
        }
    }
}

hello_world(10);

?>