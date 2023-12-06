<?php
class Account {
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
}
?>
