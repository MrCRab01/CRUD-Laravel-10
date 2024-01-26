<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #2d2d30;
}

.main-container {
    text-align: center;
    color: white
}

.dashboard-button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.dashboard-button:hover {
    background-color: #2980b9;
}

</style>
<body>
    <div class="main-container">
        <h1>Selamat Datang!</h1>
        <button class="dashboard-button" onclick="redirectToDashboard()">Dashboard</button>
    </div>

    <script>
        function redirectToDashboard() {
            // Ganti URL dengan URL dashboard yang sesuai
            window.location.href = "/posts";
        }
    </script>
</body>


</html>