
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <title>Form task </title> 
       <link rel = "stylesheet" href="css/style.css">
       <link rel = "stylesheet" href="css/normalize.css">
        <style>
        .error {color: #FF0000;font-family:cursive;font-size: 3px; }
        </style>
    </head>
    <body>
            <?php
            include 'T1_registar.php'
            ?>  
        <div class="form">
                <h1> COURSE REGISTRATION FORM </h1>

          <form id="task" method="post" action="<?php  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <h2>Training Course</h2>
              <input type="text" placeholder="Title" name="title" required>
              <br>
              <br>
              <input type="text" placeholder="Full name" name="name"  required>
              <span class="error"> <?php echo "$nameerr";?></span>
              <br>
              <br>
              <input type="text" placeholder="Position" name="position"  required>
              <span class="error"> <?php echo "$positionerr";?></span>
              <br>
              <br>
              <input type="text" placeholder="Company" name="company"  required>
              <span class="error"> <?php echo "$companyerr";?></span>
              <br>
              <br>
              <input type="text" placeholder="Email" name="email"  required>
              <span class="error"> <?php echo "$emailerr";?></span>
              <br>
              <br>
              <input type="text" placeholder="Street Address " name="street1"  required>
              <span class="error"> <?php echo "$streeterr";?></span>
              <br>
              <br>
              <input type="text" placeholder="Alternative Address" name="street2"  required>
              <span class="error"> <?php echo "$streeterr";?></span>
              <br>
              <br>
              <input type="text" placeholder="Phone Number" name="phone"  required>
              <span class="error"> <?php echo "$phoneerr";?></span>
              <br>
              <br>
              <div class="log">
              <select  required name="country">
                    <option value=""> Choose your country</option>
                    <option value="EGY"> Egypt</option>
                    <option value="France"> France</option>
                    <option value="England">England</option>
                    <option value="usa"> Amireca</option>
                    <option value="bra"> Brazil</option>
                </select>
                <input type="text" placeholder="City"required name="city">
                <span class="error"> <?php echo "$cityerr";?></span>
                <br>
                <br>
                <input type="text" placeholder="Region"required name="region">
                <span class="error"> <?php echo "$regionerr";?></span>
                <input type="text" placeholder="Zip/postal code" required name="zip">
                <span class="error"> <?php echo "$ziperr";?></span>
              </div>
                <br>
                <br>
                <button type="submit" name="submit" id="button"> Submit</button>

          </form>
        </div>
          <p> &copy; Course Registration Form . All Rights Reserved | Design by <span>hegazy</span> </p>
          <div class="good">
                <h1> " Welcome to our community " <br><Span class="ieee"> " IEEE "</Span> 
                </h1>
                <img src="image/FB_IMG_1542618135468.jpg" width="300px" height="245px">
            </div>
          
    </body>
</html>