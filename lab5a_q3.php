<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 6;
        $height = 4;

        $area = calculateArea($width, $height);
    ?>

    <p>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $height; ?> is <?php echo $area; ?>.</p>
</body>
</html>