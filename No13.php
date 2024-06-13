<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>No. 13</title>
		<style>
			body {
				background-color: #c0c0c0;
			}
			form {
				color: white;
				background-color: #4e4e4e;
				border-radius: 50px;
				padding: 30px 0;
				width: 400px;
				height: 500px;
				margin: 50px auto 50px;
			}
      #sign-in {
        height: 300px;
      }
			h1 {
				text-align: center;
				margin: 10px 0 35px 0;
        font-family: Cambria, serif;
			}
			form label {
        display: block;
				text-align: center;
        margin: 8px auto;
			}
			form input, textarea {
				display: block;
				font-size: 18px;
				padding: 5px 10px;
				border-radius: 5px;
				width: 60%;
				margin: 0 auto;
				outline: 2px solid #80003c;
			}
			form textarea {
				width: 60%;
				height: 20%;
			}
			.submit {
				margin-top: 30px;
				width: 35%;
				height: 40px;
				background-color: #ae5d73;
				box-shadow: 3px 3px #774a5a;
			}
			.submit:hover {
				opacity: 0.8;
				transition: .5s;
			}
			.submit:active {
				position: relative;
				top: 3px;
				left: 3px;
				box-shadow: none;
			}
		</style>
	</head>
	<body>
        <?php
          $displayForm = true;
          $name_1 = ""; $age_1 = ""; $city_1 = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
            $name_1 = preg_replace("/[<>]/","",$_POST["name"]);
            $displayForm = false;
          }
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age"])) {
            $age_1 = preg_replace("/[<>]/","",$_POST["age"]);
            $displayForm = false;
          }
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["city"])) {
            $city_1 = preg_replace("/[<>]/","",$_POST["city"]);
            $displayForm = false;
          }
        ?>

        <?php if ($displayForm): ?>
        <form id="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <h1>Form</h1>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name">
          <label for="age">Your Age:</label>
          <input type="text" id="age" name="age">
          <label for="city">Your City:</label>
          <input type="text" id="city" name="city">
          <label for="message">Enter your message:</label>
          <textarea id="message" name="message"></textarea>
          <input class="submit" type="submit" value="Confirm">
		    </form>
        <?php endif; ?>

        <?php
        if ($name_1 != "") {
          echo "<h1>Hello, $name_1!</h1>";
        }
        if ($age_1 != "") {
          echo "<h1>Your age is: $age_1</h1>";
        }
        if ($city_1 != "") {
          echo "<h1>Your city is: $city_1</h1>";
        }
        ?>

        <?php
        function checkLogin($userLogin, $userPassword) {
          $file = fopen("userinfo.txt", "r");
          if ($file) {
            while (($line = fgets($file)) !== false) {
              $arr = explode(',', trim($line));
              $savedLogin = $arr[0]; $savedPassword = $arr[1];
              if ($userLogin == $savedLogin && $userPassword == $savedPassword) {
                  fclose($file);
                  return "Successfully logged in";
              }
            }
          fclose($file);
          return "Access denied";
          } else {
            return "File error";
          }
        } ?>

        <?php
        $login = ""; $pass = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
          if(isset($_POST["login"]) && isset($_POST["password"])) {
          $login = trim(preg_replace("/[<>]/","",($_POST["login"])));
          $pass = preg_replace("/[<>]/","",$_POST["password"]);
          $result = checkLogin($login, $pass);
          echo "<h1>$result</h1>";
        }
        ?>

        <form id="sign-in" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <h1>Sign In</h1>
          <label for="login">Login:</label>
          <input type="text" id="login" name="login" value="<?php echo $login; ?>">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
          <input class="submit" type="submit" value="Sign In">
		    </form>


        <?php
        $name_3 = ""; $msg_3 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name3"])) {
          $name_3 = preg_replace("/[<>]/","",$_POST["name3"]);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message3"])) {
          $msg_3 = preg_replace("/[<>]/","",$_POST["message3"]);
        }
        ?>

        <form id="form3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <h1>Feedback</h1>
          <label for="name3">Your Name:</label>
          <input type="text" id="name" name="name3" value="<?php echo $name_3; ?>">
          <label for="message3">Enter Your Message:</label>
          <textarea id="message" name="message3"><?php echo $msg_3; ?></textarea>
          <input class="submit" type="submit" value="Send">
		    </form>
	</body>
</html>
