<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initView()
    {
        $view = new Zend_View();
        $view->doctype('HTML5');
        $view->headMeta()->appendHttpEquiv('X-UA-Compatible', 'IE=EmulateIE7');
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8');
        $view->headTitle('MCH - Maternal Child Health ')->setSeparator(' - ');
        $view->headLink()->appendStylesheet($view->baseUrl().'/css/main.css');
        $view->headLink()->appendStylesheet($view->baseUrl().'/css/login.css');
        $view->headLink()->appendStylesheet($view->baseUrl().'/css/css.css');

        $view->headLink()->appendStylesheet($view->baseUrl().'/css/bootstrap/css/bootstrap.css');


        $view->headScript()->prependFile($view->baseUrl(). '/css/bootstrap/js/jquery.min.js');
        $view->headScript()->prependFile($view->baseUrl(). '/css/bootstrap/js/bootstrap.min.js');
        $view->headScript()->prependFile($view->baseUrl(). '/css/bootstrap/js/bootstrap.js');





        $view->setEscape('htmlentities');
        $view->setEncoding('UTF-8');
        $view->date = new Zend_Date('en_EN');
    }

}