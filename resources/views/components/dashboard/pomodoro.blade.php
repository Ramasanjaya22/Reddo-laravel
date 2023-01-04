<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <style>
        .flip-clock-wrapper * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-clock-wrapper a {
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        .flip-clock-wrapper a:hover {
            color: #fff;
        }

        .flip-clock-wrapper ul {
            list-style: none;
        }

        .flip-clock-wrapper.clearfix:before,
        .flip-clock-wrapper.clearfix:after {
            content: " ";
            display: table;
        }

        .flip-clock-wrapper.clearfix:after {
            clear: both;
        }

        .flip-clock-wrapper.clearfix {
            *zoom: 1;
        }

        /* Main */
        .flip-clock-wrapper {
            -webkit-user-select: none;
        }

        .flip-clock-meridium {
            background: none !important;
            box-shadow: 0 0 0 !important;
            font-size: 24px !important;
        }

        .flip-clock-meridium a {
            color: #593B9B;
        }

        .flip-clock-wrapper {
            text-align: center;
            position: relative;
            width: 100%;
            margin: 1em;
        }

        .flip-clock-wrapper:before,
        .flip-clock-wrapper:after {
            content: " ";
            /* 1 */
            display: table;
            /* 2 */
        }

        .flip-clock-wrapper:after {
            clear: both;
        }

        /* Skeleton */
        .flip-clock-wrapper ul {
            position: relative;
            float: left;
            margin: 5px;
            width: 60px;
            height: 90px;
            font-size: 80px;
            font-weight: bold;
            line-height: 87px;
            border-radius: 6px;
            background: #000;
        }

        .flip-clock-wrapper ul li {
            z-index: 1;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            line-height: 87px;
            text-decoration: none !important;
        }

        .flip-clock-wrapper ul li:first-child {
            z-index: 2;
        }

        .flip-clock-wrapper ul li a {
            display: block;
            height: 100%;
            -webkit-perspective: 200px;
            -moz-perspective: 200px;
            perspective: 200px;
            margin: 0 !important;
            overflow: visible !important;
            cursor: default !important;
        }

        .flip-clock-wrapper ul li a div {
            z-index: 1;
            position: absolute;
            left: 0;
            width: 100%;
            height: 50%;
            font-size: 80px;
            overflow: hidden;
            outline: 1px solid transparent;
        }

        .flip-clock-wrapper ul li a div .shadow {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .flip-clock-wrapper ul li a div.up {
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            top: 0;
        }

        .flip-clock-wrapper ul li a div.up:after {
            content: "";
            position: absolute;
            top: 44px;
            left: 0;
            z-index: 5;
            width: 100%;
            height: 3px;
            background-color: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .flip-clock-wrapper ul li a div.down {
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            transform-origin: 50% 0;
            bottom: 0;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .flip-clock-wrapper ul li a div div.inn {
            position: absolute;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 200%;
            color: #fff;
            text-shadow: 0 1px 2px #000;
            text-align: center;
            background-color: #593B9B;
            border-radius: 6px;
            font-size: 70px;
        }

        .flip-clock-wrapper ul li a div.up div.inn {
            top: 0;
        }

        .flip-clock-wrapper ul li a div.down div.inn {
            bottom: 0;
        }

        /* PLAY */
        .flip-clock-wrapper ul.play li.flip-clock-before {
            z-index: 3;
        }

        .flip-clock-wrapper .flip {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
        }

        .flip-clock-wrapper ul.play li.flip-clock-active {
            -webkit-animation: asd 0.5s 0.5s linear both;
            -moz-animation: asd 0.5s 0.5s linear both;
            animation: asd 0.5s 0.5s linear both;
            z-index: 5;
        }

        .flip-clock-divider {
            float: left;
            display: inline-block;
            position: relative;
            width: 20px;
            height: 100px;
        }

        .flip-clock-divider:first-child {
            width: 0;
        }

        .flip-clock-dot {
            display: block;
            background: #593B9B;
            width: 10px;
            height: 10px;
            position: absolute;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            left: 5px;
        }

        .flip-clock-divider .flip-clock-label {
            position: absolute;
            top: -1.5em;
            right: -86px;
            color: black;
            text-shadow: none;
        }

        .flip-clock-divider.minutes .flip-clock-label {
            right: -88px;
        }

        .flip-clock-divider.seconds .flip-clock-label {
            right: -91px;
        }

        .flip-clock-dot.top {
            top: 30px;
        }

        .flip-clock-dot.bottom {
            bottom: 30px;
        }

        @-webkit-keyframes asd {
            0% {
                z-index: 2;
            }

            20% {
                z-index: 4;
            }

            100% {
                z-index: 4;
            }
        }

        @-moz-keyframes asd {
            0% {
                z-index: 2;
            }

            20% {
                z-index: 4;
            }

            100% {
                z-index: 4;
            }
        }

        @-o-keyframes asd {
            0% {
                z-index: 2;
            }

            20% {
                z-index: 4;
            }

            100% {
                z-index: 4;
            }
        }

        @keyframes asd {
            0% {
                z-index: 2;
            }

            20% {
                z-index: 4;
            }

            100% {
                z-index: 4;
            }
        }

        .flip-clock-wrapper ul.play li.flip-clock-active .down {
            z-index: 2;
            -webkit-animation: turn 0.5s 0.5s linear both;
            -moz-animation: turn 0.5s 0.5s linear both;
            animation: turn 0.5s 0.5s linear both;
        }

        @-webkit-keyframes turn {
            0% {
                -webkit-transform: rotateX(90deg);
            }

            100% {
                -webkit-transform: rotateX(0deg);
            }
        }

        @-moz-keyframes turn {
            0% {
                -moz-transform: rotateX(90deg);
            }

            100% {
                -moz-transform: rotateX(0deg);
            }
        }

        @-o-keyframes turn {
            0% {
                -o-transform: rotateX(90deg);
            }

            100% {
                -o-transform: rotateX(0deg);
            }
        }

        @keyframes turn {
            0% {
                transform: rotateX(90deg);
            }

            100% {
                transform: rotateX(0deg);
            }
        }

        .flip-clock-wrapper ul.play li.flip-clock-before .up {
            z-index: 2;
            -webkit-animation: turn2 0.5s linear both;
            -moz-animation: turn2 0.5s linear both;
            animation: turn2 0.5s linear both;
        }

        @-webkit-keyframes turn2 {
            0% {
                -webkit-transform: rotateX(0deg);
            }

            100% {
                -webkit-transform: rotateX(-90deg);
            }
        }

        @-moz-keyframes turn2 {
            0% {
                -moz-transform: rotateX(0deg);
            }

            100% {
                -moz-transform: rotateX(-90deg);
            }
        }

        @-o-keyframes turn2 {
            0% {
                -o-transform: rotateX(0deg);
            }

            100% {
                -o-transform: rotateX(-90deg);
            }
        }

        @keyframes turn2 {
            0% {
                transform: rotateX(0deg);
            }

            100% {
                transform: rotateX(-90deg);
            }
        }

        .flip-clock-wrapper ul li.flip-clock-active {
            z-index: 3;
        }

        /* SHADOW */
        .flip-clock-wrapper ul.play li.flip-clock-before .up .shadow {
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.1)), color-stop(100%, black));
            background: linear, top, rgba(0, 0, 0, 0.1) 0%, black 100%;
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
            background: linear, to bottom, rgba(0, 0, 0, 0.1) 0%, black 100%;
            -webkit-animation: show 0.5s linear both;
            -moz-animation: show 0.5s linear both;
            animation: show 0.5s linear both;
        }

        .flip-clock-wrapper ul.play li.flip-clock-active .up .shadow {
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.1)), color-stop(100%, black));
            background: linear, top, rgba(0, 0, 0, 0.1) 0%, black 100%;
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
            background: linear, to bottom, rgba(0, 0, 0, 0.1) 0%, black 100%;
            -webkit-animation: hide 0.5s 0.3s linear both;
            -moz-animation: hide 0.5s 0.3s linear both;
            animation: hide 0.5s 0.3s linear both;
        }

        /*DOWN*/
        .flip-clock-wrapper ul.play li.flip-clock-before .down .shadow {
            background: -moz-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, black), color-stop(100%, rgba(0, 0, 0, 0.1)));
            background: linear, top, black 0%, rgba(0, 0, 0, 0.1) 100%;
            background: -o-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
            background: -ms-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
            background: linear, to bottom, black 0%, rgba(0, 0, 0, 0.1) 100%;
            -webkit-animation: show 0.5s linear both;
            -moz-animation: show 0.5s linear both;
            animation: show 0.5s linear both;
        }

        .flip-clock-wrapper ul.play li.flip-clock-active .down .shadow {
            background: -moz-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, black), color-stop(100%, rgba(0, 0, 0, 0.1)));
            background: linear, top, black 0%, rgba(0, 0, 0, 0.1) 100%;
            background: -o-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
            background: -ms-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
            background: linear, to bottom, black 0%, rgba(0, 0, 0, 0.1) 100%;
            -webkit-animation: hide 0.5s 0.3s linear both;
            -moz-animation: hide 0.5s 0.3s linear both;
            animation: hide 0.5s 0.2s linear both;
        }

        @-webkit-keyframes show {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes show {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes show {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes show {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes hide {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-moz-keyframes hide {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-o-keyframes hide {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes hide {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }


        .flip-clock-wrapper {
            margin: 3em auto 2em;
            display: flex;
            justify-content: center;
        }

        .col-md-4 {
            display: flex;
            justify-content: center;
        }

        .col-md-2 {
            display: flex;
            justify-content: center;
            height: 34px;
            align-items: center;
        }

        .counter {
            display: flex;
            justify-content: center;
        }

        .clock {
            margin-top: 30px;
        }

        .middle {
            display: inline-block;
        }

        #btns {
            display: flex;
            justify-content: center;
        }

        #stop {
            margin-left: 10px;
            margin-right: 10px;
        }

        .btn {
            background-color: #593B9B;
            color: #fff;
            text-align: center;
            padding-right: 1rem;
            padding-left: 1rem;
            border-radius: 5px;
        }

        #sessInc,
        #sessDec,
        #breakInc,
        #breakDec {
            font-weight: normal;
        }

        #stats {
            background-color: #593B9B;
            color: #fff;
            font-size: 14px;
            text-align: center;
            padding: 1rem;
            border-radius: 15px;
        }

        #statRow {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<div>


    <div class="row" id="btns">
        <button id="start"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Start</button>
        <button id="stop"
            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full">Pause</button>
        <button id="clear"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Reset</button>
    </div>

    <div id="clock" class="row">
        <div class="timer">
            <div class="middle"></div>
        </div>
    </div>
    <div class="row" id="statRow">
        <div id="stats" class="bg-primary"></div>
    </div>
    <div class="flex justify-between items-center">
        <div class="w-1/2 px-4">
            <div class="flex justify-between items-center mb-4">
                <p>Lama Sesi ⌚</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="w-1/4">
                    <button class="btn btn-default" id="sessDec">-</button>
                </div>
                <div class="w-1/4">
                    <div id="session"></div>
                </div>
                <div class="w-1/4">
                    <button class="btn btn-default" id="sessInc">+</button>
                </div>
            </div>
        </div>
        <div class="w-1/2 px-4">
            <div class="flex justify-between items-center mb-4">
                <p>Lama Istirahat 🛏️</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="w-1/4">
                    <button class="btn btn-default" id="breakDec">-</button>
                </div>
                <div class="w-1/4">
                    <div id="break"></div>
                </div>
                <div class="w-1/4">
                    <button class="btn btn-default" id="breakInc">+</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>

<script>
    $(document).ready(function() {
        var countS = 25;
        $("#session").html(countS);
        var countB = 5;
        $("#break").html(countB);
        var pos = "Reddo Pomodoro Timer ⏰";
        var countLama;
        var posLama;
        var count;
        $("#stats").html(pos);
        var clock = $(".timer").FlipClock(0, {
            countdown: true,
            clockFace: 'MinuteCounter',
            autoStart: false,
            callbacks: {
                interval: function() {
                    if (clock.getTime() == 0) {
                        if (pos == "session") {
                            clock.setTime(countB * 60);
                            clock.start();
                            pos = "Istirahat!";
                            $("#stats").html(pos);
                        } else if (pos == "Istirahat!") {
                            clock.setTime(countS * 60);
                            clock.start();
                            pos = "session";
                            $("#stats").html(pos);
                        }
                    }
                }
            }
        })
        //SESSION
        $("#sessInc").on("click", function() {
            if ($("#session").html() > 0) {
                countS = parseInt($("#session").html());
                countS += 1;
                $("#session").html(countS);
                //clock.setTime(countS*60);
            }
        });
        $("#sessDec").on("click", function() {
            if ($("#session").html() > 1) {
                countS = parseInt($("#session").html());
                countS -= 1;
                $("#session").html(countS);
                //clock.setTime(countS*60);
            }
        });
        //BREAK
        $("#breakInc").on("click", function() {
            if ($("#break").html() > 0) {
                countB = parseInt($("#break").html());
                countB += 1;
                $("#break").html(countB);
            }
        });
        $("#breakDec").on("click", function() {
            if ($("#break").html() > 1) {
                countB = parseInt($("#break").html());
                countB -= 1;
                $("#break").html(countB);
            }
        });
        $("#start").on("click", function() {
            if (count != countS || clock.getTime() == 0) {
                clock.setTime(countS * 60);
                pos = "📚Reading Time!";
                $("#stats").html(pos);
            } else {
                pos = posLama;
                $("#stats").html(pos);
            }
            count = countS;
            clock.start();
        });
        $("#stop").on("click", function() {
            clock.stop();
            countLama = clock.getTime();
            posLama = $("#stats").html();
        });
        $("#clear").on("click", function() {
            clock.stop();
            pos = "Reddo Pomodoro Timer ⏰";
            $("#stats").html(pos);
            clock.setTime(0);
        });
    });
</script>
