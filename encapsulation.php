<?php
class BkashAccount {
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$acc = new BkashAccount();
$acc->deposit(50000);
echo $acc->getBalance(); // Output: 50000
?>
