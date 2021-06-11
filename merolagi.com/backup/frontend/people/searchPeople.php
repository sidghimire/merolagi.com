<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . 'res/global/index.php';
//Global Imports
?>
<?php
if (isset($_POST['submit'])) {
    header("Location: index.php?search=" . $_POST['search']);
}
