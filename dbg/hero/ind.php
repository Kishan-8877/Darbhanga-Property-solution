<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Real Estate Hero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Find Your Dream Property</h1>
                <p>Explore the finest homes, apartments, and commercial spaces tailored to your lifestyle and investment needs.</p>
                <button class="cta-button">Explore Properties</button>
            </div>
            <div class="hero-image-wrapper">
                <!-- Replace with your image URL -->
                <img src="img/indx.jpeg" alt="Luxury Villa">
            </div>
        </div>
    </section>

</body>
</html>

<style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Hero Section Base Styles */
.hero {
    width: 100%;
    min-height: 100vh; /* Full screen height */
    background-color: #fdfaf6; /* Light cream background */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
}

.hero-container {
    max-width: 1200px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
}

/* Text Content */
.hero-text {
    flex: 1; /* Takes available space */
    max-width: 600px;
}

.hero-text h1 {
    font-size: 3.5rem;
    color: #1a1a1a;
    line-height: 1.2;
    margin-bottom: 20px;
    font-weight: 700;
}

.hero-text p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 35px;
    line-height: 1.6;
}

.cta-button {
    padding: 18px 35px;
    background-color: #007bff; /* Professional Blue */
    color: white;
    border: none;
    border-radius: 50px; /* Fully rounded button */
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
}

.cta-button:hover {
    background-color: #0056b3;
    transform: translateY(-2px); /* Subtle lift effect */
}

/* Image Wrapper with Shape (Desktop Only) */
.hero-image-wrapper {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-image-wrapper img {
    max-width: 100%;
    height: auto;
    /* Yeh hai wo shape jo desktop par aayegi (Blob shape) */
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; 
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    transition: all 0.5s ease;
    /* Thoda zoom effect image par */
    object-fit: cover;
    aspect-ratio: 4/3;
}

.hero-image-wrapper img:hover {
    /* Image shape change on hover for fun */
    border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; 
}

/* =========================================
   Responsive Design (Mobile & Tablets)
========================================= */

/* For tablets and smaller laptops (1024px and below) */
@media screen and (max-width: 1024px) {
    .hero-text h1 {
        font-size: 2.8rem;
    }
}

/* For Mobile Devices (768px and below) */
@media screen and (max-width: 768px) {
    .hero {
        padding: 80px 20px; /* More padding on top/bottom */
    }

    .hero-container {
        flex-direction: column; /* Stack text and image vertically */
        text-align: center; /* Center align everything */
        gap: 40px;
    }

    .hero-text {
        padding-right: 0;
    }

    .hero-text h1 {
        font-size: 2.2rem;
    }

    .hero-text p {
        font-size: 1.1rem;
        margin-bottom: 25px;
    }

    .cta-button {
        width: 100%; /* Full width button on mobile */
        max-width: 300px;
    }

    .hero-image-wrapper {
        width: 100%;
    }

    .hero-image-wrapper img {
        /* Mobile par shape hata kar normal rounded rectangle kar diya */
        border-radius: 20px; 
        width: 90%; /* Slightly smaller than full width */
        max-height: 300px; /* Limit height on mobile */
    }
}
</style>