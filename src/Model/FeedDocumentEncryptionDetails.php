<?php

namespace Amz\Feeds\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Encryption details for required client-side encryption and decryption of
 * document contents.
 */
class FeedDocumentEncryptionDetails extends AbstractModel
{
    /**
     * The encryption standard required to encrypt or decrypt the document contents.
     *
     * @var string
     */
    public $standard = null;

    /**
     * The vector to encrypt or decrypt the document contents using Cipher Block
     * Chaining (CBC).
     *
     * @var string
     */
    public $initializationVector = null;

    /**
     * The encryption key used to encrypt or decrypt the document contents.
     *
     * @var string
     */
    public $key = null;
}
