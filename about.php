
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About TechInnovate Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
     body {
            margin: 0;
            padding: 0;
            background: url('images/oo.jpg') no-repeat center center fixed;
            background-size: cover;
            /* animation: zoom 30s infinite alternate; */
            color:white;
        }
      
        .about-section {
            padding: 60px 0;
        }
        .about-text {
            text-align: justify;
        }
        .image-column {
            overflow: hidden;
            border-radius: 8px;
        }
        .image-column img {
            transition: transform 0.2s;
        }
        .image-column img:hover {
            transform: scale(1.05);
        }
        .card-skin {
    display: flex;
    padding: 20px 20px;
    align-items: center;
    justify-content: center;
    min-height: 60%;
    /* background: linear-gradient(to left top, #031A9A, #8B53FF); */
}
.wrapper {
    max-width: 1100px;
    width: 100%;
    position: relative;
}
.wrapper .carousel {
    display: grid
;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% / 4) - 12px);
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    gap: 16px;
    border-radius: 8px;
    scroll-behavior: smooth;
    scrollbar-width: none;
}
.carousel {
    position: relative;
}
.carousel .card {
    scroll-snap-align: start;
    height: 342px;
    list-style: none;
    background: #fff;
    cursor: pointer;
    padding-bottom: 15px;
    flex-direction: column;
    border-radius: 8px;
}
.carousel .card .img img{
    background: #8B53FF;
    height: 148px;
    width: 148px;
    border-radius: 50%;
}
.wrapper i:last-child {
    right: -22px;
}
.wrapper i {
    top: 50%;
    height: 50px;
    width: 50px;
    cursor: pointer;
    font-size: 1.25rem;
    position: absolute;
    text-align: center;
    line-height: 50px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
    transform: translateY(-50%);
    transition: transform 0.1s linear;
    z-index: 10;
}
.carousel :where(.card, .img) {
    display: flex
;
    justify-content: center;
    align-items: center;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">TechInnovate Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 text-dark">
        <h1>About TechInnovate Solutions</h1>
        <p>TechInnovate Solutions is a leading technology company specializing in innovative software solutions for businesses of all sizes. Our mission is to empower organizations with cutting-edge technology to drive growth and efficiency.</p>
        <h2>Our Services</h2>
        <ul>
            <li>Custom Software Development</li>
            <li>Cloud Solutions</li>
            <li>AI and Machine Learning Integration</li>
            <li>Cybersecurity Services</li>
            <li>IT Consulting</li>
        </ul>
        <button id="popup1" class="btn btn-warning">Learn More</button>
    </div>
    <div class="container about-section text-dark">
    <h1 class="text-center mb-5">About Us</h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="image-column mb-4">
                <img src="images/mm.jpg" class="img-fluid" alt="Company Image 1">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-text">
                <h2>Our Mission</h2>
                <p>We are committed to delivering the best service and products to our customers. Our mission is to provide innovative solutions that meet the needs of our clients and contribute to their success.</p>
                <p>We are committed to delivering the best service and products to our customers. Our mission is to provide innovative solutions that meet the needs of our clients and contribute to their success.</p>
                <p>We are committed to delivering the best service and products to our customers. Our mission is to provide innovative solutions that meet the needs of our clients and contribute to their success.</p>
                <p>We are committed to delivering the best service and products to our customers. Our mission is to provide innovative solutions that meet the needs of our clients and contribute to their success.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="about-text">
                <h2>Our Vision</h2>
                <p>To be the leading company in our industry, recognized for our commitment to quality, service, and sustainability. We strive to set standards that others aspire to reach.</p>
                <p>To be the leading company in our industry, recognized for our commitment to quality, service, and sustainability. We strive to set standards that others aspire to reach.</p>
                <p>To be the leading company in our industry, recognized for our commitment to quality, service, and sustainability. We strive to set standards that others aspire to reach.</p>
                <p>To be the leading company in our industry, recognized for our commitment to quality, service, and sustainability. We strive to set standards that others aspire to reach.</p>
                <p>To be the leading company in our industry, recognized for our commitment to quality, service, and sustainability. We strive to set standards that others aspire to reach.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="image-column mb-4">
                <img src="images/yy.jpg" class="img-fluid" alt="Company Image 2">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="about-text text-center">
                <h2>Our Values</h2>
                <p>
                    Integrity, Innovation, and Excellence are the core values that drive our company. We believe in fostering a culture of respect and collaboration, ensuring that every team member contributes to our collective success.
                    Integrity, Innovation, and Excellence are the core values that drive our company. We believe in fostering a culture of respect and collaboration, ensuring that every team member contributes to our collective success.
                    Integrity, Innovation, and Excellence are the core values that drive our company. We believe in fostering a culture of respect and collaboration, ensuring that every team member contributes to our collective success.
                    Integrity, Innovation, and Excellence are the core values that drive our company. We believe in fostering a culture of respect and collaboration, ensuring that every team member contributes to our collective success.
                    Integrity, Innovation, and Excellence are the core values that drive our company. We believe in fostering a culture of respect and collaboration, ensuring that every team member contributes to our collective success.
                    Integrity, Innovation, and Excellence are the core values that drive our company. We believe in fostering a culture of respect and collaboration, ensuring that every team member contributes to our collective success.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
<div class="row text-dark">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/profile.jpg" class="card-img-top" alt="Person 1">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Software Engineer with 5+ years of experience.</p>
                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/profile.jpg" class="card-img-top" alt="Person 2">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">UI/UX Designer passionate about creating user-friendly.</p>
                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/profile.jpg" class="card-img-top" alt="Person 3">
                    <div class="card-body">
                        <h5 class="card-title">Mike Johnson</h5>
                        <p class="card-text">Data Scientist specializing in machine learning and AI.</p>
                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="images/profile.jpg" class="card-img-top" alt="Person 4">
                    <div class="card-body">
                        <h5 class="card-title">Emily Brown</h5>
                        <p class="card-text">Project Manager with a track record of successful deliveries.</p>
                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
</div> -->
<div class="card-skin">
        <div class="wrapper">
          <i id="left" class="fa-solid fa-angle-left text-dark"></i>
          <ul class="carousel text-dark">
            <li class="card">
              <div class="img"><img src="images/ww.jpg" alt="img" draggable="true"></div>
              <h2>Blanche Pearson</h2>
              <span>Sales Manager</span>
            </li>
            <li class="card">
              <div class="img"><img src="images/ww.jpg" alt="img" draggable="true"></div>
              <h2>Joenas Brauers</h2>
              <span>Web Developer</span>
            </li>
            <li class="card">
              <div class="img"><img src="images/ww.jpg" alt="img" draggable="true"></div>
              <h2>Lariach French</h2>
              <span>Online Teacher</span>
            </li>
            <li class="card">
              <div class="img"><img src="images/ww.jpg" alt="img" draggable="true"></div>
              <h2>James Khosravi</h2>
              <span>Freelancer</span>
            </li>
            <li class="card">
              <div class="img"><img src="images/ww.jpg" alt="img" draggable="true"></div>
              <h2>Kristina Zasiadko</h2>
              <span>Bank Manager</span>
            </li>
            <li class="card">
              <div class="img"><img src="images/ww.jpg" alt="img" draggable="true"></div>
              <h2>Donald Horton</h2>
              <span>App Designer</span>
            </li>
          </ul>
          <i id="right" class="fa-solid fa-angle-right text-dark"></i>
        </div>
    </div>
 <!-- Footer -->
 <footer class="bg-transparent text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0 text-dark">&copy; 2025 TechInnovate Solutions. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script >
        const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Set cardPerView based on screen size
let cardPerView = window.innerWidth >= 1024 ? 4 : Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to the beginning of the carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to the end of the carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at the appropriate position to hide the first few duplicate cards
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
};

const dragging = (e) => {
    if (!isDragging) return; // If isDragging is false, return
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
};

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if (carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) autoPlay();
};

const autoPlay = () => {
    if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel every 2500 ms
    timeoutId = setTimeout(() => {
        carousel.scrollLeft += firstCardWidth; // Adjust this if needed for linear scrolling
    }, 2500);
};

// Start autoplay
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);

// Update cardPerView on window resize
window.addEventListener('resize', () => {
    cardPerView = window.innerWidth >= 1024 ? 4 : Math.round(carousel.offsetWidth / firstCardWidth);
});
    </script>
    <script src="swiper.js"></script>
</body>
</html>
