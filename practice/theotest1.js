// JavaScript Document
task = ["<img src='img/1.jpg'>", "<img src='img/2.jpg'>", "<img src='img/3.jpg'>", "<img src='img/4.jpg'>", "<img src='img/5.jpg'>", "Что делает знак диез (#)?", "Что делает знак дубль-бемоль(♭♭)?", "Какое расстояние от ноты <i>до</i> до <i>ре</i>?", "Какая нота находится на расстоянии 3 тона и полутон от ноты <i>ми</i> вверх?", "Какая нота находится на расстоянии 2 тона и полутон от ноты <i>фа#</i> вниз?"]
f1 = [
    ["Ті", false],
    ["Лх", true],
    ["Лх", false],
    ["Ыз", false],
    ["Уп", false],
    ["Цхйђязмщ'фз'щхф", false],
    ["Цхйђязмщ'фз'щхф", false],
    ["Щхф", true],
    ["Ті", false],
    ["Уп", false],
];
f2 = [
    ["Шхтѓ", true],
    ["Чм", false],
    ["Ті", false],
    ["Уп", false],
    ["Чм", true],
    ["Цхйђязмщ'фз'цхтъщхф", true],
    ["Цхйђязмщ'фз'цхтъщхф", false],
    ["Цхтъщхф", false],
    ["Ті*", false],
    ["Лх", false]
];
f3 = [
    ["Ыз", false],
    ["Шп", false],
    ["Шхтѓ", false],
    ["Шхтѓ", false],
    ["Ті", false],
    ["Цхфпнзмщ'фз'щхф", false],
    ["Цхфпнзмщ'фз'щхф", true],
    ["Лйз'щхфз", false],
    ["Шп", true],
    ["Чм", false]
];
f4 = [
    ["Ті*", false],
    ["Уп", false],
    ["Шп", true],
    ["Ті", true],
    ["Лх", false],
    ["Цхфпнзмщ'фз'цхтъщхф", false],
    ["Цхфпнзмщ'фз'цхтъщхф", false],
    ["Щхф'п'цхтъщхф", false],
    ["Лх", false],
    ["Лх*", true]
];
fields = [f1, f2, f3, f4]
index = 0;
rewrite();
correctans = 0;
notpressed = true;
$('.field').click(function() {
    if (notpressed) {
        id = $(this).attr('id');
        var t = massive(id)
        if (t[index][1] == false) {
            $(this).css('color', 'red');
        } else correctans++;
        for (var i = 0; i < 4; i++) {
            var arr = fields[i];
            if (arr[index][1]) {
                $(getString(arr)).css('color', 'green');
            }
        }
        $('.continue').css('visibility', 'visible');
        notpressed = false;
    }
});

$('.continue').click(function() {
    if (index < 9) {
        index++;
        rewrite();
        $('.continue').css('visibility', 'hidden');
        notpressed = true;
    } else if (index == 9) {
        $('.message').html('Тестирование завершено! Вы набрали ' + correctans + ' правильных ответов из 10.');
        index++;
    } else {
        location.href = '/practice';
    }
});

function rewrite() {
    for (var i = 1; i < 5; i++) {
        var t = fields[i - 1];
        $('#f' + i).text(dec(t[index][0]));
        $('#f' + i).css('color', 'black');
    }
    $('.message').html(task[index]);
}

function massive(i) {
    if (i == 'f1') return f1;
    if (i == 'f2') return f2;
    if (i == 'f3') return f3;
    if (i == 'f4') return f4;
    throw Error;
}

function getString(arr) {
    if (arr == f1) return '#f1';
    if (arr == f2) return '#f2';
    if (arr == f3) return '#f3';
    if (arr == f4) return '#f4';
}

function dec(line) {
    var ans = '';
    for (var i = 0; i < line.length; i++) {
        var t = line[i].charCodeAt(0);
        t -= 7
        ans += String.fromCharCode(t);
    }
    return ans;
}