<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<script src="jquery.js" type="text/javascript"></script>
<title>Lamzac</title>



<link rel="stylesheet" href="style.css"/>


</head>
<body>


<div id=content>
	<div id='header'>
		<img src='imgs/header.jpg'>
	</div>

	<div id='catalog'>
		<h2>Выбери цвет своего УДОВОЛЬСТВИЯ</h2>
		<ul class=subcontent>

		<?
		for ($i=1;$i<=6; $i++){
		?>
			<li class='free_delivery sale'>
				<div class=pictures>
					<img class=picture src='imgs/catalog1.jpg'>
					<img class=free_delivery src='imgs/free_delivery.png'>
					<img class=sale src='imgs/sale.png'>
				</div>
				Lamzac для отдыха ОРАНЖЕВЫЙ<br>
				<span class='price1'>5 700 руб.</span>
				<span class='price2'><b>3 490</b> руб.</span><br>
				<span class='stock'>В наличии</span>  <br>
				<div class='order'>Заказать</div>
			</li>

		<?
		}
		?>






		</ul>
	</div>


	<div id='rest'>
		<h2>Отдыхай с комфортом:</h2>
		<ul class=subcontent>
		    <li>
		    	<img src='imgs/comfort1.jpg'><div><span>на скалистой</span><br>местности</div>
		    </li>
		    <li class='text_right'>
		    	<img src='imgs/comfort2.jpg'><div><span>на скалистой</span><br>местности</div>
		    </li>
		    <li>
		    	<img src='imgs/comfort3.jpg'><div><span>на скалистой</span><br>местности</div>
		    </li>
		    <li class='text_right'>
		    	<img src='imgs/comfort4.jpg'><div><span>на скалистой</span><br>местности</div>
		    </li>
		    <li class='last'>
		    	<img src='imgs/comfort1.jpg'><div><span>на скалистой</span><br>местности</div>
		    </li>




		</ul>
	</div>


	<div id='about'>
		<h2>Lamzac - ЭТО:</h2>

		<img src='imgs/about.jpg'>
	</div>

	<div id='delivery'>
		<h2>Как это работает:</h2>
	</div>


	<div id='instruction'>
		<h2>Бери с собой везде</h2>
	</div>

	<div id='slider'>
		<h2>Лови моменты с Lamzac</h2>
	</div>


	<div id='order'>
		<h2>Понравилось? :)</h2>
	</div>

	<div id='footer'>
	</div>


</div>


</body>


</html>