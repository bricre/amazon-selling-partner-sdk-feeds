<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateFeedDocumentSpecification extends AbstractModel
{
    /**
     * The content type of the feed.
     *
     * @var string
     */
    public $contentType = null;
}
