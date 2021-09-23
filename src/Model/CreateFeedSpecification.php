<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateFeedSpecification extends AbstractModel
{
    /**
     * The feed type.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * A list of identifiers for marketplaces that you want the feed to be applied to.
     *
     * @var string[]
     */
    public $marketplaceIds = null;

    /**
     * The document identifier returned by the createFeedDocument operation. Upload the
     * feed document contents before calling the createFeed operation.
     *
     * @var string
     */
    public $inputFeedDocumentId = null;

    /**
     * @var \Amz\Feeds\Model\FeedOptions
     */
    public $feedOptions = null;
}
