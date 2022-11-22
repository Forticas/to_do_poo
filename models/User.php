<?php

require_once 'utilities/Model.php';

class User extends Model
{
    private  int $id;
    private string $email;
    private string $password;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * La méthode permet de récupérer un utilisateur à partir d'une adresse mail fournie
     *
     * @param string $email
     * @return array|false
     */
    public function getOneByEmail(string $email) : array|false
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = :email ");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert()
    {

    }

}