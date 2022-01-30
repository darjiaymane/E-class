<?php
    include 'DecoupFiles/head.php';
    include 'DecoupFiles/sideBar.php';
    include 'DecoupFiles/navBar.php';
    $studentList = [
        ["profilPic"=>"./assets/avatar.svg","name" => "Karthi", "Email" => "Karthi12@email.com", "Phone" => "7305477760", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Haytem", "Email" => "Hayetm332@email.com", "Phone" => "7305477618", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Youssef", "Email" => "youssef992@email.com", "Phone" => "7162837760", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Yasser", "Email" => "yasser192@email.com", "Phone" => "76243891673", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Karthi", "Email" => "Karthi12@email.com", "Phone" => "7305477760", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Haytem", "Email" => "Hayetm332@email.com", "Phone" => "7305477618", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Youssef", "Email" => "youssef992@email.com", "Phone" => "7162837760", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Yasser", "Email" => "yasser192@email.com", "Phone" => "76243891673", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Karthi", "Email" => "Karthi12@email.com", "Phone" => "7305477760", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Haytem", "Email" => "Hayetm332@email.com", "Phone" => "7305477618", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Youssef", "Email" => "youssef992@email.com", "Phone" => "7162837760", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"],
        ["profilPic"=>"./assets/avatar.svg","name" => "Yasser", "Email" => "yasser192@email.com", "Phone" => "76243891673", "Enroll Number" => "1234567305477760", "Date of admission" => "05-Jan,2022"]
    ];
?>
            
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
                        <tbody>
                        <?php foreach($studentList as $value): ?>
                          <tr class="bg-white align-middle">
                            <td class="p-8"><img src="<?php echo $value["profilPic"]?>" alt="" height="50" width="50"></td>
                            <td class="p-8"><?php echo $value["name"] ?></td>
                            <td class="p-8"><?php echo $value["Email"] ?></td>
                            <td class="p-8"><?php echo $value["Phone"] ?></td>
                            <td class="p-8"><?php echo $value["Enroll Number"] ?></td>
                            <td class="p-8"><?php echo $value["Date of admission"] ?></td>
                            <td class="p-8"><i class="far fa-pen text-primary"></i></td>
                            <td class="p-8"><i class="far fa-trash text-primary"></i></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>