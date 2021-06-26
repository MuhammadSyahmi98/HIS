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

<!-- editdrug modal -->
<div class="modal fade" id="editdrugs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Drugs Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Drug Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" >
        </div> 
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" cols="6" ></textarea>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="name" placeholder="Enter Quantty" name="quantity" >
        </div>     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save Drug</button>
        </form>
    </div>
  </div>
</div>
<!-- end editdrug modal -->

<!-- viewdrug modal -->
<div class="modal fade" id="viewdrugs1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Drugs Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Drug Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
        </div> 
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" cols="6" disabled></textarea>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="name" placeholder="Enter Quantty" name="quantity" disabled>
        </div>     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
<!-- end viewdrug modal -->

<!-- cpoe modal -->
<div class="modal fade bd-example-modal-lg" id="cpoe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CPOE Details</h5>
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
        <div>
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
            </div>
          <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%;">
              <label for="icnumber">IC Number</label>
              <input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber" disabled>
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="dob">Date Of Birth</label>
              <input type="date" class="form-control" id="dob" name="dob" disabled>
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="blood">Blood Type</label>
              <input type="date" class="form-control" id="blood" name="blood" disabled>
            </div>
          </div>
          <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" disabled>
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="phonenumber">Phone Number</label>
              <input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
            </div>
          </div>
        </div>

        <hr>
        <label><b>CPOE Details</b></label>
        <div>
          <table class="table table-striped">
            <tr>
              <td>Name</td>
              <td>Doses</td>
              <td>Quantity</td>
              <td>Usage</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>

        
          
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >CPOE Ready</button>
        </form>
    </div>
  </div>
</div>
<!-- end cpoe modal -->

<!-- cpoe modal -->
<div class="modal fade" id="viewdrugs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CPOE Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <center>
            <label for="name">Status</label>
            <input type="text" class="form-control" name="name1">
          </center>
        </div>
        <hr>

        <hr>
        <label><b>CPOE Details</b></label>
        <div>
          <table class="table table-striped">
            <tr>
              <td>Name</td>
              <td>Doses</td>
              <td>Quantity</td>
              <td>Usage</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>

        
          
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >CPOE Ready</button>
        </form>
    </div>
  </div>
</div>
<!-- end cpoe modal -->

<!-- cpoe modal -->
<div class="modal fade" id="viewBill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CPOE Details</h5>
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
        <div>
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
            </div>
          <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%;">
              <label for="icnumber">IC Number</label>
              <input type="number" class="form-control" id="name" placeholder="Enter IC Number" name="icnumber" disabled>
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="dob">Date Of Birth</label>
              <input type="date" class="form-control" id="dob" name="dob" disabled>
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="blood">Blood Type</label>
              <input type="date" class="form-control" id="blood" name="blood" disabled>
            </div>
          </div>
          <div style="display: flex; justify-content: space-evenly;">
            <div class="form-group" style="width: 50%">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" disabled>
            </div>
            <div class="form-group" style="width: 50%; margin-left: 10px;">
              <label for="phonenumber">Phone Number</label>
              <input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" disabled>
            </div>
          </div>
        </div>

        <hr>
        <label><b>CPOE Details</b></label>
        <div>
          <table class="table table-striped">
            <tr>
              <td>Name</td>
              <td>Doses</td>
              <td>Quantity</td>
              <td>Usage</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>

        
          
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >CPOE Ready</button>
        </form>
    </div>
  </div>
</div>
<!-- end cpoe modal -->