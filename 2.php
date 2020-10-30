<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("Input data (floor n): ");
fscanf(STDIN,"%f %f",$floor,$n);
for ($i=1;$i<=$floor;$i++){
    printf("Floor: $i\n");
    for($j=1;$j<=$n;$j++){
        for($k=1;$k<=$n;$k++){
            printf("    Input number of people in zone $j-$k: ");
            fscanf(STDIN,"%f",$p[$i][$j][$k]);
        }
    }
}


printf("People on each floor:\n");
for ($i=1;$i<=$floor;$i++){
    $sum=0;
    printf("  floor $i:\n");
     for($j=1;$j<=$n;$j++){
        for($k=1;$k<=$n;$k++){
        printf("    %s",$p[$i][$j][$k]);
        $sum+=$p[$i][$j][$k];
        }
     printf("\n");
     }
 printf("    Number of people = %s\n",$sum);
}

printf("People on each zone: \n");
    for($j=1;$j<=$n;$j++){
        for($k=1;$k<=$n;$k++){
            printf("zone $j-$k: \n");
            $s=0;
            for($f=$floor;$f>=1;$f--){
               printf("%6.0f\n",$p[$f][$j][$k]);
               $s+=$p[$f][$j][$k];
            }
            printf("   Number of people = $s\n");}
    }
