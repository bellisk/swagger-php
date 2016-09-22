<?php
namespace SwaggerFixtures;

/**
 * @SWG\Info(title="Using a parameter definition referring to itself", version="unittest")
 * @SWG\Definition()
 */
class ClassWithCircularRefs
{
    /**
     * @SWG\Property(@SWG\Items(ref="#/definitions/ClassWithCircularRefs"))
     */
    public $relatedItems;
}

class UsingCircularRefs
{
    /**
     * @SWG\Get(
     *   path="/circular_refs/{item_name}",
     *   summary="Get protected item",
     *   @SWG\Parameter(ref="#/definitions/ItemName"),
     *   @SWG\Response(
     *     response="200",
     *     description="A class that contains a circular reference",
     *     @SWG\Schema(ref="#/definitions/ClassWithCircularRefs")
     *   )
     * )
     */
    public function getClassWithCircularRefs()
    {
    }
}
