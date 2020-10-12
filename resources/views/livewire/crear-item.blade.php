@extends('mainLayout')



@section('crearItem')
<div class="container">
    <form action="/negocio/{{$store->nombreNegocio}}/nuevo-producto" method="POST" class="forms" enctype="multipart/form-data">
        {{-- CSRF --}}
        @csrf
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>
                Parece que hay un problema!
            </strong>
            {{ $errors->first() }}
        </div>

        @endif
        @error('*')
        <div id="errores">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>
                    Parece que falto algo!
                </strong>
                Revisa que todos los campos estén llenos.

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
        </div>
        @enderror
        {{-- EXTRA --}}
        <input type="text" value="{{ $store->store_id }}" name="store_id" hidden>
        <input type="text" value="{{ $store->nombreNegocio }}" name="store_name" hidden>
        <input type="text" value="{{ Auth::user()->id }}" name="user_id" hidden>
        <div class="myForms" style="width: 90%; margin-left: 6%; border: 2px solid #007bff">
            {{-- FINAL CSRF Y EXTRA --}}
            {{-- FORM DATA COMIENZA --}}
            <div class="myFormData">
                <div>
                    <span style="font-size: 26px;"> <strong>NUEVO PRODUCTO</strong></span>
                    <strong>

                        <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Información Protegida">
                            <svg style="margin:0 0 0 0; font-size: 28px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-plus align-text-bottom text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </a>
                    </strong>
                </div>
                <br>
                {{-- FORM DATA END --}}

                {{-- TAB 1 --}}
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <div style="margin-bottom: 5px;">
                        {{-- NOMBRE PRODUCTO --}}
                        <strong>
                            Nombre Producto
                        </strong>
                        <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Nombre de su producto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </a>
                    </div>

                    <p><input class="form-control" placeholder="Nombre del producto" oninput="this.className = ''" required></p>

                    {{-- FINAL NOMBRE --}}

                    {{-- MARCA --}}
                    <div style="margin-bottom: 5px;">
                        {{-- NOMBRE PRODUCTO --}}
                        <strong>
                            Marca
                        </strong>
                        <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Marca del su producto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </a>
                    </div>

                    <p><input class="form-control" placeholder="Nombre del producto" oninput="this.className = ''" required></p>


                    {{-- FINAL MARCA --}}

                    {{-- DESCRIPCION --}}
                    <div style="margin-bottom: 5px;">
                        <strong>
                            Descripción
                        </strong>
                        <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Describa su producto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </a>
                    </div>
                    <textarea class="form-control char-textarea " style="width: 100%; " placeholder="Descripción" id="textarea" oninput="this.className = ''" data-length=0 value="{{ old('descripcion') }}" maxlength="250" required></textarea>
                    <small class="text-muted"><span class="char-count">0</span>/250 </small>
                </div>
                {{-- FINAL TAB 1 --}}

                {{-- TAB 2 --}}
                <div class="tab">


                    <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
                    <p><input placeholder="Phone..." oninput="this.className = ''"></p>
                </div>

                <div class="tab">Birthday:
                    <p><input placeholder="dd" oninput="this.className = ''"></p>
                    <p><input placeholder="mm" oninput="this.className = ''"></p>
                    <p><input placeholder="yyyy" oninput="this.className = ''"></p>
                </div>

                <div class="tab">Login Info:
                    <p><input placeholder="Username..." oninput="this.className = ''"></p>
                    <p><input placeholder="Password..." oninput="this.className = ''"></p>
                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-outline-primary">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-outline-primary">Next</button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

    </form>
</div>
@endsection

@section('categoryOptions')


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, z, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        z = x[currentTab].getElementsByTagName("textarea");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        for (i = 0; i < z.length; i++) {
            // If a field is empty...
            if (z[i].value == "") {
                // add an "invalid" class to the field:
                z[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }

        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }

</script>
<script type="text/javascript">
    $(".char-textarea").on("keyup", function(event) {
        checkTextAreaMaxLength(this, event);
    });

    /*
    Checks the MaxLength of the Textarea
    -----------------------------------------------------
    @prerequisite:	textBox = textarea dom element
    				e = textarea event
                    length = Max length of characters
    */
    function checkTextAreaMaxLength(textBox, e) {

        var maxLength = parseInt($(textBox).data("length"));


        if (!checkSpecialKeys(e)) {
            if (textBox.value.length < maxLength + 1) textBox.value = textBox.value.substring(0, maxLength);
        }
        $(".char-count").html(maxLength + textBox.value.length);

        return true;
    }
    /*
    Checks if the keyCode pressed is inside special chars
    -------------------------------------------------------
    @prerequisite:	e = e.keyCode object for the key pressed
    */
    function checkSpecialKeys(e) {
        if (e.keyCode != 8 && e.keyCode != 46 && e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40)
            return false;
        else
            return true;
    }

</script>
@endsection
