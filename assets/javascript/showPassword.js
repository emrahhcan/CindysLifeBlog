'use strict';

const passwordField = document.getElementById('pass');
const confirmPasswordField = document.getElementById('conf-pass');
const loginPasswordField = document.getElementById('login-pass');
const showHidePassword = document.querySelector('.show-hide');

function showPassword() {
    if(passwordField.type === 'password' || confirmPasswordField.type === 'password') {
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
        showHidePassword.classList.add('active');
    } else {
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
        showHidePassword.classList.remove('active');
    }
};

function loginShowPassword() {
    if(loginPasswordField.type === 'password') {
        loginPasswordField.type = 'text';
        showHidePassword.classList.add('active');
    } else {
        loginPasswordField.type = 'password';
        showHidePassword.classList.remove('active');
    }
};