<?php
    $path="";
    include './DecoupFiles/head.php';
    include 'operations.php';
    include 'valide.php';
    ?>

<body class="bg-primary index">
    <main class=" vh-100 sm d-flex justify-content-center align-items-center">
        <section
            class=" sm rounded-3 pt-5 pb-4 ps-4 pe-4 w-35 bg-white text-dark d-flex flex-column align-items-center">
            <form action="valide.php" method="POST" class="w-100">
                <div class="text-start w-100 border-start ms-5 mb-5">
                    <h2 class="fw-bold  ms-2">
                        E-classe
                    </h2>
                </div>
                <div class="text-center mb-3">
                    <h4>SIGN IN</h4>
                    <p class="text-black-50">Enter your credentials to access your account</p>
                    <p class="alert alert-danger fs-11 border-0 mt-2" role="alert">
                        <?php
                        if(isset($_SESSION['wrong_info'])){
                            echo $_SESSION['wrong_info'] ;}
                        ?>
                    </p>
                </div>

                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label mb-2 text-muted">Email</label>
                    <input type="text" name="username"  class="form-control p-2 fs-6 border-light" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="exampleInputEmail1" value="<?php if (isset($_COOKIE['password'])){echo ($_COOKIE['email']);} ?>">
                    <p class="alert alert-danger fs-11 border-0 text-center mt-2" role="alert">
                        <?php
                        if(isset($_SESSION['error1'])){
                        echo $_SESSION['error1'] ;}
                        ?>
                    </p>
                </div>
                <?php
                 //  $lolo=$_COOKIE["email"];
                 // echo $lolo;
                ?>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label mb-2 text-muted">Password</label>
                    <input type="password"  name="password"  class="form-control p-2 border-light" placeholder="Enter your password" id="exampleInputPassword1" value="<?php if (isset($_COOKIE['password'])){echo ($_COOKIE['password']);}?>">
                    <p class="alert alert-danger fs-11 border-0 text-center mt-2" role="alert">
                        <?php
                        if(isset($_SESSION['error2'])){
                            echo $_SESSION['error2'] ;}
                        ?>
                    </p>
                </div>
                <div class="mb-3 ms-2 form-check d-flex align-items-center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label ms-2"  for="exampleCheck1">Remember me</label>
                </div>
                <div class="text-center mb-3">
                    <button type="submit" name="submit" class="btn btn-primary w-100 p-2">SIGN IN</button>
                </div>
            </form>
            <div>
                <p class="text-black-50">Forgot your password? <a href="" class="text-primary">Reset Password</a> </p>
                <p class="text-black-50 mt-2 text-center">Create new account? <a href="signup.php" class="text-primary">Sign up</a> </p
            </div>
        </section>
    </main>
<?php
    include 'DecoupFiles/footer.php';
    session_destroy();

?>