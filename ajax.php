<?php

$admin_email="zhalex@ya.ru";


$result=array();
switch($a){
	case "request":
		$result["result"]="0";
		if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['captcha']  || true){

			if (  $phone=="" || $email=="" || $name=="" || $juridical_name=="" )
				$result["error"]="Не все обязательные поля формы заполнены. Попробуйте ещё раз";
			else{


				unset($_SESSION['captcha_keystring']);



				 $k=send_mime_mail(
                        $admin_email, // email получателя
                        "LAMZAC: Новый запрос " , // тема письма
                         // текст письма

                         "
                         ".mres($phone)."
                         ".mres($email)."
                         ".mres($name)."
                         ".						mres($juridical_name)."
                         ".$main["title"]."
                         ". $_SERVER['HTTP_REFERER']."
                         ".mres($text)." "
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