var what_is_mm_button;
what_is_mm_button = document.getElementById("what_is_mm_button");
var what_is_mm;
what_is_mm = document.getElementById("what_is_mm");

var register_button;
register_button = document.getElementById("register_button");
var register;
register = document.getElementById("register");

var login_button;
login_button = document.getElementById("login_button");
var login;
login = document.getElementById("login");

var about_us_button;
about_us_button = document.getElementById("about_us_button");
var about_us;
about_us = document.getElementById("about_us");

function selectedOptionWhatIs() {
    what_is_mm.style.display = 'inline';
    register.style.display = 'none';
    login.style.display = 'none';
    about_us.style.display = 'none';
    what_is_mm_button.style.backgroundColor = '#dfe4ea';
    register_button.style.backgroundColor = 'transparent';
    login_button.style.backgroundColor = 'transparent';
    about_us_button.style.backgroundColor = 'transparent';
}

function selectedOptionRegister() {
    what_is_mm.style.display = 'none';
    register.style.display = 'inline';
    login.style.display = 'none';
    about_us.style.display = 'none';
    what_is_mm_button.style.backgroundColor = 'transparent';
    register_button.style.backgroundColor = '#dfe4ea';
    login_button.style.backgroundColor = 'transparent';
    about_us_button.style.backgroundColor = 'transparent';
}

function selectedOptionLogin() {
    what_is_mm.style.display = 'none';
    register.style.display = 'none';
    login.style.display = 'inline';
    about_us.style.display = 'none';
    what_is_mm_button.style.backgroundColor = 'transparent';
    register_button.style.backgroundColor = 'transparent';
    login_button.style.backgroundColor = '#dfe4ea';
    about_us_button.style.backgroundColor = 'transparent';
}

function selectedOptionAboutUs() {
    what_is_mm.style.display = 'none';
    register.style.display = 'none';
    login.style.display = 'none';
    about_us.style.display = 'inline';
    what_is_mm_button.style.backgroundColor = 'transparent';
    register_button.style.backgroundColor = 'transparent';
    login_button.style.backgroundColor = 'transparent';
    about_us_button.style.backgroundColor = '#dfe4ea';
}