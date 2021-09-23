<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetFeedResponse extends AbstractModel
{
    /**
     * @var \Amz\Feeds\Model\Feed
     */
    public $payload = null;

    /**
     * @var \Amz\Feeds\Model\ErrorList
     */
    public $errors = null;
}
