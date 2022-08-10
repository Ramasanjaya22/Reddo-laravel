<head>
    <style>
        #face {
            fill: #33D275;
        }

        .green {
            color: #33D275;
        }

        #hour,
        #min,
        #sec,
        #handCircle {
            fill: #FDE016;
        }

        #pomArc {
            stroke: #FF9F30;
        }

        #breakArc {
            stroke: #178FFF;
        }

        #pomArc,
        #breakArc {
            stroke-width: 8px;
            fill: none;
        }

        #progressArc {
            fill: none;
            stroke: #FE5E3E;
            stroke-width: 2px;
        }

        b {
            color: #FE5E3E;
        }

        #clock {
            cursor: pointer;
            /*width:100vw;*/
        }

        label {
            width: 100vw;
            color: #178FFF;
        }

        .numSlider {
            margin-left: 5% !important;
            width: 71% !important;
            position: relative !important;
            display: inline-block !important;
            vertical-align: middle !important;
        }

        .quantity {
            margin-bottom: 10px !important;
            display: inline-block !important;
            width: 17% !important;
        }

        #input {
            text-align: center;
        }

        #settings {
            display: none;
        }
    </style>
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 text-center">

            <h3 class="text-center" id="instructions">Klik Jam untuk <span class="green">mulai</span></h3>

            <!--the whole clock and hands and arcs are all contained in the same svg viewbox-->
            <svg id="menu" viewBox="0 0 100 100" onclick="toggleModal('pomodoroModal')">

                <!--drop shadow from http://demosthenes.info/ . Have to do the shadow using svg, or it wouldn't be able to follow the triangle hands-->

                <filter id="drop-shadow">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="1.5" />
                    <feOffset dx="2" dy="2" result="offsetblur" />
                    <feFlood flood-color="rgba(0,0,0,0.25)" />
                    <feComposite in2="offsetblur" operator="in" />
                    <feMerge>
                        <feMergeNode />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>

                <!--have to put the filter in a style attribute so the url works-->
                <circle id="face" style="filter:url(#drop-shadow);" cx="50" cy="50" r="35" />
                <g id="hands" style="filter:url(#drop-shadow);">
                    <polygon id="hour" points="50,15 53,50 47,50" />
                    <polygon id="min" points="50 53,50 47,50" />
                </g>

                <circle id="handCircle" cx="50" cy="50" r="3" />

                <!--these paths show the pomodoros and breaks around the circle and are assigned attributes in the javascript-->
                <path id="progressArc" />
                <path id="pomArc" />
                <path id="breakArc" />
            </svg>
        </div>

    </div>

    <!--empty audio tag to make the sounds work on chrome for android-->
    <audio id="chromeMobile" preload="auto">
        <source src="" type="audio/mp3" />
    </audio>


    <audio id="bell" preload="auto">
        <source src="http://www.myinstants.com/media/sounds/boxing-bell.mp3" type="audio/mp3" />
    </audio>

    <audio id="failure" preload="auto">
        <source src="http://www.myinstants.com/media/sounds/you-have-failed.mp3" type="audio/mp3" />
    </audio>

    <!-- <audio id="failure" preload="auto">
          <source src="http://www.myinstants.com/media/sounds/sadtrombone.swf.mp3" type="audio/mp3" />
        </audio> -->

    <audio id="success" preload="auto">
        <source src="http://www.myinstants.com/media/sounds/039-a-victory-fanfare.mp3" type="audio/mp3" />
    </audio>
</div>