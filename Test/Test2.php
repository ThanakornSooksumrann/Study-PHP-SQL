<?php 
    $score = 80;

    if($score >= 80) {
        $grade = "A";
    }
    elseif($score >= 75) {
        $grade = "B+";
    }
    elseif($score >= 70) {
        $grade = "B";
    }
    elseif($score >= 65) {
        $grade = "C+";
    }
    elseif($score >= 60) {
        $grade = "C";
    }
    elseif($score >= 55) {
        $grade = "D+";
    }
    elseif($score >= 50) {
        $grade = "D";
    }
    else { $grade = "F";}

    echo ("Your score is".$score."<br>");
    echo ("Your grade ".$grade);
?>