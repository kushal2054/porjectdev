<?php include('includes/header.php'); ?>
<h2>Welcome to Admin Dashboard.</h2>
   <div class="row">
    
        <div class="col md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add List</h4>
                    <a href="user.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3">
                                    <label>Full Name</label>
                                     <input type="text" name="fullname" class="form-control">
                                 </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="mb-3">
                                     <label>Country</label>
                                     <input type="text" name="country" class="form-control">
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                     <label>Contact Number</label>
                                     <input type="text" name="contactnum" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">

                                 <div class="mb-3">
                                      <label>Sport</label>
                                      <input type="text" name="sport" class="form-control">
                                 </div>

                            </div>
                            <div class="col-md-6">

                                 <div class="mb-3">
                                       <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                 </div>

                            </div>
                            <div class="col-md-6">
                                    <div class="mb-3">
                                         <label>Password</label>
                                         <input type="password" name="password" class="form-control">
                                    </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                        <label>Select Role</label>
                                             <select name="role"  class="form-select">
                                                    <option value="">Select Role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>       
                                             </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                     <label>Block</label>
                                     <br>
                                     <input type="checkbox" name="is_ban" style="width:30px;height:30px;">
                                </div>
                            </div>
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