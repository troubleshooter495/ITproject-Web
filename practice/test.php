<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Тестирование</title>
    <link rel="stylesheet" href="test.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
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
        <div class="message"></div>
        <div class="testBlock">
            <div class="test">
                <div class="ans" id="m2">♪ Малая секунда</div>
                <div class="ans" id="b2">♪ Большая секунда</div>
                <div class="ans" id="m3">♪ Малая терция</div>
                <div class="ans" id="b3">♪ Большая терция</div>
                <div class="ans" id="c4">♪ Чистая кварта</div>
                <div class="ans" id="c5">♪ Чистая квинта</div>
                <div class="ans" id="m6">♪ Малая секста</div>
                <div class="ans" id="b6">♪ Большая секста</div>
                <div class="ans" id="m7">♪ Малая септима</div>
                <div class="ans" id="b7">♪ Большая септима</div>
                <div class="ans" style="border: none;" id="c8">♪ Чистая октава</div>
            </div>
            <div class="replayButton1">
                <p id="opa">проиграть</p>
            </div>
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
            <div class="replayButton2">
                <p id="opa">проиграть</p>
            </div>
        </div>
        <div class="chordBlock">
            <div class="test">
                <div class="ans" id="T35">♪ Мажорное трезвучие</div>
                <div class="ans" id="M35">♪ Минорное трезвучие</div>
                <div class="ans" id="BB">♪ Увеличенное трезвучие</div>
                <div class="ans" id="MM">♪ Уменьшенное трезвучие</div>
                <div class="ans" id="B6">♪ Мажорный секстаккорд</div>
                <div class="ans" id="B46">♪ Мажорный квартсекстаккорд</div>
                <div class="ans" id="M6">♪ Минорный секстаккорд</div>
                <div class="ans" id="M46">♪ Минорный квартсекстаккорд</div>
                <div class="ans" id="D7">♪ Доминантсептаккорд</div>
                <div class="ans" id="D56">♪ Квинтсептаккорд</div>
                <div class="ans" id="D34">♪ Терцквартаккорд</div>
                <div class="ans" style="border:none;" id="D2">♪ Секундаккорд</div>
            </div>
            <div class="replayButton3">
                <p id="opa">проиграть</p>
            </div>
        </div>
        <div class="confirmButton">выйти</div>
    </div>
