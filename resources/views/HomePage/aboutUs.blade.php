@extends('layouts.webSite')
@section('title', 'About Us')
@section('content')

<style>
     
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
</style>

        
        <!-- About Area start -->
        <section class="about-area-two py-50 pt-120 rel z-1">
       <div class="contact-banner">
       <img src="./assets/images/bg-contact.jpg" alt=""> 
       </div>   
            <div class="container pt-5" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <h2 class="text-center">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

</p>
                </div>
        </section>

      <section class="about-section">
  <div class="container">
    <div class="row">
        <h2 class="text-center">About Odisha</h2>
      
      <!-- Left Side Image -->
      <div class="col-left" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
        <img src="https://s7ap1.scene7.com/is/image/incredibleindia/sri-jagannath-temple-puri-odisha-1-attr-hero?qlt=82&ts=1726663747217" alt="Odisha Image">
      </div>

      <!-- Right Side Text -->
      <div class="col-right" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
          Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
          Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
          Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

    </div>
  </div>
</section>
<script>
      AOS.init({
            duration: 1000,
            offset: 100,
            once: true
        });
</script>
<style>
.about-section {
  padding: 60px 20px;
  background: #f9f9f9;
}
.about-section .row {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 20px;
}
.about-section .col-left {
  flex: 1 1 40%;
  text-align: center;
}
.about-section .col-left img {
  max-width: 100%;
  border-radius: 12px;
}
.about-section .col-right {
  flex: 1 1 55%;
  padding: 25px;
  border-radius: 12px;
}
.about-section .col-right h2 {
  margin-bottom: 20px;
  font-weight: 600;
  color: #333;
}
.about-section .col-right p {
  color: #555;
  line-height: 1.7;
  margin-bottom: 15px;
}
</style>


       
@endsection         
            
        