# SOLID with PHP
Simple example for any S-O-L-I-D with PHP.

## Single Responsibility Principle (SRP)

[Single Responsibility Principle (SRP):](SRP_01.php)

A class should have only one reason to change.
Example: Let's say we have a class called User that is responsible for creating and updating users. However, this class also handles sending emails to the user after they are created or updated. This violates the SRP because the User class now has two responsibilities. Instead, we can create a separate EmailSender class that handles sending emails, and let the User class focus only on creating and updating users.