<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script src="jquery.js" type="text/javascript"></script>
<title>Lamzac</title>



<link rel="stylesheet" href="style.css"/>


</head>
<body>


<?
include "form.tpl.php";
?>


<div class=menu >
	<div class=content>
		<div class=subcontent>
			<img class=logo src='imgs/logo.png'>
			<ul>
		  		<li class='sel' anchor=#header><a href='#header'>Главная</a></li>
		  		<li  anchor=#catalog><a href='#catalog'>Каталог</a></li>
		  		<li  anchor=#instruction><a href='#instruction'>Инструкция</a></li>
			</ul>
			<div style='padding-top: 20px; margin-right: 14px;'>
				<span class=phone>				8 495 123 45 67</span>
			</div>
		</div>
	</div>
</div>

<div class=content >
	<div id='header' name=header>
		<img src='imgs/header.jpg'>
        <div class=img_text 		 style='left: 597px; top: 123px; font-size: 30px;'>НАДУВНОЙ ШЕЗЛОНГ - LAMZAC</div>
        <div class='img_text yellow' style='left: 642px; top: 167px; font-size: 25px;'>надувается без насоса за 14 секунд</div>
        <div class=img_text 		 style='left: 302px; top: 359px; font-size: 40px;'>
        		Получай От Жизни Удовольствие</div>
	</div>

	<div id='catalog' name=catalog>
		<h2>Выбери цвет своего УДОВОЛЬСТВИЯ</h2>
		<ul class=subcontent>

		<?
		for ($i=1;$i<=6; $i++){
		?>
			<li class='<?=rand(1,4)==2?"free_delivery ":""?><?=rand(1,4)==2?"  sale":""?>'>
				<div class=pictures>
					<img class=picture src='imgs/catalog1.jpg'>
					<img class=free_delivery src='imgs/free_delivery.png'>
					<img class=sale src='imgs/sale.png'>
				</div>
				Lamzac для отдыха ОРАНЖЕВЫЙ<br>
				<span class='price1'>5 700 руб.</span>
				<span class='price2'><b>3 490</b> руб.</span><br>
				<span class='stock'>В наличии</span>  <br>
				<a href='javascript: show_req(<?=$i?>)' class='order'>Заказать</a>
			</li>

		<?
		}
		?>



         <div class=clear></div>


		</ul>
	</div>


</div>
<div style='background: rgb(240,240,240)' class=clear>
    <div class=content>

						<div id='rest'>
							<h2>Отдыхай с комфортом:</h2>
							<ul class='subcontent absolute_text'>
							    <li>
							    	<img src='imgs/comfort_1.jpg'>
							    	<!--div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div-->
							    </li>
							    <li class='text_right'>
							    	<img src='imgs/comfort_2.jpg'>
							    	<!--div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div-->
							    </li>
							    <li>
							    	<img src='imgs/comfort_3.jpg'>
							    	<!--div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div-->
							    </li>
							    <li class='text_right'>
							    	<img src='imgs/comfort_4.jpg'>
							    	<!--div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div-->
							    </li>
							    <li class='last'>
							    	<img src='imgs/comfort_5.jpg'>
							    	<!--div style='left: 100px; top: 50px;'><span>на скалистой</span><br>местности</div-->
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
<div style='background: rgb(255,201,30)' class=clear>
	<div class=content>
		<div class=subcontent>

			<div id='delivery'>
	               <img src='imgs/delivery1.jpg' class='first'>
	               <ul>
			               <li class='li1'> Бесплатная доставка <br>по всей России </li>
			               <li class='li2'> Гаратия качества<br> Возврат денег в течении 14 дней </li>
			               <li class='li3'> Оплата при получении<br> Курьеру или в пунктах самовывоза </li>
	               </ul>
	               <img src='imgs/del-right.jpg'>
	               <div class=clear></div>
			</div>
        </div>
	</div>
</div>
<div class=content>

	<div id='instruction' name=instruction>

		<h2>Как это работает:</h2>


		<ul class='subcontent absolute_text'>
		    <li>
		    	<img src='imgs/instruction_1.png'>
		    	<!--div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div-->
		    </li>
		    <li>
		    	<img src='imgs/instruction_2.png'>
		    	<!--div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div-->
		    </li>
		    <li>
		    	<img src='imgs/instruction_3.png'>
		    	<!--div style='left: 10px; top: 30px;'><span>на скалистой</span><br>местности</div-->
		    </li>
		    <li>
		    	<img src='imgs/instruction_4.png'>
		    	<!--div style='left: 100px; top: 30px;'><span>на скалистой</span><br>местности</div-->
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
		<div class=subcontent>
		<?
		include "slider.tpl.php";
		?>
		</div>
	</div>
</div>
	<div class=content>

	<div id='contacts'>
		<h2>Понравилось? :)</h2>

		Закажи сейчас и <span class='red upper'>получи</span>
		приятный <span class='red upper'>подарок</span> к заказу<br>

		<div class=clear></div>
		<a href='javascript: show_req(-1)' class='button red upper'>хочу LAMZAC и подарок</a>
		<div class=clear></div>

		Узнай больше по <span class=phone>8 495 123 45 67</span><br>
		или оставь свой номер, мы тебе <span class='red upper'>перезвоним</span> сами

		<div class=clear></div>
		<a href='javascript: show_req(-1)' class='button red_out upper'>перезвоните мне</a>
        <div class=clear style='height: 20px'></div>

	</div>
</div>


<div style='position: relative'>
	<div class=content>
		<div id='footer' style='position: relative'>
			<img src='imgs/footer.jpg'>

			<div style='position: absolute; left: 0; top: 0; width:100%'>
				<div class='subcontent'>
					<img src='imgs/logo.png'>
					<br><br>
					Получай от жизни удовольствие    <br><br>
					<div style='text-align: right'>
					     <span class='phone'>8 495 123 45 67<span>
					</div>
				</div>
			</div>
        </div>
	</div>
	<div style='background: rgba(0,0,0,0.5); position: absolute; left: 0; top: 0; width: 100% ; height: 100%;'  >
	</div>




</div>

<div class=clear></div>



<script type="text/javascript">
	$(document).ready(function() {
	   $('a[href^="#"]').click(function () {
	     elementClick = $(this).attr("href");

	     $(".menu li").removeClass("sel");
	     $(".menu li[anchor="+elementClick+"]").addClass("sel");

	     destination = $(elementClick).offset().top -20;
	     if($.browser.safari){
	       $('body').animate( { scrollTop: destination }, 1100 );
	     }else{
	       $('html').animate( { scrollTop: destination }, 1100 );
	     }
	     return false;
	   });
	 });
</script>




</body>


</html>