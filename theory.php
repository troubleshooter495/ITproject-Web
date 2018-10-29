<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link rel="stylesheet" href="theory.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<div class="sideNav">
	<div class="navFill">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a class="anchor" href="#ar1">About</a>
		  <a class="anchor" href="#ar2">Services</a>
		  <a class="anchor" href="#ar3">Clients</a>
		  <a class="anchor" href="#ar4">Contact</a>
	</div>
</div>
<div class="midBlock">
	<div class="header">
		<div class="button" id="button1"><div class="headerButton"><a href="theory.php">Теория</a><div class="borderButton"><div class="borderLine" id="line1"></div></div></div></div>
		<div class="button" id="button2"><div class="headerButton"><a href="practice.php">Практика</a><div class="borderButton"><div class="borderLine" id="line2"></div></div></div></div>
		<div class="button" id="button3"><div class="headerButton"><a href="piano.php">Онлайн-пианино</a><div class="borderButton"><div class="borderLine" id="line3"></div></div></div></div>
		<div class="button" id="button4"><div class="headerButton">Информация<div class="borderButton"><div class="borderLine" id="line4"></div></div></div></div>
		<span onclick="openNav()" class="open">Разделы   &#9776;</span>
	</div>
	<div class="articleHolder">
		<div class="article" id="ar1">
			<div class="title">Lorem ipsum</div>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quos, nihil cupiditate consectetur error distinctio! Aut, sequi molestias, assumenda, nobis perferendis nesciunt, iusto earum a iste ipsa modi deleniti sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum nisi saepe consequuntur perferendis beatae rem quae illo doloremque, reiciendis facilis aut. Illo nulla reiciendis quia distinctio minus repellat dolores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil delectus id praesentium, mollitia obcaecati illum dolores incidunt magnam odio iure commodi placeat ipsa quis quasi deserunt doloremque aliquam, laborum quas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magnam consectetur accusamus reprehenderit, quo sint velit distinctio impedit, cumque deleniti nihil quis voluptatibus nisi non nemo odio voluptate, aspernatur maxime! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magnam consectetur accusamus reprehenderit, quo sint velit distinctio impedit, cumque deleniti nihil quis voluptatibus nisi non nemo odio voluptate, aspernatur maxime!</p>
		</div>
		<div class="article" id="ar2">
			<div class="title">Lorem ipsum</div>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quos, nihil cupiditate consectetur error distinctio! Aut, sequi molestias, assumenda, nobis perferendis nesciunt, iusto earum a iste ipsa modi deleniti sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum nisi saepe consequuntur perferendis beatae rem quae illo doloremque, reiciendis facilis aut. Illo nulla reiciendis quia distinctio minus repellat dolores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia et iure optio quae ratione, ipsam consequatur sit enim dolorum, harum expedita veniam explicabo quidem necessitatibus voluptatem atque eius id esse. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magnam consectetur accusamus reprehenderit, quo sint velit distinctio impedit, cumque deleniti nihil quis voluptatibus nisi non nemo odio voluptate, aspernatur maxime! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere totam, ipsa, pariatur odit quaerat nostrum beatae, nemo necessitatibus ipsum, esse aliquam iure. Architecto molestias distinctio reiciendis dignissimos neque maiores, hic!</p>
		</div>
		<div class="article" id="ar3">
			<div class="title">Lorem ipsum</div>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quos, nihil cupiditate consectetur error distinctio! Aut, sequi molestias, assumenda, nobis perferendis nesciunt, iusto earum a iste ipsa modi deleniti sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum nisi saepe consequuntur perferendis beatae rem quae illo doloremque, reiciendis facilis aut. Illo nulla reiciendis quia distinctio minus repellat dolores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia et iure optio quae ratione, ipsam consequatur sit enim dolorum, harum expedita veniam explicabo quidem necessitatibus voluptatem atque eius id esse. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magnam consectetur accusamus reprehenderit, quo sint velit distinctio impedit, cumque deleniti nihil quis voluptatibus nisi non nemo odio voluptate, aspernatur maxime! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse hic perferendis repellendus fugit accusantium ea ab iusto rem eum. Tenetur ut minus numquam facere aut officiis minima nam pariatur quos?</p>
		</div>
		<div class="article" id="ar4">
			<div class="title">Lorem ipsum</div>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quos, nihil cupiditate consectetur error distinctio! Aut, sequi molestias, assumenda, nobis perferendis nesciunt, iusto earum a iste ipsa modi deleniti sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum nisi saepe consequuntur perferendis beatae rem quae illo doloremque, reiciendis facilis aut. Illo nulla reiciendis quia distinctio minus repellat dolores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia et iure optio quae ratione, ipsam consequatur sit enim dolorum, harum expedita veniam explicabo quidem necessitatibus voluptatem atque eius id esse. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magnam consectetur accusamus reprehenderit, quo sint velit distinctio impedit, cumque deleniti nihil quis voluptatibus nisi non nemo odio voluptate, aspernatur maxime! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, at illum facilis sed enim facere corrupti dignissimos dolorum voluptates quos perspiciatis fugit autem rem est minus provident libero quo rerum.</p>
		</div>
		<div class="footer">
			2018 qwerty.
		</div>
	</div>
</div>
	<script>
		var isNavOpen = 0;
		$(window).click(function(e){
			if(e.target.className!='navFill' && e.target.className!='sideNav' && e.target.className!='open'){
				closeNav();
			}
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
		function openNav() {
			$('.sideNav').height("400");
			l = $('.header').position().left + 1100 - $('.sideNav').width();
			$('.sideNav').css({left: l});
			isNavOpen = 1;
		}
		function closeNav() {
			$('.sideNav').height("0");
			isNavOpen = 0;
		}
		$(".anchor").click("a", function (event) {
			event.preventDefault();
			var id  = $(this).attr('href'), top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1000);
		});
	</script>
<body>
</body>
</html>
