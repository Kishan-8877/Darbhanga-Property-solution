<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Base Reset - Stability Ke Liye */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
        body { overflow-x: hidden; } /* Screen hilegi nahi */

        /* Container - Grid Layout & Width Lock */
        .contact-container { 
            display: grid; 
            grid-template-columns: 1fr 1.3fr; 
            gap: 30px; 
            max-width: 1250px; 
            width: 95%; 
            margin: 50px auto; 
            padding: 0 25px;
        }

        .section-heading { color: #1a237e; margin-bottom: 25px; font-size: 1.8rem; }

        /* Info Cards - 2 Per Row (Desktop & Mobile) */
        .info-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 15px; 
        }
        .info-card { 
            background: #fff; 
            padding: 20px; 
            border-radius: 15px; 
            text-align: center; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); 
        }
        .info-card i { font-size: 24px; color: #1a237e; margin-bottom: 10px; }
        .info-card h4 { font-size: 0.95rem; margin-bottom: 5px; }
        .info-card p { font-size: 0.85rem; color: #666; word-wrap: break-word; }

        /* Form Wrapper - Premium & Fixed */
        .form-wrapper { 
            background: #f8f9fa; 
            padding: 35px; 
            border-radius: 25px; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.08); 
        }
        .row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
        
        input, textarea { 
            width: 100%; 
            padding: 10px; 
            border: 2px solid #e19614; 
            border-radius: 15px; 
            font-size: 1.1rem; 
        }
        
        .submit-btn { 
            width: 100%; 
            padding: 20px; 
            background: #1a237e; 
            color: white; 
            border: none; 
            border-radius: 15px; 
            font-weight: bold; 
            cursor: pointer; 
            font-size: 1.1rem;
        }

        /* Mobile Fixes (Phones) */
        @media (max-width: 768px) {
            .contact-container { grid-template-columns: 1fr; padding: 0 0px; }
            .row { grid-template-columns: 1fr; }
            .info-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
        }
    </style>
</head>
<body>

<section class="contact-section">
    <div class="contact-container">
        
        <div class="contact-info">
            <h2 class="section-heading">Get In Touch With Us Now!</h2>
            <div class="info-grid">
                <div class="info-card"><i class="fas fa-phone"></i><h4>Phone</h4><p>+91 7970308680</p></div>
                <div class="info-card"><i class="fas fa-envelope"></i><h4>Email</h4><p>info@Darbhangapropertysolution.com</p></div>
                <div class="info-card"><i class="fas fa-map-marker-alt"></i><h4>Location</h4><p>Darbhanga, Bihar</p></div>
                <div class="info-card"><i class="fas fa-clock"></i><h4>Hours</h4><p>Daily: 9AM - 10PM</p></div>
            </div>
        </div>

        <div class="form-wrapper">
            <h2 class="section-heading">Send Us A Message</h2>
            <!-- SheetMonkey URL yahan dalein -->
          <form action="https://script.google.com/macros/s/AKfycbwd81p8N_aITUiLSkDbKn0glMCA5DBoZgRZR6XgSRRjn3IhnVFnXZKdvOlSefwnii8J/exec" method="POST">
    <!-- Aapke inputs -->
    <input type="text" name="FirstName" placeholder="First Name *" required><br><br>
    <input type="text" name="LastName" placeholder="Last Name *" required><br><br>
    <input type="tel" name="Mobile" placeholder="Mobile No *" required><br><br>
    <input type="email" name="Email" placeholder="Email ID *" required><br><br>
    <textarea name="Message" placeholder="How can we help you?" rows="5" required></textarea>
    <button type="submit" class="submit-btn">Send Message</button>
</form>
        </div>
    </div>
</section>


<script>
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Page refresh hone se rokege
        
        const formData = new FormData(form);
        const url = "https://script.google.com/macros/s/AKfycbwd81p8N_aITUiLSkDbKn0glMCA5DBoZgRZR6XgSRRjn3IhnVFnXZKdvOlSefwnii8J/exec";
        
        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            alert("Thank you! Your message has been sent.");
            form.reset(); // Form clear ho jayega
        })
        .catch(error => {
            console.error('Error!', error.message);
            alert("Something went wrong, please try again.");
        });
    });
</script>

</body>
</html>