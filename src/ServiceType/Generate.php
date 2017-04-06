<?php

namespace Enesdayanc\MasterpassGenerateKey\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GenerateKey
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKey $parameters
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResponse|bool
     */
    public function GenerateKey(\Enesdayanc\MasterpassGenerateKey\StructType\GenerateKey $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GenerateKey($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
