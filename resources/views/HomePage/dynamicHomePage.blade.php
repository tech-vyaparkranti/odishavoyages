@extends('layouts.webSite')
@section('content')
    <!-- about-section -->
    <!-- Hero Area Start -->
<style>
/* Hero Section with a responsive aspect ratio */
.hero-section {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 9;
    max-height: 100vh;
    overflow: hidden;
}

/* This container will center the video */
.video-background {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    z-index: -1;
}

.video-background iframe {
    width: 100vw;
    height: 56.25vw; /* 100 * 9 / 16 = 56.25 */
    min-height: 100vh;
    min-width: 177.77vh; /* 100 * 16 / 9 = 177.77 */
    border: none;
    pointer-events: none;
}

/* Bottom-left content */
.hero-content {
    position: absolute;
    bottom: 30px;
    left: 30px;
    padding: 20px 25px;
    border-radius: 10px;
    max-width: 700px;
}

.hero-content h1 {
    font-size: 2rem;
    margin: 0 0 10px;
        color:yellow;
        
}
@media (max-width: 500px) {
.hero-content h1 {
    font-size: 1rem;
        color:yellow;
      margin: 0 0 10px;
}
.hero-content p {
    display:none;
}


}


.hero-content p {
    font-size: 1.1rem;
    margin: 0;
    color:white;
}
.cursor {
  overflow: hidden;
  white-space: nowrap;
}
.typewriter-animation {
  animation: 
    typewriter 2s steps(50) 1s 1 normal both, 
    blinkingCursor 300ms steps(50) infinite normal;
}
@keyframes typewriter {
  from { width: 0; }
  to { width: 100%; }
}
@keyframes blinkingCursor{
  from { border-right-color: rgba(255,255,255,.75); }
  to { border-right-color: transparent; }
}

</style>

<!-- Hero Section with Full Background Video -->
<section class="hero-section">
    <div class="video-background">
        <!-- AUTO-PLAY, LOOP, MUTED, ALL CONTROLS HIDDEN -->
        <iframe 
            src="https://www.youtube.com/embed/hi5d8VbAeVc?autoplay=1&mute=1&loop=1&playlist=hi5d8VbAeVc&controls=0&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&disablekb=1&fs=0&cc_load_policy=0&playsinline=1&enablejsapi=0" 
            title="Background Video"
            allow="autoplay; encrypted-media"
            allowfullscreen
            style="pointer-events: none;">
        </iframe>
    </div>

    <!-- Content in Bottom Left -->
    <div class="hero-content">
        <h1 class="cursor typewriter-animation bottomclass">Handcrafted Journeys in Odisha</h1>
        <p >Trusted local DMC since 2004. Private guides, festival access, wildlife, heritage & coastal escapes.</p>
    </div>
