// JavaScript Document
task = ['Kакой интервал между первой и второй нотой в мажорном трезвучии?', 'Kакой интервал между первой и второй нотой в минорном трезвучии?', 'Какой интервал между второй и третьей нотой в мажорном секстаккорде?', 'Какой интервал между первой и третьей нотой в минорном квартсекстаккорде?', 'На каких ступенях строится доминантсептаккорд?', 'От какой ступени строится терцквартаккорд?', 'От какой ступени строится секундаккорд?'];
f1 = [
    ["узтзі'щмчэпі", false],
    ["узтзі'щмчэпі", true],
    ["узтзі'щмчэпі", false],
    ["юпшщзі'сйпфщз", false],
    ["<4>484:", false],
    ["9", true],
    ["9", false]
];
f2 = [
    ["ихтѓязі'щмчэпі", true],
    ["ихтѓязі'щмчэпі", false],
    ["ихтѓязі'щмчэпі", false],
    ["узтзі'шмсшщз", true],
    [":4<4>4@", false],
    [";", false],
    [";", true]
];
f3 = [
    ["юпшщзі'сйзчщз", false],
    ["юпшщзі'сйзчщз", false],
    ["юпшщзі'сйзчщз", true],
    ["ихтѓязі'шмсшщз", false],
    ["<4>494;", true],
    ["<", false],
    ["<", false]
];
f4 = [
    ["щчпщхф", false],
    ["щчпщхф", false],
    ["юпшщзі'сйпфщз", false],
    ["узтзі'шмцщпуз", false],
    [">494;4<", false],
    [">", false],
    [">", false]
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
    if (index < 6) {
        index++;
        rewrite();
        $('.continue').css('visibility', 'hidden');
        notpressed = true;
    } else if (index == 6) {
        $('.message').html('Тестирование завершено! Вы набрали ' + correctans + ' правильных ответов из 7.');
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