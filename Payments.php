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
                            <a href="./dashboard.html" class="nav-link align-middle px-0 text-dark fs-9 ps-sm-4 py-2 rounded-1">
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
                            <a href="./Payments.html" class="nav-link align-middle text-dark fs-9 active ps-sm-4 py-2 rounded-1">
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
            <div class="col bg-main vh-100 w-80">
                <nav class="nav-bar d-flex justify-content-between align-items-center p-2 pe-4 pe-sm-5 bg-white">
                    <button class="bg-white border-0"> <i class="fal fa-caret-circle-down fa-rotate-90 text-mutedx fw-light "></i></button>
                    <div class="d-flex align-items-center gap-3">
                        <div class="input-group border rounded-2 p-1">
                            <div class="form-outline">
                            <input type="search" id="form1" class="ps-2 form-control border-0 d-none d-sm-inline" placeholder="search" />
                            </div>
                            <button type="button" class="border-0 bg-white px-1 pb-sm-1">
                            <i class="fas fa-search text-muted fw-light "></i>
                            </button>
                        </div>
                        <button class="bg-white border-0"><i class="fas fa-bell ms-1 ms-sm-4 text-muted fw-light"></i></button>
                    </div>
                </nav>
                <div class=" px-8">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <h4 class="fw-bold">Students List</h4>
                        <i class="far fa-sort text-primary"></i>
                    </div>
                </div>
                <div class=" px-8 height_table table-responsive">
                    <table class="table table_students table-borderless border-top border-2 ">
                        <thead>
                          <tr class="rounded-3 text-table fs-12">
                            <th class="p-8">Name</th>
                            <th class="p-8">Payment Scheduele</th>
                            <th class="p-8">Bill Number</th>
                            <th class="p-8">Amount Paid</th>
                            <th class="p-8">Balance amount</th>
                            <th class="p-8">Date</th>
                            <th class="invisible p-8">icon</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-white align-middle">
                            <td class="p-8">Karthi</td>
                            <td class="p-8">First</td>
                            <td class="p-8 ">00012223</td>
                            <td class="p-8">DHS 100,000</td>
                            <td class="p-8">DHS 500,000</td>
                            <td class="p-8">05-Jan,2022</td>
                            <td class="p-8"><i class="fas fa-eye text-primary fw-light"></i></td>
                          </tr>
                          <tr class=" align-middle">
                            <td class="p-8">Karthi</td>
                            <td class="p-8">First</td>
                            <td class="p-8 ">00012223</td>
                            <td class="p-8">DHS 100,000</td>
                            <td class="p-8">DHS 500,000</td>
                            <td class="p-8">05-Jan,2022</td>
                            <td class="p-8"><i class="fas fa-eye text-primary fw-light"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8">Karthi</td>
                            <td class="p-8">First</td>
                            <td class="p-8 ">00012223</td>
                            <td class="p-8">DHS 100,000</td>
                            <td class="p-8">DHS 500,000</td>
                            <td class="p-8">05-Jan,2022</td>
                            <td class="p-8"><i class="fas fa-eye text-primary fw-light"></i></td>
                          </tr>
                          <tr class="align-middle">
                            <td class="p-8">Karthi</td>
                            <td class="p-8">First</td>
                            <td class="p-8 ">00012223</td>
                            <td class="p-8">DHS 100,000</td>
                            <td class="p-8">DHS 500,000</td>
                            <td class="p-8">05-Jan,2022</td>
                            <td class="p-8"><i class="fas fa-eye text-primary fw-light"></i></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>