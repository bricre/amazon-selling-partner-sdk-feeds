<?php

namespace Amz\Feeds\Api;

use Amz\Feeds\Model\CreateFeedDocumentResponse as CreateFeedDocumentResponse;
use Amz\Feeds\Model\CreateFeedDocumentSpecification as CreateFeedDocumentSpecification;
use Amz\Feeds\Model\CreateFeedResponse as CreateFeedResponse;
use Amz\Feeds\Model\CreateFeedSpecification as CreateFeedSpecification;
use Amz\Feeds\Model\ErrorList as ErrorList;
use Amz\Feeds\Model\Feed as Feed;
use Amz\Feeds\Model\FeedDocument as FeedDocument;
use Amz\Feeds\Model\GetFeedsResponse as GetFeedsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Feeds extends AbstractAPI
{
    /**
     * Returns feed details for the feeds that match the filters that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'feedTypes'		A list of feed types used to filter feeds. When feedTypes is
     *                       provided, the other filter parameters (processingStatuses, marketplaceIds,
     *                       createdSince, createdUntil) and pageSize may also be provided. Either feedTypes
     *                       or nextToken is required.
     *                       'marketplaceIds'		A list of marketplace identifiers used to filter feeds. The
     *                       feeds returned will match at least one of the marketplaces that you specify.
     *                       'pageSize'		The maximum number of feeds to return in a single call.
     *                       'processingStatuses'		A list of processing statuses used to filter feeds.
     *                       'createdSince'		The earliest feed creation date and time for feeds included in
     *                       the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained
     *                       for a maximum of 90 days.
     *                       'createdUntil'		The latest feed creation date and time for feeds included in the
     *                       response, in ISO 8601 format. The default is now.
     *                       'nextToken'		A string token returned in the response to your previous request.
     *                       nextToken is returned when the number of results exceeds the specified pageSize
     *                       value. To get the next page of results, call the getFeeds operation and include
     *                       this token as the only parameter. Specifying nextToken with any other parameters
     *                       will cause the request to fail.
     *
     * @return GetFeedsResponse|ErrorList
     */
    public function get(array $queries = [])
    {
        return $this->client->request('getFeeds', 'GET', 'feeds/2021-06-30/feeds',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Creates a feed. Upload the contents of the feed document before calling this
     * operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0083 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateFeedSpecification $Model Creates a feed. Upload the contents of
     *                                       the feed document before calling this operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0083 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateFeedResponse|ErrorList
     */
    public function createFeed(CreateFeedSpecification $Model)
    {
        return $this->client->request('createFeed', 'POST', 'feeds/2021-06-30/feeds',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns feed details (including the resultDocumentId, if available) for the feed
     * that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2.0 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $feedId The identifier for the feed. This identifier is unique only in
     * combination with a seller ID.
     *
     * @return Feed|ErrorList
     */
    public function getFeed($feedId)
    {
        return $this->client->request('getFeed', 'GET', "feeds/2021-06-30/feeds/{$feedId}",
            [
            ]
        );
    }

    /**
     * Cancels the feed that you specify. Only feeds with processingStatus=IN_QUEUE can
     * be cancelled. Cancelled feeds are returned in subsequent calls to the getFeed
     * and getFeeds operations.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $feedId The identifier for the feed. This identifier is unique only in
     * combination with a seller ID.
     *
     * @return ErrorList
     */
    public function cancelFeed($feedId): ErrorList
    {
        return $this->client->request('cancelFeed', 'DELETE', "feeds/2021-06-30/feeds/{$feedId}",
            [
            ]
        );
    }

    /**
     * Creates a feed document for the feed type that you specify. This operation
     * returns a presigned URL for uploading the feed document contents. It also
     * returns a feedDocumentId value that you can pass in with a subsequent call to
     * the createFeed operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0083 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateFeedDocumentSpecification $Model Creates a feed document for the
     *                                               feed type that you specify. This operation returns a presigned URL for uploading
     *                                               the feed document contents. It also returns a feedDocumentId value that you can
     *                                               pass in with a subsequent call to the createFeed operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0083 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateFeedDocumentResponse|ErrorList
     */
    public function createFeedDocument(CreateFeedDocumentSpecification $Model)
    {
        return $this->client->request('createFeedDocument', 'POST', 'feeds/2021-06-30/documents',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns the information required for retrieving a feed document's contents.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $feedDocumentId The identifier of the feed document
     *
     * @return FeedDocument|ErrorList
     */
    public function getFeedDocument($feedDocumentId)
    {
        return $this->client->request('getFeedDocument', 'GET', "feeds/2021-06-30/documents/{$feedDocumentId}",
            [
            ]
        );
    }
}
