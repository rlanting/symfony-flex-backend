<?php
declare(strict_types=1);
/**
 * /tests/Integration/Rest/Traits/Methods/CreateMethodTestClass.php
 *
 * @author  TLe, Tarmo Leppänen <tarmo.leppanen@protacon.com>
 */
namespace App\Tests\Integration\Rest\Traits\Methods\src;

use App\Rest\ControllerInterface;
use App\Rest\ResourceInterface;
use App\Rest\ResponseHelperInterface;
use App\Rest\Traits\Methods\CreateMethod;

/**
 * Class CreateMethodTestClass - just a dummy class so that we can actually test that trait.
 *
 * @package App\Tests\Integration\Rest\Traits\Methods\src
 * @author  TLe, Tarmo Leppänen <tarmo.leppanen@protacon.com>
 */
abstract class CreateMethodTestClass implements ControllerInterface
{
    use CreateMethod;

    /**
     * FindMethodTestClass constructor.
     *
     * @param ResourceInterface       $resource
     * @param ResponseHelperInterface $responseHelper
     */
    public function __construct(ResourceInterface $resource, ResponseHelperInterface $responseHelper)
    {
    }
}
