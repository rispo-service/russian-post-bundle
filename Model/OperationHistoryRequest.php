<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing OperationHistoryRequest
 */
class OperationHistoryRequest
{

    /**
     * @property string $barcode
     */
    private $barcode = null;

    /**
     * @property integer $messageType
     */
    private $messageType = null;

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * Gets as barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Sets a new barcode
     *
     * @param string $barcode
     * @return self
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * Gets as messageType
     *
     * @return integer
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * @param integer $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }


}

