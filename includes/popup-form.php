<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timed Popup Form</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">


    
   
</head>
<body>

    

    <!-- === POPUP HTML STRUCTURE === -->
    <div id="leadPopup" class="popup-overlay">
        <div class="popup-box">
            <!-- Close Button -->
            <button class="popup-close" id="closePopup">&times;</button>
            
            <h2>Get Free Consultation</h2>
            <p>Enter your details and our team will contact you shortly.</p>
            
            <!-- Form (Filhal backend integration ke bina, action ko baad mein PHP file par set kar sakte hain) -->
            <form id="leadForm" action="" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>
    </div>

    <!-- === JAVASCRIPT FOR 1-MINUTE TIMER & POPUP CONTROL === -->
    
<script src="/js/main.js"></script>
</body>
</html>