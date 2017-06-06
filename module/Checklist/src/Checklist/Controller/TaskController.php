<?php


namespace Checklist\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class TaskController extends AbstractActionController
{
    public function indexAction()
    {

        die("test din controler");
        /*$mapper = $this->getTaskMapper();
        return new ViewModel(array('tasks' => $mapper->fetchAll()));
        */
    }
}