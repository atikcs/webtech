<<<<<<< HEAD
<?php

function findm($num1,$num2){
   if($num1>$num2){return $num1;} 
   else
    return $num2;
};
$marks=[70,80,90,75,85];

echo "Marks :";
foreach($marks as $value)
    {
        echo $value;
        echo "<br>";
    }

$total=0;

for($i=0;$i<5;$i++){
    $total+=$marks[$i];
}
echo "Total marks :";
echo $total;
echo "<br>";

$max=0;

for($i=0;$i<5;$i++){
    $max=findm($marks[$i],$max);
    }

echo "Maximum :";
echo $max;
echo "<br>";

$min=$max;
for($i=0;$i<5;$i++){
    if($marks[$i]<$min){
        $min=$marks[$i];
    }
}
echo "Minimum :";
echo $min;
echo "<br>";

$passed=0;
for($i=0;$i<5;$i++){
    if($marks[$i]>=50){
    $passed++;}
}
echo "Passed :";
echo $passed;
echo "<br>";


$student=[
    "name"=>"Asif",
    "id"=>"CSE123",
    "cgpa"=>3.75
];

foreach($student as $value){
    echo $value;
    echo "<br>";
}
=======
<?php

function findm($num1,$num2){
   if($num1>$num2){return $num1;} 
   else
    return $num2;
};
$marks=[70,80,90,75,85];

echo "Marks :";
foreach($marks as $value)
    {
        echo $value;
        echo "<br>";
    }

$total=0;

for($i=0;$i<5;$i++){
    $total+=$marks[$i];
}
echo "Total marks :";
echo $total;
echo "<br>";

$max=0;

for($i=0;$i<5;$i++){
    $max=findm($marks[$i],$max);
    }

echo "Maximum :";
echo $max;
echo "<br>";

$min=$max;
for($i=0;$i<5;$i++){
    if($marks[$i]<$min){
        $min=$marks[$i];
    }
}
echo "Minimum :";
echo $min;
echo "<br>";

$passed=0;
for($i=0;$i<5;$i++){
    if($marks[$i]>=50){
    $passed++;}
}
echo "Passed :";
echo $passed;
echo "<br>";


$student=[
    "name"=>"Asif",
    "id"=>"CSE123",
    "cgpa"=>3.75
];

foreach($student as $value){
    echo $value;
    echo "<br>";
}
>>>>>>> f28cb07 (Rename folder and add new files)
?>    