<?php session_start();
      if (isset($_SESSION['username'])) {     //проверяем залогинен или нет
        $usr = $_SESSION['username'];         //если да, => в админ панель
header("Location: dashboard.php");            //если нет, => авторизация
}
  else {
  
     

      }
 ///////////////////////////////////////////////////////////////////////////     
?><?php
// require 'app/parts/main/head.php'; 
?>
      <?php
        if(isset($_POST['username'], $_POST['password'])){
            require 'connect.php';

            $pass = hash('sha256', $_POST['password']);
            $usr = $_POST['username'];

            $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
            $query->bindParam(':username', $usr);
            $query->bindParam(':password', $pass);
            $query->execute();

            $row = $query->fetch();

            if($row['password'] == $pass){
              $_SESSION['username'] = $row['username'];
              header("Location: dashboard.php");
            }
            else {
              echo '<div class="notification is-danger log">
  <button class="delete de"><a class="clo" href="">X</a></button>
<center><strong>Ошибка</strong></center>
</div>';
            }
        }
      ?>
<?php
// require 'app/parts/login/body.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="app/css/login.css">
    <style>button.delete.de{top:1.6em;}.notification a:not(.button)
{color:transparent!important;text-decoration:none;}
.login-wrapper.columns.m{margin-right:0;height:102vh;}.k{border-radius:10px;}
input.button.is-info.is-outlined.is-large.is-fullwidth{border-radius:40px;}
.notification.is-danger.log{position:absolute;width:100%;}
::-webkit-scrollbar{width:1px;}</style>
</head>

<body>


  <div class="login-wrapper columns m">
    <div class="column is-8 is-hidden-mobile hero-banner">
      <section class="hero is-fullheight is-dark">
        <div class="hero-body">
          <div class="container">
<img class="k" src="https://cdn.dribbble.com/users/352214/screenshots/3320239/bf-dribbbleappbuilder.png">
          </div>
          <div class="container section">
            <div class="has-text-right">
              <h1 class="title is-1">- Конструктор</h1> <br>
              <p class="title is-3">Конструируй конструктивно</p>
            </div>
          </div>
        </div>
        <div class="hero-footer">
          <p class="has-text-centered">Image © unsplash</p>
        </div>
      </section>  
    </div>
    <div class="column is-4">
      <section class="hero is-fullheight">
        <div class="hero-heading">
          <div class="section has-text-centered">
              <!--<img src="" alt="logo" width="150px">-->
          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-8 is-offset-2">
                <h1 class="avatar has-text-centered section">
                  <img src="https://cdn.dribbble.com/users/10549/screenshots/3062682/build.png">
                </h1>

       <form action="" method="post" class="login-form">
       
        
          
              <label class="label"></label>
            
            <p class="control has-icon has-icon-right">
              <input class="input  email-input" type="text" placeholder="Логин" name='username'>
<span class="icon user">
                      <i class="fa fa-user"></i>
                    </span>
            </p>


     
              <label class="label"></label>
     
            <p class="control has-icon has-icon-right">
              <input class="input password-input" type="password" placeholder="Пароль" name='password'>
<span class="icon user">
                      <i class="fa fa-lock"></i>
                    </span>
            </p>
     <p class="control login">
              <input class="button is-info is-outlined is-large is-fullwidth" type='submit' value='ВОЙТИ' name="btn1"/>
</p>
   
      </form>

                <div class="section forgot-password">
                  <p class="has-text-centered" style="margin-left: 25px;">
                    <a href="#" style="padding-right: 0px;">Помощь |</a>
                    <a href="reg.php">Регистрация</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  
    </div>
  </div>
</body>

</html>
