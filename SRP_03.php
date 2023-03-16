<?php

/**
 * In this example, we have two interfaces, UserRepositoryInterface and EmailSenderInterface,
 * that define the methods required for creating and updating users in the database and sending emails respectively.
 *
 * The UserRepository and EmailSender classes implement the corresponding interfaces and contain the logic for their
 * respective responsibilities.
 *
 * The UserRegistration class is responsible for registering a new user and sending a welcome email.
 * It takes in objects that implement the UserRepositoryInterface and EmailSenderInterface interfaces as dependencies.
 * This adheres to the SRP, as each class has only one responsibility and each interface defines a single responsibility.
 *
 */

interface UserRepositoryInterface
{
    public function create($data);

    public function update($id, $data);
}

interface EmailSenderInterface
{
    public function sendEmail($to, $subject, $body);
}

class UserRepository implements UserRepositoryInterface
{
    public function create($data)
    {
        // logic for creating a new user in the database
    }

    public function update($id, $data)
    {
        // logic for updating an existing user in the database
    }
}

class EmailSender implements EmailSenderInterface
{
    public function sendEmail($to, $subject, $body)
    {
        // logic for sending an email to the user
    }
}

class UserRegistration
{
    private $userRepository;
    private $emailSender;

    public function __construct(UserRepositoryInterface $userRepository, EmailSenderInterface $emailSender)
    {
        $this->userRepository = $userRepository;
        $this->emailSender = $emailSender;
    }

    public function registerUser($data)
    {
        $this->userRepository->create($data);
        $this->emailSender->sendEmail($data['email'], 'Welcome!', 'Thank you for registering!');
    }
}

