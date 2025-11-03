<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Status · EcoOps</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #f1f8e9, #dcedc8);
      color: #1b5e20;
      text-align: center;
    }
    header {
      background: #2e7d32;
      color: white;
      padding: 20px;
    }
    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }
    nav a:hover {
      color: #c8e6c9;
    }
    .status-card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 30px;
      max-width: 700px;
      margin: 50px auto;
    }
    h2 {
      color: #2e7d32;
    }
    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 80%;
    }
    th, td {
      border: 1px solid #a5d6a7;
      padding: 10px;
    }
    th {
      background: #81c784;
      color: white;
    }
    td {
      background: #e8f5e9;
    }
    footer {
      background: #1b5e20;
      color: white;
      padding: 10px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>🌱 EcoOps - System Status</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>

  <div class="status-card">
    <h2>Application Health</h2>
    <table>
      <tr><th>Service</th><th>Status</th></tr>
      <tr><td>Website</td><td>✅ Running</td></tr>
      <tr><td>Database</td><td>✅ Connected</td></tr>
      <tr><td>API Gateway</td><td>✅ Active</td></tr>
      <tr><td>Security Layer</td><td>✅ Enforced</td></tr>
      <tr><td>Build Version</td><td>v1.0.5</td></tr>
    </table>

    <p>Server Time: <strong><?php echo date("Y-m-d H:i:s"); ?></strong></p>
  </div>

  <footer>© 2025 EcoOps Project · Red Hat OpenShift Demo</footer>
</body>
</html>
