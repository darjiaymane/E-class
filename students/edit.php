<?php
    $path=".";
    include '../DecoupFiles/head.php';
    include '../operations.php';


        $id=$_GET['edit'];
        if(isset($_GET['edit'])){
            $sql_edit = "SELECT * FROM students WHERE id_student=$id";
            $REQ = mysqli_query($conn, $sql_edit);

            if($REQ){
                foreach($REQ as $student){
                    $Name = $student["name"];
                    $Email = $student['email'];
                    $Phone = $student['phone'];
                    $EnrollNumber = $student['enrollNumber'];
                    $DateOfAdmission = $student['dateOfAdmission'];
                }   
            }
        }

        if(isset($_POST['save'])){
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $phone = $_POST['Phone'];
            $enrollNumber = $_POST['EnrollNumber'];
            $dateOfAdmission = $_POST['DateOfAdmission'];
    
    
    
            $sql_update = "UPDATE students SET name ='$name', email='$email', phone= '$phone', enrollNumber='$enrollNumber', dateOfAdmission='$dateOfAdmission' WHERE id_student=$id";
            $REQ = mysqli_query($conn, $sql_update);
            if($REQ){  
                header("location:../students.php");    
            }
            else {
                echo "something went wrong!";
            }
        }

        

?>


        <div class="modal-dialog mx-auto mt-5">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h5 class="modal-title" id="exampleModalLabel">Delete a students</h5>
                    <a href="../students.php" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                    <form class="p-3" method="POST">
                        
                        <div class="mb-3">
                            <label class="col-form-label">Name</label>
                            <input class="form-control p-2" name="Name" required="required" value="<?php echo $Name?>"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Email</label>
                            <input class="form-control p-2" name="Email" required="required" value="<?php echo $Email?>"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Phone</label>
                            <input class="form-control p-2" name="Phone" required="required" value="<?php echo $Phone?>"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Enroll Number:</label>
                            <input class="form-control p-2" name="EnrollNumber" required="required" value="<?php echo $EnrollNumber?>"></input>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Date Of Admission</label>
                            <input class="form-control p-2" type="date" name="DateOfAdmission" required="required" value="<?php echo $DateOfAdmission?>"></input>
                        </div>
                        <div class="modal-footer py-2">
                            <button type="button" class="btn btn-secondary px-4 py-2 me-2"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary px-4 py-2 me-2" name="save">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    <?php
    include '../operations.php';
    include '../DecoupFiles/footer.php';      
    ?>