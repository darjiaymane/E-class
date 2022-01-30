<?php
    include 'DecoupFiles/head.php';
    include 'DecoupFiles/sideBar.php';
    include 'DecoupFiles/navBar.php';
    $studentList = [
        ["name" => "Karthi", "Payment Scheduele" => "First", "Bill Number" => "00012223", "Amount Paid" => "DHS 100,000", "Balance amount" => "DHS 500,000", "Date" => "05-Jan,2022"],
        ["name" => "Haytem", "Payment Scheduele" => "Second", "Bill Number" => "00012224", "Amount Paid" => "DHS 200,000", "Balance amount" => "DHS 600,000", "Date" => "05-Jan,2022"],
        ["name" => "Youssef", "Payment Scheduele" => "Third", "Bill Number" => "00012225", "Amount Paid" => "DHS 300,000", "Balance amount" => "DHS 700,000", "Date" => "05-Jan,2022"],
        ["name" => "Yasser", "Payment Scheduele" => "Forth", "Bill Number" => "00012226", "Amount Paid" => "DHS 400,000", "Balance amount" => "DHS 800,000", "Date" => "05-Jan,2022"]
    ];
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
                            
                                
                        <?php foreach($studentList as $value): ?>
                            <tr class="bg-white align-middle">
                            <td class="p-8"><?php echo $value["name"] ?></td>
                            <td class="p-8"><?php echo $value["Payment Scheduele"] ?></td>
                            <td class="p-8"><?php echo $value["Bill Number"] ?></td>
                            <td class="p-8"><?php echo $value["Amount Paid"] ?></td>
                            <td class="p-8"><?php echo $value["Balance amount"] ?></td>
                            <td class="p-8"><?php echo $value["Date"] ?></td>
                            <td class="p-8"><i class="fas fa-eye text-primary fw-light"></i></td>
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