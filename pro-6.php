<!-- 6. Write a PHP program to print 15 to 20 using While and Do While. -->
<?php
$num=15;
$i=$num;
echo "<h3>Print 15 to 20 using while loop</h3>";
while($i<=20){
    echo $i."<br>";
    $i++;
}
echo "<br><h3>Print 15 to 20 using do while loop</h3>";
$i=$num;
do{
    echo $i."<br>";
    $i++;
}while($i<=20)
    
?>