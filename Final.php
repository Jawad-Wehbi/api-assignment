<html>

<head>
    <title>frontend-of-apis</title>

    <link href="styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <form method="get">
        Enter the String:
        <input type="text" name="string"><br />
        <input type="submit" title="submit" />
    </form>
    <?php
    function start()
    {
        // enter the string...
        $string = $_GET['string'];

        // Implement function to do identify if a string is palindrome...
        function Palindrome($string)
        {
            $l = 0;
            $r = strlen($string) - 1;
            $flag = 0;
            // $l is the first index and $r is the last index
            while ($r > $l) {
                if ($string[$l] != $string[$r]) {
                    $flag = 1;
                    break;
                }
                $l++;
                $r--;
            }

            $result = "";
            // after the flag is 0 the scannig of the word is ended 
            if ($flag == 0) {
                $result = "Palindrome";
            } else {
                $result = "Not Palindrome";
            }

            $data = array("Name" => $string, "Result" => $result);
            echo json_encode($data);
        }
        Palindrome($string);
    }

    if (isset($_GET["string"])) {
        start();
    }
    ?>

    <form method="post">
        Enter a, b, andc:<br />
        <input type="int" name="a"><br />
        <input type="int" name="b"><br />
        <input type="int" name="c"><br />
        <input type="submit" title="submit" />
    </form>


    <?php

    function startApi2()
    {

    // Input 3 variables a, b,and c
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    // implement the equation
    $result = (pow($a, 3) + ($b * $c) - ($a / $b));
    // insert result into json
    $data = ["result" => $result];
    echo json_encode($data);


    }
    if (isset($_POST["a"]) and isset($_POST["b"]) and isset($_POST["c"])){
    startApi2();
    }
    ?>

    <form method="post">
        Password:<br />
        <input type="string" name="password"><br />
        <input type="submit" title="submit" />
    </form>


    <?php

    function startApi3()
    {
        // enter the password
        $password = $_POST['password'];
        // password must contain uppercase, lowercase, number, and $specialChars
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-12]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
                $result='Password should be at least 12 characters in length and should include at least one upper case letter, one number, and one special character.';
            }else{
                $result='Strong password.';
            }

        // insert result into json
        $data=["result"=>$result];
        echo json_encode($data);
    }
    if (isset($_POST["password"])){
        startApi3();
        }
    ?>

<br />

    <?php

    function startApi4()
    {
    // get christmas date and today's daate
    $christmas = date('Y-12-25');
    $today     = date('Y-m-d');
    // if today is after this year's christmas

        if ($today > $christmas) {
            $christmas = date('Y-12-25', strtotime($christmas.'+1 year'));
        }
        
    // if today is before this year's christmas
    echo round((strtotime($christmas) - strtotime($today)) / 86400) .  " days for christmas";
    }

    startApi4();
        
    ?>

</body>

</html>