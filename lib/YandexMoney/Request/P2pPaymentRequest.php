<?php

namespace YandexMoney\Request;


use YandexMoney\Presets\ApiKey;

class P2pPaymentRequest extends PaymentRequest
{

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->paramsArray[ApiKey::LABEL] = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->checkAndReturn(ApiKey::LABEL);
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->paramsArray[ApiKey::COMMENT] = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->checkAndReturn(ApiKey::COMMENT);
    }


} 