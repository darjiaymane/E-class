<?php
    include 'DecoupFiles/head.php';
    include 'DecoupFiles/sideBar.php';
?>

<body class="dash">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="sideBar col-auto px-sm-8 bg-dark w-20 ">
                <div class="d-flex flex-column justify-content-between align-items-center pt-2 min-vh-100">
                    <div class="text-start w-100 border-start d-none d-sm-block">
                        <h4 class="fw-bold ms-2">
                            E-classe
                        </h4>
                    </div>
                    <div class="text-start w-100 border-start d-block d-sm-none ms-4">
                        <h5 class="fw-bold ms-2">
                            E-C
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
                            <a href="./students.html" class="nav-link align-middle px-0 text-dark fs-9 active ps-sm-4 py-2 rounded-1">
                                <i  class="far fa-graduation-cap h6 fw-normal"></i> <span class="ms-2 d-none d-sm-inline">Students</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2 w-100 rounded-1">
                            <a href="./Payments.html" class="nav-link align-middle text-dark fs-9  ps-sm-4 py-2 rounded-1">
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
                    <div class="d-flex justify-content-between py-3 align-items-center">
                        <h4 class="fw-bold">Students List</h4>
                        <div class="d-flex gap-2 gap-sm-3 align-items-center">
                            <i class="far fa-sort text-primary"></i>
                            <a href="#" class=" btn btn-primary d-none d-sm-inline addNew fs-9">ADD NEW STUDENTS</a>
                            <a href="#" class="btn btn-primary d-inline d-sm-none addNew" role="button"><i class="fal fa-user-plus fw-normal h5 text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class=" px-8 height_table table-responsive">
                    <table class="table table_students table-borderless border-top border-2 ">
                        <thead>
                          <tr class="rounded-3 text-table fs-12">
                            <th class="invisible p-8 p-8">jfjfjjf</th>
                            <th class="p-8">Name</th>
                            <th class="p-8">Email</th>
                            <th class="p-8">Phone</th>
                            <th class="p-8">Enroll Number</th>
                            <th class="p-8">Date of admission</th>
                            <th class="invisible p-8">jfjfjjf</th>
                            <th class="invisible p-8">jfjfjjf</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                            <td class="p-8">username</td>
                            <td class="p-8 ">user@email.com</td>
                            <td class="p-8">7305477760</td>
                            <td class="p-8">1234567305477760</td>
                            <td class="p-8">08-Dec, 2021</td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>