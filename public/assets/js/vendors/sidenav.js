document.addEventListener("DOMContentLoaded", function (e) {
    for (
        var t = window.location.href,
            a = document.querySelectorAll(".nav-account .nav-link"),
            n = 0;
        n < a.length;
        n++
    )
        a[n].href === t &&
            (a[n].classList.add("active"),
            localStorage.setItem("activeLink", a[n].href));
    var o = localStorage.getItem("activeLink");
    if (o)
        for (n = 0; n < a.length; n++)
            a[n].href === o && a[n].classList.add("active");
});
