<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Password Request List</h4>
                <a href="user.php" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ReqID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'register');

                        if ($conn->connect_error) {
                            die('Connection Failed: ' . $conn->connect_error);
                        } else {
                            $query = "SELECT * FROM requesttbl";
                            $result = $conn->query($query);
                        
                            if ($result->num_rows > 0) {
                                while ($resultitem = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $resultitem['reqid']; ?></td>
                                        <td><?= $resultitem['fullname']; ?></td>
                                        <td><?= $resultitem['email']; ?></td>
                                        <td>
                                            <!-- Form to submit email for password change -->
                                            <form method="post" action="user-password-message.php">
                                                <input type="hidden" name="email" value="<?= $resultitem['email']; ?>">
                                                <input type="hidden" name="reqid" value="<?= $resultitem['reqid']; ?>">
                                                <button type="submit" class="btn btn-success btn-la"><i class="fa fa-unlock" aria-hidden="true" style="font-size:25px; color:white; font-weight:bold;"></i></button>
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
