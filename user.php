<?php
class User
{
    public $name;
    public $surname;
    public $mail;
    public $telephone;
    public $payment;
    public $registered;
    public $shopCart = [];

    function __construct($_name, $_surname, $_telephone, $_mail, $_registered)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->telephone = $_telephone;
        $this->mail = $_mail;
        $this->registered = $_registered;
    }

    function addShopCart($_shopCart)
    {
        $this->shopCart[] = $_shopCart;
    }



    function finalPrice($registered)
    {
        $final_price = 0;
        foreach ($this->shopCart as $item) {
            $final_price += $item->price;
        }
        if ($registered === "true") {
            $formatted_price = $final_price - ($final_price * 0.20);
            return number_format($formatted_price, 2, ',', '.');
        } else {
            return number_format($final_price, 2, ',', '.');
        }
    }

    public function setPayment($_payment)
    {
        return $this->payment = $_payment;
    }

    public function pay()
    {
        if ($this->payment->isValid()) {
            return "Pagamento effettuato";
        } else {
            return "Errore:pagamento non effettuato";
        }
    }
}
