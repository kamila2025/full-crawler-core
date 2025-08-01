var cleavePhone, cleaveDate, cleaveCreditCard, cleave;
document.querySelector(".input-phone") &&
    (cleavePhone = new Cleave(".input-phone", {
        phone: !0,
        phoneRegionCode: "IN",
    })),
    document.querySelector(".input-date") &&
        (cleaveDate = new Cleave(".input-date", { date: !0 })),
    document.querySelector(".input-credit-card") &&
        (cleaveCreditCard = new Cleave(".input-credit-card", {
            visaCard: !0,
            blocks: [4, 4, 4, 4],
            delimiter: "-",
        })),
    document.querySelector(".input-date-formatting") &&
        (cleave = new Cleave(".input-date-formatting", {
            date: !0,
            delimiter: "-",
            datePattern: ["Y", "m", "d"],
        })),
    document.querySelector(".input-date-formate") &&
        (cleave = new Cleave(".input-date-formate", {
            date: !0,
            datePattern: ["m", "y"],
        })),
    document.querySelector(".input-time-formatting") &&
        (cleave = new Cleave(".input-time-formatting", {
            time: !0,
            timePattern: ["h", "m", "s"],
        })),
    document.querySelector(".input-time-formate") &&
        (cleave = new Cleave(".input-time-formate", {
            time: !0,
            timePattern: ["h", "m"],
        })),
    document.querySelector(".input-numeral-formatting") &&
        (cleave = new Cleave(".input-numeral-formatting", {
            numeral: !0,
            numeralThousandsGroupStyle: "thousand",
        })),
    document.querySelector(".input-block") &&
        (cleave = new Cleave(".input-block", {
            blocks: [4, 3, 3, 4],
            uppercase: !0,
        })),
    document.querySelector(".input-delimiter") &&
        (cleave = new Cleave(".input-delimiter", {
            delimiter: "·",
            blocks: [3, 3, 3],
            uppercase: !0,
        })),
    document.querySelector(".input-delimiters") &&
        (cleave = new Cleave(".input-delimiters", {
            delimiters: [".", ".", "-"],
            blocks: [3, 3, 3, 2],
            uppercase: !0,
        })),
    document.querySelector(".input-prefix") &&
        (cleave = new Cleave(".input-prefix", {
            prefix: "PREFIX",
            delimiter: "-",
            blocks: [6, 4, 4, 4],
            uppercase: !0,
        }));
