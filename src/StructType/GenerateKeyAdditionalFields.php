<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKeyAdditionalFields StructType
 * @subpackage Structs
 */
class GenerateKeyAdditionalFields extends AbstractStructBase
{
    /**
     * The custom_field_01
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_01;
    /**
     * The custom_field_02
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_02;
    /**
     * The custom_field_03
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_03;
    /**
     * The custom_field_04
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_04;
    /**
     * The custom_field_05
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_05;
    /**
     * The custom_field_06
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_06;
    /**
     * The custom_field_07
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_07;
    /**
     * The custom_field_08
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_08;
    /**
     * The custom_field_09
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_09;
    /**
     * The custom_field_10
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public $custom_field_10;
    /**
     * Constructor method for GenerateKeyAdditionalFields
     * @uses GenerateKeyAdditionalFields::setCustom_field_01()
     * @uses GenerateKeyAdditionalFields::setCustom_field_02()
     * @uses GenerateKeyAdditionalFields::setCustom_field_03()
     * @uses GenerateKeyAdditionalFields::setCustom_field_04()
     * @uses GenerateKeyAdditionalFields::setCustom_field_05()
     * @uses GenerateKeyAdditionalFields::setCustom_field_06()
     * @uses GenerateKeyAdditionalFields::setCustom_field_07()
     * @uses GenerateKeyAdditionalFields::setCustom_field_08()
     * @uses GenerateKeyAdditionalFields::setCustom_field_09()
     * @uses GenerateKeyAdditionalFields::setCustom_field_10()
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_01
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_02
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_03
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_04
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_05
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_06
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_07
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_08
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_09
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_10
     */
    public function __construct(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_01 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_02 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_03 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_04 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_05 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_06 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_07 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_08 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_09 = null, \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_10 = null)
    {
        $this
            ->setCustom_field_01($custom_field_01)
            ->setCustom_field_02($custom_field_02)
            ->setCustom_field_03($custom_field_03)
            ->setCustom_field_04($custom_field_04)
            ->setCustom_field_05($custom_field_05)
            ->setCustom_field_06($custom_field_06)
            ->setCustom_field_07($custom_field_07)
            ->setCustom_field_08($custom_field_08)
            ->setCustom_field_09($custom_field_09)
            ->setCustom_field_10($custom_field_10);
    }
    /**
     * Get custom_field_01 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_01()
    {
        return $this->custom_field_01;
    }
    /**
     * Set custom_field_01 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_01
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_01(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_01 = null)
    {
        $this->custom_field_01 = $custom_field_01;
        return $this;
    }
    /**
     * Get custom_field_02 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_02()
    {
        return $this->custom_field_02;
    }
    /**
     * Set custom_field_02 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_02
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_02(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_02 = null)
    {
        $this->custom_field_02 = $custom_field_02;
        return $this;
    }
    /**
     * Get custom_field_03 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_03()
    {
        return $this->custom_field_03;
    }
    /**
     * Set custom_field_03 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_03
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_03(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_03 = null)
    {
        $this->custom_field_03 = $custom_field_03;
        return $this;
    }
    /**
     * Get custom_field_04 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_04()
    {
        return $this->custom_field_04;
    }
    /**
     * Set custom_field_04 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_04
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_04(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_04 = null)
    {
        $this->custom_field_04 = $custom_field_04;
        return $this;
    }
    /**
     * Get custom_field_05 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_05()
    {
        return $this->custom_field_05;
    }
    /**
     * Set custom_field_05 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_05
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_05(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_05 = null)
    {
        $this->custom_field_05 = $custom_field_05;
        return $this;
    }
    /**
     * Get custom_field_06 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_06()
    {
        return $this->custom_field_06;
    }
    /**
     * Set custom_field_06 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_06
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_06(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_06 = null)
    {
        $this->custom_field_06 = $custom_field_06;
        return $this;
    }
    /**
     * Get custom_field_07 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_07()
    {
        return $this->custom_field_07;
    }
    /**
     * Set custom_field_07 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_07
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_07(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_07 = null)
    {
        $this->custom_field_07 = $custom_field_07;
        return $this;
    }
    /**
     * Get custom_field_08 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_08()
    {
        return $this->custom_field_08;
    }
    /**
     * Set custom_field_08 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_08
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_08(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_08 = null)
    {
        $this->custom_field_08 = $custom_field_08;
        return $this;
    }
    /**
     * Get custom_field_09 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_09()
    {
        return $this->custom_field_09;
    }
    /**
     * Set custom_field_09 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_09
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_09(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_09 = null)
    {
        $this->custom_field_09 = $custom_field_09;
        return $this;
    }
    /**
     * Get custom_field_10 value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomField
     */
    public function getCustom_field_10()
    {
        return $this->custom_field_10;
    }
    /**
     * Set custom_field_10 value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_10
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
     */
    public function setCustom_field_10(\Enesdayanc\MasterpassGenerateKey\StructType\CustomField $custom_field_10 = null)
    {
        $this->custom_field_10 = $custom_field_10;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKeyAdditionalFields
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