</section>
    <!-- Hero Section with Full Background Video -->
    
    <!-- Demo content below hero -->
  

    <!-- About Us Area start -->
    <style>
      
        .about-us-area {
            position: relative;
            padding: 100px 0 90px;
            overflow: hidden;
        }

        .about-us-area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            animation: backgroundPulse 8s ease-in-out infinite;
        }

        @keyframes backgroundPulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

       
        .row {
          
        }

        .col-xl-6 {
            flex: 1;
            min-width: 300px;
        }

     
       h2 {
            font-size: 3rem;
            font-weight: 700;
         background: linear-gradient(45deg, #ff9933, #b22222, #1e3c72, #228b22);
   background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 4s ease-in-out infinite;
            margin-bottom: 20px;
            position: relative;
        }

         h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #ff6b8a, transparent);
            border-radius: 2px;
            animation: underlineGlow 2s ease-in-out infinite alternate;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes underlineGlow {
            from { box-shadow: 0 0 5px #ff6b6b; }
            to { box-shadow: 0 0 20px #ff6b6b, 0 0 30px #ff6b6b; }
        }

        .about-us-content {
            position: relative;
          background: none;
        }

        .about-us-content::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
      
            border-radius: 22px;
            z-index: -1;
            animation: borderGlow 3s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .about-us-content p {
            color: black !important;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
            text-align: justify;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .theme-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background:#F1C40F;
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
            position: relative;
            overflow: hidden;
        }

        .theme-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background:#F1C40F;
            transition: left 0.5s ease;
        }

        .theme-btn:hover::before {
            left: 100%;
        }

        .theme-btn:hover {
        }

        .animated-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
        }

        .animated-image:hover {
            transform: translateY(-10px) rotateY(5deg);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
        }

        .animated-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
            transition: transform 0.6s ease;
            filter: brightness(0.9);
        }

        .animated-image:hover img {
            transform: scale(1.05);
            filter: brightness(1.1);
        }

        /* Floating Travel Icons */
        .floating-icons {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-icon {
            position: absolute;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.3);
            animation: floatIcon 15s infinite linear;
        }

        .floating-icon:nth-child(1) {
            top: 10%;
            left: 5%;
            animation-delay: 0s;
            animation-duration: 12s;
        }

        .floating-icon:nth-child(2) {
            top: 20%;
            right: 10%;
            animation-delay: 3s;
            animation-duration: 18s;
        }

        .floating-icon:nth-child(3) {
            top: 60%;
            left: 15%;
            animation-delay: 6s;
            animation-duration: 15s;
        }

        .floating-icon:nth-child(4) {
            top: 70%;
            right: 20%;
            animation-delay: 9s;
            animation-duration: 20s;
        }

        .floating-icon:nth-child(5) {
            top: 40%;
            left: 50%;
            animation-delay: 12s;
            animation-duration: 14s;
        }

        .floating-icon:nth-child(6) {
            top: 80%;
            left: 60%;
            animation-delay: 15s;
            animation-duration: 16s;
        }

        @keyframes floatIcon {
            0% {
                transform: translateY(0px) rotate(0deg) scale(1);
                opacity: 0.3;
            }
            25% {
                transform: translateY(-30px) rotate(90deg) scale(1.2);
                opacity: 0.6;
            }
            50% {
                transform: translateY(-60px) rotate(180deg) scale(1);
                opacity: 0.8;
            }
            75% {
                transform: translateY(-30px) rotate(270deg) scale(1.1);
                opacity: 0.4;
            }
            100% {
                transform: translateY(0px) rotate(360deg) scale(1);
                opacity: 0.3;
            }
        }

        /* Travel Icons around content */
        .travel-icons {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            color: orange;
            font-size: 1.5rem;
            animation: iconBounce 3s ease-in-out infinite;
        }

        .travel-icon-1 {
            top: -30px;
            left: 50px;
            animation-delay: 0s;
        }

        .travel-icon-2 {
            top: 50%;
            right: -30px;
            animation-delay: 1s;
        }

        .travel-icon-3 {
            bottom: -30px;
            left: 30%;
            animation-delay: 2s;
        }

        @keyframes iconBounce {
            0%, 100% {
                transform: translateY(0px) scale(1);
            }
            50% {
                transform: translateY(-20px) scale(1.1);
            }
        }

        /* Pulsing dots */
        .pulse-dot {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            animation: pulse 2s ease-in-out infinite;
        }

        .pulse-dot-1 {
            top: 20%;
            left: 20%;
            animation-delay: 0s;
        }

        .pulse-dot-2 {
            top: 30%;
            right: 25%;
            animation-delay: 0.5s;
        }

        .pulse-dot-3 {
            bottom: 25%;
            left: 25%;
            animation-delay: 1s;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.6;
            }
            50% {
                transform: scale(1.5);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0.6;
            }
        }

        /* Stats/Features Icons */
        .features-wrapper {
            position: relative;
            margin-top: 40px;
        }

        .feature-item {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0 20px 20px 0;
            color: white;
            font-size: 0.95rem;
            opacity: 0;
            transform: translateX(-30px);
            animation: slideInFeature 0.8s ease forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.2s; }
        .feature-item:nth-child(2) { animation-delay: 0.4s; }
        .feature-item:nth-child(3) { animation-delay: 0.6s; }
        .feature-item:nth-child(4) { animation-delay: 0.8s; }

        @keyframes slideInFeature {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .feature-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
            animation: iconRotate 4s ease-in-out infinite;
        }

        @keyframes iconRotate {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(10deg); }
            75% { transform: rotate(-10deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
                text-align: center;
            }
            
            h2 {
                font-size: 2.5rem;
            }
            
            .about-us-content {
                padding: 30px 20px;
                margin-bottom: 30px;
            }
            
            .animated-image img {
                height: 300px;
            }
            
            .floating-icon {
                font-size: 1.5rem;
            }
        }

        /* Custom scrollbar for webkit browsers */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 4px;
        }
    </style>
    <section class="about-us-area py-100 rpb-90 rel z-1">
    <!-- Floating Travel Icons Background -->
    <div class="floating-icons">
        <i class="fas fa-plane floating-icon"></i>
        <i class="fas fa-map-marker-alt floating-icon"></i>
        <i class="fas fa-compass floating-icon"></i>
        <i class="fas fa-camera floating-icon"></i>
        <i class="fas fa-suitcase floating-icon"></i>
        <i class="fas fa-globe-asia floating-icon"></i>
    </div>

    <!-- Pulsing decorative dots -->
    <div class="pulse-dot pulse-dot-1"></div>
    <div class="pulse-dot pulse-dot-2"></div>
    <div class="pulse-dot pulse-dot-3"></div>

    <div class="container">
        <div class="row align-items-center">
            <h2 class="text-center mb-4 popular-destination" data-aos="fade-up">About Us</h2>
            
            <!-- Text Content -->
            <div class="col-xl-6 col-lg-6">
                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    
                    <!-- Dynamic OR Static Content -->
                    <p style="color: black !important;">
                        {!! $home_aboutus_content ?? 
                        'Odisha, often called the "Soul of India," is a land of rich history, vibrant culture, and breathtaking natural beauty. From ancient temples to pristine beaches and lush national parks, this eastern state offers a unique and unforgettable travel experience.' 
                        !!}
                    </p>

                    <div class="menu-btns py-10">
                        <a href="#" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Book Now">Read More</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Image with 2D & 3D Animations -->
            <div class="col-xl-6 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="animated-image relative w-full h-0 pb-[66.66%]">
                    
                    <!-- Dynamic OR Static Image -->
                    <img src="{{ 
                isset($home_aboutus_content_image) && !empty($home_aboutus_content_image)
                ? url($home_aboutus_content_image) 
                : 'https://odishavoyages.com/wp-content/uploads/2021/10/jagannath-temple-pti-1616946876.jpg' 
            }}"
             alt="About Us Image"
             class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-lg">

                    
                    <!-- Floating mini travel icon -->
                    <div style="position: absolute; top: 10%; right: 10%; width: 40px; height: 40px; background: rgba(255, 107, 107, 0.9); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; animation: iconFloat 3s ease-in-out infinite;">
                        <i class="fas fa-om"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 1000,
            offset: 100,
            once: true
        });

        // Add floating animation for image overlay icons
        const style = document.createElement('style');
        style.textContent = `
            @keyframes iconFloat {
                0%, 100% { transform: translateY(0px) scale(1); }
                50% { transform: translateY(-15px) scale(1.1); }
            }
        `;
        document.head.appendChild(style);

        // Add intersection observer for enhanced animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.about-us-content, .animated-image').forEach(el => {
            observer.observe(el);
        });

        // Add hover effect to travel icons
        document.querySelectorAll('.travel-icons').forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.2) rotate(15deg)';
                this.style.boxShadow = '0 8px 30px rgba(255, 107, 107, 0.6)';
            });
            
            icon.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
                this.style.boxShadow = '0 5px 20px rgba(255, 107, 107, 0.4)';
            });
        });

        // Parallax effect for floating icons
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.5;
            
            document.querySelectorAll('.floating-icon').forEach((icon, index) => {
                const speed = (index + 1) * 0.1;
                icon.style.transform = `translateY(${rate * speed}px) rotate(${rate * 0.05}deg)`;
            });
        });

        // Add click animation to button
        document.querySelector('.theme-btn').addEventListener('click', function(e) {
            e.preventDefault();
            
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });

        // Add ripple animation
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);
    </script>
