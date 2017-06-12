<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 07.06.2017
 * Time: 18:50
 */

namespace Blog\Model;


interface PostInterface
{
    /**
     * Will return the id of the blog post
     * @return int
     *
     */

    public function getId();

    /**
     * Will return the TITLE of the blog post
     *
     * @return string
     */
    public function getTitle();

    /**
     * Will return the TEXT of the blog post
     *
     * @return string
     */
    public function getText();

}