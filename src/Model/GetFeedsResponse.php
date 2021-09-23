<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetFeedsResponse extends AbstractModel
{
    /**
     * @var \Amz\Feeds\Model\FeedList
     */
    public $payload = null;

    /**
     * Returned when the number of results exceeds pageSize. To get the next page of
     * results, call the getFeeds operation with this token as the only parameter.
     *
     * @var string
     */
    public $nextToken = null;

    /**
     * @var \Amz\Feeds\Model\ErrorList
     */
    public $errors = null;
}