<style>
/* 2D Floating & 3D Hover Animation */
.animated-image {
    perspective: 1000px; /* 3D perspective */
}

.animated-image img {
    transition: transform 0.6s ease, box-shadow 0.6s ease;
    transform-style: preserve-3d;
}

/* 3D tilt on hover */
.animated-image:hover img {
    transform: rotateY(15deg) rotateX(10deg) scale(1.05);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

/* 2D subtle floating animation */
@keyframes float2D {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.animated-image img {
    animation: float2D 4s ease-in-out infinite;
}

     
        .destinations-area {
            position: relative;
     padding: 100px 0 70px;
            overflow: hidden;
        }

        .destinations-area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
              animation: backgroundFloat 20s ease-in-out infinite;
        }

        @keyframes backgroundFloat {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(0.5deg); }
            66% { transform: translate(-20px, 20px) rotate(-0.5deg); }
        }

       
        .section-title {
            text-align: center;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease forwards;
        }

        .section-title h2 {
            font-size: 3rem;
            font-weight: 700;
         background: linear-gradient(45deg, #ff9933, #b22222, #1e3c72, #228b22);
   background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 4s ease-in-out infinite;
            margin-bottom: 20px;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #ff6b8a, transparent);
            border-radius: 2px;
            animation: underlineGlow 2s ease-in-out infinite alternate;
        }

        .section-title p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.6;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes underlineGlow {
            from { box-shadow: 0 0 5px #ff6b8a; }
            to { box-shadow: 0 0 20px #ff6b8a, 0 0 30px #ff6b8a; }
        }

      
      
        .swiper-slide:nth-child(1) { animation-delay: 0.1s; }
        .swiper-slide:nth-child(2) { animation-delay: 0.2s; }
        .swiper-slide:nth-child(3) { animation-delay: 0.3s; }
        .swiper-slide:nth-child(4) { animation-delay: 0.4s; }
        .swiper-slide:nth-child(5) { animation-delay: 0.5s; }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .destination-item {
            position: relative;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            min-height: 350px;
        }

        .destination-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 107, 138, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .destination-item:hover::before {
            opacity: 1;
        }

        .destination-item:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.4),
                0 0 0 1px rgba(255, 255, 255, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .destination-item .image {
            position: relative;
            height: 100%;
            overflow: hidden;
        }

        .destination-item .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            filter: brightness(0.9);
        }

        .destination-item:hover .image img {
            transform: scale(1.1);
            filter: brightness(1.1);
        }

        .destination-item .image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                to bottom,
                transparent 0%,
                transparent 50%,
                rgba(0, 0, 0, 0.7) 100%
            );
            transition: opacity 0.3s ease;
        }

        .destination-item:hover .image::after {
            opacity: 0.8;
        }

        .content {
            position: relative;
            padding: 20px;
            z-index: 2;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        .content .location {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 8px;
            transform: translateX(-20px);
            opacity: 0;
            animation: slideInLeft 0.6s ease forwards 0.8s;
        }

        .content h5 {
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 8px;
            transform: translateX(-20px);
            opacity: 0;
            animation: slideInLeft 0.6s ease forwards 1s;
        }

        .content .time {
            color: black;
            font-size: 1.2rem;
            font-weight: 500;
            transform: translateX(-20px);
            opacity: 0;
            animation: slideInLeft 0.6s ease forwards 1.2s;
        }

        @keyframes slideInLeft {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

      
      

        .swiper-pagination-bullet-active {
            background: linear-gradient(45deg, #ff6b8a, #4ecdc4);
            transform: scale(1.2);
            box-shadow: 0 0 15px rgba(255, 107, 138, 0.6);
        }

        .view-more-buttons {
            text-align: center;
            margin-top: 50px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 1.5s;
        }

        .theme-btn {
            position: relative;
          background:#F1C40F;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.4s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 25px rgba(255, 107, 138, 0.3);
        }

        .theme-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s ease;
        }

        .theme-btn:hover::before {
            left: 100%;
        }

        .theme-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 107, 138, 0.4);
        }

        .theme-btn span {
            position: relative;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            animation: float 15s infinite linear;
        }

        .floating-element:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
            color: orange;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            left: 80%;
            animation-delay: 0s;
            color: orange;
        }

        .floating-element:nth-child(3) {
            top: 30%;
            left: 70%;
            animation-delay: 0s;
            color: orange;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
            }
            10% {
            }
            90% {
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
            }
        }

        .card-heading {
            color: white !important;
            text-decoration: none;
        }

        .destination-item a {
            text-decoration: none;
            color: inherit;
        }

        /* Pulse animation for destination items */
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 107, 138, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(255, 107, 138, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 107, 138, 0); }
        }

        .destination-item:nth-child(odd):hover {
            animation: pulse 2s infinite;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            
            .theme-btn {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }

        /* Swiper custom styles */
        .swiper-slide {
            height: auto;
        }

        /* Loading animation */
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .destination-item .image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                transparent
            );
            transform: translateX(-100%);
            animation: shimmer 2s infinite;
            z-index: 1;
        }
    </style>

    <section class="destinations-area">
    <!-- Floating background elements -->
    <div class="floating-elements">
        <i class="fas fa-plane floating-element" style="font-size: 2rem;"></i>
        <i class="fas fa-map-marker-alt floating-element" style="font-size: 1.5rem;"></i>
        <i class="fas fa-compass floating-element" style="font-size: 1.8rem;"></i>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-40">
                    <h2 class="popular-destination">Popular Destinations</h2>
                    <p style="color:black;">One site many popular experience you'll remember</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="swiper packages mt-4 ">
                <div class="swiper-wrapper ">

                    {{-- ✅ If Dynamic Data Available --}}
                    @if($homedestinations->count() > 0)
                    
                       @foreach($homedestinations as $destination)
   
    <div class="swiper-slide">
        <a href="{{ url('destination/'.$destination->destination_slug) }}" class="destination-link">
            <div class="destination-item">
                <div class="image">
 @php
                                        // Ensure package_image is a valid JSON string before decoding
                                        $images = is_string($destination->destination_image)
                                            ? json_decode($destination->destination_image, true)
                                            : $destination->destination_image;
        
                                        // Check if images is a valid array and get the first image
                                        $displayImage = is_array($images) && !empty($images) ? $images[0] : null;
                                    @endphp
        
                                    @if ($displayImage)
                                        <img src="{{ asset('storage/' . $displayImage) }}" alt="{{ $destination->destination_name }}"
                                            class="hotel-image" style="margin-right: 10px;">
                                    @else
                                        <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image" class="hotel-image">
                                    @endif

                    </div>
                <div class="content">
                    <span class="location">
                        <i class="fas fa-map-marker-alt"></i> {{ $destination->destination_name }}
                    </span>
                    <h5 class="card-heading">{{ Str::limit($destination->destination_details, 50) }}</h5>
                    <span class="time" style="padding:10px;background :maroon;border-radius:20px;color:white;font-size:15px">Explore Now</span>
                </div>
            </div>
        </a>
    </div>
