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


<div class=menu>
	<div class=content>
		<div class=subcontent>
			<img src='imgs/logo.png'>.
			<ul>
		  		<li>Главная</li>
		  		<li>Каталог</li>
		  		<li>Инструкция</li>
			</ul>
			<div class=phone>
				8 495 123 45 67
			</div>
		</div>
	</div>
</div>

<div class=content>
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



         <div class=clear></div>


		</ul>
	</div>


</div>
<div style='background: rgb(240,240,240)'>
    <div class=content>

						<div id='rest'>
							<h2>Отдыхай с комфортом:</h2>
							<ul class='subcontent absolute_text'>
							    <li>
							    	<img src='imgs/comfort1.jpg'><div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div>
							    </li>
							    <li class='text_right'>
							    	<img src='imgs/comfort2.jpg'><div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div>
							    </li>
							    <li>
							    	<img src='imgs/comfort3.jpg'><div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div>
							    </li>
							    <li class='text_right'>
							    	<img src='imgs/comfort4.jpg'><div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div>
							    </li>
							    <li class='last'>
							    	<img src='imgs/comfort1.jpg'><div style='left: 100px; top: 50px;'><span>на скалистой</span><br>местности</div>
							    </li>



                                <div class=clear></div>
							</ul>
						</div>
	</div>
</div>
<div class=content>


	<div id='about'>
		<h2>Lamzac - ЭТО:</h2>

		<img src='imgs/about.jpg'>
	</div>

</div>
<div style='background: rgb(255,201,30)'>
	<div class=content>

		<div id='delivery'>
               <img src='imgs/delivery1.jpg'>
               <ul>
		               <li class='li1'> Бесплатная доставка по всей России </li>
		               <li class='li2'> Гаратия качества Возврат денег в течении 14 дней </li>
		               <li class='li3'> Оплата при получении Курьеру или в пунктах самовывоза </li>
               </ul>
               <img src='imgs/del-right.jpg'>
               <div class=clear></div>
		</div>

	</div>
</div>
<div class=content>

	<div id='instruction'>
		<h2>Как это работает:</h2>


		<ul class='subcontent absolute_text'>
		    <li>
		    	<img src='imgs/instruction1.jpg'><div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div>
		    </li>
		    <li class='text_right'>
		    	<img src='imgs/instruction2.jpg'><div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div>
		    </li>
		    <li>
		    	<img src='imgs/instruction3.jpg'><div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div>
		    </li>
		    <li class='text_right'>
		    	<img src='imgs/instruction4.jpg'><div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div>
		    </li>



           <div class=clear></div>

		</ul>

	</div>

	<div id='slider'>
		<h2>Бери с собой везде</h2>
	</div>
</div>
<div class='clear blue line'></div>
<div class=content>
    <img src='imgs/pick_it.jpg'>
</div>
<div class='clear blue line'></div>

<div class=content>


</div>

		<div id='order'>
			<h2>Лови моменты с Lamzac</h2>
		</div>



<div style='background: rgb(30,30,30)'>
	<div class=content>
		тест
	</div>
</div>
	<div class=content>

	<div id='contacts'>
		<h2>Понравилось? :)</h2>

		Закажи сейчас и <span class='red upper'>получи</span>
		приятный <span class='red upper'>подарок</span> к заказу<br>
		<div class='button red upper'>хочу LAMZAC и подарок</div>
		Узнай больше по <span class=phone>8 495 123 45 67</span><br>
		<div class='button red_out upper'>перезвоните мне</div>

	</div>

	<div id='footer'>
	</div>


</div>


</body>


</html>