var what_is_mm_button;
what_is_mm_button = document.getElementById("what_is_mm_button");
var what_is_mm;
what_is_mm = document.getElementById("what_is_mm");

var about_us_button;
about_us_button = document.getElementById("about_us_button");
var about_us;
about_us = document.getElementById("about_us");

var content;
content = document.getElementById("content");

function selectedOptionWhatIs() {
    what_is_mm.style.display = 'inline';
    about_us.style.display = 'none';
    what_is_mm_button.style.backgroundColor = '#dfe4ea';
    about_us_button.style.backgroundColor = 'transparent';
}

function selectedOptionAboutUs() {
    what_is_mm.style.display = 'none';
    about_us.style.display = 'inline';
    what_is_mm_button.style.backgroundColor = 'transparent';
    about_us_button.style.backgroundColor = '#dfe4ea';
}