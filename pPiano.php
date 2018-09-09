<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Practice</title>
	<link rel="stylesheet" href="pPiano.css">
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
	<div class="message">
	


	</div>
	<div class="pianoBlock">
		<div class="piano">
			<div class="whitebtn" id="do"> </div>
			<div class="whitebtn" id="re"> </div>
			<div class="whitebtn" id="mi"> </div>
			<div class="whitebtn" id="fa"> </div>
			<div class="whitebtn" id="sol"> </div>
			<div class="whitebtn" id="la"> </div>
			<div class="whitebtn" id="si"> </div>
			<div class="blackbtn" id="dod"></div>
			<div class="blackbtn" id="red"></div>
			<div class="blackbtn" id="fad"></div>
			<div class="blackbtn" id="sod"></div>
			<div class="blackbtn" id="lad"></div>
		</div>
		<div class="replayButton"></div>
	</div>
	<div class="confirmButton"></div>
</div>


<script>

function pausecomp(millis)
{
    var date = new Date();
    var curDate = null;
    do { curDate = new Date(); }
    while(curDate-date < millis);
}

<?php
	$type = $_GET['type'];
	$amge = $_GET['amge'];
	$amtr = $_GET['amtr'];
if ($type=="notaclassic"){
	echo("flag = 1
	$('.replayButton').click(function(){
		if(flag==1){
			ways = ['do1.mp3', 'do1.mp3','do2.mp3', 'dod1.mp3', 'dod2.mp3', 'fa1.mp3', 'fa2.mp3', 'fad1.mp3', 'fad2.mp3', 'la1.mp3', 'la2.mp3',
				'lad1.mp3', 'lad2.mp3', 'mi1.mp3', 'mi2.mp3', 're1.mp3', 'red1.mp3', 'red2.mp3', 'si1.mp3', 'si2.mp3', 'so1.mp3', 'so2.mp3', 'sod1.mp3', 'sod2.mp3'];
			r = Math.floor(Math.random() * ways.length);
			a = new Audio();
			name = ways[r].slice(0,-5);
			num = ways[r].replace(/\D+/g,'');
			num = num.slice(0,-1);
			a.src = 'mus/' + ways[r];
			a.play();
			flag = 0;
	}
	});

	$('.whitebtn').click(function(){
	 	but = $(this).attr('id');
	 	if(but + num + '.mp3'==ways[r]){
	 		$('.message').text('Верно. Нажмите на конпку чтобы услышать следующий звук');
	 	}
	 	else { $('.message').text('Неверно, правильный ответ - нота ' + name + ' Нажмите на конпку чтобы услышать следующий звук');}
	 	flag = 1;
	});
	$('.blackbtn').click(function(){
	 	but = $(this).attr('id');
	 	if(but + num + '.mp3'==ways[r]){
	 		$('.message').text('Верно. Нажмите на конпку чтобы услышать следующий звук');
	 	} else {
	 		$('.message').text('Неверно, правильный ответ - нота ' + name + ' Нажмите на конпку чтобы услышать следующий звук');
	 	}
	 	flag = 1;
	});");
}
else if($type=="nota"){
	echo("
amge = "); echo($amge); echo(";
amtr = "); echo($amtr); echo(";
sounds = [amge];
ways = ['do1.mp3', 'do1.mp3','do2.mp3', 'dod1.mp3', 'dod2.mp3', 'fa1.mp3', 'fa2.mp3', 'fad1.mp3', 'fad2.mp3', 'la1.mp3', 'la2.mp3',
				'lad1.mp3', 'lad2.mp3', 'mi1.mp3', 'mi2.mp3', 're1.mp3', 'red1.mp3', 'red2.mp3', 'si1.mp3', 'si2.mp3', 'so1.mp3', 'so2.mp3', 'sod1.mp3', 'sod2.mp3'];
for(var i = 0; i < amge; i++){
	sounds[i] = Math.floor(Math.random() * ways.length);
}
id = 0;
tr = 1;
flag = 1;
alert(sounds);

$('.replayButton').click(function(){ 
	if(flag==1){
		a = new Audio();
		r = sounds[id];
		name = ways[r].slice(0,-5);
		num = ways[r].replace(/\D+/g,'');
		num = num.slice(0,-1);
		a.src = 'mus/' + ways[r];
		a.play();
		flag = 0;
	}
});
isworking = true;
$('.whitebtn').click(function(){
	 	but = $(this).attr('id');
	 	if(isworking){
		 	if(but + num + '.mp3'==ways[r]){
			 	$('.message').text('Верно. Нажмите на конпку чтобы услышать следующий звук');
			 	tr = 1;
				id++;
		 		flag = 1;
		 	} else {
		 	 		if(tr < amtr) { 
			 			$('.message').text('Неверно, у вас осталось ' + (Number(amtr) - Number(tr)).toString() + ' попыток' );
			 			a.play();
			 			tr++;
		 		} 
		 		else if(tr == amtr){
				 		$('.message').text('Неверно, попытки кончились, правильный ответ - нота ' + name + '. Нажмите на конпку чтобы услышать следующий звук');
				 		tr = 1;
				 		id++;
						flag = 1;
		 		}
		 	}
		 }
		 if(id == amge){ isworking = false; }	
		 if(!isworking){ 
		 	pausecomp(100);
		 	$('.message').text('Практика завершена');
		 }
	});

$('.blackbtn').click(function(){
	 	but = $(this).attr('id');
	 	if(isworking){
		 	if(but + num + '.mp3'==ways[r]){
			 	$('.message').text('Верно. Нажмите на конпку чтобы услышать следующий звук');
			 	tr = 1;
				id++;
		 		flag = 1;
		 	} else {
		 	 		if(tr < amtr) { 
			 			$('.message').text('Неверно, у вас осталось ' + (Number(amtr) - Number(tr)).toString() + ' попыток' );
			 			a.play();
			 			tr++;
		 		} 
		 		else if(tr == amtr){
				 		$('.message').text('Неверно, попытки кончились, правильный ответ - нота ' + name + '. Нажмите на конпку чтобы услышать следующий звук');
				 		tr = 1;
				 		id++;
						flag = 1;
		 		}
		 	}
		 }
		 if(id == amge){ isworking = false; }	
		 if(!isworking){ 
		 	pausecomp(100);
		 	$('.message').text('Практика завершена');
		 }
});");
}

?>



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
</script>
</body>
</html>
