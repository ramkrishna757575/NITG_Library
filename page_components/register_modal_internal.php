<div class="modal-dialog">
    <div class="modal-content modal-sm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Register As</h4>
      </div>
      <form  action="#" method="post">
        <div class="modal-body">
          <select class="user_type_dropdown input-lg form-control-square" name="user_type" id="user_type1" onchange="setPlaceholder()">
            <option value="student">Student</option>
            <option value="faculty">Faculty</option>
            <option value="librarian">Librarian</option>
          </select>
          <label class="sr-only" for="roll_no2">Roll No</label>
          <input class="form-control form-control-square input-lg" type="text" name="roll_no" placeholder="Institute provided Roll Number" id="roll_no2"> 
          <label class="sr-only" for="password">Create Password</label>
          <input class="form-control form-control-square input-lg" type="password" name="password" placeholder="Create Password" id="password"> 
          <label class="sr-only" for="cpassword">Confirm Password</label>
          <input class="form-control form-control-square input-lg" type="password" name="cpassword" placeholder="Confirm Password" id="cpassword">           
        </div>               
        <div class="modal-footer">
          <input class="btn btn-block btn-primary default-size" type="submit" value="Register">
        </div>
      </form>      
    </div>
</div >