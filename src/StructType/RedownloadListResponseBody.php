<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RedownloadListResponseBody StructType
 * @subpackage Structs
 */
class RedownloadListResponseBody extends ResponseBody
{
    /**
     * The source_account_list
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassGenerateKey\ArrayType\ArrayOfString
     */
    public $source_account_list;
    /**
     * Constructor method for RedownloadListResponseBody
     * @uses RedownloadListResponseBody::setSource_account_list()
     * @param \Enesdayanc\MasterpassGenerateKey\ArrayType\ArrayOfString $source_account_list
     */
    public function __construct(\Enesdayanc\MasterpassGenerateKey\ArrayType\ArrayOfString $source_account_list = null)
    {
        $this
            ->setSource_account_list($source_account_list);
    }
    /**
     * Get source_account_list value
     * @return \Enesdayanc\MasterpassGenerateKey\ArrayType\ArrayOfString|null
     */
    public function getSource_account_list()
    {
        return $this->source_account_list;
    }
    /**
     * Set source_account_list value
     * @param \Enesdayanc\MasterpassGenerateKey\ArrayType\ArrayOfString $source_account_list
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\RedownloadListResponseBody
     */
    public function setSource_account_list(\Enesdayanc\MasterpassGenerateKey\ArrayType\ArrayOfString $source_account_list = null)
    {
        $this->source_account_list = $source_account_list;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\RedownloadListResponseBody
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
