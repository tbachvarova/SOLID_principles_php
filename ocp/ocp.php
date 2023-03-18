<?php

/** Let's say we have a class called PaymentProcessor that handles payments
 * for different payment methods (credit card, PayPal, etc.).
 * However, the class is tightly coupled with specific payment methods,
 * and adding a new payment method requires modifying the PaymentProcessor class.
 *
 * !!! This violates the OCP because the class is not open for extension.
 *
 * Instead, we can create an abstract PaymentMethod class and have each specific payment method inherit from it.
 * Then, the PaymentProcessor class can accept any PaymentMethod object,
 * without needing to know the details of each specific payment method. *
 *
 * In this example, the PaymentMethod class is an abstract class that defines a processPayment method.
 * The CreditCardPayment and PayPalPayment classes inherit from the PaymentMethod class and implement their
 * specific payment logic.
 *
 * The PaymentProcessor class now accepts any object that is an instance of the PaymentMethod class,
 * and can process payments without knowing the details of each specific payment method.
 * This adheres to the OCP, as the PaymentProcessor class is open for extension, but closed for modification.
 * We can easily add new payment methods by creating a new class that extends the PaymentMethod abstract class,
 * without having to modify the PaymentProcessor class.
 */

abstract class PaymentMethod
{
    public abstract function processPayment($amount);
}

class CreditCardPayment extends PaymentMethod
{
    public function processPayment($amount)
    {
        // logic for processing a credit card payment
    }
}

class PayPalPayment extends PaymentMethod
{
    public function processPayment($amount)
    {
        // logic for processing a PayPal payment
    }
}

class PaymentProcessor
{
    public function processPayment(PaymentMethod $paymentMethod, $amount)
    {
        $paymentMethod->processPayment($amount);
    }
}
