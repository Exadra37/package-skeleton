<?php

namespace Exadra37\PackageSkeleton\Services;

use Exadra37\PackageSkeleton\Interfaces\Services\BaseServiceInterface;
use Exadra37\PackageSkeleton\Interfaces\Services\ResourceServiceInterface;

class ResourceService implements ResourceServiceInterface
{
    public function callExternalApi($url)
    {
        $result = [];

        $result[__METHOD__] = $url;

        return $result;
    }

    public function getCsvFile($file)
    {
        $result = [];

        $result[__METHOD__] = $file;

        return $result;
    }
}
