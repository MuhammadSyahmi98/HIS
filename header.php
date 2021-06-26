<?php
    session_start();

    require "src/backend/conn.php";



    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)) {

            $password;
            $sql = "SELECT * FROM staff WHERE staff_username = '" . $username . "' or staff_password = '" . $password . "'";

            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                // Success
                $row = $result->fetch_assoc();
                $_SESSION['staff_id'] = $row['staff_id'];
                header('location: staff/');
            } else {
                // Wrong credential
                echo "<script>alert('Wrong credintials')</script>";
            }
        } else {
            // Display error message if one of the input empty
        }
    }

    ?>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand"><b>Health Information System</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav ml-auto action-buttons">
            <div class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Login</a>
                <div class="dropdown-menu action-form">
                    <form method="post">
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                        <div class="text-center mt-2">
                            <a href="#">Forgot Your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </nav>