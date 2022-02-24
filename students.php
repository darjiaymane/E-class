<?php
        session_start();
    if(isset($_SESSION['Fname'])){
        $home= "";
        $course = "";
        $payment = "";
        $report = "";
        $settings = "";
        $students = "active";
        $path="";
        include 'DecoupFiles/head.php';
        include 'DecoupFiles/sideBar.php';
        include 'DecoupFiles/navBar.php';
        include 'operations.php';
?>
              
                <div class=" px-8">
                    <div class="d-flex justify-content-between py-3 align-items-center">
                        <h4 class="fw-bold">Students List</h4>
                        <div class="d-flex gap-2 gap-sm-3 align-items-center">
                            <i class="far fa-sort text-primary"></i>
                            <a  data-bs-toggle="modal" data-bs-target="#exampleModal" class=" btn btn-primary d-none d-sm-inline addNew fs-9">ADD NEW STUDENTS</a>
                            <a  class="btn btn-primary d-inline d-sm-none addNew" role="button"><i class="fal fa-user-plus fw-normal h5 text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class=" px-8 height_table table-responsive">
                    <table class="table table_students table-borderless border-top border-2 ">
                        <thead>
                          <tr class="rounded-3 text-table fs-12">
                            <th class="invisible p-8 p-8">profilPic</th>
                            <th class="p-8">Name</th>
                            <th class="p-8">Email</th>
                            <th class="p-8">Phone</th>
                            <th class="p-8">Enroll Number</th>
                            <th class="p-8">Date of admission</th>
                            <th class="invisible p-8">jfjfjjf</th>
                            <th class="invisible p-8">jfjfjjf</th>
                          </tr>
                        </thead>
                        <?php
                            $REQ= mysqli_query($conn, 'SELECT * FROM students');  
                        ?>
                        <tbody>
                            <?php foreach($REQ as $student): ?>
                            <tr class="bg-white align-middle">
                                <td class="p-8"><img src="./assets/avatar.svg" alt="" height="50" width="50"></td>
                                <td class="p-8"><?php echo $student["name"] ?></td>
                                <td class="p-8"><?php echo $student["email"] ?></td>
                                <td class="p-8"><?php echo $student["phone"] ?></td>
                                <td class="p-8"><?php echo $student["enrollNumber"] ?></td>
                                <td class="p-8"><?php echo $student["dateOfAdmission"] ?></td>
                                <td class="p-8"><a href="./students/edit.php?edit=<?php echo $student['id_student'];?>"><i class="far fa-pen text-primary"></i></a></td>
                                <td class="p-8"><a href="./students/delete.php?delete=<?php echo $student['id_student'];?>"><i class="far fa-trash text-primary"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>    
                </div>  
            </div>
        </div>
    </div>
    
    <div class="modal fade w-100 vh-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mx-auto mt-5">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h5 class="modal-title" id="exampleModalLabel">New Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-3" method="POST" action="./students/add.php">
                        <div class="mb-3">
                            <label class="col-form-label">Name</label>
                            <input class="form-control p-2" name="Name" required="required"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Email</label>
                            <input class="form-control p-2" type="email" name="Email" required="required"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Phone</label>
                            <input class="form-control p-2" name="Phone" required="required"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Enroll Number:</label>
                            <input class="form-control p-2" type="number" name="EnrollNumber" required="required"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Date Of Admission</label>
                            <input class="form-control p-2" type="date" name="DateOfAdmission" required="required"></input>
                        </div>
                        <div class="modal-footer py-2">
                            <button type="button" class="btn btn-secondary px-4 py-2 me-2"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary px-4 py-2 me-2" name="submit">Add Student</button>
                        </div>
                    </form>
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