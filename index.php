<?php
include 'header.php';
?>

<h1>Ingreso de equipos</h1>




<div class="contindex">

    <button><a href="historico.php?nombre=1">Historico</a></button>
    <br><br>
    <form action="guardar_datos.php" method="post">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required><br>
        <label for="nombre">Nombre cliente:</label>
        <input type="text" name="nombre" id="nombre"  placeholder="Nombre Apellido" title="Por favor, solo ingrese nombre y apellido" pattern="[a-zA-Z\s]+" minlength="4" maxlength="100" required><br>
        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono"  placeholder="4751111" min="99999"  max="9999999" required>
        <label for="mail">Email:</label>
        <input type="email" name="mail" id="mail"  placeholder="usuario@mail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        <h3>Datos del producto</h3>
        <label for="producto">Producto</label>
        <input type="text" name="producto" id="producto"  placeholder="Electrodomestico" title="Por favor, ingrese tipo de producto" pattern="[a-zA-Z\s]+" minlength="3" maxlength="100" required>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca"  placeholder="Marca"  title="Por favor,ingrese solo la marca" pattern="[a-zA-Z\s]+" minlength="3" maxlength="100" required><br>
        <label for="numSerie">Numero de serie:</label>
        <input type="number" name="numSerie" id="numSerie"  placeholder="123" min="0" required>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo"  placeholder="abc123" required><br>
        <label for="problema">Motivo de ingreso:</label>
        <input type="text" name="problema" id="problema"  placeholder="Se rompi&oacute;..."required><br><br>

        <input type="submit" value="Enviar">
    </form>


</div>


<?php
include('footer.php');

?>
