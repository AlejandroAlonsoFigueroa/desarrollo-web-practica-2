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
                    <?php foreach(obtenerEmpleados() as $row){ ?>
                        <tr>
                            <td><?php echo $row['clave']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td style = "padding: 0;">
                                <form action = "eliminarEmpleado.php" method = "POST">
                                    <input type = "hidden" name = "clave" value = "<?php echo $row['clave']; ?>"/>
                                    <button style = "padding: 0;"class = "boton-borrar" type = "submit">Eliminar</button>
                                </form>
                            </td>
                            <td onClick = "mostrarFormActualizar('<?php echo $row['clave']; ?>', '<?php echo $row['nombre']; ?>', '<?php echo $row['direccion']; ?>', '<?php echo $row['telefono']; ?>')">Editar<?php  ?></td>
                        </tr>
                    <?php }?> 
                </table>
            </div>
        </div>


        <!-- Formulario para actualziar los empleados -->
        <div id ="contenedor-absoluto" style = "display: none; position: absolute; top: 0; left: 0; background-color: grey; width: 100%; height: 100%;">
           <div style = "background-color: white; width: fit-content; padding: 50px; margin: 0 auto;">
                    <form action = "actualizarEmpleado.php" method = "POST">
                        <div>
                            <div>
                                <div><p>Clave</p></div>
                                <div><input id = "fClave" type = "number" name = "clave" required readonly/></div>
                            </div>
                            <div>
                            <div><p>Nombre</p></div>
                                <div><input id = "fNombre" type = "text" name = "nombre"required/></div>
                            </div>
                            <div>
                                <div><p>Dirección</p></div>
                                <div><input id = "fDireccion" type = "text" name = "direccion" required/></div>
                            </div>
                            <div>
                                <div><p>Teléfono</p></div>
                                <div><input id = "fTelefono" type = "text" name = "telefono" required/></div>
                            </div>
                        </div>
                        <div style = "margin-top: 10px;">
                            <button type = "submit">Editar empleado</button>
                        </div>
                    </form>
           </div> 
        </div>
    </body>
</html>