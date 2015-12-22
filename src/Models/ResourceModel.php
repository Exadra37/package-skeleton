<?php

namespace Exadra37\PackageSkeleton\Models;

use Illuminate\Database\Eloquent\Model;
use Exadra37\PackageSkeleton\Interfaces\Models\ResourceModelInterface;


class ResourceModel extends Model implements ResourceModelInterface
{
    public static function all($columns = [])
    {
        $result = __METHOD__;

        return $result;
    }
}
