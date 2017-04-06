<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MPListItem StructType
 * @subpackage Structs
 */
class MPListItem extends AbstractStructBase
{
    /**
     * The Card
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\Card
     */
    public $Card;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassGenerateKey\StructType\Contact
     */
    public $Contact;
    /**
     * Constructor method for MPListItem
     * @uses MPListItem::setCard()
     * @uses MPListItem::setContact()
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\Card $card
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\Contact $contact
     */
    public function __construct(\Enesdayanc\MasterpassGenerateKey\StructType\Card $card = null, \Enesdayanc\MasterpassGenerateKey\StructType\Contact $contact = null)
    {
        $this
            ->setCard($card)
            ->setContact($contact);
    }
    /**
     * Get Card value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\Card|null
     */
    public function getCard()
    {
        return $this->Card;
    }
    /**
     * Set Card value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\Card $card
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\MPListItem
     */
    public function setCard(\Enesdayanc\MasterpassGenerateKey\StructType\Card $card = null)
    {
        $this->Card = $card;
        return $this;
    }
    /**
     * Get Contact value
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Enesdayanc\MasterpassGenerateKey\StructType\Contact $contact
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\MPListItem
     */
    public function setContact(\Enesdayanc\MasterpassGenerateKey\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\MPListItem
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
