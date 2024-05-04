<?php include('includes/header.php'); ?>
    
   <div class="row">
        <div class="col md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User List</h4>
                    <a href="user-password-request.php" class="btn btn-primary float-end">Password Request</a>
                </div>
                <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Country</th>
                            <th>Contact Number</th>
                            <th>Sport</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'register');

                    if ($conn->connect_error) {
                         die('Connection Failed: ' . $conn->connect_error);
                    } else {
                         $query = "SELECT * FROM registertbl"; // Fixed typo 'fron' to 'FROM'
                         $result = $conn->query($query); // Used object-oriented approach for querying

                  if ($result->num_rows > 0) {
                        while ($resultitem = $result->fetch_assoc()) { // Changed 'foreach' loop to 'while' loop with fetch_assoc()
                    ?>
                         <tr>
                                <td><?= $resultitem['regid']; ?></td>
                                <td><?= $resultitem['fullname']; ?></td>
                                <td><?= $resultitem['country']; ?></td>
                                <td><?= $resultitem['contactnum']; ?></td>
                                <td><?= $resultitem['sport']; ?></td>
                                <td><?= $resultitem['email']; ?></td>
                                <td><?= $resultitem['role']; ?></td>
                                <td><?= $resultitem['is_ban']== 1 ? 'Blocked':'Active' ?></td>
                                <td>
                                    <a href="users-edit.php?regid=<?= $resultitem['regid']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a>
                                    <a href="user-delete.php?regid=<?= $resultitem['regid']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a>
                                    <a href="user-block.php?regid=<?= $resultitem['regid']; ?>" class="btn btn-primary btn-primary-dark btn-sm"><i class="fa fa-ban" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a>
                                </td>
                                 </tr>
<?php
        }
    } else {
?>
        <tr>
            <td colspan="10">No record found</td> <!-- Changed colspan value to match the number of columns -->
        </tr>
<?php
    }
}
?>

                        
                    </tbody>
                </table>

                </div>
            </div>
        </div>


   </div>
   <script>
        // Get the current page URL
        var currentPageUrl = window.location.href;
    
        // Get all the menu links
        var menuLinks = document.querySelectorAll('nav-item');
    
        // Loop through each menu link
        menuLinks.forEach(function(link) {
            // Check if the link href matches the current page URL
            if (link.href === currentPageUrl) {
                // Add a class to highlight the active link
                link.classList.add('active');
            }
        });
    </script>


<?php include('includes/footer.php'); ?>