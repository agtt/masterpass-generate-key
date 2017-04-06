<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKeyRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * @subpackage Structs
 */
class GenerateKeyRequest extends AbstractStructBase
{
    /**
     * The transaction_header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\RequestHeader
     */
    public $transaction_header;
    /**
     * The transaction_body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequestBody
     */
    public $transaction_body;
    /**
     * Constructor method for GenerateKeyRequest
     * @uses GenerateKeyRequest::setTransaction_header()
     * @uses GenerateKeyRequest::setTransaction_body()
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\RequestHeader $transaction_header
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequestBody $transaction_body
     */
    public function __construct(\Enesdayanc\MasterpassGenerateKey\StructType\RequestHeader $transaction_header = null, \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequestBody $transaction_body = null)
    {
        $this
            ->setTransaction_header($transaction_header)
            ->setTransaction_body($transaction_body);
    }
    /**
     * Get transaction_header value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\RequestHeader|null
     */
    public function getTransaction_header()
    {
        return $this->transaction_header;
    }
    /**
     * Set transaction_header value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\RequestHeader $transaction_header
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequest
     */
    public function setTransaction_header(\Enesdayanc\MasterpassGenerateKey\StructType\RequestHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequestBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequestBody $transaction_body
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequest
     */
    public function setTransaction_body(\Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequestBody $transaction_body = null)
    {
        $this->transaction_body = $transaction_body;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyRequest
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
