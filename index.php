<?php include 'inc/code.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>iP and Country Code</title>
	<link rel="stylesheet" href="inc/style.css">
	<link rel='stylesheet' href='https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css'>
</head>
<body>
	<div class="">
		<div class="d-flex align-items-center justify-content-center" style="padding-top:25%;">
			<?php foreach ($countrycode as $key=>$item): ?>
				<?php if ($key == $country): ?>
					<input class="phone" id="phone" name="phone" type="tel" class="form-control" value="+ <?php echo $item; ?> ">
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>

	<script src='inc/jquery.js'></script>
	<script src='inc/phone.js'></script>
	<script>
	var input = document.querySelector("#phone");
	window.intlTelInput(input, {
		initialCountry: "tr" });
		$(document).ready(function () {
$('.iti__flag-container').click(function () {
	var countryCode = $('.iti__selected-flag').attr('title');
	var countryCode = countryCode.replace(/[^0-9]/g, '');
	$('#phone').val("");
	$('#phone').val("+" + countryCode + " " + $('#phone').val());
});
		});
	</script>
</body>
</html>
