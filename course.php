<?php
    session_start();
    if(isset($_SESSION['Fname'])){
        $home= "";
        $course = "active";
        $payment = "";
        $report = "";
        $settings = "";
        $students = "";
        $path="";
        include 'DecoupFiles/head.php';
        include 'DecoupFiles/sideBar.php';
        include 'DecoupFiles/navBar.php';
        include 'operations.php';
?>
            <div class=" px-8">
                <div class="d-flex justify-content-between py-3 align-items-center">
                    <h4 class="fw-bold">Courses List</h4>
                    <div class="d-flex gap-2 gap-sm-3 align-items-center">
                        <i class="far fa-sort text-primary"></i>
                        <a class=" btn btn-primary d-none d-sm-inline addNew fs-9">ADD NEW COURSE</a>
                        <a class="btn btn-primary d-inline d-sm-none addNew" role="button"><i class="fal fa-user-plus fw-normal h5 text-white"></i></a>
                    </div>
                </div>
            </div>
            <div class=" px-8 height_table table-responsive">
                <table class="table table_students table-borderless border-top border-2 ">
                    <thead>
                        <tr class="rounded-3 text-table fs-12">
                            <th class="invisible p-8 p-8">Course cover</th>
                            <th class="p-8">Course Name</th>
                            <th class="p-8">Course Description</th>
                            <th class="p-8">Date of Creation</th>
                            <th class="p-8">Price</th>
                            <th class="invisible p-8">Edit</th>
                            <th class="invisible p-8">Delete</th>
                        </tr>
                    </thead>
                    <?php
                        $REQ= mysqli_query($conn, 'SELECT * FROM courses');
                    ?>
                    <tbody>
                    <?php foreach($REQ as $course): ?>
                        <tr class="bg-white align-middle">
                            <td class="p-8"><img src="./assets/course.png" alt="" height="150px" ></td>
                            <td class="p-8"><?php echo $course["libelle"] ?></td>
                            <td class="p-8"><p class="lolo"><?php echo $course["description"] ?></p></td>
                            <td class="p-8"><?php echo $course["dateOfCreation"] ?></td>
                            <td class="p-8"><?php echo $course["price"] ?> DHS</td>
                            <td class="p-8"><a href="#"><i class="far fa-pen text-primary"></i></a></td>
                            <td class="p-8"><a href="#"><i class="far fa-trash text-primary"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    }
    else{
        header('location:index.php');
    }
    include 'DecoupFiles/footer.php';
?>
