function ValidateName() { 
    let regName = /^[a-zA-Z]+ [a-zA-Z]+$/;   //Name Contains Only Characters and Spaces between first and Last name.
    let name = document.getElementById("fname_id").value;
    let nameInput = document.getElementById('fname_id');

    if (!regName.test(name)) {
        document.getElementById("nameerror").innerHTML = "Please Enter a Valid Name <i class='fa-solid fa-circle-xmark'></i>";
        nameInput.classList.remove("is-valid");
        nameInput.classList.add("is-invalid");
        return false;
    } else {
        document.getElementById("nameerror").innerHTML = "";
        nameInput.classList.remove("is-invalid");
        nameInput.classList.add("is-valid");
        return true;
    }
}


function ValidateUserName() { 
    let regUserName = /^[a-zA-Z0-9_]+$/; // Username contains only alphanumeric characters and underscores.
    let userName = document.getElementById("uname_id").value;
    let userNameInput = document.getElementById('uname_id');

    if (!regUserName.test(userName)) {
        document.getElementById("usererror").innerHTML = "Please Enter a Valid Username <i class='fa-solid fa-circle-xmark'></i>";
        userNameInput.classList.remove("is-valid");
        userNameInput.classList.add("is-invalid");
        return false;
    } else {
        document.getElementById("usererror").innerHTML = "";
        userNameInput.classList.remove("is-invalid");
        userNameInput.classList.add("is-valid");
        return true;
    }
}


function ValidateEmail() { 
    let regEmail = /^\S+@\S+\.\S+$/; 
    let email = document.getElementById("email_id").value;
   

    if (!regEmail.test(email)) {
        document.getElementById("emailerror").innerHTML = "Please Enter a Valid Email <i class='fa-solid fa-circle-xmark'></i>";
        document.getElementById('email_id').classList.remove("is-valid");
        document.getElementById('email_id').classList.add("is-invalid");
       
        return false;
    } else {
        document.getElementById("emailerror").innerHTML = "";
        document.getElementById('email_id').classList.remove("is-invalid");
        document.getElementById('email_id').classList.add("is-valid");
       
        return true;
    }
}

function ValidatePassword() {
    let password = document.getElementById("password_id").value;
    const MinLength = /.{10,}/m;
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    const hasNumber = /\d/; // Should have at least one number.
   

    let errors = [];

    if (!MinLength.test(password)) {
        errors.push("Length Should be At Least 8 Characters <i class='fa-solid fa-circle-xmark'></i>");
    }

    if (!specialChars.test(password)) {
        errors.push("Should contain at least one special character <i class='fa-solid fa-circle-xmark'></i>");
    }

    if (!hasNumber.test(password)) {
        errors.push("Should contain at least one number <i class='fa-solid fa-circle-xmark'></i>");
    }

    // Display errors if any
    const errorElement = document.getElementById("passworderror");
    const passwordInput = document.getElementById('password_id');
    if (errors.length > 0) {
        errorElement.innerHTML = errors.join("<br>");
        passwordInput.classList.remove("is-valid");
        passwordInput.classList.add("is-invalid");
        return false;
    } else {
        errorElement.innerHTML = "";
        passwordInput.classList.remove("is-invalid");
        passwordInput.classList.add("is-valid");
        return true;
    }
}

function ConfirmPassword() {
    let password = document.getElementById("password_id").value;
    let confirmPassword = document.getElementById("password2_id").value;
    let icon = document.getElementById('confirmIcon');

    if (confirmPassword !== password) {
        document.getElementById("confirmerror").innerHTML = "Passwords don't match <i class='fa-solid fa-circle-xmark'></i>";
        document.getElementById('password2_id').classList.remove("is-valid");
        document.getElementById('password2_id').classList.add("is-invalid");
        icon.style.display = 'none';
        return false;
    } else {
        document.getElementById("confirmerror").innerHTML = "";
        document.getElementById('password2_id').classList.remove("is-invalid");
        document.getElementById('password2_id').classList.add("is-valid");
        icon.style.display = 'inline';
        return true;
    }
}


function ValidatePhone() {
    let regularnumber = /^\d{11}$/;
    let phone = document.getElementById('phone').value;
    let icon = document.getElementById('phoneIcon');

    if (!regularnumber.test(phone)) {
        document.getElementById("PhoneError").innerHTML = "Phone number should be 11 digits <i class='fa-solid fa-circle-xmark'></i>";
        document.getElementById('phone').classList.remove("is-valid");
        document.getElementById('phone').classList.add("is-invalid");
        icon.style.display = 'none';
        return false;
    } else {
        document.getElementById("PhoneError").innerHTML = "";
        document.getElementById('phone').classList.remove("is-invalid");
        document.getElementById('phone').classList.add("is-valid");
        icon.style.display = 'inline';
        return true;
    }
}


function ValidateAddress() {
    const addressRegex = /^[a-zA-Z0-9\s,'-]*$/; // Allowed: letters, digits, spaces, commas, apostrophes, and hyphens only
    let address = document.getElementById('address_id').value;

    if (!addressRegex.test(address)) {
        document.getElementById("AddressError").innerHTML = "Please Enter a Valid Address <i class='fa-solid fa-circle-xmark'></i>";
        document.getElementById('address_id').classList.remove("is-valid");
        document.getElementById('address_id').classList.add("is-invalid");
        return false;
    } else {
        document.getElementById("AddressError").innerHTML = "";
        document.getElementById('address_id').classList.remove("is-invalid");
        document.getElementById('address_id').classList.add("is-valid");
        return true;
    }
}

function ValidateDate() {
    // Regular expression for date format (YYYY-MM-DD)
    const DateRegExp = /^\d{4}-\d{2}-\d{2}$/;
    let DateValue = document.getElementById('bd_id').value;

    if (!DateRegExp.test(DateValue)) {
        document.getElementById("DateError").innerHTML = "Please Enter a Valid Date";
        document.getElementById('bd_id').classList.remove("is-valid");
        document.getElementById('bd_id').classList.add("is-invalid");
        return false;
    } else {
        document.getElementById("DateError").innerHTML = "";
        document.getElementById('bd_id').classList.remove("is-invalid");
        document.getElementById('bd_id').classList.add("is-valid");
        return true;
    }
}






function validateForm(){
    if(ValidateName()&& ValidateEmail() && ValidatePassword() && ConfirmPassword() && ValidateUserName() && ValidatePhone() &&ValidateAddress() && ValidateDate()){
        return true ;
    }
    else{
        return false ;
    }
}

























