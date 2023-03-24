<?php

/* This example follows all five SOLID principles:

** Single Responsibility Principle:
 * Each class has a single responsibility.
 * PayPalProcessor and StripeProcessor classes are responsible for processing payments using their respective APIs,
 *  EmailNotificationService and SmsNotificationService classes are responsible for sending notifications via email and SMS,
 *  and PaymentService class is responsible for coordinating the payment processing and notification sending.

** Open-Closed Principle:
 * The PaymentProcessorInterface and NotificationServiceInterface interfaces are open for extension
 * but closed for modification.
 *  We can create new payment processors or notification services by implementing the interfaces
 * without modifying the existing code.

** Liskov Substitution Principle:
 * The PaymentService class works with any PaymentProcessorInterface and NotificationServiceInterface implementation,
 * such as PayPalProcessor and EmailNotificationService, without knowing the specific implementation.

** Interface Segregation Principle:
 * The PaymentProcessorInterface and NotificationServiceInterface are well-segregated,
 * with each interface having a single responsibility.

** Dependency Inversion Principle:
 * The PaymentService class depends on the PaymentProcessorInterface and NotificationServiceInterface abstractions,
 * not on specific implementations.
 *
 * This allows us to inject different payment processors or notification services
 * without changing the PaymentService class itself.
 * */

interface PaymentProcessorInterface {
    public function processPayment($amount);
}

class PayPalProcessor implements PaymentProcessorInterface {
    private $apiKey;
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    public function processPayment($amount) {
        // process payment using PayPal API
    }
}

class StripeProcessor implements PaymentProcessorInterface {
    private $apiKey;
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    public function processPayment($amount) {
        // process payment using Stripe API
    }
}

interface NotificationServiceInterface {
    public function sendNotification($message);
}

class EmailNotificationService implements NotificationServiceInterface {
    private $apiKey;
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    public function sendNotification($message) {
        // send email notification using API
    }
}

class SmsNotificationService implements NotificationServiceInterface {
    private $apiKey;
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    public function sendNotification($message) {
        // send SMS notification using API
    }
}

class PaymentService {
    private $paymentProcessor;
    private $notificationService;
    public function __construct(PaymentProcessorInterface $paymentProcessor, NotificationServiceInterface $notificationService) {
        $this->paymentProcessor = $paymentProcessor;
        $this->notificationService = $notificationService;
    }
    public function processPayment($amount) {
        $this->paymentProcessor->processPayment($amount);
        $this->notificationService->sendNotification("Payment processed successfully.");
    }
}

// Usage
$paypalProcessor = new PayPalProcessor('123456789');
$emailNotificationService = new EmailNotificationService('987654321');

$paymentService = new PaymentService($paypalProcessor, $emailNotificationService);

$paymentService->processPayment(100);
