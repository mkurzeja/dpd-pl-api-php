<?php

namespace T3ko\Dpd\Response;

use T3ko\Dpd\Soap\Types\GenerateProtocolV2Response;

class GenerateProtocolResponse
{
    private $fileContent;

    private $documentId;

    /**
     * GenerateLabelsResponse constructor.
     *
     * @param $fileContent
     */
    protected function __construct($fileContent, $documentId)
    {
        $this->fileContent = $fileContent;
        $this->documentId = $documentId;
    }

    public static function from(GenerateProtocolV2Response $response)
    {
        return new static($response->getReturn()->getDocumentData(), $response->getReturn()->getDocumentId());
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    public function getDocumentId()
    {
        return $this->documentId;
    }
}
