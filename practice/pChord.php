<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Практика</title>
    <link rel="stylesheet" href="pChord.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
    <?php
		$type = $_GET['type'];
		$amge = $_GET['amge'];
		$amtr = $_GET['amtr'];
		$chords = $_GET['chords'];
		
	?>
    <div class="midBlock">
        <div class="header">
            <div class="button" id="button1">
                <div class="headerButton"><a href="/theory">Теория</a>
                    <div class="borderButton">
                        <div class="borderLine" id="line1"></div>
                    </div>
                </div>
            </div>
            <div class="button" id="button2">
                <div class="headerButton"><a href="/practice">Практика</a>
                    <div class="borderButton">
                        <div class="borderLine" id="line2"></div>
                    </div>
                </div>
            </div>
            <div class="button" id="button3">
                <div class="headerButton"><a href="/pmaster">Онлайн-пианино</a>
                    <div class="borderButton">
                        <div class="borderLine" id="line3"></div>
                    </div>
                </div>
            </div>
            <a class="logo" href="/"></a>
        </div>
        <div class="message">
            e
        </div>
        <div class="testBlock">
            <div class="test">
                <?php
				if(strpos($chords,'1')!==false || $type=='chordclassic' || !$chords){
					echo("<div class='ans' id='T35'>♪ Мажорное трезвучие</div>
			<div class='ans' id='M35'>♪ Минорное трезвучие</div>");
				}
			?>
                <?php
				if(strpos($chords,'2')!==false || $type=='chordclassic'){
					echo("
			<div class='ans' id='BB'>♪ Увеличенное трезвучие</div>
			<div class='ans' id='MM'>♪ Уменьшенное трезвучие</div>");}
					?>
                <?php
				if(strpos($chords,'3')!==false || $type=='chordclassic'){
					echo("	
			<div class='ans' id='B6'>♪ Мажорный секстаккорд</div>
			<div class='ans' id='B46'>♪ Мажорный квартсекстаккорд</div>
			<div class='ans' id='M6'>♪ Минорный секстаккорд</div>
			<div class='ans' id='M46'>♪ Минорный квартсекстаккорд</div>");}
					?>
                <?php
				if(strpos($chords,'4')!==false || $type=='chordclassic'){
					echo("	
			<div class='ans' id='D7'>♪ Доминантсептаккорд</div>
			<div class='ans' id='D56'>♪ Квинтсептаккорд</div>
			<div class='ans' id='D34'>♪ Терцквартаккорд</div>
			<div class='ans' style='border:none;' id='D2'>♪ Секундаккорд</div>");}
					?>
            </div>
            <div class="replayButton">
                <p id="opa">проиграть</p>
            </div>
        </div>
        <div class="confirmButton">выйти</div>
    </div>
    <script>
        outwrite('Нажмите на кнопку, чтобы услышать звук');
        $('.message').text('Нажмите на кнопку, чтобы услышать звук');
        <?php
	$type = $_GET['type'];
	$amge = $_GET['amge'];
	$amtr = $_GET['amtr'];
	$chords = $_GET['chords'];
	if ($type == 'chordclassic') {
		echo("
	ways = {1:'do1.mp3',13:'do2.mp3', 2:'dod1.mp3', 14:'dod2.mp3', 6:'fa1.mp3', 18:'fa2.mp3', 7:'fad1.mp3', 19:'fad2.mp3', 10:'la1.mp3',22:'la2.mp3',11:'lad1.mp3', 23:'lad2.mp3', 5:'mi1.mp3', 17:'mi2.mp3', 3:'re1.mp3', 15:'re2.mp3', 4:'red1.mp3', 16:'red2.mp3', 12:'si1.mp3', 24:'si2.mp3', 8:'so1.mp3', 20:'so2.mp3', 9:'sod1.mp3', 21:'sod2.mp3'};
	
	nota1=0; nota2 = 0; nota3 =0; nota4 =0;
	class T35 {
		constructor(nota){
			if (nota >17)
				nota -= 7;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 7;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class M35 {
		constructor(nota){
			if (nota >17)
				nota -= 7;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 7;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class BB {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class MM {
		constructor(nota){
			if (nota >18)
				nota -= 6;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 6;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class B6 {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class B46 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 5;
			nota3 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class M6 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class M46 {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 5;
			nota3 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class D7 {
		constructor(nota){
			if (nota >14)
				nota -= 10;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 7;
			nota4 = nota + 10;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	class D56 {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 6;
			nota4 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	class D34 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 5;
			nota4 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	class D2 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 2;
			nota3 = nota + 6;
			nota4 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	types_of_chords = [M35, T35, BB,MM,B6,M6,B46,M46,D7,D56,D34,D2];
	flag = true;
	pressed = false;
	$('.replayButton').click(function(){
		if (flag){
			rand = Math.floor(Math.random() * types_of_chords.length);
			ch = types_of_chords[rand];
			curr = new ch(Math.floor(Math.random() * 24) + 1);
			curr.playsound();
			flag = false;
			pressed = false;
		}
		else {
		curr.playsound();
		}
	});
	
	$('.ans').click(function(){
		id = $(this).attr('id');
		curname = ch.toString().match(/class ([^(]*)\{/)[1].replace(/\s/g, '');
		if(!pressed) {
			if(curname == id)
				outwrite('Верно, правильный ответ - ' + normalized(curname) + '. Нажмите кнопку, чтобы услышать следующий звук');
			else
				outwrite('Неверно, правильный ответ - ' + normalized(curname) + '. Нажмите кнопку, чтобы услышать следующий звук');
			pressed = true;
		}
		flag = true;
	});
	");
	}
	if($type == 'chord') {
		echo("
ways = {1:'do1.mp3',13:'do2.mp3', 2:'dod1.mp3', 14:'dod2.mp3', 6:'fa1.mp3', 18:'fa2.mp3', 7:'fad1.mp3', 19:'fad2.mp3', 10:'la1.mp3',22:'la2.mp3',11:'lad1.mp3', 23:'lad2.mp3', 5:'mi1.mp3', 17:'mi2.mp3', 3:'re1.mp3', 15:'re2.mp3', 4:'red1.mp3', 16:'red2.mp3', 12:'si1.mp3', 24:'si2.mp3', 8:'so1.mp3', 20:'so2.mp3', 9:'sod1.mp3', 21:'sod2.mp3'};
	nota1=0; nota2 = 0; nota3 =0; nota4 =0;");
	if(strpos($chords,'1')!==false || !$chords){ echo("
		class T35 {
		constructor(nota){
			if (nota >17)
				nota -= 7;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 7;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class M35 {
		constructor(nota){
			if (nota >17)
				nota -= 7;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 7;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}");}
	if(strpos($chords,'2')!==false){
		echo("
	class BB {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class MM {
		constructor(nota){
			if (nota >18)
				nota -= 6;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 6;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}");}
	if(strpos($chords,'3')!==false){echo("
	class B6 {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class B46 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 5;
			nota3 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class M6 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}
	class M46 {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 5;
			nota3 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a1.play();
			a2.play();
			a3.play();
		}
	}");}
	if(strpos($chords,'4')!==false){echo("
	class D7 {
		constructor(nota){
			if (nota >14)
				nota -= 10;
			nota1 = nota;
			nota2 = nota + 4;
			nota3 = nota + 7;
			nota4 = nota + 10;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	class D56 {
		constructor(nota){
			if (nota >16)
				nota -= 8;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 6;
			nota4 = nota + 8;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	class D34 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 3;
			nota3 = nota + 5;
			nota4 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}
	class D2 {
		constructor(nota){
			if (nota >15)
				nota -= 9;
			nota1 = nota;
			nota2 = nota + 2;
			nota3 = nota + 6;
			nota4 = nota + 9;
		}
		playsound() {
			var a1 = new Audio();
			var a2 = new Audio();
			var a3 = new Audio();
			var a4 = new Audio();
			a1.src = 'mus/'+ways[nota1];
			a2.src = 'mus/'+ways[nota2];
			a3.src = 'mus/'+ways[nota3];
			a4.src = 'mus/'+ways[nota4];
			a1.play();
			a2.play();
			a3.play();
			a4.play();
		}
	}");}
	echo("
	types_of_chords = [];");
	if(strpos($chords,'1')!==false || !$chords){
		echo("push1();");
	}
		if(strpos($chords,'2')!==false){
		echo("push2();");
	}
		if(strpos($chords,'3')!==false){
		echo("push3();");
	}
		if(strpos($chords,'4')!==false){
		echo("push4();");
	}
	echo("
	amge = ".$amge.";
	amtr = ".$amtr.";
	pressed = false;
	flag = true;
	curtr = 1;
	step = 0;
	$('.replayButton').click(function(){
		if (flag){
			rand = Math.floor(Math.random() * types_of_chords.length);
			ch = types_of_chords[rand];
			curr = new ch(Math.floor(Math.random() * 24) + 1);
			curr.playsound();
			flag = false;
			pressed = false;
		}	
	});
	correctans = 0;
	$('.ans').click(function(){
		id = $(this).attr('id');
		curname = ch.toString().match(/class ([^(]*)\{/)[1].replace(/\s/g, '');
		if(!pressed){
				if(curname == id){
					outwrite('Верно, правильный ответ - ' + normalized(curname) + '. Нажмите кнопку, чтобы услышать следующий звук');
					curtr = 1;
					pressed = true;
					flag = true;
					step++;
					correctans += 1;
				} else {
					if(curtr<amtr){
						outwrite('Неверно. У вас остались еще попытки, попробуйте еще раз');
						curtr++;
						curr.playsound();
					}
					else {
						outwrite('Неверно, попытки кончились. Правильный ответ - ' + normalized(curname) + '. Нажмите кнопку, чтобы услышать следующий звук');
						curtr = 1;
						pressed = true;
						flag = true;
						step++;
					}
				}
				if (step == amge) {
					var kotik= 'Верно,';
					if(curname!=id) kotik ='Неверно,'
					outwrite(kotik + ' правильный ответ - ' + normalized(curname) + '. Практика завершена! Вы набрали ' + correctans +' из ' + amge + 'правильных ответов.');
					pressed = true;
					flag = false;
				}
		}
	});
	function push1(){
		types_of_chords.push(M35);
		types_of_chords.push(T35);
	}
	function push2(){
			types_of_chords.push(MM);
			types_of_chords.push(BB);
		}
	function push3(){
			types_of_chords.push(M6);
			types_of_chords.push(M46);
			types_of_chords.push(B6);
			types_of_chords.push(B46);
		}
	function push4(){
			types_of_chords.push(D7);
			types_of_chords.push(D56);
			types_of_chords.push(D34);
			types_of_chords.push(D2);
	}
		");
	}
?>

        function normalized(nota) {
            goven = {
                'M35': 'Минорное трезвучие(М35)',
                'T35': 'Мажорное трезвучие(T35)',
                'BB': 'Увеличенное трезвучие',
                'MM': 'Уменьшенное трезвучие',
                'B6': 'Мажорный секстаккорд(B6)',
                'M6': 'Минорный секстаккорд(M6)',
                'M46': 'Минорный квартсекстаккорд(M46)',
                'B46': 'Мажорный квартсекстаккорд(B46)',
                'D7': 'Доминантсептаккорд(D7)',
                'D56': 'Квинтсептаккорд(D56)',
                'D34': 'Терцквартаккорд(D34)',
                'D2': 'Секундаккорд(D2)'
            }
            return goven[nota];
        }

        var curfunid = 0;

        function outwrite(b) {
            curfunid += 1;
            var tt = curfunid;
            var temp = '';
            var len = b.length;
            $('.message').text('');
            var j = 0;
            setInterval(function() {
                if (j < len && curfunid == tt) {
                    temp += b[j];
                    $('.message').text(temp);
                    j += 1;
                } else if (curfunid != tt) {
                    return;
                }
            }, 20);

        }

        $('#button1').mouseover(function() {
            $('#line1').css('width', '100%');
        });
        $('#button1').mouseout(function() {
            $('#line1').css('width', '0%');
        });
        $('#button2').mouseover(function() {
            $('#line2').css('width', '100%');
        });
        $('#button2').mouseout(function() {
            $('#line2').css('width', '0%');
        });
        $('#button3').mouseover(function() {
            $('#line3').css('width', '100%');
        });
        $('#button3').mouseout(function() {
            $('#line3').css('width', '0%');
        });
        $('#button4').mouseover(function() {
            $('#line4').css('width', '100%');
        });
        $('#button4').mouseout(function() {
            $('#line4').css('width', '0%');
        });
        $('.confirmButton').click(function() {
            location.href = '/practice';
        });
    </script>
</body>

</html>