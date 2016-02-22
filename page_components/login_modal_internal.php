<div class="modal-dialog">
    <div class="modal-content modal-sm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login As</h4>
      </div>
      <form  action="#" method="post">
        <div class="modal-body">
          <select class="user_type_dropdown input-lg form-control-square" name="user_type" id="user_type" onchange="setPlaceholder()">
            <option value="student">Student</option>
            <option value="faculty">Faculty</option>
            <option value="librarian">Librarian</option>
          </select>          
          <label class="sr-only" for="roll_no1">Roll No</label>
          <input class="form-control form-control-square input-lg" type="text" name="roll_no" placeholder="Institute provided Roll Number" id="roll_no1">
          <label class="sr-only" for="password">Password</label>
          <input class="form-control form-control-square input-lg" type="password" name="password" placeholder="Password" id="password"> 
        </div>               
        <div class="modal-footer">
          <input class="btn btn-block btn-primary default-size" type="submit" value="Login">
          <a id="not-registered" data-toggle="modal" data-target="#registerModal" class="pull-left no-register" data-dismiss="modal" aria-hidden="true" href="register.php">Not registered? Register now</a>
          <a class="forgot_pass" href="#">forgot password?</a>
        </div>
      </form>      
    </div>
</div>