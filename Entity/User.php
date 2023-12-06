<?php

class User //création ddu moule de l'tuilisateur
{
    // Attributs
    private int $id;
    private string $nomUser;
    private string $mail;
    private string $password;

    public function __construct(array $data) //constructeur 
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Méthodes
    public function getId(): int //initialisation des getter et des setter
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNomUser()
    {
        return $this->nomUser;
    }

    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;
        return $this;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}