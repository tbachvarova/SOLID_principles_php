
[Българска версия](README.bg.md)

# SOLID with PHP
Simple example for any S-O-L-I-D with PHP.

## Single Responsibility Principle (SRP)

>"A class should have only one reason to change."

 It is a design principle in software engineering that suggests that **a class or module should have only one responsibility or reason to change**. In other words, a class should only have one job to do, and it should do it well.

The idea behind the SRP is to create software components that are easy to understand, test, and maintain. By keeping a class focused on a single responsibility, it is easier to modify, extend, and reuse the code. This can lead to a more flexible and maintainable software architecture.

[Example 1:](srp/SRP_01.php) - User

[Example 2:](srp/SRP_02.php) - Product

[Example 3:](srp/SRP_03.php) - UserRegistration + interfaces


# Open-Closed (OCP)

> "A class should be open for extension but closed for modification."

It is a design principle in software engineering that suggests that software entities (classes, modules, functions, etc.) **should be open for extension but closed for modification**.

The idea behind the OCP is to create software components that can be easily extended without requiring modification of the existing code.
This is achieved by designing components that are easily replaceable and/or extendable through abstraction and polymorphism, rather than modifying the existing code.

[Example:](ocp/ocp.php) - PaymentProcessor



[Example 2:](ocp/ocp_2.php) - AreaCalculator (+ ShapeInterface)

## Liskov Substitution (LSP)
> “Derived classes must be substitutable for their base classes”

To satisfy the Liskov Substitution Principle (LSP) in object-oriented programming, the following requirements must be met:

* Subtypes must be substitutable for their base types.
* The behavior of the supertype must not change when a subtype is substituted for it.
* Any assumptions made about the behavior of the supertype must also hold true for the subtype.
* Subtypes should only add to the behavior of their supertype, and should not remove or modify any of it.
* [Pre-conditions cannot be strengthened in a subtype, but they can be weakened.](lsp/lsp_pre-conditions.php)
* Post-conditions cannot be weakened in a subtype, but they can be strengthened.

By meeting these requirements, the LSP ensures that code written against a base class will work correctly when a subclass is used in its place, without requiring any changes to the calling code.

[Example 1 ](lsp/lsp.php) - Rectangle 

[Example 2 ](lsp/lsp2.php) - Bird

[Example 3 ](lsp/lsp3.php) - Animal



......

under construction ...