<?php
    include 'DecoupFiles/head.php';
?>
<body class="dash">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="sideBar px-sm-8 bg-dark w-20">
                <div class="d-flex flex-column justify-content-between align-items-center pt-2 min-vh-100">
                    <div class="text-start w-100 border-start d-none d-sm-block">
                        <h4 class="fw-bold ms-2">
                            E-classe
                        </h4>
                    </div>
                    <div class="text-start w-100 border-start d-block d-sm-none ms-4">
                        <h5 class="fw-bold ms-2">
                            E-c
                        </h5>
                    </div>
                    <div class="d-none d-sm-flex flex-column align-items-center ">
                        <img class="d-none d-sm-inline w-75 rounded-circle mb-4" src="./assets/youcode.png" alt="#">  
                        <h6 class="d-none d-sm-inline fw-bold fs-11">Admin name</h6>
                        <h6 class=" d-none d-sm-inline text-primary fs-9"> Admin</h6>                  
                    </div>
                    <ul class="nav nav-pills flex-column w-100 ps-sm-3 pe-sm-2 mt-5 mt-sm-0 align-items-center text-center text-sm-start align-items-sm-start" id="menu">
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="./dashboard.html" class="nav-link align-middle px-0 text-dark fs-9 active ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-home-lg-alt h6 fw-normal"></i> <span class="ms-2 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="#" class="nav-link align-middle px-0 text-dark fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-bookmark h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Course</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="./students.html" class="nav-link align-middle px-0 text-dark fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="far fa-graduation-cap h6 fw-normal"></i> <span class="ms-2 d-none d-sm-inline">Students</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="./Payments.html" class="nav-link align-middle text-dark fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-usd-square h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Payment</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="#" class="nav-link align-middle px-0 text-dark fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-file-chart-line h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Report</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="#" class="nav-link align-middle px-0 text-dark fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-sliders-v-square h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mb-2">
                        <a href="./index.html" class="nav-link align-middle px-0 text-dark fs-9 ">
                        <span class="me-2 d-none d-sm-inline fs-9">Logout</span><i class="fal fa-sign-out-alt h6 fw-normal"></i>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col bg-main">
                <nav class="nav-bar d-flex justify-content-between align-items-center p-2 pe-4 pe-sm-5 bg-white">
                    <button class="bg-white border-0"> <i class="fal fa-caret-circle-down fa-rotate-90 text-muted fw-light"></i></button>
                    <div class="d-flex align-items-center gap-3">
                        <div class="input-group border rounded-2 p-1">
                            <div class="form-outline">
                            <input type="search" id="form1" class="ps-2 form-control border-0 d-none d-sm-inline" placeholder="Search" />
                            </div>
                            <button type="button" class="border-0 bg-white px-1 pb-sm-1">
                            <i class="fas fa-search text-muted fw-light"></i>
                            </button>
                        </div>
                        <button class="bg-white border-0"><i class="fas fa-bell ms-1 ms-sm-4 text-muted fw-light"></i></button>
                    </div>
                </nav>
                <div class="d-flex justify-content-between flex-wrap px-8 py-4 flex-sm-nowrap">
                    <div class="bg-1 w-sm-25 w-100 p-3 mt-2 mt-sm-0 ms-0 rounded-3">
                        <i class="far fa-graduation-cap h3 text-1 fw-light"></i>
                        <p class="fs-9 text-muted mt-2">Students</p>
                        <h3 class="text-end fw-bold mt-sm-3">234</h3> 
                    </div>
                    <div class="bg-2 w-sm-25 w-100 p-3 mt-2 mt-sm-0 ms-0 ms-sm-3 rounded-3">
                        <i class="fal fa-bookmark h3 text-2"></i>
                        <p class="fs-9 text-muted mt-2">Course</p>
                        <h3 class="text-end fw-bold mt-sm-3">13</h3>
                    </div>
                    <div class="bg-3 w-25 w-100 p-3 mt-2 mt-sm-0 ms-0 ms-sm-3 rounded-3">
                        <i class="fal fa-usd-square h3 text-primary"></i>
                        <p class="fs-9 text-muted mt-2">Payments</p>
                        <h3 class="text-end fw-bold mt-sm-3"><span class="h6 fw-bold">DHS </span>556,000</h3>
                    </div>
                    <div class="bg-primary w-25 w-100 p-3 mt-2 mt-sm-0 ms-0 ms-sm-3 rounded-3">
                        <i class="fas fa-user h3 fw-light text-white"></i>
                        <p class="fs-9 text-white mt-2">Users</p>
                        <h3 class="text-end fw-bold mt-sm-3">3</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>