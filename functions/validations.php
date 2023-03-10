<?php

// this function to check a name is required or not
function requiredInput($input) {
    if(empty($input)):
        return true;
    else:
        return false;
    endif;
}

// this function to check the minimum number
function minInput($value, $min) {
    if(strlen($value) < $min):
        return true;
    else:
        return false;
    endif;
}

// this function to check the maximum number
function maxInput($value, $max) {
    if(strlen($value) > $max):
        return true;
    else:
        return false;
    endif;
}

// validate email
function validEmail($email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
}

// this function to check the confirm password is equal or not
function sameInput($value1, $value2) {
    if($value1 != $value2):
        return true;
    else:
        return false;
    endif;
}