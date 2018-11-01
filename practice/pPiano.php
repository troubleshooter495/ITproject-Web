
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
		<div class="button" id="button1"><div class="headerButton"><a href="/theory">Теория</a><div class="borderButton"><div class="borderLine" id="line1"></div></div></div></div>
		<div class="button" id="button2"><div class="headerButton"><a href="/practice">Практика</a><div class="borderButton"><div class="borderLine" id="line2"></div></div></div></div>
		<div class="button" id="button3"><div class="headerButton"><a href="/pmaster">Онлайн-пианино</a><div class="borderButton"><div class="borderLine" id="line3"></div></div></div></div>
		<div class="button" id="button4"><div class="headerButton">Информация<div class="borderButton"><div class="borderLine" id="line4"></div></div></div></div>
		<a class="logo" href="/"></a>
	</div>
	<div class="message">
	


	</div>
	<div class="pianoBlock">
		<div class="piano">
			<div class="whitebtn" id="do"> </div>
			<div class="whitebtn" id="re"> </div>
			<div class="whitebtn" id="mi"> </div>
			<div class="whitebtn" id="fa"> </div>
			<div class="whitebtn" id="so"> </div>
			<div class="whitebtn" id="la"> </div>
			<div class="whitebtn" id="si"> </div>
			<div class="blackbtn" id="dod"></div>
			<div class="blackbtn" id="red"></div>
			<div class="blackbtn" id="fad"></div>
			<div class="blackbtn" id="sod"></div>
			<div class="blackbtn" id="lad"></div>
		</div>
		<div class="replayButton">
			<p id="opa">проиграть</p>
		</div>
	</div>
	<div class="confirmButton">выйти</div>
</div>


<script>

	
$('.whitebtn').on('click touchstart', function(e){
	$('#'+e.target.id).css('box-shadow','inset 0 0 10px rgba(0,0,0,0.9)');
	setTimeout(function(){
		$('#'+e.target.id).css('box-shadow','none');
	},200);
});
$('.blackbtn').on('click touchstart', function(e){
	$('#'+e.target.id).css('box-shadow','inset 0 0 3px rgba(255,255,255,0.9)');
	$('#'+e.target.id).css('height','109px');
	setTimeout(function(){
		$('#'+e.target.id).css('box-shadow','none');
		$('#'+e.target.id).css('height','110px');
	},200);
});
	
	
function pausecomp(millis)
{
    var date = new Date();
    var curDate = null;
    do { curDate = new Date(); }
    while(curDate-date < millis);
}
outwrite('Нажмите на кнопку, чтобы услышать звук');
$('.message').text('Нажмите на кнопку, чтобы услышать звук');
<?php
	$type = $_GET['type'];
	$amge = $_GET['amge'];
	$amtr = $_GET['amtr'];
if ($type=="notaclassic"){
	echo("flag = 1;
	$('.replayButton').click(function(){
		if(flag==1){
			ways = ['do1.mp3', 'do1.mp3', 'dod1.mp3', 'fa1.mp3', 'fad1.mp3', 'la1.mp3',
				'lad1.mp3', 'mi1.mp3', 're1.mp3', 'red1.mp3', 'si1.mp3', 'so1.mp3', 'sod1.mp3'];
			r = Math.floor(Math.random() * ways.length);
			a = new Audio();
			name = ways[r].slice(0,-5);
			num = ways[r].replace(/\D+/g,'');
			num = num.slice(0,-1);
			a.src = 'mus/' + ways[r];
			a.play();
			flag = 0;
			anspressed = false;
	} else {
		a.play();
	}
	});
	$('.whitebtn').click(function(){
	 	but = $(this).attr('id');
		if(!anspressed){
	 	if(but + num + '.mp3'==ways[r]){
	 		outwrite('Верно. Нажмите на конпку чтобы услышать следующий звук');
	 	}
	 	else { 
	 		outwrite('Неверно, правильный ответ - нота ' + name + ' Нажмите на конпку чтобы услышать следующий звук');}
	 	flag = 1;
		anspressed = true;
		}
	});
	$('.blackbtn').click(function(){
	 	but = $(this).attr('id');
		if(!anspressed){
	 	if(but + num + '.mp3'==ways[r]){
	 		outwrite('Верно. Нажмите на конпку чтобы услышать следующий звук');
	 	} else {
	 		outwrite('Неверно, правильный ответ - нота ' + name + ' Нажмите на конпку чтобы услышать следующий звук');
	 	}
	 	flag = 1;
		anspressed = true;}
	});");
}
else if($type=="nota"){
	echo("amge = "); echo($amge); echo(";
amtr = "); echo($amtr); echo(";
sounds = [amge];
answers = [];
id = 0;
tr = 1;
flag = 1;
isworking = true;

ways = ['do1.mp3', 'do1.mp3', 'dod1.mp3', 'fa1.mp3', 'fad1.mp3', 'la1.mp3', 'lad1.mp3', 'mi1.mp3', 're1.mp3', 'red1.mp3', 'si1.mp3', 'so1.mp3', 'sod1.mp3'];

for(var i = 0; i < amge; i++){
	sounds[i] = Math.floor(Math.random() * ways.length);
}

function checkSound() {
	if(but + num + '.mp3'==ways[r]){
		 		$('.message').text('');
			 	outwrite('Верно. Нажмите на конпку чтобы услышать следующий звук');
			 	tr = 1;
				id++;
		 		flag = 1;
				answers.push(true);
		 	} else {
		 	 		if(tr < amtr) { 
			 			outwrite('Неверно, у вас осталось ' + (Number(amtr) - Number(tr)).toString() + ' попыток' );
			 			a.play();
			 			tr++;
		 		} 
		 		else if(tr == amtr){
				 		outwrite('Неверно, попытки кончились, правильный ответ - нота ' + name + '. Нажмите на конпку чтобы услышать следующий звук');
				 		tr = 1;
				 		id++;
						flag = 1;
						answers.push(false);
		 		}
		 	}
}
function correctNum() {
	var c = 0;
	for( var i = 0; i < answers.length; i++){
		if (answers[i] == true)
			c++;
	}
	return c;
}
function finishProg() {
	pausecomp(100);
	var numma = correctNum().toString();
	var lenna =answers.length.toString();
	outwrite('Практика завершена. Вы набрали ' + numma + ' из '  + lenna + ' правильных ответов.');
}

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

$('.whitebtn').click(function(){
	 	but = $(this).attr('id');
	 	if(isworking && flag == 0)
		 	checkSound();	 
		 if(id == amge){
			 isworking = false;
			 finishProg();
		 }
	});

$('.blackbtn').click(function(){
	 	but = $(this).attr('id');
	 	if(isworking && flag == 0)
		 	checkSound();
		 if(id == amge){
			 isworking = false;
			 finishProg();
		 }
});");
}

?>
	
var curfunid = 0;
function outwrite(b){
	curfunid +=1;
	var tt = curfunid;
	var temp = '';
	var len = b.length;
	$('.message').text('');
	var j=0;
	setInterval(function(){
	if(j < len &&  curfunid==tt){
		temp += b[j];
		$('.message').text(temp);
		j+=1; 
	}  else if (curfunid!=tt){
		return;
	}
	},20);
	
}

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
	$('.confirmButton').click(function(){
		location.href = '/practice';
	});
</script>
</body>
</html>