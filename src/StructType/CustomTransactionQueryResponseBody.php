<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomTransactionQueryResponseBody StructType
 * @subpackage Structs
 */
class CustomTransactionQueryResponseBody extends ResponseBody
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrderItem
     */
    public $orders;
    /**
     * Constructor method for CustomTransactionQueryResponseBody
     * @uses CustomTransactionQueryResponseBody::setOrders()
     * @param \ArrayType\ArrayOfOrderItem $orders
     */
    public function __construct(\ArrayType\ArrayOfOrderItem $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \ArrayType\ArrayOfOrderItem|null
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \ArrayType\ArrayOfOrderItem $orders
     * @return \StructType\CustomTransactionQueryResponseBody
     */
    public function setOrders(\ArrayType\ArrayOfOrderItem $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomTransactionQueryResponseBody
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
