<?php
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class=" col-6 mt-5">
            <form action="./includes/signup-inc.php" method="POST" class=" form-control shadow">
                <div class="bg-dark mt-2 text-center py-3 mb-3">
                    <label for="" class="form-label text-light text-center mt-2"><h2>Sign Up</h2></label>
                </div>
                <div class=" mb-3">
                    <label for="first-name" class=" form-label">First Name</label>
                    <input class=" form-control" id="first-name" type="text" name="first-name" placeholder="Enter your first name here">
                </div>
                <div class=" mb-3">
                    <label for="last-name" class=" form-label">Last Name</label>
                    <input class=" form-control" id="last-name" type="text" name="last-name" placeholder="Enter your last name here">
                </div>
                <div class=" mb-3">
                    <label for="u-name" class=" form-label">Username</label>
                    <input class=" form-control" id="u-name" type="text" name="username" placeholder="Enter your username here">
                </div>
                <div class=" mb-3">
                    <label for="u-email" class=" form-label">Email</label>
                    <input class=" form-control" id="u-email" type="email" name="email" placeholder="Enter your email here">
                </div>
                <div class=" mb-3">
                    <label for="u-pwd" class=" form-label">Password</label>
                    <input class=" form-control" id="u-pwd" type="password" name="pwd" placeholder="Enter your password here">
                </div>
                <div class=" mb-4">
                    <label for="u-pwd-2" class=" form-label">Password Again</label>
                    <input class=" form-control" id="u-pwd-2" type="password" name="pwd-2" placeholder="Enter password again here">
                </div>
                <button class="btn btn-outline-dark mb-2 col-12 py-2" name="signup">Sign Up</button>
            </form>
        </div>
        <div class=" col-6 mt-5">
            <form action="./includes/login-inc.php" method="POST" class=" form-control shadow">
                <div class="bg-dark mt-2 text-center py-3 mb-3">
                    <label for="" class="form-label text-light text-center mt-2"><h2>Login</h2></label>
                </div>
                <div class=" mb-3">
                    <label for="uname" class=" form-label">Username Or Email</label>
                    <input class=" form-control" id="uname" type="text" name="user" placeholder="Username or Email">
                </div>
                <div class=" mb-4">
                    <label for="pwd" class=" form-label">Password</label>
                    <input class=" form-control" id="pwd" type="password" name="pwd" placeholder="Password">
                </div>
                <button class="btn btn-outline-dark mb-2 col-12 py-2" name="login">Login</button>
            </form>
        </div>
    </div>
</div>



<?php
include_once 'footer.php';
?>