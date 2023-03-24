<?php
/*
 * This example follows all five SOLID principles:

** Single Responsibility Principle:
 * Each class has a single responsibility. CreditCardPayment and PayPalPayment classes are responsible
 *  for processing payments, ShoppingCart class is responsible for managing the shopping cart and checkout process.

** Open-Closed Principle:
 * The PaymentMethodInterface and ShoppingCart classes are open for extension but closed for modification.
 * We can create new payment methods or shopping carts by implementing the interfaces without modifying the existing code.

** Liskov Substitution Principle:
 * The ShoppingCart class works with any PaymentMethodInterface implementation, such as CreditCardPayment and PayPalPayment,
 *  without knowing the specific implementation.

** Interface Segregation Principle:
 * The PaymentMethodInterface is well-segregated, with a single responsibility.

** Dependency Inversion Principle:
 * The ShoppingCart class depends on the PaymentMethodInterface abstraction, not on a specific implementation.
 * This allows us to inject different payment methods without changing the ShoppingCart class itself.
*/

interface PaymentMethodInterface {
    public function processPayment($amount);
}

class CreditCardPayment implements PaymentMethodInterface {
    private $cardNumber;
    private $expirationDate;
    private $cvv;
    public function __construct($cardNumber, $expirationDate, $cvv) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }
    public function processPayment($amount) {
        // process payment using credit card information
    }
}

class PayPalPayment implements PaymentMethodInterface {
    private $email;
    private $password;
    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }
    public function processPayment($amount) {
        // process payment using PayPal information
    }
}

class ShoppingCart {
    private $paymentMethod;
    private $items = array();
    public function __construct(PaymentMethodInterface $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }
    public function addItem($item) {
        $this->items[] = $item;
    }
    public function checkout($amount) {
        // calculate total amount and process payment
        $totalAmount = array_reduce($this->items, function($carry, $item) {
            return $carry + $item->price;
        }, 0);
        $this->paymentMethod->processPayment($totalAmount);
    }
}

// Usage
$creditCardPayment = new CreditCardPayment('1234 5678 9012 3456', '12/24', '123');
$payPalPayment = new PayPalPayment('user@example.com', 'password');
$shoppingCart = new ShoppingCart($creditCardPayment);

$shoppingCart->addItem(new Item('Product A', 10.00));
$shoppingCart->addItem(new Item('Product B', 20.00));

$shoppingCart->checkout();
