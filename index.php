<?php
    include './DecoupFiles/head.php';
?>

<body class="bg-primary index">
    <main class=" vh-100 sm d-flex justify-content-center align-items-center">
        <section
            class=" sm rounded-3 pt-5 pb-5 ps-4 pe-4 w-35 bg-white text-dark d-flex flex-column align-items-center">

            <form action="./dashboard.php" class="w-100">
                <div class="text-start w-100 border-start ms-5 mb-5">
                    <h2 class="fw-bold  ms-2">
                        E-classe
                    </h2>
                </div>
                <div class="text-center mb-5">
                    <h4>SIGN IN</h4>
                    <p class="text-black-50">Enter your credentials to access your account</p>
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label mb-2 text-muted">Email</label>
                    <input type="email" class="form-control p-2 fs-6 border-light" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="exampleInputEmail1">
                </div>
                <div class="mb-4 pb-2">
                    <label for="exampleInputPassword1" class="form-label mb-2 text-muted">Password</label>
                    <input type="password" class="form-control p-2 border-light" placeholder="Enter your password" id="exampleInputPassword1">
                </div>
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-primary w-100 p-2">SIGN IN</button>
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