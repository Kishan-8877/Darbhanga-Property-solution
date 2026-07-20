<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbhanga property solution - About Us</title>
    <!-- Font Awesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }
        
        .about-section { padding: 80px 20px; background: #fff; }
        .container { display: flex; max-width: 1200px; margin: auto; gap: 50px; align-items: center; }

        /* Left Side: Images */
        .about-image { position: relative; flex: 1; min-height: 450px; }
        .main-img { width: 85%; border-radius: 20px; overflow: hidden; }
        .main-img img { width: 100%; display: block; }
        
        .experience-badge { position: absolute; top: 30px; left: 0; background: #1a1a1a; color: white; padding: 20px; border-radius: 10px; width: 140px; }
        
        .director-img { position: absolute; bottom: 0; right: 0; background: white; padding: 10px; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); width: 160px; text-align: center; }
        .director-img img { width: 100%; border-radius: 10px; }

        /* Right Side: Content */
        .about-content { flex: 1; }
        .tag { color: #d4af37; font-weight: bold; margin-bottom: 10px; display: block; }
        h1 { font-size: 2.5rem; margin-bottom: 20px; color: #111; }
        p { color: #666; line-height: 1.6; margin-bottom: 20px; }
        
        .stats { display: flex; gap: 30px; margin-top: 30px; }
        .stat-item { display: flex; align-items: center; gap: 15px; }
        .stat-item i { font-size: 24px; color: #007bff; background: #eef5ff; padding: 15px; border-radius: 10px; }

        /* Responsive */
        @media (max-width: 768px) {
            .container { flex-direction: column; text-align: center; }
            .stats { flex-direction: column; align-items: center; }
            .about-image { width: 100%; }
        }
    </style>
</head>
<body>

<section class="about-section">
    <div class="container">
        <!-- Left Side Images -->
        <div class="about-image">
            <div class="main-img">
                <img src="img/ct2.jpg" alt="House">
                <div class="experience-badge">
                    <h3>10 Years</h3>
                    <p>Experience</p>
                </div>
            </div>
            <div class="director-img">
                <img src="img/indx.jpeg" alt="Director">
                <h4>Kishan Kumar</h4>
                <p>Director</p>
            </div>
        </div>

        <!-- Right Side Content -->
        <div class="about-content">
            <span class="tag">About Us – Darbhanga property solution</span>
            <h1>Welcome to Darbhanga property solution</h1>
            <p>Welcome to Darbhanga property solution, your trusted partner in real estate across Bihar. We are a leading property portal dedicated to helping homebuyers, investors, and sellers discover the best properties with confidence and clarity.</p>
            
            <div class="stats">
                <div class="stat-item">
                    <i class="fas fa-home"></i>
                    <p><strong>50+ Property Sale</strong><br>Verified & Legal Listings</p>
                </div>
                <div class="stat-item">
                    <i class="fas fa-check-circle"></i>
                    <p><strong>50+ Property Sale</strong><br>Verified & Legal Listings</p>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>