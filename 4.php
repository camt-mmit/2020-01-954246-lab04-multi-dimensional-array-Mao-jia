<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("Input size (m n p): ");
fscanf(STDIN,"%f %f %f",$m,$n,$p);

$format="";
for ($i=1;$i<=$n;$i++){ $format .=" %f";}
$format=trim($format);
$format1="";
for ($i=1;$i<=$p;$i++){ $format1 .=" %f";}
$format1=trim($format1);

printf("Input matrix A($m x $n):\n");
for ($i=0;$i<$m;$i++){
 $a[$i]=fscanf(STDIN,$format);
}

printf("Input matrix A($n x $p):\n");
for ($i=0;$i<$n;$i++){
    $b[$i]=fscanf(STDIN,$format1);
   }

for ($i=0;$i<$m;$i++){
    for($j=0;$j<$p;$j++){
        $c=0;
        for($k=0;$k<$n;$k++){
            $c+=$a[$i][$k]*$b[$k][$j];
        }
        $d[$i][$j]=$c;
    }
}

printf("The result matrix C($m x $p):\n");
 for ($i=0;$i<$m;$i++){
     for($j=0;$j<$p;$j++){
         printf("%5.0f",$d[$i][$j]);
     }
     printf("\n");
 }
