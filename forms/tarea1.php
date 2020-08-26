<!--//cear un nuevo formulario que simule la carga de un alumno que tiee NOMBRE APELLIDO EDAD y SEXO--->

<html>
<h1> Complete el siguiente formulario </h1>

<body>

    <form action="submit_tarea1.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Apellido: <input type="text" name="apellido"><br>
        Fecha nacimiento: <input type="date" id="birthday" name="birthday"><br>
        Sexo: <select id="sexp" name="cars">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br>
        Vehiculo: Senda<input type="checkbox" name="vehiculo"> Palio<input type="checkbox" name="vehiculo">
    </form>
    <input type="submit">
</body>

</html>