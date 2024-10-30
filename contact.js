 
document.getElementById('contactForm').addEventListener('submit', function(event) {
    console.log("Form submitted, checking reCAPTCHA...");
    const response = grecaptcha.getResponse();
    if (response.length === 0) {
        alert("Please complete the CAPTCHA");
        event.preventDefault(); // Prevent form submission
    }
    else {
        console.log("reCAPTCHA completed. Submitting form.");
    }
});
                
