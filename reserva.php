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
            <form class="reservationForm">
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
                <input type="submit" value="Reservar">
            </form>
            <div id="reservationReminder"></div>
        </main>
    </div>
    <?php include 'common/footer.php' ?>
</body>

</html>