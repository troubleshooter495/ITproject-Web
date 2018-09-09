<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IVR</title>
<link rel="stylesheet" href="index.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
	<div class="mainLongBlock">
		<div class="mainBlock">
			<div class="headerBlock">
				<div class="header">
					<div class="button" id="button1"><div class="headerButton"><a href="theory.php">Теория</a><div class="borderButton"><div class="borderLine" id="line1"></div></div></div></div>
					<div class="button" id="button2"><div class="headerButton"><a href="practice.php">Практика</a><div class="borderButton"><div class="borderLine" id="line2"></div></div></div></div>
					<div class="button" id="button3"><div class="headerButton">Онлайн-пианино<div class="borderButton"><div class="borderLine" id="line3"></div></div></div></div>
					<div class="button" id="button4"><div class="headerButton">Информация<div class="borderButton"><div class="borderLine" id="line4"></div></div></div></div>
					<a class="logo" href="index.php"></a>
				</div>
				<div class="headerInfo">
					<p>Сольфеджио</p><br>
					Сольфеджио - это сайт, который поможет вам улучшить ваши знания в области музыкальной грамоты и подготовиться к занятиям по сольфеджио

				</div>
			</div>
			<div class="mainFirst">
				<div class="mainInfo">

					<p>Теория</p> <br>
					Здесь подобрана основная теория, которая поможет новичку освоить азы нотной грамоты, а опытному человеку - освежить свои знания
					<a class="btn" href="theory.php"><span>Начать</span></a>
				</div>
			</div>
			<div class="mainSecond">
				<div class="mainInfo">
					<p>Практика</p> <br>
					В данном разделе вы можете попрактиковать свой слух, определяя ноты, трезвучия и аккорды на слух. Благодаря удобным настройкам вы можете создать уникальный тест под себя или, если вы учитель, дать тест ученикам в классе. Помимо этого, можно всегда опробовать заранее созданные тесты. 
					<a class="btn" href="practice.php"><span>Начать</span></a>
				</div>
			</div>
			<div class="mainThird">
				<div class="mainInfo">
					<p>Онлайн-пианино</p> <br>
					Если вы сомневаетесь как звучат те или иные ноты, или вам нужно сыграть мелодию, но музыкального инструмента по близости нет, тогда вы можете воспользоваться виртуальным пианино.
					<a class="btn" href=""><span>Начать</span></a>
				</div>
			</div>
			<div class="footerBlock"></div>
		</div>
	</div>
	<div class="backgroundBlock">
		<div class="backgroundHeader"></div>
		<div class="backgroundMainBlocks"></div>
		<div class="backgroundFooter"></div>
	</div>
	<script>
		$('#button1').mouseover(function(){
			$('#line1').css('width','100%');
		});
		$('#button1').mouseout(function(){
			$('#line1').css('width','0%');
		});
		/*$('#button1').on("click",function(){
			window.location.href = "/practice.php";
		});*/
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
	</script>
</body>
</html>
