(() => {
    "use strict";
    const t = () => localStorage.getItem("theme"),
        a = () => {
            var e = t();
            return (
                e ||
                (window.matchMedia("(prefers-color-scheme: light)").matches
                    ? "light"
                    : "light")
            );
        },
        r = (e) => {
            "auto" === e &&
            window.matchMedia("(prefers-color-scheme: light)").matches
                ? document.documentElement.setAttribute(
                      "data-bs-theme",
                      "light"
                  )
                : document.documentElement.setAttribute("data-bs-theme", e);
        },
        c =
            (r(a()),
            (e, t = !1) => {
                var a = document.querySelector(".bs-theme-text"),
                    r = document.querySelector(`[data-bs-theme-value="${e}"]`);
                document
                    .querySelectorAll("[data-bs-theme-value]")
                    .forEach((e) => {
                        e.classList.remove("active"),
                            e.setAttribute("aria-pressed", "false");
                    }),
                    r.classList.add("active"),
                    r.setAttribute("aria-pressed", "true"),
                    a.textContent,
                    r.dataset.bsThemeValue;
                (a = e),
                    (e = document.querySelector(".theme-icon-active")),
                    (a = document.querySelector(
                        `[data-bs-theme-value="${a}"] .theme-icon`
                    )),
                    e && a && (e.innerHTML = a.outerHTML),
                    t && r.focus();
            });
    window
        .matchMedia("(prefers-color-scheme: light)")
        .addEventListener("change", () => {
            var e = t();
            "light" !== e && "light" !== e && r(a());
        }),
        window.addEventListener("DOMContentLoaded", () => {
            c(a()),
                document
                    .querySelectorAll("[data-bs-theme-value]")
                    .forEach((t) => {
                        t.addEventListener("click", () => {
                            var e = t.getAttribute("data-bs-theme-value");
                            localStorage.setItem("theme", e), r(e), c(e, !0);
                        });
                    });
        });
})();
