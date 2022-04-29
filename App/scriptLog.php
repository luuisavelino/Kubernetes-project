<?php

# Reading the TWORPTEST environment variable every 20 seconds
while (1) {
    error_log('The value of TWORPTEST is ' . getenv('TWORPTEST'));
    sleep(20);   
}