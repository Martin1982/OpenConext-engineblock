<?php

use JMS\Serializer\Annotation AS Serializer;

class EngineBlock_XmlDocument_Dsig_Signature
{
    /**
     * @Serializer\SerializedName("xmlns:ds")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @var string
     */
    protected $xmlNameSpaceDS = 'http://www.w3.org/2000/09/xmldsig#';

    /**
     * @Serializer\SerializedName("ds:SignedInfo")
     * @Serializer\Type("EngineBlock_XmlDocument_Dsig_Signature_SignedInfo")
     * @var EngineBlock_XmlDocument_Dsig_Signature_SignedInfo
     */
    protected $signedInfo;

    public function setSignedInfo(EngineBlock_XmlDocument_Dsig_Signature_SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }
}