/**
 * This is a example JavaScript file, that is not used in the extension at all,
 * it's just for Proof of concept on JS-Lint.
 */

// Declaring the document initialized elsewhere to not have the JS Lint fail
/*global document*/

function myFunction() {
    "use strict";
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}