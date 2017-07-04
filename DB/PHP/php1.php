<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP1</title>
  </head>
  <body>
    <?php
    /*multiline
    comment */
    //singleline
    #also single line

    echo "<ul>
      <li><em><strong>Hello World</strong></em></li>
    </ul>";

    date_default_timezone_set("UTC");

    echo date('h:i:s:u a, l F jS Y e') . "<br/>";

    #Var declaration: $...
    echo "<hr/><h2>Variable Declaration ($...)</h2>";
    $name = $_POST['name'];
    $pw = $_POST['pw'];

    #String concatanation
    echo "<hr/><h2>String Concatanation (.)</h2>";
    echo $name . " " . $pw . "<br/>";

    #heredoc String
    echo "<hr/><h2>Heredoc(<<<)</h2>";
    $str = <<<EOD
    <h2><a href="http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc">Heredoc for php string</a></h2>
    and for var. <br/>
    Name: $name <br/>
    PW: $pw <br/>
EOD;

    echo $str;

    #Constant definition
    echo "<hr/><h2>Constant //define('KEY', var)</h2>";
    define('PI', 3.2);

    echo "PI: " . PI . "<br/>";

    #Reference
    echo "<hr/><h2>References (C-like)</h2>";
    $num = 5;
    $nRef= &$num;

    echo 'Reference of Num: $nRef == ' . $nRef++ . "<br/>"; //escaping $var with SINGLE QUOTE
    echo 'After $nRef++, $num == ' . $num . "<br/>";

    #Logical operation
    echo "<hr/><h2>Logic and stuffs (C-like)</h2>";
    if ($num==5) {
      echo 'wut? <br/>'; //false
    } elseif ($num==6){
      echo "kek <br/>";
      echo '$num == 6:' . ($num==6) . "<br/>";
      echo '$num >= 5:' . ($num>=5) . "<br/>";
      echo '$num>6 || $num<6:' . ($num>6||$num<6) . "<br/>";
      echo '$num>=5 && $num<=1000:' . ($num>=5 && $num<=1000) . "<br/>";
    } elseif (!($num==5)) {
      echo "last elseif <br/>"; //unreached
    }

    //condition ? val if true : val if false
    $ternaryNum = (5>6)?5:6;
    echo 'ternary operator: (5>6)?5:6 == ' . $ternaryNum . "<br/>";
    //switch
    echo "switch:";
    switch ($ternaryNum) {
      case 1:
        echo 1 . "<br/>";
        break;
      case 2:
        echo 2 . "<br/>";
        break;

      case 3:
        echo 3 . "<br/>";
        break;

      default:
        echo "not". 1 . "," . 2 . "," . 3 . "<br/>";
        break;
    }

    #Loop... C-like, skip
    echo "<hr/><h2>Loop and stuffs (C-like... so skip)</h2>";
    #array
    echo "<hr/><h2>Array (for each loop, adding element)</h2>";
    $arr1 = array('qwer', 'asdf', 'zxcv', (boolean)1.34, TRUE?"true":"false");
    $arr1[5] = "Extra!!";
    foreach ($arr1 as $key => $value) {
      echo '$arr1'."[$key]:$value<br/>";
    }

    echo "<h2>Array (with key value pairing)</h2>";
    $arr2 = array('n1' => 1, 'n2' => 2, 'n3' => 3);
    foreach ($arr2 as $key => $value) {
      echo '$arr2'."[$key]:$value<br/>";
    }

    echo "<h2>Array (Concatanation)</h2>";
    $arr3 = $arr2 + $arr1;
    foreach ($arr3 as $key => $value) {
      echo '$arr3'."[$key]:$value<br/>";
    }

    echo "<h2>Array (n-Dimensional)</h2>";
    $arr4 = array(array(1,2,3), array(2,3,4), array(3,4,5));
    echo "test:".$arr4[0][0]."<br/>";
    foreach ($arr4 as $k1 => $v1) {
      foreach ($v1 as $k2 => $v2) {
        echo '$arr4'."[$k1][$k2]:$v2<br/>";
      }
    }
    echo '<a href="http://php.net/manual/en/language.operators.array.php">...More about array here...</a><br/>';
    #printf()
    echo "<hr/><h2>printf (C-like... skip)</h2>";
    #explode(), implode()
    echo '<hr/><h2><a href="http://php.net/manual/en/function.explode.php">explode(...) function</a>, <a href="http://php.net/manual/en/function.implode.php">implode(...) function</a></h2>';
    #Substring
    echo '<hr/><h2><a href="http://php.net/manual/en/function.explode.php">explode(...) function</a>, <a href="http://php.net/manual/en/function.implode.php">implode(...) function,</a></h2>';

    #function
    function echo_newheadline($str){
      return "<hr/><h2>" . $str . "</h2>";
    }
    function echo_newline($str){
      return $str. "</br>";
    }
    echo echo_newheadline("Function (this h2 is made by function)");

    #function: passbyval or passbyref
    echo echo_newheadline("Function: Pass-by-..?");
    ///////////////////
    function pbVal ($x, $y){
      $x++;
      $y++;
    }
    function pbRef (&$x, &$y) {
      $x++;
      $y++;
    }
    ///////////////////
    $na = 3;
    $nb = 4;
    echo echo_newline("before passing: $na, $nb");
    pbVal($na,$nb);
    echo echo_newline("Val: $na, $nb");
    pbRef($na,$nb);
    echo echo_newline("Ref: $na, $nb");
     ?>

  <hr/>
  <a href="php2.php">PHP2</a>
  </body>

</html>
