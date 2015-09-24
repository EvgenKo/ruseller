<?php

/**
 * Description of logout
 *
 * @author User
 */
require_once 'includes/global.inc.php';
$userTools = new UserTools();
$userTools->logout();
header("Location: index.php");