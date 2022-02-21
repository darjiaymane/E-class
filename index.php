<?php
    session_start();
    $path="";
    $error1="";
    $error2="";
    $wrong_info="";
    include './DecoupFiles/head.php';
    include 'operations.php';
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        if(isset($_POST['submit'])){
            $username=test_input($_POST['username']);
            $password=test_input($_POST["password"]);
            if(empty($username)){
                $error1= "please enter your email";
            }
            if(empty($password)){
                $error2= "please enter your password";
            }
            if(!empty($username) && !empty($password)){
                $sql_valid= "SELECT * FROM user WHERE username='$username' AND password='$password' or email='$username' AND password='$password'";
                $REQ = mysqli_query($conn, $sql_valid);
                if(mysqli_num_rows($REQ) == 1){
                    $REQ=mysqli_query($conn, $sql_valid)->fetch_array();
                    $_SESSION['Fname']=$REQ['Fname'];
                    $_SESSION['Lname']=$REQ['Lname'];
                    header('location:dashboard.php');
                }
                else{
                    $wrong_info='You entered a wrong email or password please check ';
                }
            }
        }

    ?>

<body class="bg-primary index">
    <main class=" vh-100 sm d-flex justify-content-center align-items-center">
        <section
            class=" sm rounded-3 pt-5 pb-5 ps-4 pe-4 w-35 bg-white text-dark d-flex flex-column align-items-center">
            <form action="" method="POST" class="w-100">
                <div class="text-start w-100 border-start ms-5 mb-5">
                    <h2 class="fw-bold  ms-2">
                        E-classe
                    </h2>
                </div>
                <div class="text-center mb-3">
                    <h4>SIGN IN</h4>
                    <p class="text-black-50">Enter your credentials to access your account</p>
                    <p class="alert alert-danger fs-11 border-0 mt-2" role="alert"><?php echo $wrong_info; ?></p>
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label mb-2 text-muted">Email</label>
                    <input type="text" name="username"  class="form-control p-2 fs-6 border-light" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="exampleInputEmail1">
                    <p class="alert alert-danger fs-11 border-0 text-center mt-2" role="alert"><?php echo $error1 ;?></p>
                </div>
                <div class="mb-4 pb-2">
                    <label for="exampleInputPassword1" class="form-label mb-2 text-muted">Password</label>
                    <input type="password"  name="password"  class="form-control p-2 border-light" placeholder="Enter your password" id="exampleInputPassword1">
                    <p class="alert alert-danger fs-11 border-0 text-center mt-2" role="alert"><?php echo $error2 ;?></p>
                </div>
                <div class="mb-3 form-check d-flex align-items-center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label ms-2" for="exampleCheck1">Remember me</label>
                </div>
                <div class="text-center mb-3">
                    <button type="submit" name="submit" class="btn btn-primary w-100 p-2">SIGN IN</button>
                </div>
            </form>
            <div>
                <p class="text-black-50">Forgot your password? <a href="" class="text-primary">Reset Password</a> </p>
            </div>
        </section>
    </main>
<?php
    include 'DecoupFiles/footer.php';
?>