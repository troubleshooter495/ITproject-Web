// JavaScript Document
task = ["<img src='img/6.jpg'>", "<img src='img/77.jpg'>", "<img src='img/8.jpg'>", "<img src='img/9.jpg'>", "<img src='img/10.jpg'>", 'Какая будет вторая нота у интервала <i>чистая кварта</i>, если строить от ноты <i>ре#</i> вверх?', 'Какая будет вторая нота у интервала <i>малая терция</i>, если строить от ноты <i>соль</i> вверх?', 'Какая будет вторая нота у интервала <i>большая секста</i>, если строить от ноты <i>ми</i> вверх?', 'Какая будет вторая нота у интервала <i>малая септима</i>, если строить от ноты <i>до#</i> вверх?', 'Какая будет вторая нота у интервала <i>чистая квинта</i>, если строить от ноты <i>до</i> вверх?'];
f1 = [
    ["узтзі'щмчэпі", false],
    ["узтзі'шмцщпуз", true],
    ["ихтѓязі'шмсъфлз", false],
    ["юпшщзі'сйпфщз", true],
    ["узтзі'щмчэпі", false],
    ["шхтѓ", false],
    ["шп", false],
    ["лх", false],
    ["шп", true],
    ["ыз", true]
];
f2 = [
    ["ихтѓязі'щмчэпі", false],
    ["узтзі'шмсшщз", false],
    ["щчпщхф", false],
    ["узтзі'шмсшщз", false],
    ["ихтѓязі'шмсъфлз", false],
    ["шхтѓ*", true],
    ["ті", false],
    ["уп", false],
    ["ті*", false],
    ["уп", false]
];
f3 = [
    ["юпшщзі'сйзчщз", true],
    ["ихтѓязі'шмцщпуз", false],
    ["узтзі'щмчэпі", true],
    ["ихтѓязі'шмсшщз", false],
    ["щчпщхф", false],
    ["ті", false],
    ["ті*", true],
    ["чм*", false],
    ["лх", false],
    ["шхтѓ", false]
];
f4 = [
    ["юпшщзі'сйпфщз", false],
    ["ихтѓязі'шмсшщз", false],
    ["ихтѓязі'щмчэпі", false],
    ["юпшщзі'сйзчщз", false],
    ["ихтѓязі'щмчэпі", true],
    ["ті*", false],
    ["лх", false],
    ["лх*", true],
    ["ті", false],
    ["ыз*", false]
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