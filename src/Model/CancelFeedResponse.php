<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class CancelFeedResponse extends AbstractModel
{
    /**
     * @var \Amz\Feeds\Model\ErrorList
     */
    public $errors = null;
}
