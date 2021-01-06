var currentTab = 2;
showTab(currentTab);

function showTab(n) {

    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "inline";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("subBtn").style.display = "inline";
    } else {
        document.getElementById("nextBtn").innerHTML = "Siguiente";
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("subBtn").style.display = "none";
    }

    fixStepIndicator(n)
}

function nextPrev(n) {

    var x = document.getElementsByClassName("tab");

    if (n == 1 && !validateForm()) return false;

    x[currentTab].style.display = "none";

    currentTab = currentTab + n;

    if (currentTab >= x.length) {

        document.getElementById("regForm").submit();
        return false;
    }

    showTab(currentTab);
}

function validateForm() {

    var x, y, i, z, f, xl, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    select = x[currentTab].getElementsByTagName("select");
    f = document.getElementById("myFiles");
    xl = x[currentTab].getElementsByTagName("small");
    z = x[currentTab].getElementsByTagName("textarea");

    for (i = 0; i < y.length; i++) {

        if (y[i].value == "") {

            y[i].className += " is-invalid";

            valid = false;
        }




    }
    for (i = 0; i < select.length; i++) {
        if (!select[i].value) {
            select[i].className += " is-invalid"
            valid = false;
        }
    }
    for (i = 0; i < z.length; i++) {

        if (z[i].value == "") {

            z[i].className += " is-invalid";


            valid = false;
        }
        if (z[i].value.length > 450) {
            valid = false;
            xl[i].className += " exceededLimit";
            z[i].className += " is-invalid";
            alert('Excede los 450 caracteres.');
        } else {
            xl[i].className -= " exceededLimit";
            xl[i].className = " text-muted";
        }
        // for (i = 0; i < f.length; i++) {

        //     if (f[i].value == "") {

        //         f[i].className += " is-invalid";

        //         valid = false;
        //     }

        // }
    }

    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {

    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }

    x[n].className += " active";
}
