<form action="" method="post">
    <label for="angka">Angka :</label>
    <input type="text" name="angka" placeholder="input..">
    <button type="submit">Cetak!</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    echo "Angkanya : " . $angka;
    for ($i = 1; $i <= $angka; $i++) {
        echo "<center>";
        for ($k = 1; $k <= $i; $k++) {
            if ($k == 1 || $k == $i) {
                $a[$i][$k] = 1;
            } else {
                $a[$i][$k] = $a[$i - 1][$k] + $a[$i - 1][$k - 1];
            }
            echo $a[$i][$k] . "&nbsp;&nbsp;";
        }
        echo "</center><br>";
    }
}
?>