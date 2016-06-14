<?php

$admin_email="x7door@ya.ru";



$result=array();
switch($a){
	case "request":
		$result["result"]="0";
		if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['captcha']  || true){

			if (  $phone==""    )
				$result["error"]="Не все обязательные поля формы заполнены. Попробуйте ещё раз";
			else{


				unset($_SESSION['captcha_keystring']);



				 $k=send_mime_mail(
                        $admin_email, // email получателя
                        "LAMZAC: Новый запрос ".($good_type==0?" на товар ":$good_type==1?"На подарок":"На перезвонить") , // тема письма
                         // текст письма

                         "телефон ". ($phone).
                         ($good_type==2?"":"
                         почта ". ($email)."
                         имя ". ($name)."
                         товар $good_id

                         ".						 ($comment1)."


                         ". ($text))." "

                        ,$email_from=false
                        );


     			$result["result"]=$k;
                 if (!$k)
	     			$result["error"]="На сервере произошла ошибка. Позвоните нам по телефону.";
			}




  		}else{

	  		$result["error"]="Вы неверно ввели код с картинки. Попробуйте ещё раз";
	  	}
		break;
}

header('Content-type: application/json');
echo json_encode($result);