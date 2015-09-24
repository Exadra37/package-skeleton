<?php

namespace Exadra37\PackageSkeleton\Repositories;

//use Exadra37\PackageSkeleton\Interfaces\Repositories\BaseRepositoryInterface;
use Exadra37\PackageSkeleton\Interfaces\Models\ResourceModelInterface;
use Exadra37\PackageSkeleton\Interfaces\Repositories\ResourceRepositoryInterface;

class ResourceRepository implements ResourceRepositoryInterface
{
    private $model;

    public function __construct(ResourceModelInterface $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        $result = [];

        $result[__METHOD__] = $this->model->all();

        return $result;
    }
}
