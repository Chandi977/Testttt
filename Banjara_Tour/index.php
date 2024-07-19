<?php

require_once 'config/config.php';

// Determine the route to load
if (isset($_GET['admin'])) {
    require_once 'routes/admin.php';
} else {
    require_once 'routes/web.php';
}

?>