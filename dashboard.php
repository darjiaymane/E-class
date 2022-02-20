<?php
    $course = "";
    $payment = "";
    $report = "";
    $settings = "";
    $students = "";
    $home = "active";
    $path="";
    include 'DecoupFiles/head.php';
    include 'DecoupFiles/sideBar.php';
    include 'DecoupFiles/navBar.php';
    include 'operations.php';
    include './dashboardNum/dynamique.php';
?>

                <div class="d-flex justify-content-between flex-wrap px-8 py-4 flex-sm-nowrap">
                    <div class="bg-1 w-sm-25 w-100 p-3 mt-2 mt-sm-0 ms-0 rounded-3">
                        <i class="far fa-graduation-cap h3 text-1 fw-light"></i>
                        <p class="fs-9 text-muted mt-2">Students</p>
                        <h3 class="text-end fw-bold mt-sm-3">
                            <?php
                                $count=calcul('students','id_student',$conn);
                                echo $count;
                            ?>
                        </h3>
                    </div>
                    <div class="bg-2 w-sm-25 w-100 p-3 mt-2 mt-sm-0 ms-0 ms-sm-3 rounded-3">
                        <i class="fal fa-bookmark h3 text-2"></i>
                        <p class="fs-9 text-muted mt-2">Course</p>
                        <h3 class="text-end fw-bold mt-sm-3">
                            <?php
                                $count=calcul('courses','id_course',$conn);
                                echo $count;
                            ?>
                        </h3>
                    </div>
                    <div class="bg-3 w-25 w-100 p-3 mt-2 mt-sm-0 ms-0 ms-sm-3 rounded-3">
                        <i class="fal fa-usd-square h3 text-primary"></i>
                        <p class="fs-9 text-muted mt-2">Payments</p>
                        <h3 class="text-end fw-bold mt-sm-3"><span class="h6 fw-bold">DHS </span>
                            <?php
                                $count=somme('paymentdetail','AmountPaid',$conn);
                                echo $count;
                            ?>
                        </h3>
                    </div>
                    <div class="bg-primary w-25 w-100 p-3 mt-2 mt-sm-0 ms-0 ms-sm-3 rounded-3">
                        <i class="fas fa-user h3 fw-light text-white"></i>
                        <p class="fs-9 text-white mt-2">Users</p>
                        <h3 class="text-end fw-bold mt-sm-3">
                            <?php
                            $count=calcul('user','id_admin',$conn);
                            echo $count;
                            ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'DecoupFiles/footer.php';
?>