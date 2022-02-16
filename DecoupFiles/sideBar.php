<?php

    $sideBar = <<<Sidebar
    <body class="dash">
    <div class="container-fluid">
        <div class="row">
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
                            <a href="./dashboard.php" class="nav-link align-middle px-0 text-dark $home fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-home-lg-alt h6 fw-normal"></i> <span class="ms-2 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="#" class="nav-link align-middle px-0 text-dark $course fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-bookmark h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Course</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="./students.php" class="nav-link align-middle px-0 text-dark $students fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="far fa-graduation-cap h6 fw-normal"></i> <span class="ms-2 d-none d-sm-inline">Students</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="./Payments.php" class="nav-link align-middle text-dark $payment fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-usd-square h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Payment</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="#" class="nav-link align-middle px-0 text-dark $report fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-file-chart-line h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Report</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="#" class="nav-link align-middle px-0 text-dark $settings fs-9 ps-sm-4 py-2 rounded-1">
                                <i  class="fal fa-sliders-v-square h6 fw-normal"></i> <span class="ms-3 d-none d-sm-inline">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mb-2">
                        <a href="./index.php" class="nav-link align-middle px-0 text-dark fs-9 ">
                        <span class="me-2 d-none d-sm-inline fs-9">Logout</span><i class="fal fa-sign-out-alt h6 fw-normal"></i>
                    </a>
                    </div>
                </div>
            </div>
    Sidebar;

    echo $sideBar;
    
?>