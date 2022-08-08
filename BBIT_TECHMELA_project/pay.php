<!DOCTYPE html>
<html lang="en">
<head>
  <title>TECHMELA enrollment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&family=Macondo&family=Poppins:wght@900&family=Roboto:ital,wght@1,500&family=Smooch&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <p><br>
  <h1>Hey <?php session_start(); echo "<b>".$_SESSION['name']."</b>";?>!!
  <br>Your details have been recorded!<br><br>
       Please complete the payment process to get enrolled
</h1>
</p>
   <h2><b>Participation guidelines:</b></h2>
  <h2>1. The Entry fees for the TECHMELA is ₹500</h2>
  <br>
  <h2>2. The Entry fees for registration is non-refundable</h2>
  <br>
  <h2>3. Your Participation will be cancelled if you fail to report to our campus on 9:00am
          on 15th August 2022
  </h2>

  <br><br>
  <form class="form-inline" method="post" action="api.php">
    
      
    
    <input type="checkbox" required > <b> I agree with the above guidelines</b>
    
    
    <br><br>
    <button type="submit" name="submit" class="btn">Proceed to pay ₹500</button>
  </form>
</div>

</body>
</html>
