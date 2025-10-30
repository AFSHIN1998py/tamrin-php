<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 30
    if( $a % 3 == 0 && $a % 5 == 0) {
        echo "بر 3و5 بخشپذیر";
    } elseif( $a % 3 == 0) {
        echo "بر 3 بخش پذیر";
    } elseif( $a % 5 == 0) {
        echo "بر 5 بخش پذیر";
    } else {
        echo "بر هیچکدام بخش پذیر نیست"
    }
    ?>
</body>
</html>