@endforeach


                    {{-- ❌ If No Dynamic Data → Show Static Fallback --}}
                    @else
                        <div class="swiper-slide">
                            <a href="#" class="destination-link">
                                <div class="destination-item">
                                    <div class="image">
                                        <img src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a?auto=format&fit=crop&w=800&q=80" 
                                             alt="Paris" class="hotel-image">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fas fa-map-marker-alt"></i> Paris, France</span>
                                        <h5 class="card-heading">Eiffel Tower & City of Lights</h5>
                                        <span class="time">5 days 4 nights</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="destination-link">
                                <div class="destination-item">
                                    <div class="image">
                                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?auto=format&fit=crop&w=800&q=80" 
                                             alt="Santorini" class="hotel-image">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fas fa-map-marker-alt"></i> Santorini, Greece</span>
                                        <h5 class="card-heading">Blue Domes & Sunset Views</h5>
                                        <span class="time">4 days 3 nights</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="destination-link">
                                <div class="destination-item">
                                    <div class="image">
                                        <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090?auto=format&fit=crop&w=800&q=80" 
                                             alt="Dubai" class="hotel-image">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fas fa-map-marker-alt"></i> Dubai, UAE</span>
                                        <h5 class="card-heading">Modern Marvels & Desert Adventures</h5>
                                        <span class="time">6 days 5 nights</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
                
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
        <div class="view-more-buttons">
            <a class="service-view-buttons" href="{{ url('/destinations') }}" style="text-decoration: none;">
                <button type="button" class="theme-btn">
                    <span data-hover="Explore More">
                        Explore More
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </button>
            </a>
        </div>
    </div>
