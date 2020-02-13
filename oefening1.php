<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <p style="text-align: center">
        <?php
        $number = 10;
        $fontsize = "";
        for ($i = 1; $i < 8; $i++) {
            $fontsize = $number * $i;
        ?>

            <span style="font-size: <?php echo $fontsize ?>px">PHP is FANTASTISCH</span><br>
        <?php
        }
        for ($i = 8; $i > 1; $i--) {
            $fontsize = $number * $i;
        ?>

            <span style="font-size: <?php echo $fontsize ?>px">PHP is FANTASTISCH</span><br>
        <?php
        }
        ?>



    </p>
</body>

</html>