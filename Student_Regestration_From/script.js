function validateForm() {
    let fullname = document.getElementById('fullname').value.trim();
    let email = document.getElementById('email').value.trim();
    let phone = document.getElementById('phone').value.trim();
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
    let errorMsg = document.getElementById('errorMsg');

    errorMsg.innerText = "";

    if(fullname === "") { errorMsg.innerText = "Full Name is required."; return false; }

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!email.match(emailPattern)) { errorMsg.innerText = "Invalid email format."; return false; }

    if(!/^\d{10}$/.test(phone)) { errorMsg.innerText = "Phone must be 10 digits."; return false; }

    if(password.length < 6) { errorMsg.innerText = "Password must be at least 6 characters."; return false; }

    if(password !== confirm_password) { errorMsg.innerText = "Passwords do not match."; return false; }

    return true; // Validation passed
}
