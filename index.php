<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Какое устройство вы используете...</h1>

	<div id="pc" style="display: none">
		<h3>Вы не используете мобильное устройство</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati consectetur, dicta, veritatis, facilis dolorum vero expedita culpa deleniti perferendis itaque impedit fuga, voluptate. Tempore nam esse minima iure necessitatibus ducimus.</p>
		<button>Оплатить картой газпром (для всех устройств)</button>
	</div>

	<div id="ios" style="display: none">
		<h3>Вы используете устройство с операционной системой IOS</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati consectetur, dicta, veritatis, facilis dolorum vero expedita culpa deleniti perferendis itaque impedit fuga, voluptate. Tempore nam esse minima iure necessitatibus ducimus.</p>
		<button>Оплатить картой сбербанка (для устройств на IOS)</button>
	</div>

	<div id="android" style="display: none">
		<h3>Вы используете устройство с операционной системой Android</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis molestias dolores praesentium, harum eius, dicta sed pariatur error, quidem distinctio maiores animi adipisci sequi quasi fuga aliquid aliquam facilis. Quo.</p>
		<button>Оплатить картой сбербанка (для устройств на Android)</button>
	</div>

	<!-- jQuery cdn link -->
	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous">
  	</script>
	<!-- https://hgoebl.github.io/mobile-detect.js/doc/MobileDetect.html -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/mobile-detect@1.4.4/mobile-detect.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>
	
	<script>
	
		// Подключаемая библиотека
		let detect = new MobileDetect(window.navigator.userAgent)
	
			// Алерты для тестирования
			//alert("Mobile: " + detect.mobile());       // телефон или планшет 
			//alert("Phone: " + detect.phone());         // телефон 
			//alert("Tablet: " + detect.tablet());       // планшет 
			//alert("OS: " + detect.os());               // операционная система 
			//alert("userAgent: " + detect.userAgent()); // userAgent

			// Условия
			if (detect.os() == 'AndroidOS') {
				$('#android').css({"display":"block"});
			} else if (detect.os() == 'iOS') {
				$('#ios').css({"display":"block"});
			} else {
				$('#pc').css({"display":"block"});
			}
	
	</script>

</body>
</html>