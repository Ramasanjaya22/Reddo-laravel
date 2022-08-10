<div class="hidden modal overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="pomodoroModal">

    <div class="relative w-128 my-6 mx-auto max-w-md">
        <!--content-->
        <div class="border-0 rounded-xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">

            <!--header-->
            <div class="p-5 rounded-t-xl text-center mt-5 mx-10">
                <h3 class="text-2xl font-semibold">
                    Reddo Focus Timer
                </h3>
            </div>
            <div>
                <img src="{{ asset('/assets/images/icon-pomodoro.svg') }}" alt="" class="object-center mx-auto my-8 ">
            </div>
            <div class="modal-body">

                <form id="input" autocomplete="off">
                    <div class="form-group">
                        <div id="goalDiv">
                            <label for="pomQuantity">Banyak teknik
                                <a href="#" data-toggle="tooltip" title='A teknik pomodoro adalah metode manajemen waktu yang dibentuk berdasarkan gagasan bahwa sering beristirahat saat belajar bisa meningkatkan kecepatan mental otak.  di teknik pomodoro siswa mempunyai waktu 25 menit untuk fokus dengan istirahat sekitar 3 sampai 5 menit yang dilakukan secara berulang kali.'> <b>pomodoro<i class="fa fa-question-circle"></i></b></a> yang ingin dilakukan?</label>
                            <input type="number" class="form-control quantity" id="pomQuantity" min="1" max="16" value=1>
                            <input class="numSlider" type=range min=1 max=16 value=1 id="pomNumSlider" step=1>
                            <p id="workTime"></p>
                        </div>

                        <div id="settings">

                            <label for="workLength" style="float:left;"><i class="fa fa-briefcase"></i> Work</label>
                            <input type="number" class="form-control quantity" id="workLength" min="1" max="59" value="25">
                            <input class="numSlider" type="range" min="1" max="59" value="25" id="workSlider" step="1">

                            <label for="playLength" style="float:left;"><i class="fa fa-coffee"></i> Relax</label>
                            <input type="number" class="form-control quantity" id="playLength" min="1" max="59" value="5">
                            <input class="numSlider" type="range" min="1" max="59" value="5" id="playSlider" step="1">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="settingsBtn" class="btn btn-info fa fa-gear hvr-bounce-in" style="float:left;"> Settings</button>
                <button type="button" id="startPom" class="btn btn-success" data-dismiss="modal">Let's go!</button>
            </div>
        </div>
    </div>
</div>



</div>

<div class="hidden opacity-75 fixed inset-0 z-40 bg-black" id="pomodoroModal-backdrop"></div>