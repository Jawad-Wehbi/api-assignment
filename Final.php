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
</body>

</html>