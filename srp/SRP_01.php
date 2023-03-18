<?php

/**
 * Single Responsibility (srp)
 *
 * Let's say we have a class called User that is responsible for creating and updating users.
 * However, this class also handles sending emails to the user after they are created or updated.
 *
 * This violates the SRP because the User class now has two responsibilities.
 *
 * Instead, we can create a separate **EmailSender** class that handles sending emails, and let the **User** class focus only on creating and updating users.
 */
class User
{
    private string $name;
    private string $email;
    private string $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function create()
    {
        // logic for creating a new user in the database
    }

    public function update()
    {
        // logic for updating an existing user in the database
    }

    /* ---- This violates the srp because the class has multiple responsibilities.
    // To apply the srp, we can separate the responsibilities into separate classes.

    public function sendEmail() {
        // logic for sending an email to the user
    }
     * */
}

class EmailSender
{
    public function sendEmail($user)
    {
        // logic for sending an email to the user
    }
}