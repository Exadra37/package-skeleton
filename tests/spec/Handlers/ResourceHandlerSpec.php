<?php

namespace spec\Exadra37\PackageSkeleton\Handlers;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Exadra37\PackageSkeleton\Interfaces\Services\ResourceServiceInterface;
use Exadra37\PackageSkeleton\Interfaces\Repositories\ResourceRepositoryInterface;

class ResourceHandlerSpec extends ObjectBehavior
{
    public function let(ResourceRepositoryInterface $repository, ResourceServiceInterface $service)
    {
        $this->beConstructedWith($repository, $service);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Exadra37\PackageSkeleton\Handlers\ResourceHandler');
    }
}
