<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("Input number of students: ");
fscanf(STDIN,"%d",$s);
printf("Input number of chapters: ");
fscanf(STDIN,"%d",$c);

$chapter="name";
$a="%s";
for ($j=0;$j<$c;$j++){$chapter .=" chpt".($j+1);}
for ($j=0;$j<$c;$j++){$a .=" %f";}


for ($i=0;$i<$s;$i++){
printf("student %2d score ( %s ):",$i+1,$chapter);
$scores[$i] = fscanf(STDIN, $a);
$sum[$i]=array_sum($scores[$i]);
}

printf("Result:\n");
printf("           ");
for($i=1;$i<=$c;$i++){printf("      $i");}
printf("\n");

printf("-----------");
for($i=1;$i<=$c;$i++){printf("---------");}
printf("-----");
printf("\n");


for ($i=0;$i<$s;$i++){
printf("%-10s: ",$scores[$i][0]);
    for($j=1;$j<=$c;$j++){
    printf("%6.2f ",$scores[$i][$j]);}
printf("= %6.2f\n",$sum[$i]);
    
}
