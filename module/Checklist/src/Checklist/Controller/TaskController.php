<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 06.06.2017
 * Time: 15:02
 */

namespace Checklist;

use Zend\Mvc\Controller\AbstractActionController;

class TaskController extends AbstractActionController
{
    public function indexAction()
    {

        $mapper = $this->getTaskMapper();
        return new ViewModel(array('tasks' => $mapper->fetchAll()));
    }
}