<?php

/*

SYSTEM

This file:
- checks for the url
- decides what it needs
- then loads data
- and populates template

*/

// load autover
include($_SERVER['DOCUMENT_ROOT'].'/t/autover.php');

// for now just load the index

require('/t/index.php');