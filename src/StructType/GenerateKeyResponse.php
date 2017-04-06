<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKeyResponse StructType
 * @subpackage Structs
 */
class GenerateKeyResponse extends AbstractStructBase
{
    /**
     * The GenerateKeyResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResult
     */
    public $GenerateKeyResult;
    /**
     * Constructor method for GenerateKeyResponse
     * @uses GenerateKeyResponse::setGenerateKeyResult()
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResult $generateKeyResult
     */
    public function __construct(\Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResult $generateKeyResult = null)
    {
        $this
            ->setGenerateKeyResult($generateKeyResult);
    }
    /**
     * Get GenerateKeyResult value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResult|null
     */
    public function getGenerateKeyResult()
    {
        return $this->GenerateKeyResult;
    }
    /**
     * Set GenerateKeyResult value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResult $generateKeyResult
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResponse
     */
    public function setGenerateKeyResult(\Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResult $generateKeyResult = null)
    {
        $this->GenerateKeyResult = $generateKeyResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResponse
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
