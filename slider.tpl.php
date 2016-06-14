<?php

$width=1050;
$height=500;

$pics=array("imgs/slid_1.png",
			"imgs/slid_2.png",
			"imgs/slid_3.png",
			"imgs/slid_4.png",
			"imgs/slid_5.png"
			);


?>


<!-- Автор Dylan Wagstaff, http://www.alohatechsupport.net -->





<script type="text/javascript">

var count_time=0;
function counter(){
	count_time++;

	if (count_time==6){
		count_time=0;
		rotate();
	}

}

function theRotator() {
	// Устанавливаем прозрачность всех картинок в 0
	$('div#rotator ul li').css({opacity: 0.0});

	// Берем первую картинку и показываем ее (по пути включаем полную видимость)
	$('div#rotator ul li:first').css({opacity: 1.0});


	// Вызываем функцию rotate для запуска слайдшоу, 5000 = смена картинок происходит раз в 5 секунд
	setInterval('counter()',1000);
	rotate();
}

var page_id=0;
var allow=true;
var is_rotate=1;


function show_next_prev(is_next, is_btn, page_needed) {

	if (page_needed==-1) page_needed=<?=count($pics)?>-1;
	if (page_needed==<?=count($pics)?>) page_needed=0;


	if (is_btn){
		allow=false;
		count_time=0;
		setTimeout('allow=true;', 100);
	}
	// Берем первую картинку
	var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));

	// Берем следующую картинку, когда дойдем до последней начинаем с начала
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));


	if (!is_next){
		next = ((current.prev().length) ? ((current.prev().hasClass('show')) ?
			 $('div#rotator ul li:last') :current.prev()) : $('div#rotator ul li:last'));

	}

	if (page_needed!=-999)  next=$(sss='div#rotator ul li[page_id='+page_needed+']');


	// Расскомментируйте, чтобы показвать картинки в случайном порядке
	// var sibs = current.siblings();
	// var rndNum = Math.floor(Math.random() * sibs.length );
	// var next = $( sibs[ rndNum ] );

	// Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//alert();
	page_id=next.attr("page_id");

	$("div#rotator .anons a").removeClass("sel");
	$("div#rotator .anons a").removeClass("show");
	$("div#rotator .anons a[page_id="+page_id+"]").addClass("sel");

	$("div#rotator .anons a[page_id="+(page_id-1)+"]").addClass("show");
	$("div#rotator .anons a[page_id="+(page_id)+"]").addClass("show");
	$(s="div#rotator .anons a[page_id="+(page_id*1+1)+"]").addClass("show");

	// Прячем текущую картинку
	current.animate({opacity: 0.0}, 2000)
	.removeClass('show');

	//alert('текущая '+current.attr("page_id")+' прошлая '+next.attr("page_id"));
};



function rotate() {
	if(is_rotate)
		show_next_prev(true, false, -999);
};

$(document).ready(function() {
	// Запускаем слайдшоу
	theRotator();
});

</script>
<script>

    function go(url){    		 window.location.href=url;    }

	function goheadpic(){		if(0)
	  		 if (allow)
	   	   	   go(		   	   page_url[page_id]	   	   );
	}
</script>

<script>
				var page_url = new Array();
                <?
                foreach($pics as $k=>$pic)
                	echo "page_url[$k]='$pic';";

                ?>







				is_rotate=1;
				page_id=0;
</script>


				  <div id="rotator" >
                          <div style='height: <?=$height?>px'>
			                  <a id='aPrevButton' href='javascript: show_next_prev(false, true, -999); '  >
							  </a>

							  <ul style='width: <?=$width?>px' onclick='javascript: goheadpic()' >

							    <?


                		foreach($pics as $k=>$pic)      {
		                	?><li class='<?=$k==0?"show":""?>'  page_id=<?=$k?> style='
													height:<?=$height?>px; overflow: hidden'>
												<img title='' src='<?=$pic?>' width=<?=$width?> /> </li>
								<?
		                	}

                ?>









							    </ul>






							    <a id='aNextButton' href='javascript: show_next_prev(true, true, -999);  '></a>

                          </div>
                          <div class=clear style='height: 100px;'></div>


                          <div class='anons' >
                           <?
                              $pics[-1]=$pics[count($pics)-1];
							    $pics[count($pics)-1]=$pics[0];
							    ksort($pics);
	                		foreach($pics as $k=>$pic)      {
		                	?><a page_id=<?=$k?> class='sel' href='javascript: show_next_prev(false, true, <?=$k?>); '>
		                		<img title='' src='<?=$pic?>'   /></a>
							<?
		                	}

               				 ?>

                          </div>

				</div>


