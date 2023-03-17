
[in English](README.md)

# SOLID с PHP
Примери за  S-O-L-I-D чрез PHP.

## Single Responsibility Principle (SRP)

> "Даден клас трябва да отговаря само едно нещо"

[Example 1:](SRP_01.php)

Да кажем, че имаме клас, наречен **User**, отговорен за създаването и актуализирането на потребители. Този клас обаче обработва и изпраща имейли до потребители, след като са създадени или актуализирани. 

_**Това нарушава SRP**_, защото потребителският клас вече има две отговорности. 

Вместо това можем да създадем отделен клас **EmailSender**, който обработва изпращането на имейли, и да оставим класа **User** да се фокусира само върху създаването и актуализирането на потребители.

[Example 2:](SRP_02.php) - Product

[Example 3:](SRP_03.php) - UserRegistration + interfaces


# Open-Closed (OCP)

> "Софтуерните обекти (класове, модули, функции и т.н.) трябва да бъдат отворени за разширение, но затворени за модификация"


[Example:](ocp.php) - PaymentProcessor

Let's say we have a class called **PaymentProcessor** that handles payments for different payment methods (credit card, PayPal, etc.). However, the class is tightly coupled with specific payment methods, and adding a new payment method requires modifying the PaymentProcessor class. This violates the OCP because the class is not open for extension. Instead, we can create an abstract PaymentMethod class and have each specific payment method inherit from it. Then, the PaymentProcessor class can accept any PaymentMethod object, without needing to know the details of each specific payment method.

[Example 2:](ocp_2.php) - AreaCalculator (+ ShapeInterface)

## Liskov Substitution (LSP)
> “Derived classes must be substitutable for their base classes”
>
> "Производните класове трябва да могат да заменят своите базови класове изцяло"

To satisfy the Liskov Substitution Principle (LSP) in object-oriented programming, the following requirements must be met:

* Subtypes must be substitutable for their base types.
* The behavior of the supertype must not change when a subtype is substituted for it.
* Any assumptions made about the behavior of the supertype must also hold true for the subtype.
* Subtypes should only add to the behavior of their supertype, and should not remove or modify any of it.
* [Pre-conditions cannot be strengthened in a subtype, but they can be weakened.](lsp_pre-conditions.php)
* Post-conditions cannot be weakened in a subtype, but they can be strengthened.

By meeting these requirements, the LSP ensures that code written against a base class will work correctly when a subclass is used in its place, without requiring any changes to the calling code.

[Example ](lsp.php) - Rectangle