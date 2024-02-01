<?php


session_start();
require 'function.php';
$num = "";
$_SESSION['value'] = '';
$operator = [ "+", "-", "*", "/" ];
$op = '';

if(isset($_POST['num'])){

    $num = $_POST['result'] . $_POST['num'];
}

if(isset($_POST['equal'])){

    $_SESSION['value'] = $_POST['result'];
    $numbers = str_split($_SESSION['value'],1); // dissocier les chaines de caractères et les stocke dans un tableau

    foreach ($numbers as $allNumbers) {
      if(in_array($allNumbers, $operator)){ 
        $op = $allNumbers;
      }
    }

    if(!empty($op)){
        $value = explode("$op", $_SESSION['value']);
        $value1 = floatval($value[0]); 
        $value2 = floatval($value[1]);
        $num= calculatrice($value1, $value2, $op);
    }
  }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculette</title>
  <link rel="stylesheet" href="asset/style.css" />
</head>
<body>
  <form action="" method ="post">
    <div class="calculator">
      <div class="screen">
        <input type="text" class="maininput" name="result" value="<?=$num?>"/>
      </div>
      <div class="touch">
        <div class="btn">
          <input type="submit" class="num number" name="num" value="7"/>
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="8" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="9" />
        </div>
        <div class="btn">
          <input type="submit" class="num operator" name="num" value="+" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="4" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="5" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="6" />
        </div>
        <div class="btn">
          <input type="submit" class="num operator" name="num" value="-" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="1" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="2" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="3" />
        </div>
        <div class="btn">
          <input type="submit" class="num operator" name="num" value="*" />
        </div>
        <div class="btn">
          <input type="submit" class="num suppr" name="clear" value="c" />
        </div>
        <div class="btn">
          <input type="submit" class="num number" name="num" value="0" />
        </div>
        <div class="btn">
          <input type="submit" class="num operator" name="equal" value="=" />
        </div>
        <div class="btn">
          <input type="submit" class="num operator" name="num" value="/" />
        </div>
      </div>
    </div>
  </form>
</body>
</html>
