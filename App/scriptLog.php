<?php

# Reading every 20 seconds the user directory
while (1) {
    error_log('The user directory logged in is ' . $_ENV["HOME"]);
    sleep(20);   
}