</body>
<script>
    nota1 = 0;
    nota2 = 0;
    nota3 = 0;
    nota4 = 0;
    class T35 {
        constructor(nota) {
            if (nota > 17)
                nota -= 7;
            nota1 = nota;
            nota2 = nota + 4;
            nota3 = nota + 7;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class M35 {
        constructor(nota) {
            if (nota > 17)
                nota -= 7;
            nota1 = nota;
            nota2 = nota + 3;
            nota3 = nota + 7;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class BB {
        constructor(nota) {
            if (nota > 16)
                nota -= 8;
            nota1 = nota;
            nota2 = nota + 4;
            nota3 = nota + 8;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class MM {
        constructor(nota) {
            if (nota > 18)
                nota -= 6;
            nota1 = nota;
            nota2 = nota + 3;
            nota3 = nota + 6;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class B6 {
        constructor(nota) {
            if (nota > 16)
                nota -= 8;
            nota1 = nota;
            nota2 = nota + 3;
            nota3 = nota + 8;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class B46 {
        constructor(nota) {
            if (nota > 15)
                nota -= 9;
            nota1 = nota;
            nota2 = nota + 5;
            nota3 = nota + 9;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class M6 {
        constructor(nota) {
            if (nota > 15)
                nota -= 9;
            nota1 = nota;
            nota2 = nota + 4;
            nota3 = nota + 9;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }

    class M46 {
        constructor(nota) {
            if (nota > 16)
                nota -= 8;
            nota1 = nota;
            nota2 = nota + 5;
            nota3 = nota + 8;
        }
        playsound() {
            var a1 = new Audio();
            var a2 = new Audio();
            var a3 = new Audio();
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a1.play();
            a2.play();
            a3.play();
        }
    }
    class D7 {
        constructor(nota) {
            if (nota > 14)
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
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a4.src = 'mus/' + ways[nota4];
            a1.play();
            a2.play();
            a3.play();
            a4.play();
        }
    }
    class D56 {
        constructor(nota) {
            if (nota > 16)
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
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a4.src = 'mus/' + ways[nota4];
            a1.play();
            a2.play();
            a3.play();
            a4.play();
        }
    }
    class D34 {
        constructor(nota) {
            if (nota > 15)
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
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a4.src = 'mus/' + ways[nota4];
            a1.play();
            a2.play();
            a3.play();
            a4.play();
        }
    }
    class D2 {
        constructor(nota) {
            if (nota > 15)
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
            a1.src = 'mus/' + ways[nota1];
            a2.src = 'mus/' + ways[nota2];
            a3.src = 'mus/' + ways[nota3];
            a4.src = 'mus/' + ways[nota4];
            a1.play();
            a2.play();
            a3.play();
            a4.play();
        }
    }

    amtr = <?php $amtr = $_GET['amtr'];
		echo($amtr); ?>;

    amn = <?php $amtr = $_GET['amn'];
		echo($amtr);?>;

    amint = <?php $amtr = $_GET['amint'];
		echo($amtr);?>;

    amch = <?php $amtr = $_GET['amch'];
		echo($amtr);?>;
    ways = {
        1: 'do1.mp3',
        13: 'do2.mp3',
        2: 'dod1.mp3',
        14: 'dod2.mp3',
        6: 'fa1.mp3',
        18: 'fa2.mp3',
        7: 'fad1.mp3',
        19: 'fad2.mp3',
        10: 'la1.mp3',
        22: 'la2.mp3',
        11: 'lad1.mp3',
        23: 'lad2.mp3',
        5: 'mi1.mp3',
        17: 'mi2.mp3',
        3: 're1.mp3',
        15: 're2.mp3',
        4: 'red1.mp3',
        16: 'red2.mp3',
        12: 'si1.mp3',
        24: 'si2.mp3',
        8: 'so1.mp3',
        20: 'so2.mp3',
        9: 'sod1.mp3',
        21: 'sod2.mp3'
    };
    notes = ['do1.mp3', 'do1.mp3', 'dod1.mp3', 'fa1.mp3', 'fad1.mp3', 'la1.mp3', 'lad1.mp3', 'mi1.mp3', 're1.mp3', 'red1.mp3', 'si1.mp3', 'so1.mp3', 'sod1.mp3'];
    ints = {
        1: 'm2',
        2: 'b2',
        3: 'm3',
        4: 'b3',
        5: 'c4',
        7: 'c5',
        8: 'm6',
        9: 'b6',
        10: 'm7',
        11: 'b7',
        12: 'c8'
    };
    types_of_chords = [M35, T35, BB, MM, B6, M6, B46, M46, D7, D56, D34, D2];
    wrongdata = false;
    if ((amn < 1 || amn > 15) && (amint < 1 || amint > 15) && (amch < 1 || amch > 15)) {
        wrongdata = true;
        $('.message').text('Похоже, вы ввели неверные данные');
    }
    if (!wrongdata) {
        if (amn == 0 && amint != 0) {
            $('.testBlock').css('visibility', 'visible');
        } else if (amn == 0 && amint == 0) {
            $('.chordBlock').css('visibility', 'visible');
        } else if (amn != 0) {
            $('.pianoBlock').css('visibility', 'visible');
        }
        $('.message').text('Нажмите, чтобы услышать звук');
        tasks = [];
        answers = [];
        usersans = [];
        for (var i = 0; i < amn; i++) {
            var r = Math.floor(Math.random() * notes.length);
            var a = new Audio();
            a.src = 'mus/' + notes[r];
            answers.push(notes[r].slice(0, -5));
            tasks.push(a);
        }
        for (var i = 0; i < amint; i++) {
            var int = getrandomint();
            var r = Math.floor(Math.random() * (24 - int - 1)) + 1;
            var a1 = new Audio();
            var a2 = new Audio();
            a1.src = 'mus/' + ways[r];
            a2.src = 'mus/' + ways[r + int];
            var sound = [a1, a2];
            answers.push(ints[int]);
            tasks.push(sound);
        }
        for (var i = 0; i < amch; i++) {
            var r = Math.floor(Math.random() * 24) + 1;
            var type = types_of_chords[Math.floor(Math.random() * types_of_chords.length)];
            tasks.push([type, r]);
            var name = type.toString().match(/class ([^(]*)\{/)[1].replace(/\s/g, '')
            answers.push(name);
        }
        index = 0;
        currtry = 0;
        ansispressed = true;
        $('.pianoBlock').css('visibility: visible;');
        $('.testBlock').css('visibility: hidden;');
        $('.chordBlock').css('visibility: hidden;');
        $('.replayButton2').click(function() {
            if (index < amn) {
                if (ansispressed || currtry < amtr - 1) {
                    tasks[index].play();
                    outwrite('Повторов звука осталось: ' + (amtr - currtry - 1));
                    currtry++;
                    ansispressed = false;
                } else if (currtry == amtr - 1) {
                    outwrite('Вы не можете больше проигрывать звук, выберите ответ')
                    tasks[index].play();
                    ansispressed = false;
                }
            }
        });
        $('.whitebtn').click(function() {
            if (!ansispressed) {
                var id = $(this).attr('id');
                if (id == answers[index]) {
                    outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук.');
                    ansispressed = true;
                    usersans.push(id);
                } else {
                    outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук');
                    ansispressed = true;
                    usersans.push(id);
                }
                currtry = 0;
                index++;
            }
            if (index == amn && amint != 0) {
                $('.pianoBlock').css('visibility', 'hidden');
                $('.testBlock').css('visibility', 'visible');
                $('.chordBlock').css('visibility', 'hidden');

            } else if (index == amn && amint == 0 && amch != 0) {
                $('.pianoBlock').css('visibility', 'hidden');
                $('.testBlock').css('visibility', 'hidden');
                $('.chordBlock').css('visibility', 'visible');
            }
            if (index == tasks.length) {
                outwrite('');
                end();
            }
        });
        $('.blackbtn').click(function() {
            if (!ansispressed) {
                var id = $(this).attr('id');
                if (id == answers[index]) {
                    outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук.');
                    ansispressed = true;
                    usersans.push(id);
                } else {
                    outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук');
                    ansispressed = true;
                    usersans.push(id);
                }
                currtry = 0;
                index++;
            }
            if (index == amn && amint != 0) {
                $('.pianoBlock').css('visibility', 'hidden');
                $('.testBlock').css('visibility', 'visible');
                $('.chordBlock').css('visibility', 'hidden');

            } else if (index == amn && amint == 0 && amch != 0) {
                $('.pianoBlock').css('visibility', 'hidden');
                $('.testBlock').css('visibility', 'hidden');
                $('.chordBlock').css('visibility', 'visible');
            }
            if (index == tasks.length) {
                outwrite('');
                end();
            }
        });

        $('.replayButton1').click(function() {
            if (ansispressed || currtry < amtr - 1) {
                currpair = tasks[index];
                currpair[0].play();
                currpair[1].play();
                outwrite('Повторов звука осталось: ' + (amtr - currtry - 1));
                currtry++;
                ansispressed = false;
            } else if (currtry == amtr - 1) {
                outwrite('Вы не можете больше проигрывать звук, выберите ответ');
                currpair[0].play();
                currpair[1].play();
                ansispressed = false;
                currtry++;
            }
        });
        $('.ans').click(function() {
            if (index >= amn && index < amn + amint) {
                if (!ansispressed) {
                    var id = $(this).attr('id');
                    if (id == answers[index]) {
                        outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук.');
                        ansispressed = true;
                        usersans.push(id);
                    } else {
                        outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук');
                        ansispressed = true;
                        usersans.push(id);
                    }
                    currtry = 0;
                    index++;
                }
                if (index == amn + amint && amch != 0) {
                    $('.testBlock').css('visibility', 'hidden');
                    $('.chordBlock').css('visibility', 'visible');
                } else if (index == tasks.length) {
                    outwrite('');
                    end();
                }
            }
            if (index >= amn + amint && index < tasks.length) {
                if (!ansispressed) {
                    var id = $(this).attr('id');
                    if (id == answers[index]) {
                        outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук.');
                        ansispressed = true;
                        usersans.push(id);
                    } else {
                        outwrite('Ответ записан. Нажмите, чтобы услышать следующий звук');
                        ansispressed = true;
                        usersans.push(id);
                    }
                    currtry = 0;
                    index++;

                }
                if (index == tasks.length) {
                    outwrite('');
                    end();
                }
            }
        });

        $('.replayButton3').click(function() {
            if (ansispressed || currtry < amtr - 1) {
                currpair = tasks[index];
                currch = new currpair[0](currpair[1]);
                currch.playsound();
                outwrite('Повторов звука осталось: ' + (amtr - currtry - 1));
                currtry++;
                ansispressed = false;
            } else if (currtry == amtr - 1) {
                outwrite('Вы не можете больше проигрывать звук, выберите ответ');
                currch.playsound();
                ansispressed = false;
                currtry++;
            }
        });

    }

    function end() {
        line = 'Тестирование завершено!<br> Правильные ответы: ';
        count = 0;
        for (var i = 0; i < answers.length - 1; i++) {
            line += (i + 1).toString() + ' - ' + normalized(answers[i]) + ', ';
            if (answers[i] == usersans[i]) count++;
        }
        line += answers.length + ' - ' + normalized(answers[answers.length - 1]);

        if (answers[answers.length - 1] == usersans[usersans.length - 1]) count++;
        line += '<br> Ваши ответы: ';

        for (var i = 0; i < usersans.length - 1; i++) {
            line += (i + 1).toString() + ' - ' + normalized(usersans[i]) + ', ';
        }
        line += answers.length + ' - ' + normalized(usersans[usersans.length - 1]);

        line += '<br> Вы ответили правильно на ' + (count / answers.length * 100).toFixed(0) + '% вопросов.';
        $('.message').html(line);
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

    function getrandomint() {
        var t = Math.floor(Math.random() * 11) + 1;
        if (t == 6)
            return getrandomint();
        else
            return t;
    }

    function normalized(va) {
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
            'D2': 'Секундаккорд(D2)',
            'm2': 'Малая секунда',
            'b2': 'Большая секунда',
            'm3': 'Малая терция',
            'b3': 'Большая терция',
            'c4': 'Чистая кварта',
            'c5': 'Чистая квинта',
            'm6': 'Малая секста',
            'b6': 'Большая секста',
            'm7': 'Малая септима',
            'b7': 'Большая септима',
            'c8': 'Октава',
            'do': 'До',
            'dod': 'До#',
            're': 'Ре',
            'red': 'Ре#',
            'mi': 'Ми',
            'fa': 'Фа',
            'fad': 'Фа#',
            'so': 'Соль',
            'sod': 'Соль#',
            'la': 'Ля',
            'lad': 'Ля#',
            'si': 'Си'
        }
        return goven[va];
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

</html>