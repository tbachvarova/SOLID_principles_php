# SOLID with PHP
Simple example for any S-O-L-I-D with PHP.

## Single Responsibility Principle (SRP)

>"A class should have only one reason to change."

[Example 1:](SRP_01.php)

Let's say we have a class called **User** that is responsible for creating and updating users. However, this class also handles sending emails to the user after they are created or updated. This violates the SRP because the User class now has two responsibilities. Instead, we can create a separate EmailSender class that handles sending emails, and let the User class focus only on creating and updating users.

[Example 2:](SRP_02.php) - Product

[Example 3:](SRP_03.php) - UserRegistration + interfaces


# Open-Closed (OCP)

> "A class should be open for extension but closed for modification."

[Example:](ocp.php) - PaymentProcessor

Let's say we have a class called **PaymentProcessor** that handles payments for different payment methods (credit card, PayPal, etc.). However, the class is tightly coupled with specific payment methods, and adding a new payment method requires modifying the PaymentProcessor class. This violates the OCP because the class is not open for extension. Instead, we can create an abstract PaymentMethod class and have each specific payment method inherit from it. Then, the PaymentProcessor class can accept any PaymentMethod object, without needing to know the details of each specific payment method.

[Example 2:](ocp_2.php) - AreaCalculator (+ ShapeInterface)