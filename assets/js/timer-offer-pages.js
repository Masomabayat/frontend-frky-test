function startTimer() {
    var one = 0;
    var ten = 0;
    var hundred = 6;

    // Timer principal
    var intervalId = setInterval(function () {
        time();
    }, 700);

    function time() {
        one--;
        if (one === -1) {
            ten--;
            one = 9;
        }
        if (ten === -1) {
            hundred--;
            ten = 9;
        }

        // Affichage du timer
        $('.timer').html('<span>' + hundred + '</span><span>' + ten + '</span><span>' + one + '</span>');

        // Vérification si le timer atteint 250
        var wholeNum = hundred + '' + ten + '' + one;
        if (wholeNum == 250) {
            clearInterval(intervalId);
        }
    }

    // Compte à rebours - 15 minutes
    var min1 = 14;
    var second1 = 59; 

    var counterId = setInterval(function () {
        countDown();
    }, 1000);

    function countDown() {
        if (second1 === 0 && min1 === 0) {
            clearInterval(counterId);

            $('.timer-container').addClass('d-none');
            $('.end-timer-container').removeClass('d-none'); 
        } else {
            if (second1 === 0) {
                second1 = 59;
                min1--;
            } else {
                second1--;
            }

            var zeroPlaceholder1 = second1 < 10 ? '0' : '';
            jQuery('.count-up').html(min1 + ':' + zeroPlaceholder1 + second1);
        }
    }
}

// Launchtimer
// startTimer();

function resetTimer() {
    console.log($('.end-timer-container'))
    $('.end-timer-container').addClass('d-none'); 
    $('.timer-container').removeClass('d-none');
    $('.count-up').text('14:59');
    startTimer();
}