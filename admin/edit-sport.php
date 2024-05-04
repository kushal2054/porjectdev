<?php include('includes/header.php'); ?>
   <div class="row">
    
        <div class="col md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Sport</h4>
                    <a href="service.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="add-new-sport.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                             
                             <label style=" font-size:20px;">Image</label>
                             <input type="file" id="image" name="image" class="form-control">
                          
                          
                             <label style="padding-top: 10px; font-size:20px;">Title</label>
                             <input type="text" name="title" class="form-control">
                          
                           
                             
                             <label style="padding-top: 10px; font-size:20px;">Description</label>
                             <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                             
                         
                            <div class="col-md-6">
                                 <div class="mb-3">
                                    <br>
                                     <button type="submit" name="save" class="btn btn-primary">Save</button>
                                 </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
   </div>
<?php include('includes/footer.php'); ?>