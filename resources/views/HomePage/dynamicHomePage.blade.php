@extends('layouts.webSite')
@section('content')
    <!-- about-section -->
    <!-- Hero Area Start -->
      <style>
     
      /* Hero Section with a responsive aspect ratio */
.hero-section {
    position: relative;
    width: 100%;
    /* Set the desired aspect ratio */
    aspect-ratio: 16 / 9; 
    /* Optional: prevent it from being taller than the screen */
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
    /* These styles ensure the video covers the container without black bars */
    width: 100vw;
    height: 56.25vw; /* 100 * 9 / 16 = 56.25 */
    min-height: 100vh;
    min-width: 177.77vh; /* 100 * 16 / 9 = 177.77 */
    border: none;
    pointer-events: none; /* Prevents user interaction with the video */
}

/* Demo content for context */
.demo-content {
    padding: 80px 20px;
    text-align: center;
    background: #f8f9fa;
}

.demo-content h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 20px;
}

.demo-content p {
    font-size: 1.2rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
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
            height: 250px;
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
            color: #4ecdc4;
            font-size: 0.9rem;
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
            <div class="swiper packages mt-4">
                <div class="swiper-wrapper">

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
                    <span class="time">Explore Now</span>
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
    max-width: 1400px;
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
                <h2>✨ Explore Popular Packages ✨</h2>
                <p style="text-align:center">🌟 Discover incredible journeys and unforgettable experiences 🌟</p>
            </div>

            <!-- Swiper -->
            <div class="swiper destination-slider">
                <div class="swiper-wrapper">
                    <!-- Repeat your slides here -->
                    <div class="swiper-slide">
                        <div class="destination-card">
                            <div class="hero-image-wrap">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEiRKedFkO28EaRZNiEQiY89vy0Mk-qR6cAg&s" alt="Baku & Tbilisi">
                                <div class="badge-container">
                                    <span class="location-badge">🇦🇿 BAKU</span>
                                    <span class="location-badge">🇬🇪 TBILISI</span>
                                </div>
                                <div class="name-overlay"><h3>🏛️ Baku & Tbilisi Adventure</h3></div>
                            </div>
                            <div class="info-section">
                                <div>
                                    <span class="price-current">₹ 94,999</span>
                                    <span class="price-original">₹ 1,04,999</span>
                                    <span class="discount-amount">Save ₹ 10,000</span>
                                </div>
                                <div class="trip-duration">8 Days / 7 Nights</div>
                                <button class="action-button">Explore more</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card">
                            <div class="hero-image-wrap">
                                <img src="" alt="Baku & Tbilisi">
                                <div class="badge-container">
                                    <span class="location-badge">🇦🇿 BAKU</span>
                                    <span class="location-badge">🇬🇪 TBILISI</span>
                                </div>
                                <div class="name-overlay"><h3>🏛️ Baku & Tbilisi Adventure</h3></div>
                            </div>
                            <div class="info-section">
                                <div>
                                    <span class="price-current">₹ 94,999</span>
                                    <span class="price-original">₹ 1,04,999</span>
                                    <span class="discount-amount">Save ₹ 10,000</span>
                                </div>
                                <div class="trip-duration">8 Days / 7 Nights</div>
                                <button class="action-button">Explore more</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card">
                            <div class="hero-image-wrap">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEiRKedFkO28EaRZNiEQiY89vy0Mk-qR6cAg&s" alt="Baku & Tbilisi">
                                <div class="badge-container">
                                    <span class="location-badge">🇦🇿 BAKU</span>
                                    <span class="location-badge">🇬🇪 TBILISI</span>
                                </div>
                                <div class="name-overlay"><h3>🏛️ Baku & Tbilisi Adventure</h3></div>
                            </div>
                            <div class="info-section">
                                <div>
                                    <span class="price-current">₹ 94,999</span>
                                    <span class="price-original">₹ 1,04,999</span>
                                    <span class="discount-amount">Save ₹ 10,000</span>
                                </div>
                                <div class="trip-duration">8 Days / 7 Nights</div>
                                <button class="action-button">Explore more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

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
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
<!-- Horizontal Scroll Section -->

    <!-- Features Area start -->
   
    <!-- Blog Area start -->
     <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Testimonial Slider Container -->
<div id="testimonialSlider" class="swiper" style="background:rgba(0,0,0,0.2);margin-bottom:50px;margin-top:60px;">
  <h2 class="text-center">Testimonial Section</h2>
  <div id="testimonialWrapper" class="swiper-wrapper">
    <!-- Slide 1 -->
    <div id="testimonialSlide1" class="swiper-slide">
      <div class="testimonialCard">
        <p>"Nikita's persistence and technical precision are unmatched. A true problem-solver! "Nikita's persistence and technical precision are unmatched. A true problem-solver! "Nikita's persistence and technical precision are unmatched. A true problem-solver!"</p>
        <h4>- Client A</h4>
      </div>
    </div>
    <!-- Slide 2 -->
    <div id="testimonialSlide2" class="swiper-slide">
      <div class="testimonialCard">
        <p>"Their ability to debug complex Node.js issues is seriously impressive."</p>
        <h4>- Client B</h4>
      </div>
    </div>
    <!-- Slide 3 -->
    <div id="testimonialSlide3" class="swiper-slide">
      <div class="testimonialCard">
        <p>"Nikita brings clarity and calm to chaotic code. A joy to collaborate with."</p>
        <h4>- Client C</h4>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div id="testimonialPagination" class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const testimonialSwiper = new Swiper("#testimonialSlider", {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: "#testimonialPagination",
      clickable: true,
    },
    breakpoints: {
      320: { // small phones
        slidesPerView: 1,
        spaceBetween: 10,
      },
      640: { // tablets
        slidesPerView: 1,
        spaceBetween: 20,
      },
      1024: { // desktop
        slidesPerView: 1,
        spaceBetween: 30,
      },
    },
  });
