<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 07.06.2017
 * Time: 18:22
 */

namespace Blog\Controller;

//use serviceinterface
use Blog\Service\PostServiceInterface;
//controller must implement ZendStdlibDispatchableInterface in order to be ‘dispatched’
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ListController extends AbstractActionController
{
    //constructor dependency injection force ListController to use postservice
    protected $postService;

   // use postservice as required argument
    public function __construct(PostServiceInterface $postService){
        $this->postService = $postService ;
    }

    public function indexAction()
    {
        return new ViewModel(
            array(
                'posts' => $this->postService->findAllPosts()
            )
        );
    }

}