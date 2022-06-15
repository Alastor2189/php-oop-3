<?php
class creditCard
{
    public $IDCard;
    public $deadlineCard;
    public $cvcCard;

    function __construct($_IDCard, $_deadlineCard, $_cvcCard)
    {
        $this->IDCard = $_IDCard;
        $this->deadlineCard = $_deadlineCard;
        $this->cvcCard = $_cvcCard;
    }

    function validateCard()
    {
        $today = new \DateTime('midnight');
        $expiration_dateTime = \DateTime::createFromFormat("m/y", $this->deadlineCard);
        return $today < $expiration_dateTime;
    }
}
