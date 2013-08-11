
<!--reusable component   sign up form  -->
<!-- author: J.L   Date: 25/8/2013 -->

<form id="signup" method="post" action="index.php/sign_up.php" novalidate="novalidate">

    <label>Username</label>
    <div><input type="text" class="form-control" id="username" name="username" placeholder="your game Name"></div>

    <label>Email</label>
    <div><input type="text" class="form-control" id="email" name="email" placeholder="email"></div>
    <label>Passwords</label>
    <div><input type="Password" id="passwd2" class="form-control" name="passwd2" placeholder="Password"></div>
    <label>Confirm passwords</label>
    <div><input type="Password" id="conpasswd" class="form-control" name="conpasswd" placeholder="Re-enter Password"></div><br>
    
    
    <?php echo $someval; ?>
    <div><button type="submit" class="btn btn-success btn-large btn-block">Create</button></div>


</form>