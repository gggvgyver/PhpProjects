<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열함수</title>
</head>
<body>
    <?php $numbers = array(8,23,15,42,16,4);?>
    Count: <?= count($numbers);?><br />
    Max value: <?= max($numbers);?><br />
    Min value: <?= min($numbers);?><br />
    정렬: <?php sort($numbers); print_r($numbers);?>
    <br />
    역정렬: <?php rsort($numbers); print_r($numbers);?>
    <br />
    implode: <?= $string = implode("@", $numbers); ?>
    <br />
    explode: <?php print_r(explode("@", $string));?>
</body>
</html>