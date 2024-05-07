<?php

/***************************************************************************************
*    Title: PHP Router
*    Author: n/a
*    Date: April 13, 2024
*    Code version: n/a
*    Availability: https://phprouter.com/
*
***************************************************************************************/

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

get("/", "../src/views/home.php");
get("/account/sign-up", "../src/views/sign-up.php");
get("/account/log-in", "../src/views/log-in.php");
get("/account/logout", "../src/views/logout.php");
get("/account/cart", "../src/views/cart.php");


get("/account/log-in/forgot-password", "../src/views/forgot-password.php");
get("/account/log-in/change-password", "../src/views/change-password.php");

post("/account/sign-up", "../src/database/process-signup.php");
post("/account/log-in", "../src/views/log-in.php");
post("/account/cart", "../src/views/cart.php");

