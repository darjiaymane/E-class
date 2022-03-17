<?php
session_start();
$path="";
include './DecoupFiles/head.php';
include 'operations.php';
?>
<body class="bg-primary index">
<main class=" vh-100 sm d-flex justify-content-center align-items-center">
    <section class=" sm rounded-3 pt-4 pb-4 ps-4 pe-4 w-35 bg-white text-dark d-flex flex-column align-items-center">
            <form class="p-3" method="POST" action="./students/add.php">
                <div class="text-start w-100 border-start ms-5 mb-3">
                    <h2 class="fw-bold  ms-2">
                        E-classe
                    </h2>
                </div>
                <div class="text-center mb-3">
                    <h4>SIGN UP</h4>
                    <p class="text-black-50">Créer votre compte E-classe Administrator</p>
                    <small class="text-danger"><?php
                        if(isset($_SESSION['error4'])){
                            echo $_SESSION['error4'] ;}
                        ?></small>
                </div>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <div class="mb-3 w-100">
                        <label for="fname" class="form-label  text-muted">First Name</label>
                        <input class="form-control p-1" type="text" id="fname" name="Fname" required/>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="lname" class="form-label  text-muted">Last Name</label>
                        <input class="form-control p-1" id="lname" type="text" name="Lname" required/>
                    </div>
                </div>
                 <div class="mb-3">
                    <label for="username" class="form-label  text-muted">Username</label>
                    <input class="form-control p-1" type="text" id="username" name="username" required/>
                </div>
                <div class="mb-3">
                    <label for="email"  class="form-label  text-muted">Email</label>
                    <input class="form-control p-1" type="email" id="email" name="email" required/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label  text-muted">Password</label>
                    <input class="form-control p-1" id="password" type="password" name="password" required/>
                </div>
                <div class="text-center mb-3">
                    <button type="submit" name="signup" class="btn btn-primary w-100 p-2">SIGN UP</button>
                </div>
            </form>
            <div>
                <p class="text-black-50 mt-2 text-center">Already have an account? <a href="index.php" class="text-primary">Sign in</a> </p
            </div>
    </section>
</main>
<?php
    include 'DecoupFiles/footer.php';
    session_destroy();

?>

