<?php
if (isset($_SESSION['default_page']) && $_SESSION['default_page']) {
    require $_SESSION['default_page'];
}
else {
    require "view/portfolio.php";
}
?>