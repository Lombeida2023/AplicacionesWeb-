<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            margin: 0;
            background-color: #f7f4f9;
            color: #333;
        }

        .dashboard-container {
            max-width: 1100px;
            margin: 60px auto;
            padding: 20px;
        }

        .dashboard-title {
            font-size: 32px;
            margin-bottom: 40px;
            color: #5a4a72;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .card {
            background: #ffffff;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.07);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .number {
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .email {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
            word-break: break-word;
        }

        .card span {
            font-size: 14px;
            opacity: 0.75;
        }

        .card-links {
            border-left: 6px solid #f4a7c5;
        }

        .card-users {
            border-left: 6px solid #b6b2f5;
        }

        .card-last {
            border-left: 6px solid #9fd6c2;
        }
    </style>

</head>
<body>

<main class="dashboard-container">

    <h1 class="dashboard-title">Dashboard de Estadísticas</h1>

    <section class="cards">

        <div class="card card-links">
            <h2>Total de Links</h2>
            <p class="number">
                <?= $stats['total_links'] ?? 0 ?>
            </p>
            <span>Links registrados en el sistema</span>
        </div>

        <div class="card card-users">
            <h2>Total de Usuarios</h2>
            <p class="number">
                <?= $stats['total_users'] ?? 0 ?>
            </p>
            <span>Usuarios registrados en la plataforma</span>
        </div>

        <div class="card card-last">
            <h2>Último Usuario Registrado</h2>
            <p class="email">
                <?= htmlspecialchars($stats['last_user_email'] ?? 'No registrado') ?>
            </p>
            <span>Email del usuario más reciente</span>
        </div>

    </section>

</main>

</body>
</html>
