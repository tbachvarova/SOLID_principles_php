# SOLID with PHP
Simple example for any S-O-L-I-D with PHP.

## Single Responsibility Principle (SRP)

>"A class should have only one reason to change."
> 
> "Даден клас трябва да отговаря само едно нещо"

[Example 1:](SRP_01.php)

Let's say we have a class called **User** that is responsible for creating and updating users. However, this class also handles sending emails to the user after they are created or updated. This violates the SRP because the User class now has two responsibilities. Instead, we can create a separate EmailSender class that handles sending emails, and let the User class focus only on creating and updating users.

[Example 2:](SRP_02.php) - Product

[Example 3:](SRP_03.php) - UserRegistration + interfaces


# Open-Closed (OCP)

> "A class should be open for extension but closed for modification."
> 
> "Софтуерните обекти (класове, модули, функции и т.н.) трябва да бъдат отворени за разширение, но затворени за модификация"

[Example:](ocp.php) - PaymentProcessor

Let's say we have a class called **PaymentProcessor** that handles payments for different payment methods (credit card, PayPal, etc.). However, the class is tightly coupled with specific payment methods, and adding a new payment method requires modifying the PaymentProcessor class. This violates the OCP because the class is not open for extension. Instead, we can create an abstract PaymentMethod class and have each specific payment method inherit from it. Then, the PaymentProcessor class can accept any PaymentMethod object, without needing to know the details of each specific payment method.

[Example 2:](ocp_2.php) - AreaCalculator (+ ShapeInterface)

## Liskov Substitution (LSP)
> “Derived classes must be substitutable for their base classes”
> 
> "Производните класове трябва да могат да заменят своите базови класове изцяло"

[Example: ](lsp.php)

Let's say we have a class hierarchy for shapes (Rectangle, Square, Circle, etc.). The Rectangle class has properties for width and height, while the Square class has a property for sideLength (which is equivalent to both width and height). If we use the Square class in place of a Rectangle object, we should be able to substitute it without any issues. However, if we allow the Square class to set the width and height properties independently (which violates its definition as a square), we violate the LSP. Instead, we can make the Square class inherit from the Rectangle class, but override the setWidth and setHeight methods to ensure that they always set both width and height to the same value.