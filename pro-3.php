    <!-- 3. Write a PHP program for operators in PHP. -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="get" action="pro-3.php">
            <label><strong>Enter Number 1 : </strong></label>
            <input type="number" id="no1" name="no1"><br><br>
            <label><strong>Enter Number 2 : </strong></label>
            <input type="number" id="no2" name="no2"><br><br>
            <label><strong>Enter Operator : </strong></label>
            <input type="char" id="op" name="op"><br><br>
            <button type="submit"> Submit </button><br>
        
        <?php
        if (isset($_GET['no1']) && isset($_GET['no2'])) {
            $no1=$_GET['no1'];
            $no2=$_GET['no2'];
            $op=$_GET['op'];
            switch($op){
                case '+' :   echo "<br><lable>".$no1." ".$op." ".$no2." = ".$no1+$no2."</lable>"; 
                            break;
                case '-' :   echo "<br><lable>".$no1." ".$op." ".$no2." = ".$no1-$no2."</lable>";
                            break;
                case '*' :   echo "<br><lable>".$no1." ".$op." ".$no2." = ".$no1*$no2."</lable>";
                            break;
                case '/' :   echo "<br><lable>".$no1." ".$op." ".$no2." = ".$no1/$no2."</lable>";
                            break;
                case '%' :   echo "<br><lable>".$no1." ".$op." ".$no2." = ".$no1%$no2."</lable>";
                            break;
                default : echo "Invalid operator";
                            break;
            }
        }
        ?>
        </form>
    </body>
    </html>