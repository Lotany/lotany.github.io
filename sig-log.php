<div id="id01" class="modal">
  
  <form class="modal-content animate" action="backend/login-inc.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="" alt="" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="mailuid" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        
      <button name="login-submit" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<!--signup-->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="backend/signup-inc.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Username</b></label>
      <input type="text" name="uid" placeholder="Username" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="mail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button name="signup-submit" type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
