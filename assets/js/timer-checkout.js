

jQuery(function () {
    var one = 0;
    var ten = 0;
    var hundered = 6;
    var intervalId = setInterval(function () {
        time();
    }, .7);
    function time() {
        one--;
        if (one == -1) {
            ten = ten - 1;
            one = 0 + 9;
        }
        if (ten == -1) {
            hundered = hundered - 1;
            ten = 0 + 9;
        }
        var wholeNum = hundered + '' + ten + '' + one;
        if (wholeNum == 250) {
            clearInterval(intervalId);
        }
        $('.timer').html('<span>' + hundered + '</span><span>' + ten + '</span><span>' + one + '</span>');
    }
    var min = 0;
    var second = 0;
    var zeroPlaceholder = 0;
    var counterId = setInterval(function () {
        countDown();
    }, 1000);
    function countUp() {
        second++;
        if (second == 59) {
            second = 0;
            min = min + 1;
        }
        if (second == 10) {
            zeroPlaceholder = '';
        } else {
            if (second == 0) {
                zeroPlaceholder = 0;
            }
            jQuery('.count-up').html(min + ':' + zeroPlaceholder + second);
        }
    }
    var min1 = 9;
    var second1 = 59;
    var zeroPlaceholder1 = 0;
    function countDown() {
        second1--;
        if (min1 > 0) {
            if (second1 == -1) {
                second1 = 59;
                min1 = min1 - 1;
            }
            if (second1 >= 10) {
                zeroPlaceholder1 = '';
            } else if (second1 < 10) {
                zeroPlaceholder1 = 0;
            } else {
                if (second1 == 0) {
                    zeroPlaceholder1 = 0;
                }
            }
            jQuery('.count-up').html(min1 + ':' + zeroPlaceholder1 + second1);
        } else {
            jQuery('.count-up').html('0:00');
        }
    }
});
