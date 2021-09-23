<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class CreateFeedResponse extends AbstractModel
{
    /**
     * @var \Amz\Feeds\Model\CreateFeedResult
     */
    public $payload = null;

    /**
     * @var \Amz\Feeds\Model\ErrorList
     */
    public $errors = null;
}
