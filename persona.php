  <?php
  
      class Persona {
        public $cedula;
        public $nombre;
        public $apellido;
        public $direccion;
      
      // Obtener cedula
      public function getCI()
      {
        return $this->cedula;
      }
      // Obtener nombre
      public function getN()
      {
        return $this->nombre;
      }
      // Obtener apellido
      public function getA()
      {
        return $this->apellido;
      }
      // Obtener direccion
      public function getDir()
      {
        return $this->direccion;
      }
    }

  ?>