<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetFeedDocumentResponse extends AbstractModel
{
    /**
     * @var \Amz\Feeds\Model\FeedDocument
     */
    public $payload = null;

    /**
     * @var \Amz\Feeds\Model\ErrorList
     */
    public $errors = null;
}
