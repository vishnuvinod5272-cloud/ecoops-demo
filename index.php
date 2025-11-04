<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EcoOps 🌱</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Poppins", sans-serif;
      color: #1b5e20;
      overflow-x: hidden;
      background: #e8f5e9;
    }

    /* ===== Background Video ===== */
    #bg-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      opacity: 0.75;
      filter: brightness(0.9);
    }

    /* ===== Header ===== */
    header {
      background: rgba(46, 125, 50, 0.85);
      color: white;
      padding: 25px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(8px);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    header h1 {
      margin-bottom: 12px;
      font-size: 46px;
      letter-spacing: 1px;
      animation: glow 2s ease-in-out infinite alternate;
      text-transform: uppercase;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: 600;
      transition: all 0.3s ease;
      font-size: 17px;
      padding: 6px 10px;
      border-radius: 6px;
    }

    nav a:hover {
      background: rgba(255,255,255,0.15);
      transform: scale(1.1);
      color: #a5d6a7;
      box-shadow: 0 0 10px rgba(255,255,255,0.2);
    }

    /* ===== Hero Section ===== */
    .hero {
      padding: 90px 20px;
      color: #fff;
      background: rgba(27, 94, 32, 0.75);
      margin: 70px auto;
      border-radius: 25px;
      max-width: 950px;
      backdrop-filter: blur(5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.4);
      animation: fadeUp 1.2s ease;
      text-align: center;
    }

    .hero h2 {
      font-size: 38px;
      margin-bottom: 15px;
      text-shadow: 0 0 12px #a5d6a7;
    }

    .hero p {
      font-size: 18px;
      color: #e8f5e9;
      max-width: 800px;
      margin: 0 auto;
    }

    .time {
      margin-top: 20px;
      font-weight: bold;
      color: #c8e6c9;
      font-size: 16px;
    }

    /* ===== Cards ===== */
    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 25px;
      padding: 60px;
      max-width: 1200px;
      margin: auto;
    }

    .card {
      background: rgba(255, 255, 255, 0.95);
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.25);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 8px 25px rgba(0,0,0,0.4);
    }

    .card h3 {
      color: #2e7d32;
      margin-bottom: 12px;
      font-size: 20px;
    }

    .card p {
      color: #33691e;
      font-size: 16px;
      line-height: 1.5;
    }

    /* ===== CTA Section ===== */
    .cta {
      background: linear-gradient(135deg, rgba(56,142,60,0.85), rgba(27,94,32,0.85));
      color: white;
      padding: 70px 20px;
      margin-top: 60px;
      border-radius: 20px;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      backdrop-filter: blur(5px);
      animation: fadeIn 1.2s ease;
      text-align: center;
    }

    .cta h2 {
      font-size: 30px;
      margin-bottom: 10px;
    }

    .cta p {
      font-size: 17px;
      max-width: 700px;
      margin: 10px auto;
    }

    .cta button {
      background: #a5d6a7;
      color: #1b5e20;
      font-size: 16px;
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 20px;
      transition: 0.3s;
    }

    .cta button:hover {
      background: #81c784;
      transform: scale(1.07);
    }

    /* ===== Footer ===== */
    footer {
      background: linear-gradient(to right, #2e7d32, #1b5e20);
      color: #fff;
      padding: 25px;
      margin-top: 70px;
      font-size: 14px;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.4);
      text-shadow: 0 0 5px #66bb6a;
      text-align: center;
    }

    /* ===== Animations ===== */
    @keyframes glow {
      from { text-shadow: 0 0 10px #a5d6a7; }
      to { text-shadow: 0 0 20px #81c784; }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<button onclick="toggleTheme()">🌙 Toggle Theme</button>
<script>
  function toggleTheme() {
    document.body.classList.toggle('dark');
  }
</script>
<style>
  .dark {
    background-color: #1b1b1b;
    color: #e8f5e9;
  }
</style>
<body>
  <!-- Background Video -->
  <video autoplay muted loop id="bg-video">
    <source src="https://cdn.coverr.co/videos/coverr-green-leaves-in-the-wind-3077/1080p.mp4" type="video/mp4">
  </video>

  <header>
    <h1>🌱☁️ EcoOps☁️ ☀️ 🌱</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.html">About</a>
      <a href="status.php">Status</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Deploy · Secure · Scale · Green!</h2>
    <p>Driving sustainable cloud innovation with DevOps, Cloud, and GreenOps best practices.</p>
    <div class="time">Server Time: <?php echo date('Y-m-d H:i:s'); ?></div>
  </section>

  <section class="card-container">
    <div class="card">
      <h3>💻 DevOps Engineer</h3>
      <p>Automates OpenShift builds, manages CI/CD pipelines, and streamlines GitOps delivery workflows.</p>
    </div>
    <div class="card">
      <h3>☁️ Cloud Engineer</h3>
      <p>Optimizes Kubernetes clusters, manages scaling, and ensures cost-efficient cloud infrastructure.</p>
    </div>
    <div class="card">
      <h3>🔒 Security Analyst</h3>
      <p>Implements TLS encryption, scans vulnerabilities, and strengthens container runtime protection.</p>
    </div>
    <div class="card">
      <h3>🛠 Troubleshooter</h3>
      <p>Analyzes logs, monitors pod health, and quickly resolves build or deployment failures.</p>
    </div>
    <div class="card">
      <h3>🌿 GreenOps Advocate</h3>
      <p>Minimizes energy use, promotes carbon-aware deployments, and supports sustainability goals.</p>
    </div>
  </section>

  <section class="cta">
    <h2>🚀 Experience EcoOps in Action</h2>
    <p>Monitor deployments, check resource metrics, and see live automation on Red Hat OpenShift in real-time.</p>
    <button onclick="window.location.href='status.php'">View Live Dashboard</button>
  </section>

  <footer>
    © 2025 EcoOps Project · Built with 💚 on Red Hat OpenShift
  </footer>
</body>
</html>
