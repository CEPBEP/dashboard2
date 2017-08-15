
<link rel="stylesheet" href="https://l-o-g.000webhostapp.com/p/content/css/style.css">
  <body>
<div class="head">
  <div class="container is-fluid">
    <div class="navbar-menu">
      <div class="navbar-start">
        <div class="navbar-brand">
    <a class="navbar-item" href="">
      <img class="logo" src="https://l-o-g.000webhostapp.com/p/logo.png" alt="PAYMON"> PAYMON
    </a>
</div>
  </div>

  <div class="navbar-end">
   <a class="navbar-item" style="float:right; text-decoration: none;" href="logout.php">
<i class="fa fa-sign-out"></i>
</a>
 <div class="navbar-burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!--/////////////////////////////////////////////////-->

<div class="container is-fluid">
<div class="notification container">
	  <div class="column is-one-quarter avv">
  <?php echo "Welcome ".ucwords($usr)."";?>
   </div>
<div class="columns">

<!--////////////////////////////////////////////////-->

  <div class="column is-one-quarter av">
        <img src='https://l-o-g.000webhostapp.com/p/content/image-add-button.svg' style='width: 80px;'>
   </div>
	 

<!--////////////////////////////////////////////////-->

     <div class="column">
   <table class="zebra table">
	<thead>
		<!--<tr>
			<th>ID</th>
			<th>Системное название</th>
			<th>Название опции</th>
			<th>Значение</th>
		</tr>-->
	</thead>
	<tbody>
<?php foreach($options as $option): ?>
	<tr>
		<!--<td><?=$option['id']?></td>-->
		<td><?=$option['title']?></td>
		<td><div class="edit" data-id="<?=$option['id']?>" data-name="name" contenteditable><?=$option['name']?></div></td>
		<!--<td><div class="edit" data-id="<?=$option['id']?>" data-name="value" contenteditable><?=$option['value']?></div></td>-->
	</tr>
<?php endforeach; ?>
	</tbody>
</table>
  </div>

</div>
<div class="column is-one-quarter" style="
    position: absolute;
    top: 159px;
    left: 4px;
    text-align: center;
    justify-content: center;
">
<div class="field">
  <div class="file is-centered">
    <label class="file-label">
      <input class="file-input" type="file" name="resume">
      <span class="file-cta">
        <span class="file-icon">
          <i class="fa fa-upload" aria-hidden="true"></i>
        </span>
        <span class="file-label">
           file…
        </span>
      </span>
      
    </label>
  </div>
</div>
   </div>

</div>


    <!--/////////////////////////////////////////////////////////////-->
<!--
    	<div class="container">
<table class="zebra table">
	<thead>
		<tr>
			<th>ID</th>
			<th>название</th>
			<th>опции</th>
			<th>значение</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($options as $option): ?>
	<tr>
		<td><?=$option['id']?></td>
		<td><?=$option['title']?></td>
		<td><div class="edit" data-id="<?=$option['id']?>" data-name="name" contenteditable><?=$option['name']?></div></td>
		<td><div class="edit" data-id="<?=$option['id']?>" data-name="value" contenteditable><?=$option['value']?></div></td>
	</tr>
<?php endforeach; ?>
	</tbody>
</table>-->


<?php/////////////////////////////////
//if( isset($_POST['new_val']) ){
//	if( update_option() ){
//		exit("Настройка сохранена");
//	}else{
//		exit("Ошибка сохранения");
//	}
//}
//$options = get_options();
//////////////////////////////////////?>


<div id="loader"><span></span></div>
<div id="mes-edit"></div>
