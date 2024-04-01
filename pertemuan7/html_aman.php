<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Form Input</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Input: <input type="text" name="input">
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Input yang dimasukkan : " . $input;
        }
        ?>

        <?php
        if(isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //Lanjutkan dengan pengolahan email yang aman
            } else {
                //Tangani input yang tidak valid
            }
        }
        ?>
    </body>
</html>