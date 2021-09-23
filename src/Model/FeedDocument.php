<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class FeedDocument extends AbstractModel
{
    /**
     * The identifier for the feed document. This identifier is unique only in
     * combination with a seller ID.
     *
     * @var string
     */
    public $feedDocumentId = null;

    /**
     * A presigned URL for the feed document. This URL expires after 5 minutes.
     *
     * @var string
     */
    public $url = null;

    /**
     * If present, the feed document contents are compressed using the indicated
     * algorithm.
     *
     * @var string
     */
    public $compressionAlgorithm = null;
}
