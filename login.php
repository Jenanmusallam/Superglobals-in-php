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
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row" style="margin-top: 9rem; ">
                <div class="col-12">
                    <form method="post" action="register.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: #e3f2fd;">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="color: #e3f2fd;">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
                        </div>
                        <button type="submit" class="btn" style="background: #facef9; margin-left:4rem; color:#5f2d5d;" onclick="fun1()">Submit</button>
                    </form>

                    <?php
                    function fun1(){
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        if (empty($email)) {
                            echo '<div class="alert alert-danger" role="alert">Email is empty</div>';
                        } elseif (empty($password)) {
                            echo '<div class="alert alert-danger" role="alert">Password is empty</div>';
                        } else {
                            echo  'Done';
                        }
                    }}
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