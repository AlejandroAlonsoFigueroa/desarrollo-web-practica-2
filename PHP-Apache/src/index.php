<html>
    <title>Practica 2</title>
    <head>
        <style>
            *{
                font-family: arial;
            }
        </style>
    </head>
    <body>

    <div>
        <form action = "guardarEmpleado.php" method = "POST">
                <div>
                    <div>
                        <div><p>Clave</p></div>
                        <div><input type = "number" name = "clave" required /></div>
                    </div>
                    <div>
                    <div><p>Nombre</p></div>
                        <div><input type = "text" name = "nombre"required/></div>
                    </div>
                    <div>
                        <div><p>Dirección</p></div>
                        <div><input type = "text" name = "direccion" required/></div>
                    </div>
                    <div>
                        <div><p>Teléfono</p></div>
                        <div><input type = "text" name = "telefono" required/></div>
                    </div>
                </div>
                <div style = "margin-top: 10px;">
                    <button type = "submit">Guardar empleado</button>
                </div>
        </form>
    </div>
        <?php 
            function obtenerEmpleados(){
                $sql = "SELECT clave, nombre, direccion, telefono FROM empleado";
                $conexion =  obtenerConexionBBDD();
                $stmt = $conexion->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        ?>
        <div>
            <h1>CRUD Empleados PHP</h1>

            <div>
                <div>
            </div>
            <div>
                <div>
                    <h1>Empleados registrados</h1>
                </div>
            </div>
            <div>
                <table>
                    <tr></tr>
                </table>
            </div>
        </div>
    </body>
</html>