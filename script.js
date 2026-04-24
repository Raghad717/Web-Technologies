function validateRegister() {
    let errors = [];

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;

    if (name === "") errors.push("Name is required");
    if (email === "") errors.push("Email is required");
    if (phone === "") errors.push("Phone is required");

    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }

    return true;
}

function validateAppointment() {
    let errors = [];

    let user = document.getElementById("user_name").value;
    let date = document.getElementById("date").value;
    let time = document.getElementById("time").value;

    if (user === "") errors.push("User name is required");
    if (date === "") errors.push("Date is required");
    if (time === "") errors.push("Time is required");

    if (errors.length > 0) {
        alert(errors.join("\n"));
        return false;
    }

    return true;
}
