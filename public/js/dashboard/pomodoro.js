let workTime = 25; // Durasi sesi bekerja dalam menit
let breakTime = 5; // Durasi istirahat dalam menit

let timeLeft = workTime * 60; // Durasi sesi bekerja dalam detik
let isRunning = false; // Status timer (berjalan atau tidak)
let timerInterval = null; // Variabel yang akan menyimpan interval timer
let isBreak = false; // Status sesi (bekerja atau istirahat)

// Menampilkan waktu tersisa dalam format mm:ss
function displayTimeLeft() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;

    document.querySelector("#time-left").innerHTML = `${minutes}:${seconds}`;
}

// Mengatur interval timer yang akan dipanggil setiap detik
function startTimer() {
    timerInterval = setInterval(() => {
        timeLeft--;
        displayTimeLeft();

        // Jika waktu habis, maka berhenti dan kembali ke sesi bekerja atau istirahat
        if (timeLeft === 0) {
            stopTimer();

            if (isBreak) {
                timeLeft = workTime * 60;
                isBreak = false;
            } else {
                timeLeft = breakTime * 60;
                isBreak = true;
            }

            // Tampilkan notifikasi saat waktu habis
            new Notification(
                `Waktu ${isBreak ? "istirahat" : "bekerja"} habis!`
            );
        }
    }, 1000);
}

// Menghentikan interval timer
function stopTimer() {
    clearInterval(timerInterval);
}
// Menyimpan event listener pada tombol start
document.querySelector("#start-button").addEventListener("click", () => {
    if (!isRunning) {
        startTimer();
        isRunning = true;
    }
});

// Menyimpan event listener pada tombol stop
document.querySelector("#stop-button").addEventListener("click", () => {
    if (isRunning) {
        stopTimer();
        isRunning = false;
    }
});

// Menyimpan event listener pada tombol reset
document.querySelector("#reset-button").addEventListener("click", () => {
    stopTimer();
    timeLeft = workTime * 60;
    displayTimeLeft();
    isRunning = false;
    isBreak = false;
});

// Menyimpan event listener pada input durasi sesi bekerja
document.querySelector("#work-time").addEventListener("input", (event) => {
    workTime = event.target.value;
});

// Menyimpan event listener pada input durasi istirahat
document.querySelector("#break-time").addEventListener("input", (event) => {
    breakTime = event.target.value;
});

// Menampilkan waktu tersisa saat pertama kali dijalankan
displayTimeLeft();
