<section class="faq-section">
    <div class="faq-container">
        <!-- Left Side: Accordion -->
        <div class="faq-content">
            <div class="faq-badge">FAQ</div>
            <h1>If you want to know Frequently Ask Questions</h1>
            
            <div class="faq-item">
                <div class="question" onclick="toggleFaq(this)">
                    How can I contact Darbhanga property solution? <span>&#9662;</span>
                </div>
                <div class="answer">
                    <p>You can reach us via phone, email, or by visiting our office. Our team is always ready to assist you with your real estate needs.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="question" onclick="toggleFaq(this)">
                    Are there any hidden charges involved? <span>&#9662;</span>
                </div>
                <div class="answer">
                    <p>We maintain full transparency with our clients; there are absolutely no hidden charges in our processes.</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Image with Overlay -->
        <div class="faq-image-wrapper">
            <img src="img/indx.jpeg" alt="Support Agent" class="main-img">
            <div class="support-overlay">
                <i class="fas fa-headset"></i>
                <div class="support-text">
                    <h3>24/7 Support</h3>
                    <p>Feel free to contact us! 📞🏠</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* =======================================
   Darbhanga property solution - FAQ Section CSS
   ======================================= */

/* Container Setup */
.faq-container { 
    display: flex; 
    align-items: center; 
    gap: 50px; 
    max-width: 1200px; 
    margin: 60px auto; 
    padding: 0 20px; 
}

/* FAQ Accordion Styling */
.faq-content { flex: 1; }

.faq-badge { 
    background: #fff3cd; 
    color: #856404; 
    padding: 5px 15px; 
    border-radius: 20px; 
    display: inline-block; 
    font-weight: bold; 
    margin-bottom: 15px; 
}

.faq-item { 
    margin-bottom: 20px; 
    border: 1px solid #e0e0e0; 
    border-radius: 15px; 
    overflow: hidden; 
    background: #fff;
    transition: box-shadow 0.3s ease;
}

.faq-item:hover { box-shadow: 0 5px 15px rgba(0,0,0,0.05); }

.question { 
    padding: 20px 25px; 
    font-weight: 700; 
    cursor: pointer; 
    display: flex; 
    justify-content: space-between; 
    align-items: center;
    background: #fff;
}

.answer { 
    padding: 0 25px; 
    max-height: 0; 
    overflow: hidden; 
    transition: max-height 0.4s ease, padding 0.4s ease; 
    color: #555; 
    line-height: 1.7; 
}

/* Image & Overlay Styling */
.faq-image-wrapper { 
    position: relative; 
    flex: 1; 
    max-width: 600px; 
}

.main-img { 
    width: 100%; 
    height: 500px; 
    object-fit: cover; 
    display: block; 
    border-radius: 50px; 
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.support-overlay { 
    position: absolute; 
    bottom: 30px; 
    left: 30px; 
    right: 30px; 
    background: #3e4a3b; 
    color: white; 
    padding: 20px 30px; 
    border-radius: 25px; 
    display: flex; 
    align-items: center; 
    gap: 20px; 
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.support-overlay i { font-size: 30px; color: #fff; }
.support-text h3 { margin: 0; font-size: 1.2rem; }
.support-text p { margin: 0; font-size: 0.9rem; opacity: 0.9; }

/* =======================================
   Responsive Design
   ======================================= */
@media (max-width: 992px) {
    .faq-container { gap: 30px; }
    .main-img { height: 400px; }
}

@media (max-width: 768px) {
    .faq-container { flex-direction: column; text-align: center; }
    .faq-image-wrapper { order: -1; width: 100%; }
    .support-overlay { padding: 15px 20px; }
}
</style>

<script>
    function toggleFaq(el) {
    const answer = el.nextElementSibling;
    answer.style.maxHeight = answer.style.maxHeight ? null : answer.scrollHeight + "px";
}
</script>