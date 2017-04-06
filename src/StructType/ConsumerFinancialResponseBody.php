<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerFinancialResponseBody StructType
 * @subpackage Structs
 */
class ConsumerFinancialResponseBody extends ResponseBody
{
    /**
     * The approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $approval_code;
    /**
     * The reserved_field_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_1;
    /**
     * The reserved_field_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_2;
    /**
     * The reserved_field_3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_3;
    /**
     * The reserved_field_4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_4;
    /**
     * The masked_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_account_no;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $currency_code;
    /**
     * The avail_bal_amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $avail_bal_amount;
    /**
     * Constructor method for ConsumerFinancialResponseBody
     * @uses ConsumerFinancialResponseBody::setApproval_code()
     * @uses ConsumerFinancialResponseBody::setReserved_field_1()
     * @uses ConsumerFinancialResponseBody::setReserved_field_2()
     * @uses ConsumerFinancialResponseBody::setReserved_field_3()
     * @uses ConsumerFinancialResponseBody::setReserved_field_4()
     * @uses ConsumerFinancialResponseBody::setMasked_account_no()
     * @uses ConsumerFinancialResponseBody::setCurrency_code()
     * @uses ConsumerFinancialResponseBody::setAvail_bal_amount()
     * @param string $approval_code
     * @param string $reserved_field_1
     * @param string $reserved_field_2
     * @param string $reserved_field_3
     * @param string $reserved_field_4
     * @param string $masked_account_no
     * @param string $currency_code
     * @param float $avail_bal_amount
     */
    public function __construct($approval_code = null, $reserved_field_1 = null, $reserved_field_2 = null, $reserved_field_3 = null, $reserved_field_4 = null, $masked_account_no = null, $currency_code = null, $avail_bal_amount = null)
    {
        $this
            ->setApproval_code($approval_code)
            ->setReserved_field_1($reserved_field_1)
            ->setReserved_field_2($reserved_field_2)
            ->setReserved_field_3($reserved_field_3)
            ->setReserved_field_4($reserved_field_4)
            ->setMasked_account_no($masked_account_no)
            ->setCurrency_code($currency_code)
            ->setAvail_bal_amount($avail_bal_amount);
    }
    /**
     * Get approval_code value
     * @return string
     */
    public function getApproval_code()
    {
        return $this->approval_code;
    }
    /**
     * Set approval_code value
     * @param string $approval_code
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setApproval_code($approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($approval_code) && !is_string($approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approval_code)), __LINE__);
        }
        $this->approval_code = $approval_code;
        return $this;
    }
    /**
     * Get reserved_field_1 value
     * @return string
     */
    public function getReserved_field_1()
    {
        return $this->reserved_field_1;
    }
    /**
     * Set reserved_field_1 value
     * @param string $reserved_field_1
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setReserved_field_1($reserved_field_1 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_1) && !is_string($reserved_field_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_1)), __LINE__);
        }
        $this->reserved_field_1 = $reserved_field_1;
        return $this;
    }
    /**
     * Get reserved_field_2 value
     * @return string
     */
    public function getReserved_field_2()
    {
        return $this->reserved_field_2;
    }
    /**
     * Set reserved_field_2 value
     * @param string $reserved_field_2
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setReserved_field_2($reserved_field_2 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_2) && !is_string($reserved_field_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_2)), __LINE__);
        }
        $this->reserved_field_2 = $reserved_field_2;
        return $this;
    }
    /**
     * Get reserved_field_3 value
     * @return string
     */
    public function getReserved_field_3()
    {
        return $this->reserved_field_3;
    }
    /**
     * Set reserved_field_3 value
     * @param string $reserved_field_3
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setReserved_field_3($reserved_field_3 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_3) && !is_string($reserved_field_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_3)), __LINE__);
        }
        $this->reserved_field_3 = $reserved_field_3;
        return $this;
    }
    /**
     * Get reserved_field_4 value
     * @return string
     */
    public function getReserved_field_4()
    {
        return $this->reserved_field_4;
    }
    /**
     * Set reserved_field_4 value
     * @param string $reserved_field_4
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setReserved_field_4($reserved_field_4 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_4) && !is_string($reserved_field_4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_4)), __LINE__);
        }
        $this->reserved_field_4 = $reserved_field_4;
        return $this;
    }
    /**
     * Get masked_account_no value
     * @return string|null
     */
    public function getMasked_account_no()
    {
        return $this->masked_account_no;
    }
    /**
     * Set masked_account_no value
     * @param string $masked_account_no
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setMasked_account_no($masked_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_account_no) && !is_string($masked_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_account_no)), __LINE__);
        }
        $this->masked_account_no = $masked_account_no;
        return $this;
    }
    /**
     * Get currency_code value
     * @return string|null
     */
    public function getCurrency_code()
    {
        return $this->currency_code;
    }
    /**
     * Set currency_code value
     * @param string $currency_code
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setCurrency_code($currency_code = null)
    {
        // validation for constraint: string
        if (!is_null($currency_code) && !is_string($currency_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency_code)), __LINE__);
        }
        $this->currency_code = $currency_code;
        return $this;
    }
    /**
     * Get avail_bal_amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAvail_bal_amount()
    {
        return isset($this->avail_bal_amount) ? $this->avail_bal_amount : null;
    }
    /**
     * Set avail_bal_amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $avail_bal_amount
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
     */
    public function setAvail_bal_amount($avail_bal_amount = null)
    {
        if (is_null($avail_bal_amount) || (is_array($avail_bal_amount) && empty($avail_bal_amount))) {
            unset($this->avail_bal_amount);
        } else {
            $this->avail_bal_amount = $avail_bal_amount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\ConsumerFinancialResponseBody
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
