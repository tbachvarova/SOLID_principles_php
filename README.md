
[Българска версия](README.bg.md)

# SOLID with PHP
Simple example for any S-O-L-I-D with PHP.

## Single Responsibility Principle (SRP)

>"A class should have only one reason to change."

[Example 1:](SRP_01.php)

Let's say we have a class called **User** that is responsible for creating and updating users.
However, this class also handles sending emails to the user after they are created or updated. 

**This violates the SRP** because the User class now has two responsibilities. 

Instead, we can create a separate **EmailSender** class that handles sending emails, and let the **User** class focus only on creating and updating users.

[Example 2:](SRP_02.php) - Product

[Example 3:](SRP_03.php) - UserRegistration + interfaces


# Open-Closed (OCP)

> "A class should be open for extension but closed for modification."

[Example:](ocp.php) - PaymentProcessor

Let's say we have a class called **PaymentProcessor** that handles payments for different payment methods (credit card, PayPal, etc.). However, the class is tightly coupled with specific payment methods, and adding a new payment method requires modifying the PaymentProcessor class.

**This violates the OCP because the class is not open for extension.** 

Instead, we can create an **abstract PaymentMethod class** and have each specific payment method inherit from it. Then, the **PaymentProcessor** class can accept any **PaymentMethod** object, without needing to know the details of each specific payment method.

[Example 2:](ocp_2.php) - AreaCalculator (+ ShapeInterface)

## Liskov Substitution (LSP)
> “Derived classes must be substitutable for their base classes”

To satisfy the Liskov Substitution Principle (LSP) in object-oriented programming, the following requirements must be met:

* Subtypes must be substitutable for their base types.
* The behavior of the supertype must not change when a subtype is substituted for it.
* Any assumptions made about the behavior of the supertype must also hold true for the subtype.
* Subtypes should only add to the behavior of their supertype, and should not remove or modify any of it.
* [Pre-conditions cannot be strengthened in a subtype, but they can be weakened.](lsp_pre-conditions.php)
* Post-conditions cannot be weakened in a subtype, but they can be strengthened.

By meeting these requirements, the LSP ensures that code written against a base class will work correctly when a subclass is used in its place, without requiring any changes to the calling code.

[Example 1 ](lsp.php) - Rectangle 

[Example 2 ](lsp2.php) - Bird

[Example 3 ](lsp3.php) - Animal



......

under construction ...