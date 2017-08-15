<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="app/css/login.css">
  </head>
  <body><center><div class="hero-body is-centerded">
    <form class="form" action="" method="post">
      <table>
        <tr>
          <td>
            <input class="input"  type='text' name='username'/>
          </td>
        </tr>
        <tr>

          <td>
            <input class="input"  type='password' name='password'/>
          </td>
        </tr>
        <tr>
          <td>
            <input class="input"  type='submit' value='Register' name="btn1"/>
          </td>
        </tr>
      </table>
      <?php

                  if(isset($_POST['username'], $_POST['password']))
{
$name = $_POST['username'];
$pass = $_POST['password'];
                   if(strlen($name) <= 1){

                     // echo "имя не заполнено";// header("Location: dashboard.php");
die('error name');
                   }
                    
                    else {


                        echo "имя: $name";
                    }

                    ?><br><?php

                    if(strlen($pass) <= 1){

                     // echo "пароль не заполнен";// header("Location: dashboard.php");
die('error password');
                   }
                    
                    else {


                        echo "пароль: $pass";
                        
                    }
}

        session_start();
        if(isset($_POST['username'], $_POST['password'])){
            require 'connect.php';

            $usr = $_POST['username'];
            $pass = hash('sha256', $_POST['password']);

            //Check, if user exists:
if(strlen($usr) <= 1){

                      echo "имя не заполнено"; header("Location: dashboard.php");
die('error name');}  else {


      
                    }if(strlen($pass) <= 1){

                      echo "имя не заполнено"; header("Location: dashboard.php");
die('error pass');}  else {


      
                    }





            $check = dbConnect()->prepare("SELECT * FROM users");

            $check->bindParam(':username', $usr);
            $check->bindParam(':password', $pass);

            $check->execute();

            $row = $check->fetch();
            if ($row['username'] == $usr) {
              echo "User already exists";
            }
            else {
              //Register:
              $query = dbConnect()->prepare("INSERT INTO `users`(`username`, `password`) VALUES ('$usr', '$pass')");
              $query->execute();

              $_SESSION['username'] = $usr;
              header("Location: dashboard.php");
            }
        }
      ?>
    </form>
  </body>
</html>
