<!-- viewpatient modal -->
<div class="modal fade" id="viewpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Patient Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <center>
            <label for="name">Status</label>
            <input type="text" class="form-control" id="name" name="name">
          </center>
        </div>
        <hr>
        <br><h4><b>Patient Details</b></h4><br>
        <div class="form-group">
          <label for="name">Fullname</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="phonenumber">Phone Number</label>
              <input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
            </div>
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="dob">Date Of Birth</label>
              <input type="date" class="form-control" id="name" name="dob">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="icnumber">IC Number</label>
              <input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
            </div>
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="sex">Sex</label>
              <input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="race">Race</label>
              <input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
            </div>
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="blood">Blood Type</label>
              <input type="text" class="form-control" id="blood" placeholder="Enter Blood Type" name="blood">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="nationality">Nationality</label>
              <input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
            </div>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
        </div>
        <hr>

        <br><h4><b>Family Details</b></h4><br>
        <div class="form-group">
          <label for="familyname">Family Name</label>
          <input type="text" class="form-control" id="familyname" placeholder="Enter Family Name" name="familyname">
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="familyphonenumber">Phone Number</label>
              <input type="number" class="form-control" id="familyphonenumber" name="familyphonenumber" placeholder="Enter Family Phone Number">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="familyicnumber">Family IC Number</label>
              <input type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number" name="familyicnumber">
            </div>
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="familysex">Sex</label>
              <input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="familyrace">Race</label>
              <input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
            </div>
        </div>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="familyemail">Email</label>
              <input type="email" class="form-control" id="familyemail" placeholder="Enter Email" name="blood">
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="familynationality">Nationality</label>
              <input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
            </div>
        </div>
        <div class="form-group">
          <label for="familyaddress">Address</label>
          <input type="text" class="form-control" id="familyaddress" placeholder="Enter Address" name="address">
        </div>
        <hr>
        <br><h4><b>Insurance Details</b></h4><br>
        <div class="form-group">
          <label for="insurancename">Insurance Name</label>
          <input type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name" name="insurancename">
        </div>
        <div class="form-group">
          <label for="insurancestatus">Insurance Status</label><br>
          <select class="form-control" name="insurancestatus" id="insurancestatus">
            <option>Active</option>
            <option>Not Active</option>
          </select>
        </div>
        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end viewpatient modal -->

<!-- editpatient modal -->
<div class="modal fade" id="editpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Patient Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <center>
            <label for="name">Status</label>
            <input type="text" class="form-control" id="name" name="name">
          </center>
        </div>
        <hr>
        <form action="/action_page.php">
            <br><h4><b>Patient Details</b></h4><br>
            <div class="form-group">
              <label for="name">Fullname</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name">
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="phonenumber">Phone Number</label>
                  <input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
                </div>
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="dob">Date Of Birth</label>
                  <input type="date" class="form-control" id="name" name="dob">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="icnumber">IC Number</label>
                  <input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber">
                </div>
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="sex">Sex</label>
                  <input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="race">Race</label>
                  <input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
                </div>
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="blood">Blood Type</label>
                  <input type="text" class="form-control" id="blood" placeholder="Enter Blood Type" name="blood">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="nationality">Nationality</label>
                  <input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
                </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
            </div>
            <hr>

            <br><h4><b>Family Details</b></h4><br>
            <div class="form-group">
              <label for="familyname">Family Name</label>
              <input type="text" class="form-control" id="familyname" placeholder="Enter Family Name" name="familyname">
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="familyphonenumber">Phone Number</label>
                  <input type="number" class="form-control" id="familyphonenumber" name="familyphonenumber" placeholder="Enter Family Phone Number">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="familyicnumber">Family IC Number</label>
                  <input type="number" class="form-control" id="familyicnumber" placeholder="Enter Family IC Number" name="familyicnumber">
                </div>
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="familysex">Sex</label>
                  <input type="text" class="form-control" id="sex" placeholder="Enter Sex" name="sex">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="familyrace">Race</label>
                  <input type="text" class="form-control" id="race" placeholder="Enter race" name="race">
                </div>
            </div>
            <div style="display: flex; justify-content: space-evenly;">
                <div class="form-group" style="width: 50%">
                  <label for="familyemail">Email</label>
                  <input type="email" class="form-control" id="familyemail" placeholder="Enter Email" name="blood">
                </div>
                <div class="form-group" style="width: 50%; margin-left: 10px;">
                  <label for="familynationality">Nationality</label>
                  <input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" name="nationality">
                </div>
            </div>
            <div class="form-group">
              <label for="familyaddress">Address</label>
              <input type="text" class="form-control" id="familyaddress" placeholder="Enter Address" name="address">
            </div>
            <hr>
            <br><h4><b>Insurance Details</b></h4><br>
            <div class="form-group">
              <label for="insurancename">Insurance Name</label>
              <input type="text" class="form-control" id="insurancename" placeholder="Enter Insurance Name" name="insurancename">
            </div>
            <div class="form-group">
              <label for="insurancestatus">Insurance Status</label><br>
              <select class="form-control" name="insurancestatus" id="insurancestatus">
                <option>Active</option>
                <option>Not Active</option>
              </select>
            </div>
          
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save Changes</button>
        </form>
    </div>
  </div>
</div>
<!-- end editpatient modal -->