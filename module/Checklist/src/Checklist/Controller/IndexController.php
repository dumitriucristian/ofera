<?php


namespace Checklist\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        die("test din controler");
        return "ceva ce nu merge";
        /*$mapper = $this->getTaskMapper();
        return new ViewModel(array('tasks' => $mapper->fetchAll()));
        */
    }
}