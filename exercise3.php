  <h1>Exercise 3 </h1>
    <h3> Task 1 </h3>
    <?php
    $m = date("m");
    if ($m == "02"){
        echo "Shortest month of the year </br>";
    }
    else if ($m == "03") {
        echo "Not February </br>";
    }
    else {
        echo "Have a great month </br>";
    }
    ?>
    <h3> Task 2 </h3>
    <?php
    $color = "red";
    $text = "This is red";
    if ($color == "red"){
        echo '<div style = "Color:'.$color.'">'.$text.'</div>';
    }
    else {
        echo "This is not red";
    } 
            
    ?>

    <h3> Task 3 </h3>

    <?php
    $points = 77;

    if ($points>=80)
    {
        $grade = "Excellent";
    }
    else if($points>=70 && $points < 80)
    {
        $grade = "Great";
    }
    else if($points>= 60 && $points <70)
    {
        $grade = "Good";
    }
    else if($points>= 50 && $points <60)
    {
        $grade = "Pass";
    }
    else 
    {
        $grade = "Fail";
    }

    echo "<br>Student grade: $grade </br>";
    ?>

    <h3> Task 4 </h3>

    <?php

    function check_vote()
    {
        $name = "Dimal";
        $age = 21;
        if ($age >= 18) {
            echo $name . ", you are eligible for vote </br>";
        } else {
            echo $name . ", you are not eligible for vote.</br> ";
        }
    }
    check_vote();
    ?>

    <h3> Task 5 </h3>

    <?php
    for($i=0;$i<=8;$i++){  
        for($j=8-$i;$j>=1;$j--){  
        echo $j;  
        }  
        echo "<br>";  
        } 
    ?>

    <h3> Task 6 </h3>
    
    <?php
    for($i=0;$i<=8;$i++){  
    for($j=1;$j<=$i;$j++){  
    echo "* ";  
    }  
    echo "<br>";  
    }  
    ?>
