<?php include('includes/header.php'); ?>

   <div class="row">
    
        <div class="col md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit List</h4>
                    <a href="user.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3">
                                    <label>Full Name</label>
                                     <input type="text" name="fullname" class="form-control">
                                 </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="mb-3">
                                  <label for="country">Country </label>
                                 <select class="form-select" id="country" name="country" required>
                                        <option>Select Country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
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
                                 <label for="sport" >Preferred Sport</label>
                                 <select id="sports" name="sport" class="form-select" required>
                                        <option>Select Sport</option>
                                        <option value="athletics">Athletics</option>
                                        <option value="swimming">Swimming</option>
                                        <option value="gymnastics">Gymnastics</option>
                                        <option value="cycling">Cycling</option>
                                        <option value="basketball">Basketball</option>
                                        <option value="football">Football (Soccer)</option>
                                        <option value="volleyball">Volleyball</option>
                                        <option value="tennis">Tennis</option>
                                        <option value="table-tennis">Table Tennis</option>
                                        <option value="badminton">Badminton</option>
                                        <option value="boxing">Boxing</option>
                                        <option value="weightliftisng">Weightlifting</option>
                                        <option value="wrestling">Wrestling</option>
                                        <option value="judo">Judo</option>
                                        <option value="taekwondo">Taekwondo</option>
                                        <option value="archery">Archery</option>
                                        <option value="shooting">Shooting</option>
                                        <option value="fencing">Fencing</option>
                                        <option value="rowing">Rowing</option>
                                        <option value="sailing">Sailing</option>
                                        <option value="canoeing">Canoeing</option>
                                        <option value="equestrian">Equestrian</option>
                                        <option value="golf">Golf</option>
                                        <option value="rugby">Rugby</option>
                                    </select>
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
                                     <label>Ban User</label>
                                     <br>
                                     <input type="checkbox" name="is_ban" style="width:30px;height:30px;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="mb-3">
                                    <br>
                                     <button type="submit" name="update" class="btn btn-primary">update</button>
                                 </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
   </div>
   <script>
        // Get the current page URL
        var currentPageUrl = window.location.href;
    
        // Get all the menu links
        var menuLinks = document.querySelectorAll('nav a');
    
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