</section>


    

    <!-- Destinations Area end -->

    <!-- Popular Destinations Area start -->
<style>
/* ===== RESET ===== */

/* Floating Background Emojis */
#travel-gallery .bg-emoji-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
}

#travel-gallery .animated-emoji {
    position: absolute;
    font-size: 2rem;
    opacity: 0.08;
    animation: driftUp 25s infinite linear;
}

#travel-gallery .animated-emoji:nth-child(1) { left: 5%; animation-delay: 0s; }
#travel-gallery .animated-emoji:nth-child(2) { left: 15%; animation-delay: -3s; }
#travel-gallery .animated-emoji:nth-child(3) { left: 25%; animation-delay: -6s; }
#travel-gallery .animated-emoji:nth-child(4) { left: 35%; animation-delay: -9s; }
#travel-gallery .animated-emoji:nth-child(5) { left: 45%; animation-delay: -12s; }
#travel-gallery .animated-emoji:nth-child(6) { left: 55%; animation-delay: -15s; }
#travel-gallery .animated-emoji:nth-child(7) { left: 65%; animation-delay: -18s; }
#travel-gallery .animated-emoji:nth-child(8) { left: 75%; animation-delay: -21s; }
#travel-gallery .animated-emoji:nth-child(9) { left: 85%; animation-delay: -24s; }

@keyframes driftUp {
    0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
    10%, 90% { opacity: 0.08; }
    100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
}

/* Main Container */
#travel-gallery .destination-showcase {
    padding: 60px 0;
    position: relative;
    z-index: 1;
}

#travel-gallery .main-wrapper {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 20px;
}

   h2 {
            font-size: 3rem;
            font-weight: 700;
         background: linear-gradient(45deg, #ff9933, #b22222, #1e3c72, #228b22);
   background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 4s ease-in-out infinite;
            margin-bottom: 20px;
            position: relative;
            TEXT-ALIGN:CENTER;
        }

         h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #ff6b8a, transparent);
            border-radius: 2px;
            animation: underlineGlow 2s ease-in-out infinite alternate;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes underlineGlow {
            from { box-shadow: 0 0 5px #ff6b6b; }
            to { box-shadow: 0 0 20px #ff6b6b, 0 0 30px #ff6b6b; }
        }



@keyframes pulseGlow {
    from { filter: drop-shadow(0 0 10px rgba(255,255,255,0.3)); }
    to { filter: drop-shadow(0 0 20px rgba(255,255,255,0.6)); }
}

#travel-gallery .hero-heading p {
    font-size: 1.2rem;
    opacity: 0.9;
}

/* Swiper Styles */
#travel-gallery .swiper {
    width: 100%;
    padding: 20px 0 60px;
}

#travel-gallery .swiper-slide {
    height: auto;
}

/* Destination Card */
#travel-gallery .destination-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    height: 500px;
    position: relative;
    cursor: pointer;
    animation: cardFadeIn 0.8s ease-out;
}

#travel-gallery .destination-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0,0,0,0.2);
}

#travel-gallery .hero-image-wrap {
    position: relative;
    height: 300px;
    overflow: hidden;
}

#travel-gallery .hero-image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.6s ease;
}

#travel-gallery .destination-card:hover .hero-image-wrap img {
    transform: scale(1.1);
}

/* Location Badges */
#travel-gallery .badge-container {
    position: absolute;
    top: 15px;
    left: 15px;
    display: flex;
    gap: 8px;
    z-index: 2;
}

#travel-gallery .location-badge {
    background: rgba(255, 255, 255, 0.9);
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    color: #333;
}

#travel-gallery .destination-card:hover .location-badge {
    background: rgba(255, 165, 0, 0.9);
    color: white;
}

/* Name Overlay */
#travel-gallery .name-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(255, 165, 0, 0.85));
    padding: 30px 20px 20px;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.4s ease;
}

#travel-gallery .name-overlay h3 {
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
}

#travel-gallery .destination-card:hover .name-overlay {
    opacity: 1;
    transform: translateY(0);
}

/* Info Section */
#travel-gallery .info-section {
    padding: 25px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#travel-gallery .price-current {
    font-size: 2rem;
    font-weight: bold;
    color: #2c3e50;
    margin-right: 10px;
}

#travel-gallery .price-original {
    font-size: 1.2rem;
    color: #7f8c8d;
    text-decoration: line-through;
}

#travel-gallery .discount-amount {
    color: #e74c3c;
    font-weight: 600;
}

#travel-gallery .trip-duration {
    color: #7f8c8d;
    font-size: 1rem;
}

#travel-gallery .action-button {
    background:#F1C40F;
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    cursor: pointer;
}

/* Swiper Navigation */
#travel-gallery .swiper-button-next,
#travel-gallery .swiper-button-prev {
    color: white;
    background: rgba(255, 165, 0, 0.8);
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

/* Responsive */
@media (max-width: 1200px) {
    #travel-gallery .swiper-slide { width: 50%; }
}
@media (max-width: 768px) {
    #travel-gallery .swiper-slide { width: 100%; }
    #travel-gallery .destination-card { height: 450px; }
    #travel-gallery .hero-image-wrap { height: 250px; }
}

