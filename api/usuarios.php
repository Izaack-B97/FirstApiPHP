<?php 
    include_once('../clases/class-usuario.php');

    header('Content-Type: application/json');

    $result = array(
        'message' => ''
    );
    
    switch ( $_SERVER['REQUEST_METHOD'] ) {
        case 'GET':
            // Obtenemos la info de un usuario 
            if (isset($_GET['id'])) {
                $result['message'] = 'Informacion del usuario ' . $_GET['id'];
                $result['data']    =  Usuario :: getUser( $_GET['id'] );
            }
            // Todos los usuarios
            else {
                $result['data'] = Usuario :: getUser();
            }
            break;
        case 'POST':
            $_POST = json_decode( file_get_contents('php://input'), true ); // Convierte el json a un array asociativo
            $usuario = new Usuario( $_POST['nombre'], $_POST['apellido'], $_POST['fechaNacimiento'], $_POST['sexo'] );
            $usuario -> createUser();
            $result['message'] = 'Nuevo usuario';
            $result['data'] = $_POST;
            break;
        case 'PUT':
            $_PUT = json_decode( file_get_contents('php://input'), true ); // Convierte el json a un array asociativo
            if ( isset( $_GET['id'] ) ) {
                $result['message'] = 'Usuario a actualizar ';
                $result['data'] = Usuario :: updateUser( $_GET['id'], $_PUT );;
            } else {
                $result['message'] = 'El id del usuario es requerido';
            }
            break;
        case 'DELETE':
            if ( isset( $_GET['id'] ) ) {
                $result['message'] = 'Haz eliminado al usuario ' . $_GET['id'];
            } else {
                $result['message'] = 'Necesitamos el id del usuario para eliminarlo';
            }
            break;
        default: 
            $result['message'] = 'Opcion no disponible';
            break;
    }

    echo json_encode( $result );
?>