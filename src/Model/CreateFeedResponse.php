<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateFeedResponse extends AbstractModel
{
    /**
     * The identifier for the feed. This identifier is unique only in combination with
     * a seller ID.
     *
     * @var string
     */
    public $feedId = null;
}
