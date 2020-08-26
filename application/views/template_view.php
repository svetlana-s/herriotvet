<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Herriot Veterinary Clinic</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		}
		
		// show random quote
		$(document).ready(function() { 

			let quotes = $('.quote');
			quotes.hide();
			
			let qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
                    <a href="/">Herriot Veterinary Clinic</span> <span class="cms"></span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/doctors">Доктора</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Случайная цитата</h3>
						<p align="justify" class="quote">
                        «Если вы решите стать ветеринаром, то богатым не будете никогда, но зато
                        жизнь у вас будет интересная и полная разнообразия»
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						«Когда без тени сомнения знаешь, что отвоевал животное у смерти, пусть даже
                        не прибегая ни к каким хитроумным средствам, это приносит удовлетворение,
                        искупающее все превратности жизни ветеринарного врача»
						</p>
						<p align="justify" class="quote">
						«Наш медовый месяц удался на славу - особенно учитывая, что мы провели его,
                        занимаясь туберкулинизацией коров»
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						«Собаки наиболее полно воплощают идею, вокруг которой в конечном счете строилась
                        вся моя жизнь - взаимозависимость, доверие и любовь, связывающие человека и животное»
						</p>
						<p align="justify" class="quote">
						«Если душа - это способность любить, хранить верность, чувствовать благодарность,
                        то у животных больше шансов на спасение, чем у многих и многих людей»
						</p>
					</div>
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/services">Услуги</a></li>
							<li><a href="/doctors">Доктора</a></li>
							<li class="last"><a href="/contacts">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						<!--
						<h2>Welcome to Accumen</h2>
						<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
						<p>
							This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
						</p>
						-->
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">tel: (096)685-73-78</li>
						<li>skype: svetlana2524</li>
						<li class="last">email: s.goroshanska@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>О Клинике</h3>
					<p>
                        В нашей клинике работают преданные своему делу профессионалы с
                        многолетним опытом лечения домашних животных. Диагностическая лаборатория клиники оснащена всем необходимым
                        оборудованием, что позволяет максимально точно и быстро получать результаты анализов,
                        необходимые для дальнейшего лечения.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">Herriot Veterinary Clinic</a> &copy; 2020</a>
		</div>
	</body>
</html>