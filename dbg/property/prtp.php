<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Property Gallery</title>
    <style>
        /* ===== General Styles ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f4f4f4; }

        /* Section Heading */
        .section-title { text-align: center; font-size: 3rem; color: #1a1a1a; margin: 50px 0 10px 0; }
        .section-subtitle { text-align: center; font-size: 1.2rem; color: #666; margin-bottom: 40px; }

        /* ===== Grid Container (Desktop: 3 per row) ===== */
        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 50px 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Default: 3 columns */
            gap: 30px; /* Space between cards */
        }

        /* ===== Property Card Styles ===== */
        .property-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer; /* Indicates clickable */
        }

        .property-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .property-card img {
            width: 100%;
            height: 200px;
            object-fit: cover; /* Ensures images don't stretch */
        }

        .card-content { padding: 20px; }

        .card-content h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .card-content p {
            font-size: 1rem;
            color: #777;
            line-height: 1.5;
            /* Truncate text to 3 lines */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ===== Responsive Media Queries (The "Best" Shape) ===== */

        /* Tablets (768px and below): 2 per row */
        @media (max-width: 768px) {
            .gallery-container { grid-template-columns: repeat(2, 1fr); gap: 20px; }
            .section-title { font-size: 2.5rem; }
        }

        /* Phones (480px and below): 1 per row */
        @media (max-width: 480px) {
            .gallery-container { grid-template-columns: 1fr; }
            .section-title { font-size: 2rem; }
            .property-card img { height: 250px; /* Bigger images on mobile */ }
        }

        /* ===== Modal / Popup Styles (Click to View) ===== */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1000; /* On top of everything */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8); /* Dark overlay */
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal.show { display: flex; opacity: 1; }

        .modal-content {
            background: white;
            width: 90%;
            max-width: 800px;
            border-radius: 20px;
            position: relative;
            animation: slideIn 0.3s ease;
            max-height: 90vh;
            overflow-y: auto; /* Scroll if content is too long */
        }

        @keyframes slideIn { from { transform: translateY(-50px); } to { transform: translateY(0); } }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            color: #333;
            cursor: pointer;
            font-weight: bold;
        }

        .close-modal:hover { color: red; }

        .modal-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 20px 20px 0 0;
        }

        .modal-text { padding: 30px; }
        .modal-text h1 { font-size: 2.5rem; color: #111; margin-bottom: 15px; }
        .modal-text p { font-size: 1.1rem; color: #444; line-height: 1.8; }

    </style>
</head>
<body>

    <!-- Heading Section -->
    <div class="section-title">Featured Properties</div>
    <div class="section-subtitle">Explore our best listings designed for modern living.</div>

    <!-- Gallery Grid -->
    <div class="gallery-container">

        <!-- Property Card 1 -->
        <div class="property-card" onclick="openModal('img/prt.jpeg', 'Luxury Modern Villa', 'Experience unparalleled luxury in this stunning modern villa located in the heart of the city. Featuring 5 bedrooms, a private pool, and smart home technology, this is urban living at its finest.')">
            <img src="img/prt1.jpeg" alt="Luxury Villa">
            <div class="card-content">
                <h3>Luxury Modern Villa</h3>
                <p>Experience unparalleled luxury in this stunning modern villa located in the heart of the city. Featuring 5 bedrooms, a private pool, and smart home technology, this is urban living at its finest.</p>
            </div>
        </div>


        <!-- Property Card 2 -->
        <div class="property-card" onclick="openModal('', 'City Center Penthouse', 'Live above it all in this spectacular city center penthouse. Floor-to-ceiling windows offer breathtaking skyline views. Walking distance to the best restaurants and entertainment.')">
            <img src="img/prt2.jpeg" alt="Penthouse">
            <div class="card-content">
                <h3>City Center Penthouse</h3>
                <p>Live above it all in this spectacular city center penthouse. Floor-to-ceiling windows offer breathtaking skyline views. Walking distance to the best restaurants and entertainment.</p>
            </div>
        </div>
        
        <!-- Property Card 3 -->
        <div class="property-card" onclick="openModal('https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80', 'Suburban Family Home', 'Perfect for a growing family, this spacious home is located in a quiet, friendly neighborhood near top-rated schools. Includes a large backyard and updated kitchen.')">
            <img src="img/prt3.jpeg" alt="Family Home">
            <div class="card-content">
                <h3>Suburban Family Home</h3>
                <p>Perfect for a growing family, this spacious home is located in a quiet, friendly neighborhood near top-rated schools. Includes a large backyard and updated kitchen.</p>
            </div>
        </div>



    </div>

    <!-- ===== Modal Popup HTML ===== -->
    <div id="propertyModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <img id="modalImage" class="modal-img" src="" alt="Property Image">
            <div class="modal-text">
                <h1 id="modalTitle"></h1>
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        const modal = document.getElementById("propertyModal");
        const modalImg = document.getElementById("modalImage");
        const modalTitle = document.getElementById("modalTitle");
        const modalDesc = document.getElementById("modalDescription");

        function openModal(imgSrc, title, description) {
            modal.classList.add("show");
            modalImg.src = imgSrc;
            modalTitle.innerText = title;
            modalDesc.innerText = description;
            // Prevent scrolling body when modal is open
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.remove("show");
            // Restore scrolling
            document.body.style.overflow = '';
        }

        // Close modal if clicking outside the content
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }
        
        // Close modal on pressing ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" && modal.classList.contains('show')) {
                closeModal();
            }
        });
    </script>

</body>
</html>