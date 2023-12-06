<?php
class Customer {
    public $customerId;
    public $name;
    public $accounts;

    public function __construct($customerId, $name) {
        $this->customerId = $customerId;
        $this->name = $name;
        $this->accounts = [];
    }

    public function addAccount($account) {
        $this->accounts[] = $account;
    }
}
?>
