<?php include 'header.php'; ?>
<section class="signupform pb-5">
    <form action="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h2 class="text-center text-white">SIGN UP</h2>
                    <form action="" class="was-validated">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="uname" style="color: #fff;">Full Name</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="uname" style="color: #fff;">Email</label>
                                <input type="email" class="form-control" id="uname" placeholder="Enter Email" name="uname" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="uname" style="color: #fff;">Phone</label>
                                <input type="number" class="form-control" id="uname" placeholder="Enter Phone" name="uname" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="uname" style="color: #fff;">City</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter City" name="uname" required>
                            </div>
                            <div class="form-group col-lg-12" >
                                <label for="uname" style="color: #fff;">Country</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter Country" name="uname" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="pwd" style="color: #fff;">Password</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group text-center col-lg-12">
                                <button type="submit" class="btn col-12 mt-3" style="background:#71D000; color:white;">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </form>
</section>