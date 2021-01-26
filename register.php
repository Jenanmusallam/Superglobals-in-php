<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background-color: #5f2d5d;">

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <a class="navbar-brand mr-5" href="index.php">Navbar </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php
                function menuList($name, $link)
                {
                    echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-info" href=' . $link . '>' . $name . '<span class="sr-only">(current)</span></a> </li>';
                }
                $name = array("Login", "Search", "Calculator", "To Do List");
                $link = array("login.php", "search.php", "calculator.php", "toDolist.php");
                array_map("menuList", $name, $link);
                ?>
            </ul>
        </div>
    </nav>
    <div class="container" style="text-align: center;">
        <div class="justify-content-center">
            <div class="row" style="margin: 9rem auto; ">
                <div class="col-12" alert="center">
                    <h2 style="color:#e3f2fd;">Register</h2>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        if (empty($email) && empty($password)) {
                            echo "Email and Password is Empty";
                        } else {
                            echo  '<div class="alert alert-info" role="alert">Email : ' . $email . '<br> Password : ' . $password . '</div>';
                        }
                    }
                    ?>
                </div>
                <div class="col-12">
                    <?php
                    echo '<br>';
                    function getProjectName()
                    {
                        $project = explode('/', $_SERVER['PHP_SELF'])[3];
                        $script = explode('/', $_SERVER['PHP_SELF'])[4];
                        echo  '<div style="color:#e3f2fd;">Project Name : ' . $project . ' <br>  Script : ' . $script . '</div>';
                    }

                    getProjectName();
                    echo '<br>';
                    //Q6
                    // Sleep(5); //php script sleeps 5 seconds
                    echo '<div style="color:#e3f2fd;"> Determine page requested time : ' . Date('y-m-d h:i:s', Time()) . '</div>'; //get timestamp of current system time
                    echo "<br>";
                    // Q7-8
                    session_start();
                    if (isset($_SESSION['views'])) {
                        $_SESSION['views'] = $_SESSION['views'] + 1;
                    } else {
                        $_SESSION['views'] = 1;
                    }
                    echo '<div style="color:#e3f2fd;">Total page views = ' . $_SESSION['views'] . '</div>';

                    //Q9
                    echo '<br>';
                    $cookie_name = 'Jenan';
                    $cookie_value = 'Welcome';
                    setcookie($cookie_name, $cookie_value, time() + (2592000), '/', true);

                    if (!isset($_COOKIE[$cookie_name])) {
                        echo '<div style="color:#e3f2fd;">';
                        echo "Cookie named ' " . $cookie_name . " ' is not set!";
                        echo '</div>';
                    } else {
                        echo '<div style="color:#e3f2fd;">';
                        echo "Cookie '" . $cookie_name . "' is set!<br>";
                        echo "Value is: " . $_COOKIE[$cookie_name];
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>