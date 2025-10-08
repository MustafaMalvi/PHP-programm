<?php
$array1 = [];
$array2 = [];
$mergedSorted = [];
$sumArray1 = 0;

if (isset($_POST['submit'])) {

    $array1 = array_map('trim', explode(',', $_POST['array1']));
    $array2 = array_map('trim', explode(',', $_POST['array2']));
    
    $array1 = array_map('intval', $array1);
    $array2 = array_map('intval', $array2);

    $reversedArray1 = array_reverse($array1);

    $mergedSorted = array_merge($array1, $array2);
    sort($mergedSorted);

    $sumArray1 = array_sum($array1);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>

<h2>Enter Array Values (comma separated)</h2>
<form method="post" action="">
    Array 1: <input type="text" name="array1" placeholder="e.g. 1, 2, 3" required><br><br>
    Array 2: <input type="text" name="array2" placeholder="e.g. 4, 5, 6" required><br><br>
    <input type="submit" name="submit" value="Perform Operations">
</form>

<?php if (isset($_POST['submit'])): ?>

    <h3>Results</h3>

    <strong>a) Values of Array 1:</strong> <?php echo implode(', ', $array1); ?><br>
    <strong>a) Values of Array 2:</strong> <?php echo implode(', ', $array2); ?><br><br>

    <strong>b) Reversed Array 1:</strong> <?php echo implode(', ', $reversedArray1); ?><br><br>

    <strong>c) Merged & Sorted Array:</strong> <?php echo implode(', ', $mergedSorted); ?><br><br>

    <strong>d) Sum of Array 1 elements:</strong> <?php echo $sumArray1; ?><br>

<?php endif; ?>

</body>
</html>
