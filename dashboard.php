<?php
      session_start();
      if (isset($_SESSION['username'])) {
        $usr = $_SESSION['username'];
        require_once 'config.php';
        require_once 'functions.php';


if( isset($_POST['new_val']) ){
	if( update_option() ){
		exit("Настройка сохранена");
	}else{
		exit("Ошибка сохранения");
	}
}
$options = get_options();

require 'app/parts/main/head.php'; 
        require 'app/parts/dashboard/body.php';
        
        }
      else {
        header("Location: index.php"); 
      }

                  if (isset($_POST['submit']))
{
$name = $_POST['username'];
$pass = $_POST['password'];
                   if(strlen($name) <= 1){

                      echo "имя не заполнено";
exit;
                   }
                    
                    else {


                        echo "имя: $name";
                    }

                    ?><br><?php

                    if(strlen($name) <= 1){

                      echo "пароль не заполнен";
exit;
                   }
                    
                    else {


                        echo "пароль: $pass";
                        
                    }
}

    ?>
<link rel="stylesheet" type="text/css" href="app/css/dashboard.css">
<style>::-webkit-scrollbar {
    width: 1px;
}.notification {
    font-weight: 900;
}
      a.navbar-item {
    color: #fff;  
}nav.navbar {
    background: transparent;
}.head {
    background: #000;
}.logo{  width: 32px;
    max-height: 100%;}.navbar-item img {
    max-height: 32px;
}
.column.is-one-quarter.av {
    justify-content: center;
    display: flex;
}
.column.is-one-quarter.avv {
    position: absolute;
       text-align: center;
	   left: 0;
}

a:link {
  color: black;
  text-decoration: none;
  font-size: 22px;
}

a:visited {
  color: black;
  text-decoration: none;
  font-size: 22px;
}


.cell {
  margin: 10px;
  width: 150px;
  margin: 10px;
  text-align: center;
  font-size: 27px;
}
    </style>
<style>
.zebra{
	width: 100%;
	margin: 20px auto;
	border-collapse: collapse;
}
.zebra th{
	background: #b9b9b9;
	color: #fff!important;
	text-align: left;
}
.zebra .foot{
	background: #b9b9b9;
	color: #000;
	text-align: left;
}
.zebra input{
	width: 100%;
	transition: all .5s;
}
.zebra input:focus{
	box-shadow: 0 0 5px #000;
}
.zebra th,
.zebra td{
	border-bottom: 1px solid #ccc;
	padding: 5px;
	vertical-align: middle;
	padding: 12px 5px;
}
.zebra tr{
	transition: all .5s;
}
.zebra tr:hover{
	/*background: #f1f1f1;*/
}

.edit{
	padding: 3px;
	transition: all .5s;
/*	border: 1px solid rgba(82, 168, 236, .5);*/
}
.edit:focus{
    border: 1px solid rgb(242, 242, 242);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(178, 178, 178, 0.9);
    outline: 0 none;
}

#loader{
	position:fixed;
	display:none;
	top:0;
	left:0;
	height:100%;
	width:100%;
	background:#f2f2f2;
	opacity:.9;
	z-index: 30;
}
#loader span{
	display: block;
	background: url(../img/loader.gif);
	width: 128px;
	height: 15px;
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -7px 0 0 -56px;
}
#mes-edit{
	display: none;
	color: #000;
	font-size: 15px;
	border: 1px solid #ccc;
	box-shadow: 0 0 10px #ccc;
	padding: 10px;
	text-align: center;
	width: 400px;
	position: fixed;
	left: 50%;
	top: 50%;
	margin: -20px 0 0 -200px;
	font-weight: bold;
	background: #fff;
}
</style>
   



 







<div class="container"> 
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="app/js/script.js"></script>
  <?php require 'app/parts/dashboard/add.php'; ?>



</div>










  </body>
</html>
