<?php
include 'admin/dbconnect.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Help Center</title>
  <style>
    .addcont {
      margin: 35px 50px;
    }

    .ccform {
      width: 60%;
      margin: 0 50px;
    }

    .sbtn {
      padding: 5px 58px 9px 58px !important;
      font-size: 19px !important;
      font-weight: 600 !important;
      color: #ffffff;
      border: none;
      border-radius: 4%;
      background-color: #ff8e15;
      border-color: #ff8e15;
    }

    .sbtn:hover {
      background-color: #e57200;
      /* Change the color on hover if desired */
      border-color: #e57200;
    }

    .poster {
      display: flex;
    }

    .ccicon {
      width: 30%;

    }
  </style>
</head>

<body>
  <?php
  include 'navbar.php';


  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO `contact_us` (`email`,`number`,`subject`,`comment`) VALUES ('$email','$number','$subject','$comment')";
    $result = $connt->query($sql);
    if ($result == TRUE) {
      echo '<div  class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Query is Successfully Submitted!</strong> Wait for the reply.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
    } else {
      echo "something went wrong";
    }
  }
  ?>
  <div class="addcont">
    <h5 style="text-align:center; font-size: 28px; color: #3a3a3a;">Support</h5>
    <p style="text-align:center; margin-top:15px; ">Feel free to contact us. We will get back to you within 48 hours!</p>
  </div>
  <div class="poster">
    <div class="ccform">
      <form action="" method="post">
        <div style="display: flex; width:100%; gap:4%;">
          <div class="form-group" style="width: 48%;">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group" style="width: 48%;">
            <label for="exampleInputPassword1">Number</label>
            <input type="text" class="form-control" name="number" id="exampleInputPassword1" placeholder="Number" required>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Subject</label>
          <input type="text" class="form-control" name="subject" id="exampleInputPassword1" placeholder="Subject" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Comment</label>
          <textarea type="text" class="form-control" name="comment" id="exampleInputPassword1" placeholder="Comment" required></textarea>
        </div>


        <button type="submit" class="sbtn">Submit</button>
      </form>
    </div>
    <div class="ccicon">
      <h4>Contact us :</h4>
      <div style="margin-top: 15px;">
        <img src="png\002-whatsapp.png" alt=""> <a href="https://api.whatsapp.com/send?phone=919658232584" target="_blank" style="text-decoration: none;  ">+91 96582 32584</a>
      </div>
      <div style="margin-top: 15px;">
        <img src="png\001-instagram.png" alt=""> <a href="https://www.instagram.com" target="_blank" style="text-decoration: none; ">Instagram</a>
      </div>
      <div style="margin-top: 15px;">
        <img src="png\004-facebook.png" alt=""> <a href="https://www.facebook.com" target="_blank" style="text-decoration: none; ">Facebook</a>
      </div>
      <div style="margin-top: 15px;">
        <img src="png\005-telegramme.png" alt=""> <a href="https://t.me" target="_blank" style="text-decoration: none; ">Telegram</a>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>