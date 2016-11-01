<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Главная страница</title>
		<link rel="stylesheet" href="/template/bootstrap3/css/bootstrap.css">
		<link rel="stylesheet" href="/template/styles.css">
	</head>
	<body>
		<div id="menu">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					
					
					<li class="active"><a href="/">Главная</a></li>
					<li><a href="/about">О компании</a></li>
					<li><a href="/info">Информация</a></li>
					<li><a href="/price">Наши цены</a></li>
					
				  </ul>
				  
				  
				  <div class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
						  <input type="text" name="search" class="form-control" placeholder="Поиск">
						</div>
						<button type="submit" name="search-btn" class="btn btn-default">Найти!</button>
					</form>
				  </div>
				  
				</div>
			  </div>
			</nav>
		</div>
		<?php foreach($newsList as $post):?>
		<div id="wrapper">
			<h1><?php echo $post['title'];?></h1>
			<p><?php echo $post['post'];?></p>
		</div>
	  <?php endforeach;?>
	</body>
</html>


			