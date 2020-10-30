<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("Input size (n >= 1): ");
fscanf(STDIN,"%f",$size);

for ($j=1;$j<=($size+1);$j++){$ar[0][$j]=0;}

for ($i=1;$i<=$size;$i++){
    $ar[$i][1]=1;
    for ($j=2;$j<=($size-$i+1);$j++){
        $ar[$i][$j]=($ar[$i][$j-1]+$ar[$i-1][$j]);
    }
}


for ($i=1;$i<=$size;$i++){
    for ($j=1;$j<=($size-$i+1);$j++){
     printf("%5s",$ar[$i][$j]);
    }
    printf("\n");
}