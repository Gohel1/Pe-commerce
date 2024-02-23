<style>
    .passfor:hover {
        color: #ff8e15 !important;
    }

    .modal-header {
        width: 100%;
        height: 45px;
        border-bottom: none !important;

    }

    .close {
        float: right;
    }

    .tit {
        margin-left: 30px;
        margin-top: -10px;
    }

    form {
        width: 88%;
        margin-left: 15px;
    }

    .forgot-pass {
        font-size: 14px;
        color: gray;
        text-decoration: none !important;
        font-family: sans-serif;

    }

    .Cbtn {
        padding: 5px 112px 9px 112px !important;
        margin-top: 18px;
        font-size: 19px !important;
        font-weight: 600 !important;
        color: #ffffff;
        background-color: #ff8e15;
        border: none;
    }

    .Cbtn:hover {
        background-color: #e57200;
        /* Change the color on hover if desired */

    }
</style>


<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 760px; height:522px;margin-top:70px; border-radius:0px; margin-left:-130px; display:flex;">
            <div class="part1" style="width:379px;">
                <img src="png/login-bg1.jpg" style="height:520px; width:379px;">
            </div>
            <div class="part2" style="width:380px; margin-top:-520px; margin-left:380px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="tit">
                    <h5 style="font-size: 22px;">Register</h5>
                    <h6 style="color: gray;">Get exclusive discounts, newsletters and more</h6>
                </div>
                <div class="modal-body">
                    <!-- Include your sign-up form or content here -->
                    <form action="reg_handler.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="forgot-pass">
                            <a class="forgot-pass">By continuing, I agree to the <strong style="color: #ff8e15;">Terms of Use</strong> & <strong style="color:#ff8e15 ;">Privacy Policy</strong></a>
                        </div>
                        <button type="submit" class="Cbtn">Continue</button>

                    </form>

                    <h6 style="color: gray; text-align:center; margin-top:20px;">Already have an account? <a href="index.php" style="color: #ff8e15; text-decoration:none;">Login Here</a></h6>

                </div>
            </div>
        </div>


    </div>
</div>
</div>