<?php
namespace padroes\basicos\appregistry;

class DadosUser
{
    protected $id;
    protected $name;
    protected $nick;
    protected $permission;

    public function __construct() { }

    public function getID()
    {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getNick() {
        return $this->nick;
    }

    public function getPermission() {
        return $this->permission;
    }

    public function atribuiSession() {

        $this->id = $_SESSION['id'];
        $this->name = $_SESSION['name'];
        $this->nick = $_SESSION['nick'];
        $this->permission = $_SESSION['permission'];

        session_destroy();
    }

}
