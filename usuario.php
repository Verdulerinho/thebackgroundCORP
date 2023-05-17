<?php
  
  class Usuario {
    public $user;
    public $pass;
  
  // Obtener Usuario
  public function getUser()
  {
    return $this->user;
  }
  // Obtener Contraseña
  public function getPass()
  {
    return $this->pass;
  }
  // Obtener Rol
  public function getRol()
  {
    return $this->rol;
  }
}

?>