<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the createFeedDocument operation.
 */
class CreateFeedDocumentResponse extends AbstractModel
{
    /**
     * @var \Amz\Feeds\Model\CreateFeedDocumentResult
     */
    public $payload = null;

    /**
     * @var \Amz\Feeds\Model\ErrorList
     */
    public $errors = null;
}
