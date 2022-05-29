<?php 
function clear_data($val){
	$val = trim($val);
	$val = stripslashes($val);
	$val = strip_tags($val);
	$val = htmlspecialchars($val);
	return $val;
}

$zakaz = clear_data($_POST['zakaz']);
$name = clear_data($_POST['name']);
$place = clear_data($_POST['place']);
$num = clear_data($_POST['num']);
$phone = clear_data($_POST['phone']);
$adress = clear_data($_POST['adress']);
$date = clear_data($_POST['date']);
$option = clear_data($_POST['option']);
$name = empty($_POST['name']) ? null : $_POST['name'];

$pattern_name = '/^.*[^А-яЁё].*$/';
$pattern_phone = ' /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';

$pattern_date = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/ ';
$error = [];
$flag = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (!preg_match($pattern_name, $name)){
		$error['name'] = '<small class = "text-danger">Введите кириллицу/Kirillisa engiziniz</small>';
		$flag = 1;
	}
	if(!mb_strlen($name) > 15 || empty($name)){
		$error['name'] = '<small class = "text-danger">Имя должно быть не больше 15 символов/Atynyz 15 tańbadan aspaýy kerek</small>';
		$flag = 1;
	}
	if(!filter_var($num, FILTER_VALIDATE_INT) || $num>3){
		$error['num'] = '<small class = "text-danger">Вы не можете заказать больше 3 арбуза(введите количество 1-3)/3 qarbyzga gana tapsyryz bere alasyz(1-3 arasyndagi sandy engiziniz)</small>';
		$flag = 1;
	}
	if (empty($num)) {
		$error['num'] = '<small class = "text-danger">Поле не может быть пустым/Óris bos bolýy múmkin emes</small>';
		$flag = 1;
	}
	if (!preg_match($pattern_phone, $phone)) {
		$error['phone'] = '<small class = "text-danger">Формат телефона неверный/Telefon formati duris emes</small>';
		$flag = 1;
	}
	if (empty($phone)) {
		$error['phone'] = '<small class = "text-danger">Поле не может быть пустым/Óris bos bolýy múmkin emes</small>';
		$flag = 1;
	}
	if (!filter_var($num, FILTER_VALIDATE_INT) || $num > 3) {
		$error['num'] = '<small class = "text-danger">Вы не можете заказать больше 3 арбуза(введите количество 1-3)/3 qarbyzga gana tapsyryz bere alasyz(1-3 arasyndagi sandy engiziniz)</small>';
		$flag = 1;
	}
	if (!preg_match($pattern_date, $date)) {
		$error['date'] = '<small class = "text-danger">Не правильный формат /Format dyrys emes </small>';
		$flag = 1;
	}
	if (empty($date)) {
		$error['date'] = '<small class = "text-danger">Поле не может быть пустым/Óris bos bolýy múmkin emes</small>';
		$flag = 1;
	}
	if (empty($place)) {
		$error['place'] = '<small class = "text-danger">Поле не может быть пустым/Óris bos bolýy múmkin emes</small>';
		$flag = 1;
	}
	if (empty($adress)) {
		$error['adress'] = '<small class = "text-danger">Поле не может быть пустым/Óris bos bolýy múmkin emes</small>';
		$flag = 1;
	}
	if (empty($option)) {
		$error['option'] = '<small class = "text-danger">Поле не может быть пустым/Óris bos bolýy múmkin emes</small>';
		$flag = 1;
	}
	if($flag == 0){
		Header("Location:". $_SERVER['HTTP_REFERER']."?mes==success");
	}
if($_GET['mes']=='success'){
		$error['success'] = '<div class = "alert alert-success">Заказ успешно оформлен/Tapsyrys satti qosyldi</div>';
}
}