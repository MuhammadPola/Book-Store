<?php
session_start();
// declare variables
$errEmpty = $errName = $errEmail = $errCSRF = $csrf_tokin =  $success = $error = "";

// check if the $_SESSION['csrf_key'] is empty to create new one 
if (empty($_SESSION['csrf_key'])) {
    $_SESSION['csrf_key'] = bin2hex(random_bytes(24));
}
// creat csrf_tokin
$csrf_tokin = hash_hmac("sha256", "this is some string to prevent: csrf", $_SESSION['csrf_key']);


// prevent xss attack
function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, "UTF-8");
    return $data;
}

//  check the submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = testInput($_POST['name']);
    $email = testInput($_POST['email']);
    $subject = testInput($_POST['subject']);
    $comment = testInput($_POST['comment']);
    $csrf_user = testInput($_POST['csrf']);

    // prevent csrf attack
    if (!hash_equals($csrf_tokin, $csrf_user)) {
        $errCSRF = "CSRF attack";
    }

    // check empty fields
    if (empty($name) || empty($email) || empty($subject) || empty($comment) || empty($csrf_user)) {
        $errEmpty = "Pease fil out all fields";
    }

    // check the name 
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errName = "only letter and white space allowed";
    }

    // check the email is valid email address or not
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Please Enter a valid email address";
    }

    if (empty($errEmpty) && empty($errName) && empty($errCSRF) && empty($errEmail)) {

        $to = "muhammad.pola19@gmail.com";
        $header = $comment . "<br> by" . $email;
        if (mail($to, $subject, $header)) {
            $success = "Email sent Success fully";
        } else {
            $error = "Some singe went wrong";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
        integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Navbar  -->
    <?php require 'header.php'; ?>
    <!-- navbar end -->

    <!-- contact -->
    <div class="col-sm-9 col-md-8 col-lg-6  mx-auto my-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="my-5">
            <h3 class="text-center m-4 ">Contact us</h3>
            <!-- message section -->
            <div>
                <p class="text-danger  text-center">
                    <?php if (!empty($errEmpty)) {
                        echo $errEmpty;
                    } ?>
                </p>
                <p class="text-danger  text-center"><?php if (!empty($errCSRF)) {
                                                        echo $errCSRF;
                                                    } ?></p>
                <p class="text-success text-center "><?php if (!empty($success)) {
                                                            echo $success;
                                                        } ?></p>
                <p class="text-danger text-center "><?php if (!empty($error)) {
                                                        echo $error;
                                                    } ?></p>
            </div>
            <!-- name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
                <span class="text-danger"><?php if (!empty($errName)) {
                                                echo $errName;
                                            } ?></span>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                <span class="text-danger"><?php if (!empty($errEmail)) {
                                                echo $errEmail;
                                            } ?></span>
            </div>
            <!-- Subject -->
            <div class="form-group">
                <label for="sub">Subject</label>
                <input type="text" name="subject" id="sub" class="form-control" placeholder="Enter Subject" required>
            </div>
            <!-- comment -->
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" required
                    placeholder="Enter your message"></textarea>
            </div>
            <input type="hidden" name="csrf" value="<?php echo $csrf_tokin ?>" required>
            <button type="submit" class="btn btn-dark" name="submit"><i class="fa fa-paper-plane"
                    aria-hidden="true"></i> Send message</button>
        </form>
    </div>

    <!-- footer -->
    <?php require 'footer.php'; ?>
    <!-- footer end -->
</body>

</html>