</script>

<style>
  .testimonialCard {
    padding: 20px;
    margin: auto;
    text-align: center;
    max-width: 600px;
  }

  .testimonialCard p {
    font-size: 1rem;
    color: #333;
    line-height: 1.6;
  }

  .testimonialCard h4 {
    margin-top: 15px;
    font-weight: bold;
    color: #555;
    text-align: right;
  }

  #testimonialSlider {
    width: 100%;
    padding: 40px 15px; /* added padding for mobile */
  }

  #testimonialPagination {
    margin-top: 20px;
    text-align: center;
  }

  /* ✅ Responsive adjustments */
  @media (max-width: 768px) {
    .testimonialCard {
      max-width: 90%;
      padding: 15px;
    }
    .testimonialCard p {
      font-size: 0.95rem;
    }
  }

  @media (max-width: 480px) {
    .testimonialCard {
      max-width: 100%;
      padding: 12px;
    }
    .testimonialCard p {
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
<div id="blogSlider" class="swiper container" data-aos="fade-up" >
    <h2 style="margin-bottom:50px">Our Blog</h2>
  <div id="blogWrapper" class="swiper-wrapper">
    <!-- Blog Post 1 -->
    <div class="swiper-slide">
      <div id="blogCard1" class="blog-card">
        <img src="data:image/jpeg;base64,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" alt="Europe Blog" />
        <div class="blog-content">
          <span>Europe • 2023-03-18</span>
          <h3>Change your place and get the fresh air from the nature.</h3>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div id="blogCard1" class="blog-card">
        <img src="data:image/jpeg;base64,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" alt="Europe Blog" />
        <div class="blog-content">
          <span>Europe • 2023-03-18</span>
          <h3>Change your place and get the fresh air from the nature.</h3>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div id="blogCard1" class="blog-card">
        <img src="data:image/jpeg;base64,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" alt="Europe Blog" />
        <div class="blog-content">
          <span>Europe • 2023-03-18</span>
          <h3>Change your place and get the fresh air from the nature.</h3>
        </div>
      </div>
    </div>
    <!-- Blog Post 2 -->
    <div class="swiper-slide">
      <div id="blogCard2" class="blog-card">
        <img src="data:image/jpeg;base64,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" alt="Covid Travel Blog" />
        <div class="blog-content">
          <span>Covid Travel • 2023-03-19</span>
          <h3>Booking travel during Corona: Find who are giving service.</h3>
        </div>
      </div>
    </div>
    <!-- Blog Post 3 -->
    <div class="swiper-slide">
      <div id="blogCard3" class="blog-card">
        <img src="data:image/jpeg;base64,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" alt="Travel Blog" />
        <div class="blog-content">
          <span>Travel Blog • 2023-03-20</span>
          <h3>10 European ski destinations you should visit this winter.</h3>
        </div>
      </div>
    </div>
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
