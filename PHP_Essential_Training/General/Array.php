<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>
<body>
    <?php
        $numbers = array(2,4,65,2,6,7);
        echo $numbers[3];
    ?>
<br />
    <?php
        $mixed_array = array(6, "fox", "dog", array("X", "Y", "Z"));
        $mixed_array[] = "추가";
        
        echo "<pre>";
        echo print_r($mixed_array);
        echo "</pre>";
    ?>
<br />
    <?php
    echo $mixed_array[3][2];
    ?>
</body>
</html>