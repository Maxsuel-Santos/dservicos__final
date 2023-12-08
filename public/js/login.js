/*==================== TOGGLE PASSWORD ====================*/ 
function togglePassword() {
    var passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}

/*==================== FORM VALIDATION WITH MODAL - BOOTSTRAP====================*/ 
function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        $('#emailModal').modal('show');
        return false;
    }

    if (password.length < 8) {
        $('#passModal').modal('show');
        return false;
    }
    
    return true; 
}
