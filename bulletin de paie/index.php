<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin de Paie</title>
    <link rel="stylesheet" href="../bulletin de paie/style.css">
</head>
<body>
    <div class="payroll-container">
        <h1>Bulletin de Paie</h1>
        <form action="index.php" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="base_salary">Salaire de base:</label>
            <input type="number" id="base_salary" name="base_salary" required><br>

            <label for="hours_worked">Heures travaillées:</label>
            <input type="number" id="hours_worked" name="hours_worked" required><br>

            <label for="hourly_rate">Taux horaire:</label>
            <input type="number" id="hourly_rate" name="hourly_rate" required><br>

            <label for="deductions">Déductions:</label>
            <input type="number" id="deductions" name="deductions" required><br>

            <button type="submit" name="submit">Générer le Bulletin de Paie</button>
        </form>
        <center>
        <div class="info">
            <ul class="list-unstyled d-flex justify-content-center mt-4">
                <a style="background: #212121;padding: 10px 18px;text-decoration: none;color: #fff;display: inline-block;margin: 30px 0;border-radius: 5px;"
                href="../pages/profilRH.php">Retour</a>
            </ul>
        </div>
        </center>
       

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $base_salary = $_POST['base_salary'];
            $hours_worked = $_POST['hours_worked'];
            $hourly_rate = $_POST['hourly_rate'];
            $deductions = $_POST['deductions'];

            $gross_salary = $base_salary + ($hours_worked * $hourly_rate);
            $net_salary = $gross_salary - $deductions;

            echo "<div class='payroll-output'>";
            echo "<h2>Bulletin de Paie de $name</h2>";
            echo "<p>Salaire de base: $base_salary €</p>";
            echo "<p>Heures travaillées: $hours_worked</p>";
            echo "<p>Taux horaire: $hourly_rate €</p>";
            echo "<p>Déductions: $deductions €</p>";
            echo "<p>Salaire brut: $gross_salary €</p>";
            echo "<p>Salaire net: $net_salary €</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
