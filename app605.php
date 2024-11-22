<?php
function day() : array {
    $day1 = "Monday";
    $day2 = "Tuesday";
    $day3 = "Wednesday";
    $day4 = "Thursday";
    $day5 = "Friday";
    $day6 = "Saturday";
    $day7 = "Sunday";
    return array($day1,$day2,$day3,$day4,$day5,$day6,$day7);
}

$days = day();
foreach ($days as $value){
    echo $value . "<br />";
}
// echo $days[0] . " " . $days[1] . " " . $days[2] . " " . $days[3] . " " . $days[4] . " " . $days[5] . " " . $days[6];

function personal() : array {
    $pers = array( //เป็นกลุ่มเลยไม่ใช่ Array 
    "Peter" => "25", // => คือ double arrow operator
    "Mark" => "26",
    "John" => "27"
    );
    return $pers;
}

$personals = personal();
foreach ($personals as $name => $age){
    echo "$name : $age" . "<br />";
}