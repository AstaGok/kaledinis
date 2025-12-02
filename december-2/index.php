<form method="post">
        Minutes: <input type="number" name="minutes"><br>
        Seconds: <input type="number" name="seconds"><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['minutes']) && isset($_POST['seconds'])) {
        $x = $_POST['minutes'];
        $y = $_POST['seconds'];

        $m = $x * 60 + $y;
        $s = $m * 60;

        if ($m && $s) {
            echo "Minutes passed: m = $m\n";
            echo "Seconds passed: s = $s\n";
        } 
    }
    ?>




