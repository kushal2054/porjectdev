<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Inquiries</h4>
                <a href="http://localhost/projectdev/admin/index.php" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>enqID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'register');

                        if ($conn->connect_error) {
                            die('Connection Failed: ' . $conn->connect_error);
                        } else {
                            $query = "SELECT * FROM enqtbl";
                            $result = $conn->query($query);
                        
                            if ($result->num_rows > 0) {
                                while ($resultitem = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $resultitem['enqid']; ?></td>
                                        <td><?= $resultitem['fullname']; ?></td>
                                        <td><?= $resultitem['email']; ?></td>
                                        <td><?= $resultitem['message']; ?></td>
                                        <td>
                                            <form method="post" action="user-password-message.php">
                                            <a href="enq-del.php?enqid=<?= $resultitem['enqid']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                        <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4">No record found</td>
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


<?php
include('includes/footer.php');
?>
