document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var alert = document.querySelector(".alert");
        if (alert) {
            alert.style.transition = "opacity 0.5s";
            alert.style.opacity = "0";
            setTimeout(() => alert.remove(), 400);
        }
    }, 1000);
});
