<?php
function narcissistic(int $bilangan): bool
{
    $bilArr   = str_split($bilangan);
    $bil_lenght = count($bilArr);
    $total = 0;
    foreach ($bilArr as $n) {
        $total += pow((int)$n, $bil_lenght);
    }
    return $total == $bilangan;
}

function parity_outlier($arrBilangan)
{
    $odds_int = [];
    $evens_int = [];
    foreach ($arrBilangan as $item) {
        if ($item % 2) {
            array_push($odds_int, $item);
        } else {
            array_push($evens_int, $item);
        }
    }
    return count($evens_int) === 1 ? $evens_int[0] : $odds_int[0];
}

function findNeedle($arr, $Stringfind)
{
    return array_filter($arr, function ($value) use ($Stringfind) {
        return strpos($value, $Stringfind) !== false;
    });
}

function blueOcean($Arr1, $Arr2)
{
    $valArr = array_diff($Arr1, $Arr2);
    $Arr1 = array();
    foreach ($valArr as $isValid) {
        $Arr1[] = $isValid;
    }
    return $Arr1;
}

echo "<b>1. Narcissistic </b><br>";
echo 'Result:<br/>';
$kasus_1 = (narcissistic(153) == 1) ? 'BENAR' : 'SALAH';
$kasus_2 = (narcissistic(111) == 1) ? 'BENAR' : 'SALAH';

echo "Kasus 1 :narcissistic(153) RESULT :  " . $kasus_1 . "<br>";
echo "Kasus 2 :narcissistic(111) RESULT :  " . $kasus_2 . "<br>";


echo "<br><b>2. Parity Outlier</b><br>";
echo 'Result:<br/>';
$coba_1 = parity_outlier([2, 4, 0, 100, 4, 11, 2602, 36]);
$coba_2 = parity_outlier([160, 3, 1719, 19, 11, 13, -21]);
$coba_3 = parity_outlier([11, 13, 15, 19, 9, 13, -21]);

echo $coba_1 . "<br>" . $coba_2 . "<br>" . $coba_3 . "<br>";


echo "<br><b>3. NEEDLE IN THE HAYSTACK</b> <br>";
echo 'Result:<br/>';
$find = findNeedle(["merah", "biru", "kuning", "hitam", "abu-abu"], "biru");
echo "findNeedle(['merah', 'biru', 'kuning', 'hitam', 'abu-abu'], 'biru')";
echo "<br>Result : ";
echo (!empty($find)) ? "Ditemukan " . implode('; ', $find) . " &nbsp;" : "Tidak ditemukan.";
var_dump($find);
echo "<br><br>";

echo "<b>4. THE BLUE OCEAN REVERSE</b> <br>";
$a = blueOcean([1, 2, 3, 4, 6, 10], [1]);
$b = blueOcean([1, 5, 5, 5, 5, 3], [5]);
echo 'Result:';
echo "<pre>";
echo "TEST 1 : ";
var_dump($a);
echo "<pre>";
echo "TEST 2 : ";
var_dump($b);
?>