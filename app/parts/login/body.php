<body>
  <div class="login-wrapper columns">
    <div class="column is-8 is-hidden-mobile hero-banner">
      <section class="hero is-fullheight is-dark">
        <div class="hero-body">
         <!-- <div class="container section">
            <div class="has-text-right">
              <h1 class="title is-1">Login</h1> <br>
              <p class="title is-3">User Account Login</p>
            </div>
          </div>-->
        </div>
        <div class="hero-footer">
          <p class="has-text-centered">Copiright © 2017 Paymon</p>
        </div>
      </section>  
    </div>
    <div class="column is-4">
      <section class="hero is-fullheight">
        <div class="hero-heading">
          <div class="section has-text-centered">
            <!--<img src="https://l-o-g.000webhostapp.com/p/logo.png" alt="logo" width="150px">-->
          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-8 is-offset-2">
                <h1 class="avatar has-text-centered section">
                  <img src="https://l-o-g.000webhostapp.com/p/logo.png" style="width: 50%;">
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
     
              <input  class="button is-info is-outlined is-large is-fullwidth" type='submit' value='ВОЙТИ' name="btn1"/>

   
      </form>
               <!-- </div> -->
                <div class="section forgot-password">
                  <p class="has-text-centered">
                    <a href="#"></a> /
                     <a href="#"> ?</a>
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
              echo '<div class="notification is-danger">
  <button class="delete"></button>
<center><strong>Ошибка</strong></center>
</div>';
            }
        }
      ?>
