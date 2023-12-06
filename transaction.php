<?php
class Transaction {
    public static function deposit($account, $amount) {
        $account->balance += $amount;
    }

    public static function withdraw($account, $amount) {
        if ($account->balance >= $amount) {
            $account->balance -= $amount;
        } else {
            echo "Insufficient funds!";
        }
    }
}
?>
