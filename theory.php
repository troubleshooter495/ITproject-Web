 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link rel="stylesheet" href="theory.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
	<div class="fuckedUpBlock">
		<div class="articlesBlock">
			<div class="header">
					<div class="button" id="button1"><div class="headerButton"><a href="theory.php">Теория</a><div class="borderButton"><div class="borderLine" id="line1"></div></div></div></div>
					<div class="button" id="button2"><div class="headerButton"><a href="practice.php">Практика</a><div class="borderButton"><div class="borderLine" id="line2"></div></div></div></div>
					<div class="button" id="button3"><div class="headerButton">Онлайн-пианино<div class="borderButton"><div class="borderLine" id="line3"></div></div></div></div>
					<div class="button" id="button4"><div class="headerButton">Информация<div class="borderButton"><div class="borderLine" id="line4"></div></div></div></div>
					<a class="logo" href="index.php"></a>
			</div>
			
			<div class="article" id="article1" align="center">
				<strong>Статья1</strong>
				<div class="shitBlockDeleteHim">Блок со статьями</div>
			</div>

			<div class="article" id="article2" align="center"><strong>Статья2</strong></div>
			<div class="article" id="article3" align="center"><strong>Статья3</strong></div>
		</div>

		<div class="fuckingList" id="f">
			<div class="listHeader">
				Темы
				<div class="listButton"></div>
			</div>
			<div class="title" id="title1">1	</div>
			<div class="title" id="title2">2	</div>
			<div class="title" id="title3">3	</div>
			<div class="title" id="title4">4	</div>
		</div>
	</div>
	
	
<script>
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
		$('.listButton').on('click',function(){
			var list = document.getElementById('f')
			if(list.style.visibility == "visible"){
				$('.fuckingList').css('visibility', 'hidden');
				$('.listButton').css('visibility', 'visible');

			}
			else {
				$('.fuckingList').css('visibility', 'visible');
			}
		});
		$('#title1').on('click',function(){
			$('#article1').css('visibility','visible');
			$('#article2').css('visibility','hidden');
			$('#article3').css('visibility','hidden');
		});
		$('#title2').on('click',function(){
			$('#article1').css('visibility','hidden');
			$('#article2').css('visibility','visible');
			$('#article3').css('visibility','hidden');
		});
		$('#title3').on('click',function(){
			$('#article1').css('visibility','hidden');
			$('#article2').css('visibility','hidden');
			$('#article3').css('visibility','visible');
		});
	</script>
</body>
</html>
