<?php
require_once plugin_dir_path( __FILE__ ) . 'plugin-load.php';
$trustindex_pm_bookatable = new TrustindexPlugin("bookatable", __FILE__, "6.8.1", "Widgets for Bookatable Reviews", "Bookatable");
$trustindex_pm_bookatable->uninstall();
?>