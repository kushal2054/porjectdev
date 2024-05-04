<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Sport List</h4>
                <a href="add-sport.php" class="btn btn-primary float-end">Add Sport</a>
                <a href="add-news.php" class="btn btn-primary float-end" style="margin-right:20px;">Add News</a>
            </div>
            
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>SportID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'register');

                        if ($conn->connect_error) {
                            die('Connection Failed: ' . $conn->connect_error);
                        } else {
                            $query = "SELECT sptid, image, title, description FROM sporttbl"; // Fixed column name in the query
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($resultitem = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $resultitem['sptid']; ?></td>
                                        <td><img src="data:image/jpeg;base64,<?= base64_encode($resultitem['image']); ?>" alt="<?= $resultitem['title']; ?>"  style="width: 100%; max-width: 300px; height: auto;"  ></td>
                                        <td style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $resultitem['title']; ?></td>
                                        <td style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $resultitem['description']; ?></td>
                                        <td>
                                            <a href="sport-edit.php?sptid=<?= $resultitem['sptid']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a> 
                                            <a href="sport-delete.php?sptid=<?= $resultitem['sptid']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a> 
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">No records found</td> <!-- Changed colspan value to match the number of columns -->
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

<div class="row" style="margin-top: 20px;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>News List </h4>
                
            </div>
            
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>NewsID</th>
                            <th>Image</th>
                            <th>News Title</th>
                            <th>News Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'register');

                        if ($conn->connect_error) {
                            die('Connection Failed: ' . $conn->connect_error);
                        } else {
                            $query = "SELECT newsid, image, newstitle, newsdescription FROM newstbl"; // Fixed column name in the query
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($resultitem = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $resultitem['newsid']; ?></td>
                                        <td><img src="data:image/jpeg;base64,<?= base64_encode($resultitem['image']); ?>" alt="<?= $resultitem['title']; ?>"  style="width: 100%; max-width: 300px; height: auto;"  ></td>
                                        <td style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $resultitem['newstitle']; ?></td>
                                        <td style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $resultitem['newsdescription']; ?></td>
                                        <td>
                                            <a href="sport-edit.php?sptid=<?= $resultitem['sptid']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a> 
                                            <a href="news-delete.php?newsid=<?= $resultitem['newsid']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:15px; color:white; font-weight:bold;"></i></a> 
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">No records found</td> <!-- Changed colspan value to match the number of columns -->
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


<?php include('includes/footer.php'); ?>
