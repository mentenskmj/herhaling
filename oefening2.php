<?php
if (isset($_POST["btnSend"])) {
    if ($_POST["grondgetal"] > 10) {
        echo "Tafel van " . $_POST["grondgetal"] . "<br/>";
        for ($i = 0; $i < $_POST["grondgetal"]; $i++) {
            echo $i . " maal" . $_POST["grondgetal"] . " = " . ($i * $_POST["grondgetal"]) . "<br/>";
        }
    } else {
        //formulier fout
?>
        <span style="color:red"><?php echo "ERROR" ?></span>
        <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post">
            geef een grondgetal: <input type="int" name=grondgetal />
            <input type="submit" name="btnSend" value="OK" />
        </form>
    <?php
    }
}
// er is nog niet geklikt
else { ?>
    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post">
        geef een grondgetal: <input type="int" name=grondgetal />
        <input type="submit" name="btnSend" value="OK" />
    </form>
<?php
}
?>