<?php

namespace Exadra37\PackageSkeleton\Controllers;


use Exadra37\PackageSkeleton\Exceptions\Controllers\ResourceControllerException;
use Exadra37\PackageSkeleton\Interfaces\Exceptions\ResourceControllerExceptionInterface;
use Exadra37\PackageSkeleton\Interfaces\Controllers\BaseControllerInterface;
use Exadra37\PackageSkeleton\Interfaces\Controllers\ResourceControllerInterface;

class ResourceController extends BaseController implements ResourceControllerInterface
{
    private $controller;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        try {

            $result = [];

            $result[] = __METHOD__;

            $result[] = $this->handle(__CLASS__);

            throw new ResourceControllerException("Error Processing Request", 1);


        } catch (ResourceControllerExceptionInterface $exception) {

            $result['ResourceControllerException'] = $exception->getMessage();
        }

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
