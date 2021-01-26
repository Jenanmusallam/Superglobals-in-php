<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
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

    <?php
    extract($_POST);
    if (isset($save)) {
        switch ($ch) {
            case '+':
                $res = $fn + $sn;
                break;

            case '-':
                $res = $fn - $sn;
                break;

            case '*':
                $res = $fn * $sn;
                break;
            case '/':
                $res = $fn / $sn;
                break;
        }
    }

    ?>
    <div class='container'>
        <div class="justify-content-center" style="color:#e3f2fd;">
            <h1 class="text-center" style="margin: 6rem 0rem;">Calculator</h1>
            <form method="post">
                <table align="center" class="table" style="width: 43%;">
                    <tr>
                        <th>Enter Num</th>
                        <th><input type="number" name="fn" value="<?php echo @$fn; ?>" /></th>
                    </tr>
                    <tr>
                        <th>Enter Num</th>
                        <th><input type="number" name="sn" value="<?php echo @$sn; ?>" /></th>
                    </tr>
                    <tr>
                        <th>Select Choice</th>
                        <th>
                            <select name="ch" class="form-select" style="width: 6vw;">
                                <option>+</option>
                                <option>-</option>
                                <option>*</option>
                                <option>/</option>
                            </select>
                            <input type="submit" name="save" value="=" style="margin-left: 2rem; width: 8vw;"/>
                        </th>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <th>Result</th>
                        <th><input type="number" readonly="readonly" disabled="disabled" value="<?php echo @$res; ?>" /></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>