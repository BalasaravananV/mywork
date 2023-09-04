<html>
   <title>Demo</title>
   <head>
      <link rel="stylesheet" href="style.css">
    </head>
   <body>

      <?php

   // define variable
    $nameErr=$emailErr=$passwordErr=$phoneErr=$ageErr="";  
      ?>
   <h2>Fill form</h2>
    <form method="post" action='test.php' >
      <label>Name: <input type="text" name="name" ></label>
    <span class="error-msg"><?php echo $nameErr; ?></span></br>
    <label>Email: <input type="text" name="email" ></label>
    <span class="error-msg"><?php echo $emailErr; ?></span><br>
    <label>Password: <input type="password" name="password" ></label>
    <span class="error-msg"><?php echo $passwordErr; ?></span><br>
    <label>Phone: <input type="text" name="phone" ></label>
    <span class="error-msg"><?php echo $phoneErr; ?></span><br>
    <label>Age: <input type="text" name="age" ></label>
    <span class="error-msg"><?php echo $ageErr; ?></span><br>
    <button type="submit"> Submit</button>
   </form>

   </body>

 </html>


 


