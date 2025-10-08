<?php

$total_marks = 0;
$max_marks_per_subject = 100;
$number_of_subjects = 5;
$total_max_marks = $max_marks_per_subject * $number_of_subjects;

if (isset($_POST['submit']) && isset($_POST['n']) && isset($_POST['sub1'])) {
        $s1 = $_POST['sub1'];
        $s2 = $_POST['sub2'];
        $s3 = $_POST['sub3'];
        $s4 = $_POST['sub4'];
        $s5 = $_POST['sub5'];
        $n = $_POST['n'];

        $total_marks = $s1+$s2+$s3+$s4+$s5;
        
        $percentage = ($total_marks / $total_max_marks) * 100;
    
}
?>

<!DOCTYPE html>
<html>
<head><title>Previous Semester Result</title></head>
<body>
<form method="post" action="">
    Ener Your name: <input type="string" name="n" required><br><br>
    <h2>Enter Marks for Previous Semester</h2>
    Subject 1: <input type="number" name="sub1" required><br><br>
    Subject 2: <input type="number" name="sub2" required><br><br>
    Subject 3: <input type="number" name="sub3" required><br><br>
    Subject 4: <input type="number" name="sub4" required><br><br>
    Subject 5: <input type="number" name="sub5" required><br><br>
    <input type="submit" name="submit" value="Show Result">
</form>

<?php if (isset($_POST['submit']) && isset($_POST['n']) && isset($_POST['sub1'])): ?>
    <h3>Result</h3>
    <p><strong>Student Name:</strong> <?php echo $n; ?></p>
    <p><strong>Total Marks:</strong> <?php echo $total_marks . " / " . $total_max_marks; ?></p>
    <p><strong>Percentage:</strong> <?php echo number_format($percentage, 2) . "%"; ?></p>
<?php endif; ?>

</body>
</html>
