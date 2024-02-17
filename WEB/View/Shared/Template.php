<?php
require '../../../Config/Config.php';

class Template{
    public static function renderHeader() {
        include 'LayoutHeader.php';
    }

    public static function renderFooter() {
        include 'LayoutFooter.php';

    }
}

?>