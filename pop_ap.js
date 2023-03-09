let pop_ap_open = false;
document.addEventListener("mouseleave", function () {
    if (pop_ap_open) {
        document.getElementById("box").style.display = "flex";
    }
});
document.getElementById("get").addEventListener("click", function (e) {
    document.getElementById("box").style.display = "none";
});
let min = 15;
let sec = "00";
setInterval(() => {
    if (pop_ap_open) {
        if (min != 0 || sec != 0) {
            if (sec == 0) {
                min--;
                sec = 59;
                document.getElementById("pop_min").innerHTML = min;
                document.getElementById("pop_sec").innerHTML = sec;
            } else {
                sec--;
                if (sec < 10) {
                    document.getElementById("pop_sec").innerHTML = "0" + sec;
                } else {
                    document.getElementById("pop_sec").innerHTML = sec;
                }
            }
        }
        console.log(min, ":", sec);
    }
}, 1000);
