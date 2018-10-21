<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Piano</title>
	<link rel="stylesheet" href="piano.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
<div class="midBlock">
<div class="header">
		<div class="button" id="button1"><div class="headerButton"><a href="theory.php">Теория</a><div class="borderButton"><div class="borderLine" id="line1"></div></div></div></div>
		<div class="button" id="button2"><div class="headerButton"><a href="practice.php">Практика</a><div class="borderButton"><div class="borderLine" id="line2"></div></div></div></div>
		<div class="button" id="button3"><div class="headerButton">Онлайн-пианино<div class="borderButton"><div class="borderLine" id="line3"></div></div></div></div>
		<div class="button" id="button4"><div class="headerButton">Информация<div class="borderButton"><div class="borderLine" id="line4"></div></div></div></div>
		<a class="logo" href="index.php"></a>
</div>

<div class="placeHolder">
	<div class="blacks">
		<div class="black" id="n2"></div>
		<div class="black" id="n4"></div>
		<div class="black" id="n7"></div>
		<div class="black" id="n9"></div>
		<div class="black" id="n11"></div>
		<div class="black" id="n14"></div>
		<div class="black" id="n16"></div>
		<div class="black" id="n19"></div>
		<div class="black" id="n21"></div>
		<div class="black" id="n23"></div>
		<div class="black" id="n26"></div>
		<div class="black" id="n28"></div>
		<div class="black" id="n31"></div>
		<div class="black" id="n33"></div>
		<div class="black" id="n35"></div>
	</div>	
	<div class="whites">
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
		<div class="white" id=""></div>
	</div>	
</div>

</div>
<script>
		$('.white').click(function(){
			id = $(this).attr('id');
			plays(id);
		});
		$('.black').click(function(){
			id = $(this).attr('id');
			plays(id);
		});
		$('#button1').mouseover(function(){
			$('#line1').css('width','100%');
		});
		$('#button1').mouseout(function(){
			$('#line1').css('width','0%');
		});
		$('#button2').mouseover(function(){
			$('#line2').css('width','100%');
		});
		$('#button2').mouseout(function(){
			$('#line2').css('width','0%');
		});
		$('#button3').mouseover(function(){
			$('#line3').css('width','100%');
		});
		$('#button3').mouseout(function(){
			$('#line3').css('width','0%');
		});
		$('#button4').mouseover(function(){
			$('#line4').css('width','100%');
		});
		$('#button4').mouseout(function(){
			$('#line4').css('width','0%');
		});	
		function plays(t){
			var a = new Audio();
			a.src = 'piano/' + t +'.mp3';
			a.play();
		}
</script>
</body>
</html>