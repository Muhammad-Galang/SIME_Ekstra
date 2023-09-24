<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/landing-page/dist/css/style_captcha.css">
</head>

<body>
	<section>
		<div class="content">

			<span id="success-message" class="success">Succecc, You can now submit the form</span>
			<input type="text" id="captcha-code" class="input" placeholder="Enter Captcha">
			<span id="captcha-error" class="error"></span>

			<div class="captcha-wrap">
				<div id="CaptchaImageCode">
					<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>
				</div>
				<input type="button" class="ReloadBtn" onclick="CreateCaptcha()">
			</div>

			<input type="button" value="Submit" class="btnSubmit" onclick="CheckCaptcha(); Submit()">

		</div>
	</section>

	<script src="<?= BASEURL; ?>/landing-page/dist/js/jquery_captcha.js"></script>
	<script src="<?= BASEURL; ?>/landing-page/dist/js/captcha.js"></script>

</body>

</html>