@keyframes slideInFromTop {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes cardFadeIn {
    from { opacity: 0; transform: translateY(50px) scale(0.9); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}
</style>

@if(!empty($getPackages))
<section id="travel-gallery">
    <!-- Floating Emoji Background -->
    <div class="bg-emoji-wrapper">
        <div class="animated-emoji">✈️</div>
        <div class="animated-emoji">🌍</div>
        <div class="animated-emoji">🏔️</div>
        <div class="animated-emoji">🏖️</div>
        <div class="animated-emoji">🗾</div>
        <div class="animated-emoji">🕌</div>
        <div class="animated-emoji">🏛️</div>
        <div class="animated-emoji">🎌</div>
        <div class="animated-emoji">⛩️</div>
    </div>

    <div class="destination-showcase">
        <div class="main-wrapper">
            <!-- Section Title -->
            <div class="hero-heading">
                <h2 class="text-center">✨ Explore Popular Packages ✨</h2>
                <p style="text-align:center">🌟 Discover incredible journeys and unforgettable experiences 🌟</p>
            </div>

            <!-- Swiper -->
           <div class="swiper destination-slider">
               <div class="swiper-wrapper">
                        @if (isset($packages) && count($packages) > 0)
                            @foreach ($packages as $item)
                                @php
                                    // Ensure package_image is a valid JSON string before decoding
                                    $images = is_string($item->package_image)
                                        ? json_decode($item->package_image, true)
                                        : $item->package_image;

                                    // Check if images is a valid array and get the first image
                                    $displayImage = is_array($images) && !empty($images) ? $images[0] : null;
                                @endphp
                                <div class="col-xxl-3 col-xl-4 col-md-6 swiper-slide">
                                    <a href="{{ route('tourDetailpage', ['slug' => $item->slug]) }}">
                                        <div class="destination-item" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-offset="50">
                                            <div class="image">
                                                @if ($displayImage)
                                                    {{-- <figure class="images"> --}}
                                                    <img src="{{ asset('storage/' . $displayImage) }}"
                                                        alt="{{ $item->package_name }}" class="gallery-image">
                                                    {{-- </figure> --}}
                                                @else
                                                    {{-- <figure class="images"> --}}
                                                    <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image">
                                                    {{-- </figure> --}}
                                                @endif

                                                <div class="ratting">{{ $item->package_type }}</div>
                                            </div>
                                            <div class="content tourpackage">
                                                <span class="location">
                                                    <i class="fal fa-map-marker-alt"></i> {{ $item->package_country }}
                                                </span>
                                                <h5 class="card-heading">
                                                    {!! $item->package_name !!}
                                                </h5>
                                                <span class="time" >
                                                    {!! $item->package_duration_days !!} Days / {!! $item->package_duration_nights !!} Nights
                                                </span>
                                            </div>
                                            <div class="destination-footer price">
                                                <span class="offer-price" style="font-size:1.2rem">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {!! IND_money_format($item->package_offer_price) !!}
                                                </span>
                                                <span class="sale-price">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {!! IND_money_format($item->package_price) !!}
                                                </span>
                                                <span class="offer-amount" style="font-size:1rem">
                                                    Save  <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {{ IND_money_format($item->package_price - $item->package_offer_price) }}
                                                </span>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                        <p>NO Data Available</p>
                    @endif
                    </div>

                <!-- Navigation -->
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
<script>
const travelSwiper = new Swiper('#travel-gallery .destination-slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: { delay: 4000, disableOnInteraction: false },
    pagination: {
        el: '#travel-gallery .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '#travel-gallery .swiper-button-next',
        prevEl: '#travel-gallery .swiper-button-prev',
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
    speed: 800,
});
</script>

    <!-- Popular Destinations Area end -->
     <!-- Bootstrap CSS -->
<div class="container py-4">
  <h2 class="text-center mb-5">Why Choose Us ?</h2>

  <div class="row g-3">
    <!-- Card 1 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-center p-3 shadow-sm  h-100" style="background:#B71C1C">
        <i class="bi bi-person-badge fs-2 text-primary animate-icon"></i>
        <p class="mt-2 text-light">5+ Years of Travel Experience</p>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-center p-3 shadow-sm  h-100" style="background:#B71C1C">
        <i class="bi bi-people fs-2 text-success animate-icon"></i>
        <p class="mt-2 text-light">1000+ Counting Happy Customers</p>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-center p-3 shadow-sm  h-100" style="background:#B71C1C">
        <i class="bi bi-graph-up fs-2 text-white animate-icon"></i>
        <p class="mt-2 text-light">35+ Team Staff & Ground Experts</p>
      </div>
    </div>
    <!-- Card 4 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-center p-3 shadow-sm h-100" style="background:#B71C1C">
        <i class="bi bi-headset fs-2 text-danger animate-icon"></i>
        <p class="mt-2 text-light">24x7 Online Support</p>
      </div>
    </div>
    <!-- Card 5 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-center p-3 shadow-sm  h-100" style="background:#B71C1C">
        <i class="bi bi-patch-check fs-2 text-info animate-icon"></i>
        <p class="mt-2 text-light">Odisha Tourism</p>
      </div>
    </div>
    <!-- Card 6 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card text-center p-3 shadow-sm  h-100" style="background:#B71C1C">
        <i class="bi bi-signpost fs-2 text-secondary animate-icon"></i>
        <p class="mt-2 text-light">Special Discounts for Groups</p>
      </div>
    </div>
  </div>
</div>

<style>
  @keyframes floatUpDown {
    0% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
    100% { transform: translateY(0); }
  }

  .animate-icon {
    animation: floatUpDown 2.5s ease-in-out infinite;
    transition: transform 0.3s;
  }
  .card {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  border: none;
  border-radius: 12px;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
  cursor: pointer;
}

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
<!-- Horizontal Scroll Section -->

    <!-- Features Area start -->
   
    <!-- Blog Area start -->
     <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Testimonial Slider Section -->
<div id="testimonialSlider" class="swiper" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/assets/images/image.png'); background-size: cover; background-position: center; margin-bottom: 50px; margin-top: 60px;">
    <h1 class="text-center text-light" style="font-size:45px;margin:40px;">What Our Clients Say</h1>
    <div id="testimonialWrapper" class="swiper-wrapper">
        
        <!-- Loop through testimonials and create a slide for each one -->
        @foreach($testimonials as $testimonial)
        <div class="swiper-slide">
            <div class="testimonialCard">
                <!-- Use the image from the testimonial data -->
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Client" class="testimonialImg">
                <!-- Use the heading_middle and heading_bottom as the text -->
                <p>"{{ $testimonial->heading_middle }}"</p>
                <div class="testimonial-author">
                    <h4>{{ $testimonial->heading_bottom }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div id="testimonialPagination" class="swiper-pagination"></div>
</div>

<script>
  const testimonialSwiper = new Swiper("#testimonialSlider", {
    loop: true,
    autoplay: { delay: 4000, disableOnInteraction: false },
    pagination: { el: "#testimonialPagination", clickable: true },
    breakpoints: {
      320: { slidesPerView: 1, spaceBetween: 10 },
      640: { slidesPerView: 1, spaceBetween: 20 },
      1024: { slidesPerView: 1, spaceBetween: 30 },
    },
  });
</script>

<style>
    #testimonialSlider{
        max-height:1000px;
        padding-bottom:20px;
        margin-top:50px
    }
  .testimonialCard {
    padding: 20px;
    margin: auto;
    max-width: 600px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    box-shadow: 0px 4px 6px rgba(0,0,0,0.2);
    text-align: center;
  }

  /* ✅ Image first */
  .testimonialImg {
    width: 500px;
    height: 300px;
    margin-bottom: 20px;
    border-radius:20px;
  }

  .testimonialText p {
    font-size: 1.2rem;
    color: #333;
    line-height: 1.6;
    margin: 0;
  }

  .testimonialText h4 {
    margin-top: 15px;
    font-weight: bold;
    color: #555;
    text-align: right;
  }

  /* ✅ Responsive */
  @media (max-width: 768px) {
    .testimonialCard {
      max-width: 90%;
      padding: 15px;
    }
    .testimonialImg {
      width: 400px;
      height: 300px;
    }
    .testimonialText p {
      font-size: 1rem;
    }
  }

  @media (max-width: 480px) {
    .testimonialImg {
      width: 400px;
      height: 200px;
    }
    .testimonialText p {
      font-size: 0.9rem;
    }
  }
</style>
    <!-- Blog Area end -->
    <style>
        .service-view-button button {
            color: white;
        }

        .view-more-button {
            /* margin-left: 212px; */
        }

        h2 {
            color: #022f5d;
        }

        .main-slider .swiper-wrapper img {
            /* transition: 3s ease-in-out; */
            transform: scale(1.1);
            height: 650px !important;
            width: 100%;
            object-fit:cover;
            /* opacity: 1; */
        }

        .main-slider .swiper-wrapper .swiper-slide.swiper-slide-next img {
            /* transition: 10s ease-in-out; */
            /* opacity: 0.5; */
            transform: scale(1);
        }

        h5.card-heading {
            color: #fff;
            font-size:25px;
        }

        /* .fade {
                          animation: fadeInOut 4.7s infinite;
                        }

                        @keyframes fadeInOut {
                          0% {
                            opacity: 0.5;
                          }
                          50% {
                            opacity: 0.8;
                          }
                          100% {
                            opacity: 1;
                          }
                        } */
        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }
    </style>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const calendarTrigger = document.getElementById("calendarTrigger");
            const calendarDiv = document.getElementById("calendar");
            const selectedDateDisplay = document.getElementById("selectedDate");
            const hiddenDepartureDate = document.getElementById("hiddenDepartureDate");

            function generateCalendar(year, month) {
                const today = new Date(); // Get today's date
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDay = new Date(year, month, 1).getDay();

                let calendarHTML = `
                    <table style="border-collapse: collapse; width: 100%; text-align: center;">
                        <thead>
                            <tr>
                                <th style="padding: 5px;">Sun</th>
                                <th style="padding: 5px;">Mon</th>
                                <th style="padding: 5px;">Tue</th>
                                <th style="padding: 5px;">Wed</th>
                                <th style="padding: 5px;">Thu</th>
                                <th style="padding: 5px;">Fri</th>
                                <th style="padding: 5px;">Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                `;

                for (let i = 0; i < firstDay; i++) {
                    calendarHTML += `<td style="padding: 5px; border: 1px solid #ddd;"></td>`;
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const currentDate = new Date(year, month, day);

                    if ((firstDay + day - 1) % 7 === 0 && day > 1) {
                        calendarHTML += `</tr><tr>`;
                    }

                    // Disable past dates
                    const isPast = currentDate < today.setHours(0, 0, 0, 0);
                    calendarHTML += `
                        <td style="padding: 5px; border: 1px solid #ddd; cursor: ${isPast ? 'not-allowed' : 'pointer'}; 
                                   background-color: ${isPast ? '#f0f0f0' : 'transparent'}; 
                                   color: ${isPast ? '#ccc' : '#000'};"
                            data-date="${isPast ? '' : `${year}-${month + 1}-${day}`}">
                            ${day}
                        </td>`;
                }

                calendarHTML += `
                            </tr>
                        </tbody>
                    </table>
                `;
                return calendarHTML;
            }

            function handleDateSelection(event) {
                const selectedDate = event.target.getAttribute("data-date");
                if (selectedDate) {
                    selectedDateDisplay.textContent = `Selected Date: ${selectedDate}`;
                    hiddenDepartureDate.value = selectedDate; // Set the hidden input value
                    calendarDiv.style.display = "none";
                }
            }

            calendarTrigger.addEventListener("click", function() {
                if (calendarDiv.style.display === "none") {
                    const today = new Date();
                    calendarDiv.innerHTML = generateCalendar(today.getFullYear(), today.getMonth());
                    calendarDiv.style.display = "block";
                    calendarDiv.addEventListener("click", handleDateSelection);
                } else {
                    calendarDiv.style.display = "none";
                }
            });

            document.addEventListener("click", function(e) {
                if (!calendarDiv.contains(e.target) && e.target !== calendarTrigger) {
                    calendarDiv.style.display = "none";
                }
            });
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarTrigger = document.getElementById('calendarTrigger');
            const departureDateInput = document.getElementById('departure_date');
            const selectedDateText = document.getElementById('selectedDate');
    
            // Set the min attribute of the date input to today's date
            const today = new Date();
            const formattedDate = today.toISOString().split('T')[0]; // Format as YYYY-MM-DD
            departureDateInput.setAttribute('min', formattedDate);
    
            // Toggle visibility of the date input on clicking the calendar trigger
            calendarTrigger.addEventListener('click', function () {
                if (departureDateInput.style.display === 'none') {
                    departureDateInput.style.display = 'block';
                } else {
                    departureDateInput.style.display = 'none';
                }
            });
    
            // Update selected date text when a date is chosen
            departureDateInput.addEventListener('change', function () {
                const selectedDate = departureDateInput.value;
                selectedDateText.textContent = `Selected Date: ${selectedDate}`;
            });
        });
    </script>
    <style>
  

    </style>

    
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Blog Slider -->
<div id="blogSlider" class="swiper container" data-aos="fade-up">
    <h2 style="margin-bottom:50px">Our Blog</h2>
    <div id="blogWrapper" class="swiper-wrapper">
        <!-- Start of the Blade foreach loop -->
        @foreach($blogs as $blog)
        <div class="swiper-slide">
            <!-- Updated the href to use the route() helper with the blog's slug -->
            <a href="{{ route('blogDetailpage', ['slug' => $blog->slug]) }}" class="block no-underline text-current">
                <div id="blogCard-{{ $blog->id }}" class="blog-card">
                    <!-- The src attribute now uses the asset() helper to get the full public URL -->
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" />
                    <div class="blog-content">
                        <span>{{ $blog->blog_category ?? 'Travel' }} • {{ \Carbon\Carbon::parse($blog->blog_date)->format('Y-m-d') }}</span>
                        <h3>{{ $blog->title }}</h3>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        <!-- End of the Blade foreach loop -->
    </div>

    <!-- Navigation & Pagination -->
    <div id="blogPagination" class="swiper-pagination"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const blogSwiper = new Swiper("#blogSlider", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: "#blogPagination",
      clickable: true,
    },
    navigation: {
      nextEl: "#blogNext",
      prevEl: "#blogPrev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });
</script>
<style>
    #blogSlider{
        
        margin:0 auto;
    }
  .blog-card {
    background: #F1C40F;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', sans-serif;
  }
  @media (max-width: 480px) {
   .blog-card{
    margin:10px;

   }
  }

  .blog-card img {
    width: 100%;
    height: auto;
    display: block;
  }

  .blog-content {
    padding: 15px;
  }

  .blog-content span {
    font-size: 0.9rem;
    color: white;
  }

  .blog-content h3 {
    font-size: 1.1rem;
    margin-top: 8px;
    color: white;
  }

  #blogSlider {
    padding: 40px 0;
  }

  #blogPagination {
    margin-top: 20px;
    text-align: center;
  }

  #blogNext, #blogPrev {
    color: #000;
  }
  .swiper-slide:hover{
    transform: scale(1.05);
    transition: transform 0.3s ease;

  }
</style>

@endsection
