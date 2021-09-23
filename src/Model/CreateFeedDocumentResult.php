<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information required to encrypt and upload a feed document's contents.
 */
class CreateFeedDocumentResult extends AbstractModel
{
    /**
     * The identifier of the feed document.
     *
     * @var string
     */
    public $feedDocumentId = null;

    /**
     * The presigned URL for uploading the feed contents. This URL expires after 5
     * minutes.
     *
     * @var string
     */
    public $url = null;

    /**
     * @var \Amz\Feeds\Model\FeedDocumentEncryptionDetails
     */
    public $encryptionDetails = null;
}
