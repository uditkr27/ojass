// jQuery(document).ready(function($) {
//   "use strict";

//   //Contact
//   $("form.contactForm").submit(function() {
//     var f = $(this).find(".form-group"),
//       ferror = false,
//       emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

//     f.children("input").each(function() {
//       // run all inputs

//       var i = $(this); // current input
//       var rule = i.attr("data-rule");

//       if (rule !== undefined) {
//         var ierror = false; // error flag for current input
//         var pos = rule.indexOf(":", 0);
//         if (pos >= 0) {
//           var exp = rule.substr(pos + 1, rule.length);
//           rule = rule.substr(0, pos);
//         } else {
//           rule = rule.substr(pos + 1, rule.length);
//         }

//         switch (rule) {
//           case "required":
//             if (i.val() === "") {
//               ferror = ierror = true;
//             }
//             break;

//           case "minlen":
//             if (i.val().length < parseInt(exp)) {
//               ferror = ierror = true;
//             }
//             break;

//           case "email":
//             if (!emailExp.test(i.val())) {
//               ferror = ierror = true;
//             }
//             break;

//           case "checked":
//             if (!i.is(":checked")) {
//               ferror = ierror = true;
//             }
//             break;

//           case "regexp":
//             exp = new RegExp(exp);
//             if (!exp.test(i.val())) {
//               ferror = ierror = true;
//             }
//             break;
//         }
//         i.next(".validation")
//           .html(
//             ierror
//               ? i.attr("data-msg") !== undefined
//                 ? i.attr("data-msg")
//                 : "wrong Input"
//               : ""
//           )
//           .show("blind");
//       }
//     });
//     f.children("textarea").each(function() {
//       // run all inputs

//       var i = $(this); // current input
//       var rule = i.attr("data-rule");

//       if (rule !== undefined) {
//         var ierror = false; // error flag for current input
//         var pos = rule.indexOf(":", 0);
//         if (pos >= 0) {
//           var exp = rule.substr(pos + 1, rule.length);
//           rule = rule.substr(0, pos);
//         } else {
//           rule = rule.substr(pos + 1, rule.length);
//         }

//         switch (rule) {
//           case "required":
//             if (i.val() === "") {
//               ferror = ierror = true;
//             }
//             break;

//           case "minlen":
//             if (i.val().length < parseInt(exp)) {
//               ferror = ierror = true;
//             }
//             break;
//         }
//         i.next(".validation")
//           .html(
//             ierror
//               ? i.attr("data-msg") != undefined
//                 ? i.attr("data-msg")
//                 : "wrong Input"
//               : ""
//           )
//           .show("blind");
//       }
//     });
//     if (ferror) return false;
//     else var str = $(this).serialize();
//     var action = $(this).attr("action");
//     if (!action) {
//       action = "contactform/contactform.php";
//     }
//     $.ajax({
//       type: "POST",
//       url: action,
//       data: str,
//       success: function(msg) {
//         // alert(msg);
//         if (msg == "OK") {
//           $("#sendmessage").addClass("show");
//           $("#errormessage").removeClass("show");
//           $(".contactForm")
//             .find("input, textarea")
//             .val("");
//         } else {
//           $("#sendmessage").removeClass("show");
//           $("#errormessage").addClass("show");
//           $("#errormessage").html(msg);
//         }
//       }
//     });
//     return false;
//   });
// });

//Initialize firebase

var firebaseConfig = {
    apiKey: "AIzaSyDp_zHiEE-t21HTVTnaVZ4fnQPfDCIphTQ",
        authDomain: "ojass20-46eab.firebaseapp.com",
        databaseURL: "https://ojass20-46eab.firebaseio.com",
        projectId: "ojass20-46eab",
        storageBucket: "ojass20-46eab.appspot.com",
        messagingSenderId: "152106484750",
        appId: "1:152106484750:web:87cbe92f5896f4a165285f",
        measurementId: "G-X7BBZX729C"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

//reference feedback collection

var feedbackRef = firebase.database().ref("feedback");

//Listen for a form submit
document.querySelector(".contactForm").addEventListener("submit", submitForm);
//submit form
function submitForm(event) {
    event.preventDefault();
    var name = getInputVal("name");
    var email = getInputVal("email");
    var subject = getInputVal("subject");
    var message = getInputVal("message");
    // console.log(name);


    var f = $(this).find(".form-group"),
        ferror = false,
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children("input").each(function() {
        // run all inputs

        var i = $(this); // current input
        var rule = i.attr("data-rule");

        if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(":", 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case "required":
                    if (i.val() === "") {
                        ferror = ierror = true;
                    }
                    break;

                case "minlen":
                    if (i.val().length < parseInt(exp)) {
                        ferror = ierror = true;
                    }
                    break;

                case "email":
                    if (!emailExp.test(i.val())) {
                        ferror = ierror = true;
                    }
                    break;

                case "checked":
                    if (!i.is(":checked")) {
                        ferror = ierror = true;
                    }
                    break;

                case "regexp":
                    exp = new RegExp(exp);
                    if (!exp.test(i.val())) {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next(".validation")
                .html(
                    ierror ?
                    i.attr("data-msg") !== undefined ?
                    i.attr("data-msg") :
                    "wrong Input" :
                    ""
                )
                .show("blind");
        }
    });
    f.children("textarea").each(function() {
        // run all inputs

        var i = $(this); // current input
        var rule = i.attr("data-rule");

        if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(":", 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case "required":
                    if (i.val() === "") {
                        ferror = ierror = true;
                    }
                    break;

                case "minlen":
                    if (i.val().length < parseInt(exp)) {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next(".validation")
                .html(
                    ierror ?
                    i.attr("data-msg") != undefined ?
                    i.attr("data-msg") :
                    "wrong Input" :
                    ""
                )
                .show("blind");
        }
    });
    if (ferror) return false;
    else var str = $(this).serialize();
    var action = $(this).attr("action");
    if (!action) {
        action = "contactform/contactform.php";
    }
    $.ajax({
        type: "POST",
        url: action,
        data: str,
        success: function(msg) {
            // alert(msg);
            if (msg == "OK") {
                $("#sendmessage").addClass("show");
                $("#errormessage").removeClass("show");
                $(".contactForm")
                    .find("input, textarea")
                    .val("");
            } else {
                $("#sendmessage").removeClass("show");
                $("#errormessage").addClass("show");
                $("#errormessage").html(msg);
            }
        }
    });
    //return false;

    //save Feedback
    saveFeedback(name, email, subject, message);
    //console.log(saveFeedback(name, email, subject, message));

    //show alert
    //document.querySelector("#sendmessage").style.display = "block";

    //Hide alert after 3 seconds
    // setTimeout(function() {
    //     document.querySelector("#sendmessage").style.display = "none";
    // }, 3000);

    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show_snackbar";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function() { x.className = x.className.replace("show_snackbar", ""); }, 3000);

    //clearing input after submission
    document.querySelector(".contactForm").reset();
}

//function to get form value

function getInputVal(id) {
    return document.getElementById(id).value;
}

//save feedback to firebase

function saveFeedback(name, email, subject, message) {
    var newFeedbackRef = feedbackRef.push();
    newFeedbackRef.set({
        name: name,
        email: email,
        subject: subject,
        message: message
    });
}