<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="img/logoDonJuan.png" type="image/x-icon">
    <title>Don Juan | Reserva</title>
    <?php include 'common/head.php' ?>
    <link rel="stylesheet" href="css/reserva.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'common/header.php' ?>
    <div id="mainContainer" class="container d-flex flex-grow-1 justify-content-center align-items-center">
        <main>
            <form class="reservationForm" method="post">
                <label for="name">Nombre:</label><br>
                <input type="text" id="name" name="name" autocomplete="name"><br>
                <label for="date">Fecha:</label><br>
                <input type="date" id="date" name="date" autocomplete="date"><br>
                <label for="time">Hora:</label><br>
                <input type="time" id="time" name="time" autocomplete="time"><br>
                <label for="people">Número de personas:</label><br>
                <input type="number" id="people" name="people" autocomplete="people" min="1"><br>
                <label for="sede">Sede:</label><br>
                <select name="sede" id="sede">
                    <option value="Escoge una opción">Escoge una opción</option>
                    <option value="La Plazuela">La Plazuela</option>
                    <option value="La Libertad">La Libertad</option>
                </select><br></br>
                <input type="hidden" name="reservar" value="1">
                <input type="submit" value="Reservar">
            </form>
        </main>
    </div>
    <?php include 'common/footer.php' ?>
    <?php include 'con_db.php';
    if (isset($_POST['reservar'])) {
        if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['date']) >= 1 &&
            strlen($_POST['time']) >= 1 &&
            strlen($_POST['people']) >= 1 &&
            strlen($_POST['sede']) >= 1
        ) {
            $name = trim($_POST['name']);
            $date = trim($_POST['date']);
            $time = $_POST['time'];
            $people = $_POST['people'];
            $sede = $_POST['sede'];

            try {
                $stmt = $conn->prepare("INSERT INTO reserva (nombreCliente, fecha, hora, cantPersonas, sede) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$name, $date, $time, $people, $sede]);

                if ($stmt->rowCount() > 0) {
                    echo "¡Te has registrado correctamente!";
                } else {
                    echo "¡Ups! Ha ocurrido un error.";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            ?>
            <h3 class="bad"></h3>Por favor complete los campos.</h3>
            <?php
        }
    }
    ?>

</body>

</html>