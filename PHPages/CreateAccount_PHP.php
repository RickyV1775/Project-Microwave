<html>
    <head>
        <title>Create Account PHP</title>
    </head>

    <body>

    <?php

    # Verify that a valid first and last name was entered

    # Initialize variables
    $firstName = returnFirst($_POST['fullName']);
    $lastName = returnLast($_POST['fullName']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verifyPassword = $_POST['verifyPassword'];


    # Check that passwords match


   /* echo $fullName . "</br>";
    echo $email . "</br>";
    echo $password . "</br>";
    echo $verifyPassword . "</br>";*/

    #--------- METHODS -----------
    /* Parses out the first name from the entered first and last name.
     *
     * @param $_POST['fullName'}
     * @return A string with just the first name.
     */
    function returnFirst($fullName){
        $posOfSpace = strpos($fullName, ' ');
        return substr($fullName, 0, $posOfSpace);
    }

    /* Parses out the last name from the entered first and last name.
     *
     * @param $_POST['fullName'}
     * @return A string with just the last name.
     */
    function returnLast($fullName){
        $posOfSpace = strpos($fullName, ' ');
        return substr($fullName, $posOfSpace);
    }






    ?>

    </body>
</html>