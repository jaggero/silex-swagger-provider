<?php

namespace JDesrosiers\Silex\Provider\Test;

use Swagger\Annotations as SWG;

/**
 * @SWG\Resource(
 *     apiVersion="0.1",
 *     swaggerVersion="1.2",
 *     resourcePath="/foo/bar",
 *     basePath="http://localhost:8000"
 * )
 */
class FooBar
{
    /**
     * @SWG\Api(
     *     path="/foo/bar",
     *     @SWG\Operations(
     *         @SWG\Operation(method="GET", type="FooBarModel")
     *     )
     * )
     */
    public function run()
    {

    }
}
