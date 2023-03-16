<?php
/**
 * Single Responsibility (SRP)
 *
 * „Даден клас трябва да отговаря само едно нещо“
 *
 * Ако е необходимо да ползва функционалност различна от неговата основна цел,
 * то се създава отделен CLASS или интерфейс, като се подават обектите за взаимодействие в конструктора.
 * Например ако ни е необходимо да връщаме данни в определен формат (HTML, JSON и др) е по-добре да реализираме интерфейс
 */
class User {
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function create() {
        // logic for creating a new user in the database
    }

    public function update() {
        // logic for updating an existing user in the database
    }

    /* ---- This violates the SRP because the class has multiple responsibilities.
    To apply the SRP, we can separate the responsibilities into separate classes.

    public function sendEmail() {
        // logic for sending an email to the user
    }
     * */
}

class EmailSender {
    public function sendEmail($user) {
        // logic for sending an email to the user
    }
}
