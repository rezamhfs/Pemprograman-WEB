<?php

    $filecounter="counter.txt";
    $f1=fopen($filecounter,"r+");
    $hit=fread($f1,filesize($filecounter));
    fclose($f1);

    $f1=fopen($filecounter,"w+");
    $hit=$hit+1;

    fwrite($f1,$hit,strlen($hit));

    fclose($f1);
    ?>