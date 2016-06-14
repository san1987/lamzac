
<script>
jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $("#send_req"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			close_send_req_id(); // скрываем его
		}
	});
});

</script>
<div id='send_req_id'  >


	<div id='send_req_id1'>

	<form class='login-form' id='send_req' action="javascript:void(null);" onsubmit="call()"    method=POST>
	<h2 class='param param0 param1'>Заказать LAMZAC</h2>
	<h2 class='param   param2'>Заполни форму</h2>

	<span class='subtitle param param0 subtitle_good_title'>Lamzac для отдыха ОРАНЖЕВЫЙ<br></span>
	<span class='subtitle param param2'>Мы скоро перезвоним тебе</span>  <br><br>

	<div id=form_req>

		  <span class='param param0 param1'><b>Имя <span class=red>*</span></b> <br>  <input   type=text name=name   size=40>   <br><br></span>
		  <b>Номер телефона <span class=red>*</span></b> <br>  <input   type=text name=phone   size=40>     <br> <br>
		  <span class='param param0 param1'><b>Email</b><br>   <input   type=text name=email   size=40>  <br>         <br></span>
		  <span class='param   param1'><b>Какие цвета и количество <span class=red>*</span></b> <br>
		   <input   type=text name=comment1   size=40>     <br> <br></span>
		  <span class='param param0 param1'><b>Адрес доставки и комментарии</b>


		  <span class='param param0'><br>(Другие цвета и количество и т.д.)</span><br>
		   <textarea   type=text name=text   cols=40> </textarea></span>
		 	<input type=hidden value='0' name=good_id id=req_good_id>
		 	<input type=hidden value='0' name=good_type id=req_good_type>

		<input type=submit value='Заказать' class='button malina button0' >
		<input type=submit value='Хочу Lamzac и подарок' class='button red button1' >
		<input type=submit value='Перезвоните мне' class='button red_out button2' >

		<span style='display:none' id='send_req_sending'>Отправка...</span>
		<span style='color:red' id=error_area></span>
	</div>
	<div id=result_area>
	</div>


	<a class=close href='javascript: close_send_req_id()'>
	<img src='imgs/close.png' width=20>
	</a>

	</form>

	</div>
</div>






<script type="text/javascript" language="javascript">
	function close_send_req_id(){
		 $('#send_req_id').hide();
		 $('#send_req_sending').hide();
		 $('#form_req').show();
		 $('#result_area').hide();
		 $('#error_area').hide();
		 reload_cap_img();
	}

</script>
<script type="text/javascript" language="javascript">
	function reload_cap_img(){
					d = new Date();
					$("#cap_img").attr("src", $("#cap_img").attr("src")+"&"+d.getTime());
	}
 	function call() {

 	  $('#send_req_sending').show();
 	  var msg   = $('#send_req').serialize();
 	  //alert(msg);
      $.ajax({
          type: 'POST',
          url: '.?p=ajax&a=request',
          data: msg,
          success: function(data) {

            	$('#send_req_sending').hide();

            	if (data.result==1){
            		$('#result_area').html("Спасибо за Ваше обращение, в ближайшее время с Вами свяжется наш менеджер");
            		$('#result_area').show();
            		$('#form_req').hide();
            	}else{

            		$('#error_area').html(data.error);
            		$('#error_area').show();
            		reload_cap_img();

            	}
          },
          error:  function(xhr, str){
	    		//alert('Возникла ошибка: ' + xhr.responseCode);
	    		$('#form_req').hide();
	    		$('#result_area').show();
	    		$('#result_area').html("Возникла техническая ошибка в работе сайта. Позвоните нам!");
          }
        });

    }
</script>


<script>
function show_req(obj, t){
	$('#send_req_id .button').hide();
	$('#send_req_id .param').hide();
	$('#req_good_type').val(t);	if (t==0){


		$('#req_good_id').val(  $(obj).parent().children(".title").html() );
		$('.subtitle_good_title').html(  $(obj).parent().children(".title").html() );



		$('#send_req_id .button0').show();
		$('#send_req_id .param0').show();

	}else if (t==1){		$('#send_req_id .button1').show();
		$('#send_req_id .param1').show();	}else{		$('#send_req_id .button2').show();
		$('#send_req_id .param2').show();
	}
	$('#send_req_id').show();
	alignCenter();
}


// функция принимает элемент, который необходимо центрировать
function alignCenter( ) {
	var elem=$('#send_req_id1');
  elem.css({ // назначение координат left и top
    left: ($(window).width() - elem.width()) / 2 + 'px',
    top: ($(window).height() - elem.height()) / 2 + 'px'
  })
}


$(function() {

  //setInterval( alignCenter, 100); // центрировали окно
  $(window).resize(function() {
    alignCenter( ); // центрирование при ресайзе окна
  })

})




</script>


