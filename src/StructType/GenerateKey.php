<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKey StructType
 * @subpackage Structs
 */
class GenerateKey extends AbstractStructBase
{
    /**
     * The GenerateKeyRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GenerateKeyRequest
     * @var \StructType\GenerateKeyRequest
     */
    public $GenerateKeyRequest;
    /**
     * Constructor method for GenerateKey
     * @uses GenerateKey::setGenerateKeyRequest()
     * @param \StructType\GenerateKeyRequest $generateKeyRequest
     */
    public function __construct(\StructType\GenerateKeyRequest $generateKeyRequest = null)
    {
        $this
            ->setGenerateKeyRequest($generateKeyRequest);
    }
    /**
     * Get GenerateKeyRequest value
     * @return \StructType\GenerateKeyRequest
     */
    public function getGenerateKeyRequest()
    {
        return $this->GenerateKeyRequest;
    }
    /**
     * Set GenerateKeyRequest value
     * @param \StructType\GenerateKeyRequest $generateKeyRequest
     * @return \StructType\GenerateKey
     */
    public function setGenerateKeyRequest(\StructType\GenerateKeyRequest $generateKeyRequest = null)
    {
        $this->GenerateKeyRequest = $generateKeyRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GenerateKey
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
