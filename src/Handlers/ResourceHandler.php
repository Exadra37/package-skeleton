<?php

namespace Exadra37\PackageSkeleton\Handlers;

use Exadra37\PackageSkeleton\Interfaces\Handlers\ResourceHandlerInterface;
use Exadra37\PackageSkeleton\Interfaces\Services\ResourceServiceInterface;
use Exadra37\PackageSkeleton\Interfaces\Repositories\ResourceRepositoryInterface;

class ResourceHandler implements ResourceHandlerInterface
{
    private $service;

    private $repository;

    public function __construct(ResourceRepositoryInterface $repository, ResourceServiceInterface $service)
    {
        $this->repository = $repository;

        $this->service = $service;

        $this->config = Config::get('test');
    }

    public function handle()
    {
        $result = [];

        // TO PPERFORM OUR BUSINESS LOGIC WE MAY NEED DATA FROM A EXTERNAL API, FROM DATABASE AND FILESYSTEM

        $repository = $this->repository->all();

        $externalData = $this->service->callExternalApi('https://external-api.com');

        $csvData = $this->service->getCsvFile('some.csv');

        // NOW THAT WE THE NECESSARY DATA WE CAN PERFORMA ALL OUR BUSSINESS LOGIC INSIDE OF THE HANDLER CLASS

        $result[] = __METHOD__;

        $result[] = $repository;

        $result[] = $externalData;

        $result[] = $csvData;

        // WE MUST RETURN ALWAYS AN ARRAY OR OBJECT - CHOOSE THE ONE BEST SUITES YOUR TASTE
        return $result;
    }
}
