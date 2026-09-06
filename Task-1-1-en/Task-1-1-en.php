<?php
    /*Input data*/
    print("Enter the number of blocks: ");
    $n = intval(readline());
    print("Enter the number of blocks for 1 tower: ");
    $k = intval(readline());
    $t = intdiv($n, $k); // Maximum number of towers
    $b = $t * $k;  // Number of blocks
    /*Output information*/
    printf("From %d blocks, you can build a maximum of %d towers\r\n", $n, $t);
    printf("This will take %d blocks.\r\n", $b);
?>