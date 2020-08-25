<?php


class TestPageView
{
    /**
     * TestPageView constructor.
     */
    public function __construct() {}

    public function generateOne()
    {
        ob_start();
        include 'views/test.php';
        return ob_get_clean();
    }
}