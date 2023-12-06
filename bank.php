<?php
class Bank {
    public $customers;

    public function __construct() {
        $this->customers = [];
    }

    public function addCustomer($customer) {
        $this->customers[] = $customer;
    }

    public function getCustomerById($customerId) {
        foreach ($this->customers as $customer) {
            if ($customer->customerId == $customerId) {
                return $customer;
            }
        }
        return null;
    }
}
?>
