<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP2--OOP</title>
  </head>
  <body>
    <h2>More About Class <a href="http://php.net/language.oop5">Here</a></h2>
    <hr/>
    <h3>Magic Methods of Class <a href="http://php.net/manual/en/language.oop5.magic.php">Here</a></h3>
    <hr/>
    <h3><a href="http://www.newthinktank.com/2014/08/object-oriented-php/">Also this (Derek's)</a></h3>
    <hr/>

    <?php

    #Class (Mix of Java and Some C++)
    /**Animal abstract class
     * have name, preferred food, id
     */
     abstract class Animal {
      //private
      protected $name;
      protected $food;
      protected $id;

      public static $population = 0;
      const KINGDOM = "Animal Kingdom"; //static, default public

      ###Magic Methods (Start with __XX)###
      ##Member function default public##
      #Constructor
      function __construct(){
        $this->id = Animal::$population;    //Dollar sign fuckery: $ptr->member1 access $member1,
        Animal::$population++;              //Whilst $ptr->$x will first evaluate $x (Say, "member2"),
                                            //Then look up $ptr->member2.
        echo "Animal" . $this->id . "has been born <br/>";
      }

      #Destructor
      function __destruct(){
        echo "Animal" . $this->id . "has died <br/>";
        Aniaml::$population--;
      }

      #Magic getter, allow for direct-access like behavior
      function __get($name){
        return $this->$name;
      }
      #Magic setter, allow for direct-mutation like behavior
      function __set($name, $value){
        $this->$name = $value;
      }

      #abstract function
      abstract protected function moving();
      // {
      //   echo "$this->name moved!";
      // }
    }



    /**Inheritence:
     * Dog Class
     */
    class Dog extends Aniaml
    {
      function __construct($name, $food)
      {
        parent::__construct();
        $this->name = $name;
        $this->food = $food;
      }

      function moving(){
        return $this->name . "moved with four legs!!<br/>";
      }
    }

    function moveAnimal(Aniaml $a){
      echo $a->moving();
    }

    $dog1 = new Dog("PupPup", "Fluff");
    moveAnimal($dog1);
    echo $dog1->moving();



     ?>

  </body>
</html>
