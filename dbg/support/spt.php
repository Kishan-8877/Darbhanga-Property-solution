<section class="features-section">
    <div class="features-container">
        <!-- Feature 1: Trusted -->
        <div class="feature-card">
            <i class="fas fa-shield-alt"></i>
            <h3>Trusted Partner</h3>
            <p>10+ years of trust and reliability in the Bihar real estate market.</p>
        </div>
        <!-- Feature 2: Customer Care -->
        <div class="feature-card">
            <i class="fas fa-headset"></i>
            <h3>24/7 Support</h3>
            <p>Our dedicated team is always here to assist you with your queries.</p>
        </div>
        <!-- Feature 3: Top Investment -->
        <div class="feature-card">
            <i class="fas fa-chart-line"></i>
            <h3>Top Investment</h3>
            <p>We bring you the most profitable and high-value property options.</p>
        </div>
    </div>
</section>

<style>
    /* Container Layout */
.features-section { padding: 80px 20px; background-color: #f9f9f9; }

.features-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 cards on desktop */
    gap: 30px;
}

/* Card Styling */
.feature-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: 0.3s;
}

.feature-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }

/* Icon Styling */
.feature-card i {
    font-size: 40px;
    color: #007bff;
    background: #eef5ff;
    padding: 25px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.feature-card h3 { margin-bottom: 15px; color: #1a1a1a; }
.feature-card p { color: #666; line-height: 1.6; }

/* Responsive */
@media (max-width: 992px) {
    .features-container { grid-template-columns: repeat(2, 1fr); } /* 2 cards on tablets */
}

@media (max-width: 600px) {
    .features-container { grid-template-columns: 1fr; } /* 1 card on mobiles */
}
</style>