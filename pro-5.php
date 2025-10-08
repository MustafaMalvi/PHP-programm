<!-- 5. Write a PHP program to print 5 to 10 using For and ForEach -->
<?php
    $arr=[5,6,7,8,9,10];
    echo "<h3>Print 15 to 20 using For loop</h3>";
    for($i=0;$i<=5;$i+=1)
        echo $arr[$i]."<br>";
    echo "<br><h3>Print 15 to 20 using For Each loop</h3>";
    foreach ($arr as $i)
        echo $i."<br>";
?>