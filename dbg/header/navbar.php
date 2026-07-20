<!-- Top Bar (Ye scroll hoga) -->
<div class="top-bar">
    <div class="contact-info">
        <span>📧 info@Darbhanga property solution.com</span>
        <span>📞 +91-7970308680</span>
    </div>
    <div class="location">Serving Darbhanga & Nearby Regions</div>
</div>

<!-- Main Navigation (Ye sticky rahega) -->
<nav class="main-nav" id="mainNav">
    <div class="logo"><img src="img/dps.jpg" height="40px" width="40px" alt=""> Darbhanga<span> Property solution</span></div>
    
    <div class="hamburger" onclick="toggleMenu()">
        <span></span><span></span><span></span>
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="properties.php">Our Properties</a></li>
        <li><a href="contact.php">Contact Us</a></li>
       
    </ul>
    
    
</nav>

<style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
    
    /* Top Bar Styling */
    .top-bar { 
        background: #333; 
        color: #fff; 
        padding: 6px 5%; 
        display: flex; 
        justify-content: space-between; 
        font-size: 12px; 
    }
    
    /* Main Nav Sticky Styling */
    .main-nav { 
        background: #1a1a1a; 
        padding: 12px 5%; 
        display: flex; 
        align-items: center; 
        justify-content: space-between; 
        width: 100%; 
        position: sticky; 
        top: 0; 
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .logo { color: #fff; font-size: 20px; font-weight: 500; cursor: pointer; }
    .logo span { color: #ffc107; }
    
    .nav-links { display: flex; list-style: none; gap: 25px; }
    .nav-links a { color: #fff; text-decoration: none; font-weight: 500; transition: 0.3s; }
    .nav-links a:hover, .nav-links a.active { color: #ffc107; }

    .login-btn { background: #ffc107; border: none; padding: 8px 20px; border-radius: 5px; font-weight: bold; cursor: pointer; transition: 0.3s; }
    .login-btn:hover { background: #e0a800; }
    
    /* Mobile Responsive */
    .hamburger { display: none; cursor: pointer; flex-direction: column; gap: 6px; }
    .hamburger span { width: 25px; height: 3px; background: white; }
    .login-mobile { display: none; margin-top: 15px; }

    @media (max-width: 768px) {
        .hamburger { display: flex; }
        .desktop-only { display: none; }
        .login-mobile { display: block; }
        
        .nav-links { 
            display: none; flex-direction: column; position: absolute; top: 100%; left: 0; 
            width: 100%; background: #1a1a1a; padding: 20px; text-align: center; 
            border-top: 1px solid #333;
        }
        .nav-links.active { display: flex; }
    }
</style>

<script>
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('active');
    }
</script>