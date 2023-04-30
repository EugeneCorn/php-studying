<!DOTYPE html>
<html>
    <head>
        <title>PHP Studying</title>
    </head>
    <body>
        <h1>My first PHP page</h1>
        <h2>PHP Variables</h2>
        <?php
        // PLAYING WITH VARIABLES

        $x = 5+7; // global scope
        $b = 77; $c = 8;

        echo $c;
        function myTest() {
            $y = 6;
            global $b;
            // using x inside this function will generate an error
            echo "<p>Variable y <strong>inside</strong> function is: $y </p>";
            echo "<p>Global variable x <strong>inside</strong> function is: $GLOBALS[x]</p>";
            echo "<p>Global variable b <strong>inside</strong> function is: $b</p>";
        }
        myTest();
        
        function AnotherTest() {
            static $z = 1;
            echo "$z<br>";
            $z++;
            
        }
        AnotherTest();
        AnotherTest();
        AnotherTest();

        echo "<p>Variable x <strong>otside</strong> function is: $x</p>";
        echo "<p>Variable z <strong>otside</strong> the 'AnotherTest' function is: $z</p>";

        echo "Trying to adding nums:<br>";
        $a = 2;
        echo $x+$a;

        /* This isn't working:
        echo "<br>Trying to adding worlds:<br>";
        $h = 'Hello ';
        $w = 'World!';
        echo $h+$w; */
        ?>
        
        <h2>PHP ECHO and PRINT</h2>
        <?php
        // PLAYING WITH ECHO and PRINT
        echo "<h3>Playing with the echo command:</h3>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        print "<h3>Playing with the print command:</h3>";
        print "Hello world!<br>";
        /* It can't do this: 
        print "This ", "string ", "was ", "made ", "with multiple parameters."; */
        print $a + $b;
        ?>

        <h2>PHP Data Types</h3>
        <?php
        echo "<h3>Playing with DATA TYPES:</h3>";
        $num1 = 3000000000;
        $num2 = 1000000000;
        echo $num1 + $num2;
        echo "<br>";
        var_dump($num1);

        $float = 5.25;
        echo "<br>$float<br>";
        echo "<br>";
        var_dump($float);
        echo "<br>";

        $cars = array("Volvo","BMW","Toyota");
        echo "<br>";
        echo "<br>$cars[0]<br>";
        var_dump($cars);
        echo "<br>";

        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function message () {
                return "My car is a " . $this->color . " " . $this->model . "!";                
            }
        }
        echo "<h3>Objects</h3>";

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();

        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();
        ?>


        <h2>Srtring Functions</h2>
        <?php
        function br() {
            echo "<br>";
        }

        echo "String length counting: <br>";
        echo strlen("Hello world!");
        
        br();
        echo "Counting words in a string: <br>";
        echo str_word_count("Hello world, how are you? ,,,12 6 'F*CK', world-wide-web"); 
        // numbers aren't words, "world-wide-web" counts like one word

        br();
        echo "Reverse string: <br>";
        echo strrev("Hello world!");

        br();
        echo "Search for a Text within String: <br>";
        echo strpos("This is you word? Say one more word!", "word");
        br();
        echo strpos("Hi, my name is Tyler Derden!", "Tyler");

        br();
        echo "Replace text within a string: <br>";
        echo str_replace("world", "Dolly", "Hello world!");
        br();
        echo str_replace("Tyler Derden", "Ivan Petrov", "Hi, my name is Tyler Derden! I repeat, my name is Tyler Derden!");
        ?>

        <h2>PHP Numbers</h2>
        <?php
        echo "<h3>Integers</h3>";
        $max_integer = 9223372036854775807 ;
        echo $max_integer;
        //echo $PHP_INT_MAX;
        echo "<br>Is integer:";
        var_dump(is_int($max_integer));
        echo "<br>Is finite:";
        var_dump(is_finite($max_integer));
        echo "<br>Is infinite:";
        var_dump(is_infinite($max_integer));
        echo "<br>Is NaN:";
        var_dump(is_nan($max_integer));
        echo "<br>Is numeric:";
        var_dump(is_numeric($max_integer));
        
        echo "<h3>Floats</h3>";
        $float = 256.4;
        echo $float;
        br();
        var_dump(is_float($float));

        echo "<h3>Casting</h3>";
        $some_num = 23.34543;
        echo "Cast to integer";
        br();
        $int_cast = (int)$some_num;
        echo "is $some_num an integer? "; var_dump(is_int($some_num));
        br(); 
        echo "is $int_cast an integer? "; var_dump(is_int($int_cast));
        ?>

        <h2>PHP Math</h2>
        <?php
        echo "Pi:<br>";
        echo (pi());
        br();
        echo "Min and Max functions:<br>";
        echo(min(-200, 0, 150, 30, 20, -8));
        br();
        echo(max(0, 150, 30, 20, -8, -200));
        br();
        echo "Absolute positive number of a value: <br>";
        echo(abs(-100));
        br();
        echo("Return square of a number:<br>");
        $sqrt = 100;
        echo(sqrt($sqrt));
        br();
        $square = sqrt($sqrt);
        $sum = $square * $square;
        echo($sum);
        br();
        echo "Round a floating point number: <br>";
        echo(round(0.60));
        br();
        echo(round(0.49));
        br();
        echo(rand());
        ?>

        <h2>PHP Constants</h2>
        <?php
        br();
        define ("cars", [
            "Alfa Romeo",
            "BMW",
            "Toyota",
            "Ford",
            "Mazda"
        ]);
        echo "Are you riding " . cars[rand(0, 4)] . "?";
        br();
        define("Greeting", "Welcome to the club " . cars[rand(0, 4)] . "!");
        echo Greeting;
        br();
        ?>

        <h2>PHP If...Else...Elsif</h2>
        <?php
        $t = date("H");

        if ($t > "20") {
            echo "Have a good night!";
        }
        
        br();

        if ($t < "20") {
            echo "HAve a good day!";
        } else {
            echo "Have a good night!";
        }

        br();

        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        ?>

        <h2>PHP Switch</h2>
        <?php
        
        $favcolor = "red";

        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "You don't have any favorite colors...";
        }
        ?>
    </body>
</html>