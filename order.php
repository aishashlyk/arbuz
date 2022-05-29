<?php
include_once 'index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="/image/watermelon.png">
	<title>Arbuz</title>
	<style>
	</style>
</head>

<body>
	<section>
		<div class="container mt-3">
			<div class="row justify-content-center">
				<div class="col-10">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="col-md-5" method="post">
						<?php echo $error['success'] ?>
						<div class="form-header text-center">
							<h3>Номер заказа/Tapsyrys sany</h3>
						</div>
						<div class="form-group">
							<label for="">Имя/Atyńyz</label>
							<input type="text" class="form-control" name="name" value="<?php echo $_POST['name'] ?>">
							<?php echo $error['name'] ?>
						</div>
						<div class="form-group">
							<label for="">Место в грядке/Atyzdaǵy oryn</label>
							<input type="text" class="form-control" name="place" value="">
						</div>
						<div class="form-group">
							<label for="">Количество/Sany</label>
							<input type="text" class="form-control" name="num" value="">
							<?php echo $error['num'] ?>
						</div>
						<div class="form-group">
							<label for="">Телефон/Telefon</label>
							<input type="text" class="form-control" name="phone" value="">
							<?php echo $error['phone'] ?>
						</div>
						<div class="form-group">
							<label for="">Адрес доставки/Jetkizý meken jaiy</label>
							<textarea class="form-control" name="adress"></textarea>
							<?php echo $error['text'] ?>
						</div>
						<div class="form-group">
							<label for="">Дата и время доставки/Jetkizý kúni men ýaqyty DD/MM/YYYY, DD-MM-YYYY</label>
							<input type="text" class="form-control" name="date" value="">
							<?php echo $error['date'] ?>
						</div>
						<div class="form-group">
							<label for="">Порезать дольками/Tilimderge kesy</label>
							<div>
								<label for="" class="radio-inline"><input type="radio" name="option" id="yes">Да/Ia</label>
								<label for="" class="radio-inline"><input type="radio" name="option" id="no">Нет/Joq</label>
							</div>
						</div>
						<button type="submit" class="btn btn-success" name="submit">Заказать/Tapsyrys bery</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script>
	</script>
</body>

</html>