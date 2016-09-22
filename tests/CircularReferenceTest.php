<?php

/**
 * @license Apache 2.0
 */

namespace SwaggerTests;

use Swagger\StaticAnalyser;

class CircularReferenceTest extends SwaggerTestCase
{

    public function testCircularReference()
    {
        $swagger = \Swagger\scan(__DIR__ . '/Fixtures/ClassWithCircularRefs.php');

        $this->assertEquals('ClassWithCircularRefs', $swagger->definitions[0]->definition);
        $this->assertEquals('#/definitions/ClassWithCircularRefs', $swagger->paths[0]->get->responses[0]->schema->ref);
    }
}
