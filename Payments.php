<?php
    include 'DecoupFiles/head.php';
    include 'DecoupFiles/sideBar.php';
    include 'DecoupFiles/navBar.php';
    $json = file_get_contents("jsonFiles/payment.json");
    $data = json_decode($json, true);
?>
            
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
                            <th class="p-8">Payment Scheduele </th>
                            <th class="p-8">Bill Number</th>
                            <th class="p-8">Amount Paid</th>
                            <th class="p-8">Balance amount</th>
                            <th class="p-8">Date</th>
                            <th class="invisible p-8">icon</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                                
                        <?php foreach($data as $student): ?>
                            <tr class="bg-white align-middle">
                            <td class="p-8"><?php echo $student["name"] ?></td>
                            <td class="p-8"><?php echo $student["Payment Scheduele"] ?></td>
                            <td class="p-8"><?php echo $student["Bill Number"] ?></td>
                            <td class="p-8"><?php echo $student["Amount Paid"] ?></td>
                            <td class="p-8"><?php echo $student["Balance amount"] ?></td>
                            <td class="p-8"><?php echo $student["Date"] ?></td>
                            <td class="p-8"><i class="fas fa-eye text-primary fw-light"></i></td>
                          </tr>
                        <?php endforeach; ?>
                            
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'DecoupFiles/footer.php';
?>