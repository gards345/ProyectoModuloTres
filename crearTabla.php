<?php

    //incluir archivo de configuración con usuario y contraseña
    //dirname: misma carpeta donde estoy
    include_once dirname(__FILE__) . '/config.php';

    //crear Conexión
    //Variables en archivo config
    $con = mysqli_connect(HOST_DB,USUARIO_DB,USUARIO_PASS,NOMBRE_DB);

    if(mysqli_connect_errno())
    {
        echo "Error en la conexión: ". mysqli_connect_error();
    }
    else
    {
        

        $sql = "CREATE TABLE Usuarios(
            UserID INT NOT NULL AUTO_INCREMENT, 
            PRIMARY KEY(UserID),
            NombreUsuario CHAR(30) NOT NULL UNIQUE,
            Rol Char(30) NOT NULL,
            Email Char(30) NOT NULL,
            Contraseña CHAR(200) NOT NULL)";
        /* $sql = "DROP TABLE Usuarios"; */
        if(mysqli_query($con, $sql))
        {
            echo "Tabla Usuarios creada correctamente";
        }
        else
        {
            echo "Error en la creacion " . mysqli_error($con);
        }

    }
    mysqli_close($con);

?>