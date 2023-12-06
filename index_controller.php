<?php
// Instantiate objects and perform actions here
$bank = new Bank();

// Create customers
$customer1 = new Customer(1, "John Doe");
$customer2 = new Customer(2, "Jane Smith");

// Add customers to the bank
$bank->addCustomer($customer1);
$bank->addCustomer($customer2);

// Create accounts for customers
$account1 = new Account(101, 1000);
$account2 = new Account(102, 500);

// Add accounts to customers
$customer1->addAccount($account1);
$customer2->addAccount($account2);

// Perform transactions
Transaction::deposit($account1, 500);
Transaction::withdraw($account2, 200);

// Save and load data (simulated)
Database::save($bank);
$loadedBank = Database::load();

// Display results or perform other actions as needed
?>
