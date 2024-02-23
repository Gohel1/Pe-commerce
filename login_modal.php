<?php
include 'register_modal.php';

?>
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

    .loginbtn {
        padding: 5px 128px 9px 128px !important;
        margin-top: 18px;
        font-size: 19px !important;
        font-weight: 600 !important;
        color: #ffffff;
        border: none;
        background-color: #ff8e15;
        /* Use your preferred shade of orange */
        border-color: #ff8e15;
        /* Use the same shade of orange for the border */
    }

    .loginbtn:hover {
        background-color: #e57200;
        /* Change the color on hover if desired */
        border-color: #e57200;
    }
</style>


<!-- Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 760px; height:522px;margin-top:70px; border-radius:0px; margin-left:-130px; display:flex;">
            <div class="part1" style="width:379px;">
                <img src="png/login-bg.jpg" style="height:520px; width:379px;">
            </div>
            <div class="part2" style="width:380px; margin-top:-520px; margin-left:380px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="tit">
                    <h5 style="font-size: 22px;">Login</h5>
                    <h6 style="color: gray;">Track your order, create wishlist & more</h6>
                </div>

                <div class="modal-body">
                    <!-- Include your sign-in form or content here -->
                    <form action="login_handler.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Username / Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="forgot-pass">
                            <h6><a href="#" style="text-decoration: none; color:gray;" class="passfor">Forgot password?</a></h6>
                        </div>
                        <button type="submit" class="loginbtn">Login</button>
                    </form>

                    <h6 style="color: gray; text-align:center; margin-top:45px;">New User? <a href="" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" style="color: #ff8e15; text-decoration:none;">Register Here</a></h6>

                </div>
            </div>
        </div>
    </div>
</div>
</div>