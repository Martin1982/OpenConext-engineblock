<?php

use JMS\Serializer\Annotation as Serializer;

class EngineBlock_Saml_Dsig_Signature_SignedInfo
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("xmlns:ds")
     * @var string
     */
    protected $xmlNameSpaceDs = 'http://www.w3.org/2000/09/xmldsig#';
}
