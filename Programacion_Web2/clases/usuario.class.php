<?php
class usuario{
    function usuario($id=false){
        global $bd;
        $this->usuario_id=$id;
        $this->usuario_nombre="";
        $this->usuario_pwd="";
        $this->error=0;
        if(!isset($_SESSION['iduser']) && $this->usuario_id == ""){//no existe la session, entonces esta ingresando o intenta acceder a una pagina sin loguearse
            if(isset($_POST['usuario']) && isset($_POST['pwd'])){//esta ingresando
                $bd->escapar=$_POST['usuario'];
                $bd->sentencia="SELECT usuario_id FROM usuario WHERE usuario_nombre='".$bd->escapa()."'";
                $bd->fsentencia();
                if ($bd->resultado != ""){
                        $bd->escapar=$_POST['pwd'];
                        $bd->sentencia = "SELECT usuario_id, usuario_nombre FROM usuario WHERE usuario_id='".$bd->resultado[0]['usuario_id']."' AND usuario_pwd='".md5($bd->escapa())."'";
                        $bd->fsentencia();
                        if ($bd->resultado  != "" && $bd->resultado[0]['usuario_id'] != ""){
                                $this->usuario_id = $bd->resultado[0]['usuario_id'];
                                $_SESSION['iduser']= $this->usuario_id;
                                $this->fcarga();
                        }else{
                                $this->error=1;
                        }
                }else{
                        $this->error=1;
                }
            }else{//intenta acceder sin permisos
                    $this->error=1;
            }
        }else if($id){//se esta instanciando un usuario
            if($id != '-1'){
                $this->usuario_id=$id;
                $this->fcarga();
            }
        }else{//ya esta la sesion creada, entonces carga la informacion
            $this->usuario_id=$_SESSION['iduser'];
            $this->fcarga();
        }
        if($this->error==1){
            $this->fsalir();
        }
        if ($id){
            $this->fcarga(); 
        }
    }

    function fcarga(){
        global $bd;
		?>
		<script>alert('Bienvenido');</script>
		<?php
        //valida si tiene permiso para ese menu
        //$this->fcarga_permiso();
        //$this->fvalida();
        $bd->sentencia = "SELECT * FROM usuario WHERE usuario_id='".$this->usuario_id."'";
        $bd->fsentencia();
        $this->usuario_id=$bd->resultado[0]['usuario_id'];
        $this->usuario_nombre=$bd->resultado[0]['usuario_nombre'];
        $this->usuario_pwd=$bd->resultado[0]['usuario_pwd'];
    }

    function fcarga_permiso(){
        global $bd;
        $bd->sentencia = "SELECT p.modulo_id as modulo_id FROM permiso p, modulo m WHERE p.usuario_id='".$this->usuario_id."'";
        $bd->sentencia.=" AND m.modulo_id=p.modulo_id ORDER BY m.modulo_orden";
        $bd->fsentencia();
        $n=count($bd->resultado);
        for ($k=0;$k<$n;$k++){
                $this->permiso[$bd->resultado[$k]['modulo_id']] = "acceso";
        }
    }

    function fguarda(){
        global $bd;
        $bd->sentencia = "INSERT INTO usuario (usuario_login,usuario_pwd,usuario_nombre,usuario_apellido,usuario_telefono,usuario_direccion,usuario_especialidad,usuario_cedula,usuario_email,usuario_prefijo)VALUES('".$this->usuario_login."','".$this->usuario_pwd."','".$this->usuario_nombre."','".$this->usuario_apellido."','".$this->usuario_telefono."','".$this->usuario_direccion."','".$this->usuario_especialidad."','".$this->usuario_cedula."','".$this->usuario_email."','".$this->usuario_prefijo."')";
        $bd->fsentencia();
    }

    function factualiza_pwd(){
        global $bd;
        $bd->sentencia="UPDATE usuario SET usuario_pwd=md5('".$this->usuario_new_pwd."') WHERE usuario_id='".$this->usuario_id."'";
        $bd->fsentencia();
    }

    function factualiza(){
        global $bd;
        $bd->sentencia = "UPDATE usuario SET usuario_login='".$this->usuario_login."',usuario_pwd='".$this->usuario_pwd."',usuario_nombre='".$this->usuario_nombre."',";
        $bd->sentencia.="usuario_apellido='".$this->usuario_apellido."',usuario_telefono='".$this->usuario_telefono."',usuario_direccion='".$this->usuario_direccion."',";
        $bd->sentencia.="usuario_especialidad='".$this->usuario_especialidad."',usuario_cedula='".$this->usuario_cedula."',usuario_email='".$this->usuario_email."',";
        $bd->sentencia.="usuario_prefijo='".$this->usuario_prefijo."' WHERE usuario_id='".$this->usuario_id."'";
        $bd->fsentencia();
        ?>
        <script>alert('Informacion actualizada');</script>
        <?php 
    }


    function felimina(){
        global $bd;
        $bd->sentencia = "DELETE FROM usuario WHERE usuario_id='".$this->usuario_id."'";
        $bd->fsentencia();
    }

    function debug(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

    /////////////////////////////////////////////
    // funciones para la validacion de usuario //
    /////////////////////////////////////////////


    function fvalida(){
        global $bd;
        $temp=explode("/",$_SERVER['SCRIPT_NAME']);
        $vinculo=end($temp);
        if($vinculo != "valida.php"){
            $bd->sentencia = "SELECT modulo_id FROM modulo WHERE modulo_vinculo='".$vinculo."'";
            $bd->fsentencia();
            if ($this->permiso != ""){
                if(!array_key_exists($bd->resultado[0]['modulo_id'], $this->permiso)){//NO tiene el permiso de entrar al modulo
                    $this->fsalir();
                }else{
                    $this->acceso=$this->permiso[$bd->resultado[0]['modulo_id']];
                }
            }else{
                $this->fsalir();
            }
        }
    }

    function fbusca(){
        global $bd;
        $bd->tipo="";
        $bd->sentencia="SELECT * FROM usuario WHERE usuario_cedula='".$this->usuario_cedula."'";
        $bd->fsentencia();
        $this->usuario_login=$bd->resultado[0]['usuario_login'];
        $this->usuario_telefono=$bd->resultado[0]['usuario_telefono'];
        $this->usuario_email=$bd->resultado[0]['usuario_email'];
        $this->usuario_id=$bd->resultado[0]['usuario_id'];
    }

    function fsalir(){
        if(isset($_SESSION['iduser'])){
            unset($_SESSION['iduser']);
        }
        if($this->error != 0){
            ?>
            <script>
            alert('Usuario y/o contrasena erronea');
            </script>
            <?php 
        }else{
        ?>
        <script>
            alert('Bienvenido');
        </script>
        <?php
		}
    }
}
?>