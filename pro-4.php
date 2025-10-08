<!-- 4. Write a PHP program to print current month using if..else& switch case. -->
<?php
    $d=date(format : 'm');
    echo "<h2><br>Display month using If-else<br></h2>";
    if($d==1)
        echo "<h3>Current month is January</h3>";
    elseif($d==2)
        echo "<h3>Current month is Febuary</h3>";
    elseif($d==3)
        echo "<h3>Current month is March</h3>";
    elseif($d==4)
        echo "<h3>Current month is April</h3>";
    elseif($d==5)
        echo "<h3>Current month is May</h3>";
    elseif($d==6)
        echo "<h3>Current month is June</h3>";
    elseif($d==7)
        echo "<h3>Current month is July</h3>";
    elseif($d==8)
        echo "<h3>Current month is August</h3>";
    elseif($d==9)
        echo "<h3>Current month is September</h3>";
    elseif($d==10)
        echo "<h3>Current month is October</h3>";
    elseif($d==11)
        echo "<h3>Current month is November</h3>";
    elseif($d==12)
        echo "<h3>Current month is December</h3>";
    else
        echo "Date function error";
    echo "<h2><br>Display month using Switch<br></h2>";
    switch($d){
        case 1 : echo "<h3>Current month is January</h3>";
                 break;
        case 2 : echo "<h3>Current month is Febuary</h3>";
                 break;
        case 3 : echo "<h3>Current month is March</h3>";
                 break;
        case 4 : echo "<h3>Current month is April</h3>";
                 break;
        case 5 : echo "<h3>Current month is May</h3>";
                 break;
        case 6 : echo "<h3>Current month is June</h3>";
                 break;
        case 7 : echo "<h3>Current month is July</h3>";
                 break;
        case 8 : echo "<h3>Current month is August</h3>";
                 break;
        case 9 : echo "<h3>Current month is September</h3>";
                 break;
        case 10 : echo "<h3>Current month is October</h3>";
                 break;
        case 11 : echo "<h3>Current month is November</h3>";
                 break;
        case 12 : echo "<h3>Current month is December</h3>";
                 break;   
        default : echo "Date function error";
                  break;
    }
?>