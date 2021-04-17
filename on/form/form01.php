<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function testInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name_err = $email_err = $website_err = $gender_err = "";
    $name = $email = $website = $gender = $comment = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $name_err = "Name is required";
        } else {
            $name = testInput($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $name_err = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $email_err = "Email is required";
        } else {
            $email = testInput($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website_err = "";
        } else {
            $website = testInput($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $website_err = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = testInput($_POST["comment"]);
        }

        if (empty($_POST['gender'])) {
            $gender_err = 'Gender is required';
        } else {
            $gender = testInput($_POST['gender']);
        }
    }

    ?>
    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="">
        <label for="name">Name :</label>
        <input id="name" type="text" name="name" value="<?php echo $name ?>" /><span>* <?php echo $name_err ?></span> <br /><br />

        <label for="email">Email :</label>
        <input id="email" type="text" name="email" value="<?php echo $email ?>" /><span>*<?php echo $email_err ?></span><br /><br />
        <label for="website">Website</label>
        <input id="website" type="text" name="website" value="<?php echo $website ?>" /><span><?php echo $website_err ?></span><br /><br />
        <label for="comment">Comment :</label>
        <textarea id="comment" name="comment"><?php echo $comment ?></textarea><br /><br />
        <label>Gender :</label>
        <input type="radio" <?php  if($gender=="female") echo "checked" ?> checked name="gender" value="female">Female
        <input type="radio" <?php  if($gender=="male") echo "checked" ?> name="gender" value="male">Male
        <input type="radio" <?php  if($gender=="other") echo "checked" ?> name="gender" value="other">Other<br /><br />
        <input type="submit" value="Submit" name="submit"><br /><br />

    </form>
    <h2>Your Input:</h2>
    <?php
    echo "<br />";
    echo $name;
    echo "<br />";
    echo $email;
    echo "<br />";
    echo $website;
    echo "<br />";
    echo $comment;
    echo "<br />";
    echo $gender;
    ?>
</body>

</html>