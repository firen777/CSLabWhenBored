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
    $name = $_POST['name'];
    $pw = $_POST['pw'];

    #String concatanation
    echo $name . " " . $pw . "<br/>";

    #heredoc String
    $str = <<<EOD
    <h2><a href="http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc">Heredoc for php string</a></h2>
    and for var. <br/>
    Name: $name <br/>
    PW: $pw <br/>
EOD;

    echo $str;

    #Constant definition
    define('PI', 3.2);

    echo "PI: " . PI . "<br/>";

    #Reference
    $num = 5;
    $nRef= &$num;

    echo 'Reference of Num: $nRef == ' . $nRef++ . "<br/>"; //escaping $var with SINGLE QUOTE
    echo 'After $nRef++, $num == ' . $num . "<br/>";

    #Logical operation
    if ($num==5) {
      echo 'wut? <br/>'; //false
    } elseif ($num==6){
      echo "kek <br/>";
      echo '$num == 6:' . ($num==6) . "<br/>";
      echo '$num >= 5:' . ($num>=5) . "<br/>";
      echo '$num>6 || $num<6:' . ($num>6||$num<6) . "<br/>";
      echo '$num>=5 && $num<=1000:' . ($num>=5 && $num<=1000) . "<br/>";
    } elseif ($num!=5) {
      echo "last elseif <br/>"; //unreached
    }

     ?>


  </body>
</html>
