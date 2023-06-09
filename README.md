
<!-- [Българска версия](README.bg.md) -->

# SOLID with PHP
Simple example for any S-O-L-I-D with PHP.

## Single Responsibility Principle (SRP)

>"A class should have only one reason to change."

 It is a design principle in software engineering that suggests that **a class or module should have only one responsibility or reason to change**. In other words, a class should only have one job to do, and it should do it well.

The idea behind the SRP is to create software components that are easy to understand, test, and maintain. By keeping a class focused on a single responsibility, it is easier to modify, extend, and reuse the code. This can lead to a more flexible and maintainable software architecture.

[Example 1:](srp/SRP_01.php) - User

[Example 2:](srp/SRP_02.php) - Product

[Example 3:](srp/SRP_03.php) - UserRegistration + interfaces


## Open-Closed Principle (OCP)

> "A class should be open for extension but closed for modification."

It is a design principle in software engineering that suggests that software entities (classes, modules, functions, etc.) **should be open for extension but closed for modification**.

The idea behind the OCP is to create software components that can be easily extended without requiring modification of the existing code.
This is achieved by designing components that are easily replaceable and/or extendable through abstraction and polymorphism, rather than modifying the existing code.

[Example 1:](ocp/ocp.php) - PaymentProcessor

[Example 2:](ocp/ocp_2.php) - AreaCalculator (+ ShapeInterface)

## Liskov Substitution Principle (LSP)
> “Derived classes must be substitutable for their base classes”

To satisfy the Liskov Substitution Principle (LSP) in object-oriented programming, the following requirements must be met:

1. Subtypes must be substitutable for their base types.

or "A subtype (a more specific type) must be able to be used in place of its base type (a more general type)."

2. The behavior of the supertype must not change when a subtype is substituted for it.

or " When you use a subtype instead of its base type, it shouldn't change the overall behavior of the program."

3. Any assumptions made about the behavior of the supertype must also hold true for the subtype.

or "Any rules or expectations that apply to the base type should also apply to the subtype."

4. Subtypes should only add to the behavior of their supertype, and should not remove or modify any of it.

or "A subtype can add new behavior, but it shouldn't remove or change any behavior from its base type."

5. [Pre-conditions cannot be strengthened in a subtype, but they can be weakened.](lsp/lsp_pre-conditions.php)

or "A subtype can't make a rule stricter than its base type, but it can make it less strict."

6. [Post-conditions cannot be weakened in a subtype, but they can be strengthened.](lsp/lsp_post-conditions.php)

or "A subtype can't make a guarantee weaker than its base type, but it can make it stronger."


By meeting these requirements, the LSP ensures that code written against a base class will work correctly when a subclass is used in its place, without requiring any changes to the calling code.

[Example 1 ](lsp/lsp.php) - Rectangle 

[Example 2 ](lsp/lsp2.php) - Bird

[Example 3 ](lsp/lsp3.php) - Animal


## Interface Segregation Principle (ISP)
> "No code should be forced to depend on methods it **does not** use"

In other words, **a class should not be forced to implement an interface that it doesn't use.** This principle aims to reduce the coupling between software components and prevent unnecessary dependencies between them. By implementing ISP, software engineers can increase the modularity of their software, making it more flexible, extensible, and maintainable.


[Example 1 ](isp/isp.php) - Vehicle

## Dependency Inversion Principle (DIP)
> "High-level modules should not depend on low-level modules, 
> but rather both should depend on abstractions"

This means that instead of depending on concrete implementations, classes and functions **should depend on interfaces or abstract classes**. By doing so, the code becomes more modular, easier to test, and less coupled, which makes it easier to modify and maintain over time.

[Example 1 ](dip/dip1.php) - Engine


> 
* [Еxample follows all five SOLID principles 1](fullSolid.php) - PaymentService
* [Еxample follows all five SOLID principles 2](fullSolid2.php) - ShoppingCart

