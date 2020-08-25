<?php


class TestController
{
    private $view;
    private $data = null;

    public function __construct()
    {
        $this->view = new TestPageView();
    }

    function displayOne()
    {
        echo $this->view->generateOne();
    }
}