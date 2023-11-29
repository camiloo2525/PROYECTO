<?php

class ControladorUsuarios{



	static public Function ctrCrearUsuarios(){


		if (isset($_POST["usuario"])) {

			$tabla = "usuarios";

			$encriptar = crypt($_POST["password"], 'camilo2000');

            $datos =  array('nombre' => $_POST['nombre'],
						    'usuario' => $_POST['usuario'],
						    'password' => $encriptar,
						    'perfil' => $_POST['perfil']
             );
			

			$respuesta = ModeloUsuarios::mdlGuardarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {

                echo "usuario registrado";
            }else{
                echo " usuario no registrado";

				


			}
        }
    
    }



    static public Function ctrMostrarUsuarios($item,$valor){

    $tabla = "usuarios";

    $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);

    return $respuesta;
    }

    static public Function ctrEditarUsuarios(){


		if (isset($_POST["usuario"])) {

			$tabla = "usuarios";

			$encriptar = crypt($_POST["editarPassword"], 'camilo2000');

            $datos =  array('nombre' => $_POST['editarNombre'],
						    'usuario' => $_POST['editarUsuario'],
						    'password' => $encriptar,
						    'perfil' => $_POST['editarPerfil']
             );
			

			$respuesta = ModeloUsuarios::mdlEditarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {

                echo "usuario Modificado";
            }else{
                echo " usuario no Modificado";

				


			}
        }
    
    }
}


