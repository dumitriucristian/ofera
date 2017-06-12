<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 12.06.2017
 * Time: 18:50
 */

namespace Blog\Mapper;

use Blog\Model\PostInterface;

interface PostMapperInterface
{
    /**
     * @param int|string $id
     * @return PostInterface
     * @throws \InvalidArgumentException
     */
    public function find($id);

    /**
     * @return array|PostInterface[]
     */
    public function findAll();
}