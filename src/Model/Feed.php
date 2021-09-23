<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Feed extends AbstractModel
{
    /**
     * The identifier for the feed. This identifier is unique only in combination with
     * a seller ID.
     *
     * @var string
     */
    public $feedId = null;

    /**
     * The feed type.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * A list of identifiers for the marketplaces that the feed is applied to.
     *
     * @var string[]
     */
    public $marketplaceIds = null;

    /**
     * The date and time when the feed was created, in ISO 8601 date time format.
     *
     * @var string
     */
    public $createdTime = null;

    /**
     * The processing status of the feed.
     *
     * @var string
     */
    public $processingStatus = null;

    /**
     * The date and time when feed processing started, in ISO 8601 date time format.
     *
     * @var string
     */
    public $processingStartTime = null;

    /**
     * The date and time when feed processing completed, in ISO 8601 date time format.
     *
     * @var string
     */
    public $processingEndTime = null;

    /**
     * The identifier for the feed document. This identifier is unique only in
     * combination with a seller ID.
     *
     * @var string
     */
    public $resultFeedDocumentId = null;
}
