<html>
    <head>
        
    </head>
<body>
<div id="timer">Hello</div>
<button id="start">Start</button>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    function incTimer() {
        var currentMinutes = Math.floor(totalSecs / 60);
        var currentSeconds = totalSecs % 60;
        if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
        if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
        totalSecs++;
        $("#timer").text(currentMinutes + ":" + currentSeconds);
        setTimeout('incTimer()', 1000);
    }

    totalSecs = 0;

    $(document).ready(function() {
        $("#start").click(function() {
            incTimer();
        });
    });
</script>
</body>
</html>