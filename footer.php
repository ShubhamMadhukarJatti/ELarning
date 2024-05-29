<!-----start footer------>
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy;2019||Designed By E-Learning ||<a href="#login"
  data-bs-toggle="modal" 
      data-bs-target="#adminLoginModalCenter"> Admin Login</a></small>
</footer><!-----End footer-------->
<!-------start student Registration Modal--------------->
   

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!------------start sing up from----------------->
      <?php 
      include('studentRegistration.php');
      ?>

    <!------------End sing up from----------------->
    </div>
      <div class="modal-footer">
      <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="sign up">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
         </div>
         </div>
<!----------End Student Registretion model---------->
<!-------start student Login Modal--------------->
   

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenter">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!------------start sing up from----------------->
      <div class="modal-body">
      <!-------student login from------->
      <form id="stuLoginfrom">
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 dont-weight-bold">Email id</label>
    <input type="email id" class="form-control" placeholder="Email id" name="stuLogemail" id="stuLogemail">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 dont-weight-bold"> Password</label>
    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
  </div>
</form>
      </div>
      <!------------End sing up from----------------->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
         </div>
    </div>
  </div>
</div>
<!------------End student------------->
<!-------start Admin Login Modal--------------->
   

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenter">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!------------start sing up from----------------->
      <div class="modal-body">
      <!-------student login from------->
      <form id="adminLoginfrom">
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 dont-weight-bold">Email id</label>
    <input type="email id" class="form-control" placeholder="Email id" name="adminLogemail" id="adminLogemail">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 dont-weight-bold"> Password</label>
    <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
  </div>
</form>
      </div>
      <!------------End sing up from----------------->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
         </div>
    </div>
  </div>
</div>
  <!----jqueary and bootstrap css------>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>


<script src="js/all.min.js"></script>

<script type="text/javascript"src="js/owl.min.js"></script>
<script type="text/javascript"src="js/testyslider.js"></script>
<!------student ajax call javascrip------>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>
</html>
