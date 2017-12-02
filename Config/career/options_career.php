<?php

/*
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
 */

/**
 * Clase abstracta, con todas las opciones para la gestion de los datos
 * de TABLE_CAREER
 * <br>
 * @author nookamb
 */


abstract class options_career extends conexion {

    private $codigoCarrera;

    public function __construct($codigoCarrera) {

        parent::__construct();

        $this->codigoCarrera = $codigoCarrera;

    }

    /*
     * Inicio de los metodos get.
     */

    public function getCodigoCarrera () {

        return $this->codigoCarrera;

    }

    public function getName() {

        $sql = "SELECT ".NAME_CA." FROM ".TABLE_CAREER." WHERE ".COD_CA." = :codigo";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoCarrera));

        return $resultado->fetch()[NAME_CA];


    }

    public function getUCTol(){

        $sql = "SELECT ".UNIT_ALL." FROM ".TABLE_CAREER." WHERE ".COD_CA." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoCarrera));

        return $resultado->fetch()[UNIT_ALL];

    }

    public function getNroTriCa(){

        $sql = "SELECT ".NRO_TRI_CA." FROM ".TABLE_CAREER." WHERE ".COD_CA." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoCarrera));

        return $resultado->fetch()[NRO_TRI_CA];

    }

    public function getNroEst(){

        $sql = "SELECT ".NRO_STU." FROM ".TABLE_CAREER." WHERE ".COD_CA." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoCarrera));

        return $resultado->fetch()[NRO_STU];

    }

    /*
     * Inicio de los metodos set.
     */

    public function setName($nombreCarrera){

        $sql = "UPDATE ".TABLE_CAREER." SET ".NAME_CA." = :parametro1 WHERE ".COD_CA." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$nombreCarrera, ":parametro2"=>$this->codigoCarrera));

    }

    public function setUCTol($unidadesTotales) {

        $sql = "UPDATE ".TABLE_CAREER." SET ".UNIT_ALL." = :parametro1 WHERE ".COD_CA." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$unidadesTotales, ":parametro2"=>$this->codigoCarrera));

    }

    public function setNroTriCa($nroTriCa) {

        $sql = "UPDATE ".TABLE_CAREER." SET ".NRO_TRI_CA." = :parametro1 WHERE ".COD_CA." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$nroTriCa, ":parametro2"=>$this->codigoCarrera));

    }

    public function setNroEst($nroEst) {

        $sql = "UPDATE ".TABLE_CAREER." SET ".NRO_STU." = :parametro1 WHERE ".COD_CA." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$nroEst, ":parametro2"=>$this->codigoCarrera));

    }

}