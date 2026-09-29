function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var phone = document.getElementById("phone").value;

    // Email validation
    if (!email.includes("@")) {
        alert("Please enter a valid email address with '@'.");
        return false;
    }

    // Password validation
    if (password.length < 8) {
        alert("Password must be exactly 8 characters long.");
        return false;
    }

    // Confirm password match
    if (password !== cpassword) {
        alert("Passwords do not match.");
        return false;
    }

    // Phone number validation
    if (phone.length !== 10 || isNaN(phone)) {
        alert("Please enter a valid 10-digit mobile number.");
        return false;
    }

    return true;
}
// JavaScript to toggle the password visibility for both password fields
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
const confirmPassword = document.querySelector('#cpassword');

  togglePassword.addEventListener('click', function () {
    // Toggle the type attribute for both fields
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    confirmPassword.setAttribute('type', type);

    // Toggle the eye icon
    this.classList.toggle('fa-eye-slash');
});
$(document).ready(function() {
    $(document).on('click', '.close-btn', function() {
        $(this).closest('.error-msg').fadeOut();
});
});
