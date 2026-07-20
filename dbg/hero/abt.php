<section class="hero-section">
    <!-- Background Image container -->
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1>About<span>Darbhanga</span></h1>
        <p>Verified plots, best locations, and transparent deals. Your search ends here.</p>
        <div class="hero-buttons">
            <a href="properties.html"><button class="btn-primary">Exploar Property</button></a>
        </div>
    </div>
</section>

<style>
    /* Reset: Gap khatam karne ke liye */
    * { margin: 0; padding: 0; box-sizing: border-box; }

    .hero-section {
        width: 100%;
        height: 60vh; /* Full screen height ka 80% */
        background: url('img/ct.jpg') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        padding: 0 20px;
    }

    /* Dark Overlay taaki text saaf dikhe */
    .hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        color: #fff;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-content span {
        color: #ffc107;
    }

    .hero-content p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        color: #ddd;
    }

    .btn-primary {
        background: #ffc107;
        color: #1a1a1a;
        padding: 15px 35px;
        border: none;
        border-radius: 5px;
        font-weight: 800;
        cursor: pointer;
        font-size: 1rem;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background: #e0a800;
        transform: scale(1.05);
    }

    /* Mobile Responsive Logic */
    @media (max-width: 768px) {
        .hero-section { height: 60vh; }
        .hero-content h1 { font-size: 2rem; }
        .hero-content p { font-size: 1rem; }
    }
</style>