<?php include 'header.php'; ?>
<section class="signinform">
    <form action="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                <h2 class="text-center text-white">Sign In</h2>
                    <form action="" class="was-validated">
                        <div class="form-group">
                            <label for="uname" style="color: #fff;">Email</label>
                            <input type="email" class="form-control" id="uname" placeholder="Enter Email" name="uname" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd" style="color: #fff;">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" class="btn col-12 mt-3" style="background:#71D000; color:white;">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </form>
</section>