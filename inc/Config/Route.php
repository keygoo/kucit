<?php

require dirname( __FILE__, 2).'/Controller/ListController.php';

Flight::route('/', array($home, 'index'));