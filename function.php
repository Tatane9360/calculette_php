<?php
function calculatrice($number1, $number2, $op)
{
    if ($op == '+') {
        $result = $number1 + $number2;
        return $result;
    } elseif ($op == '-') {
        $result = $number1 - $number2;
        return $result;
    } elseif ($op == '*') {
        $result = $number1 * $number2;
        return $result;
    } elseif ($op == '/') {
        if ($number2 == 0) {
            $result = "Erreur";
            return $result;
        } else {
            $result = $number1 / $number2;
            return $result;
        }
    }
}
?>
