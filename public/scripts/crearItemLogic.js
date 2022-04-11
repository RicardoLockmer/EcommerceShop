
const itemLayout = {

    data() {
        return {
            products: [{
                id: 'Electrónica',
                name: ['Accesorios', 'Cámara y Fotografía', 'Accesorios de Vehículo', 'Celulares y Accesorios', 'Computadoras y Accesorios', 'GPS y Navegación', 'Audífonos', 'Sistema de Audio', 'Oficina', 'Audio y Video Portátil', 'Seguridad y Vigilancia', 'Televisión y Video', 'Consolas y Accesorios', 'Proyectores', 'Tecnología Portátil']
            },
            {
                id: 'Oficina',
                name: ['Muebles', 'Accesorios', 'Papelería', 'Decoración', 'Escritura', 'Impresión', 'Electrónica']
            },
            {
                id: 'Computadoras',
                name: ['Accesorios', 'Componentes', 'Computadoras y Tablets', 'Componentes Exteriores', 'Accesorios para Laptop', 'Monitores', 'Accesorios de Red', 'Regletas y Protectores', 'Impresoras', 'Escáneres', 'Accesorios para Tablets']
            },
            {
                id: 'Casa Inteligente',
                name: ['Luces', 'Cerradura de Puertas', 'Cámaras', 'Enchufes', 'Termostatos', 'Televisión', 'Altavoces', 'Cocina', 'Aspiradoras', 'Impresoras', 'Red y WiFi']
            },
            {
                id: 'Artesanal',
                name: ['Suministros de Pintura, Dibujo y Arte', 'Bisutería y Joyas', 'Elaboración', 'Tela', 'Decoración de Tela', 'Tejer y Crochet', 'Costura', 'Grabado', 'Estampados', 'Coser', 'Suministros para Fiestas', 'Suministros para Regalos']
            },
            {
                id: 'Accesorios Automóvil',
                name: ['Cuidado de Automóvil', 'Electrónica y Accesorios', 'Accesorios para Exterior', 'Accesorios para Interior', 'Luces e Iluminación', 'Motocicletas', 'Aceites y Fluidos', 'Pintura', 'Accesorios y Piezas de Rendimiento', 'Repuestos', 'Accesorios para RV', 'Neumáticos y Ruedas', 'Herramientas y Equipo']
            },
            {
                id: 'Bebes',
                name: ['Actividad y Entretenimiento', 'Ropa y Accesorios', 'Juguetes para Bebe y Niños Pequeños', 'Cuidado del Bebe', 'Asiento de Automóvil y Accesorios', 'Cambio de Pañales', 'Alimentación', 'Regalos', 'Guardería', 'Entrenamiento para ir al Baño', 'Embarazo y Maternidad', 'Seguridad', 'Coches y Accesorios', 'Equipo de Viaje']
            },
            {
                id: 'Cosméticos y Cuidado Personal',
                name: ['Maquillaje', 'Protección de la Piel', 'Cuidado del Cabello', 'Fragancia', 'Cuidado de Pies, Manos y Uñas', 'Accesorios', 'Afeitado y Depilación', 'Cuidado Personal', 'Cuidado Bucal', 'Cuidado Femenino', 'Belleza']
            },
            {
                id: 'Mujer',
                name: ['Ropa', 'Calzado', 'Zapatos', 'Tacones', 'Flats', 'Tennis', 'Blusas', 'Vestidos', 'Formal', 'Etiqueta', 'Casual', 'Pantalones', 'Leggins', 'Joyería', 'Relojes', 'Bolsos', 'Accesorios', 'Deporte', 'Ropa Interior', 'Maternidad', 'Ropa Verano', 'Calcetines']
            },
            {
                id: 'Hombre',
                name: ['Ropa', 'Calzado Casual', 'Tennis', 'Zapatos', 'Ropa Formal', 'Ropa Casual', 'Pantalones', 'Billeteras', 'Ropa Interior', 'Calcetines', 'Relojes', 'Accesorios', 'Deportes', 'Verano']
            },
            {
                id: 'Niña',
                name: ['Ropa', 'Calzado', 'Joyería', 'Relojes', 'Accesorios', 'Verano']
            },
            {
                id: 'Niño',
                name: ['Ropa', 'Calzado', 'Relojes', 'Accesorios', 'Verano']
            },
            {
                id: 'Hogar',
                name: ['Electrodomésticos', 'Utensilios', 'Comedor y Cocina', 'Cama', 'Bañera', 'Muebles', 'Decoración', 'Mural', 'Iluminación', 'Ventilación', 'Planchas y Vapores', 'Aspiradoras', 'Almacenamiento y Organización', 'Suministros de Limpieza', 'Alfombras', 'Cortinas', 'Escritorios', 'Lamparas de Piso', 'Mesas de Noche', 'Sillas']
            },
            {
                id: 'Lavanderia',
                name: ['Electrodomésticos', 'Utensilios', 'Suministros', 'Manteleria', 'Accesorios', 'Muebles', 'Decoración', 'Limpieza', 'Ventilación', 'Planchas y Vapores', 'Aspiradoras', 'Almacenamiento y Organización']
            },
            {
                id: 'Cocina',
                name: ['Cubiertos', 'Manteleria', 'Utensilios', 'Recipientes', 'Cristalería', 'Jarros y Botellas', 'Limpieza', 'Decoración', 'Refrigeración', 'Accesorios', 'Encimeras', 'Electrodomésticos', 'Almacenamiento']
            },
            {
                id: 'Cuarto de Baño',
                name: ['Bañera', 'Ducha', 'Papel Higienico', 'Decoraciones', 'Toallas', 'Jabonera', 'Escobillas', 'Equipo de Baño', 'Inodoros', 'Accesorios', 'Encimeras', 'Limpieza']
            },
            {
                id: 'Patio y Jardin',
                name: ['Muebles de Jardin', 'Jardin', 'Patio', 'Decoraciones', 'Cobertizo', 'Almacenamiento', 'Iluminación', 'Plantas', 'Parrilla y Cocina Exterior', 'Pergolas', 'Toldos', 'Sombrillas para Patio', 'Accesorios para Parrilla', 'Muebles para Exterior', 'Herramientas de Jardin', 'Riego', 'Mantenimiento', 'Piscinas', 'Suministros de Piscina', 'Limpieza']
            },
            {
                id: 'Equipaje',
                name: ['Equipaje de Mano', 'Mochilas', 'Bolsas de Ropa', 'Bolsos de Viaje', 'Accesorios', 'Maletas', 'Equipaje para Niños', 'Paraguas']
            },

            {
                id: 'Mascotas',
                name: ['Perros', 'Gatos', 'Peces y Mascotas Acuáticas', 'Aves', 'Caballos', 'Reptiles y Anfibios', 'Animales Pequeños']
            },
            {
                id: 'Deportes y mas',
                name: ['Deportes', 'Recreativo', 'Fitness', 'Equipo y Maquinaria', 'Ejercicio']
            },
            {
                id: 'Herramientas de Trabajo',
                name: ['Herramientas y Mejoras para el Hogar', 'Accesorios', 'Materiales de Construcción', 'Eléctrico', 'Accesorios de cocina y Baño', 'Bombillos', 'Iluminación', 'Ventiladores de Techo', 'Herramientas de Medición', 'Herramientas de Diseño', 'Suministros de Pintura', 'Tratamientos de Pared', 'Herramientas Manuales', 'Herramientas Eléctricas']
            },
            {
                id: 'Juguetes y Juegos',
                name: ['Figuras de Acción', 'Arte y Artesanía', 'Juguete para Bebes', 'Juguetes para Niños Pequeños', 'Juguetes de Construcción', 'Muñecas y Accesorios', 'Tecnología para Niños', 'Juegos', 'Juguetes para Adultos', 'Aficiones', 'Mobiliario, Decoración y Almacenamiento para Niños', 'Aprendizaje y Educación', 'Juguetes de Bromas', 'Suministros para Fiestas', 'Marionetas', 'Rompecabezas', 'Juegos al Aire Libre', 'Peluches', 'Control Remoto', 'Triciclos', 'Scooter', 'Vagones']
            }

            ],
            provincias: [

                {
                    gratis: false,
                    provincia: 'Tegucigalpa',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'San Pedro Sula',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Comayagüela',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Choloma',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'La Ceiba',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'El Progreso',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Villanueva',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Comayagua',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Choluteca',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Puerto Cortés',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Danlí',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Siguatepeque',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia: 'Juticalpa',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                }
            ],
            tutorial: false,
            vistaPrevia: false,
            nombre: '',
            marca: '',
            descripcion: '',
            unit: '',
            mainImage: '',
            image: '',
            selectedCategory: '',
            selectedSubCategory: '',
            allCRChecked: false,
            todoGratis: false,
            SelectedProv: [],
            myProvincias: [],
            empresaEnvios: '',
            selected: '',
            selectedImageSize: '',
            maxFileSize: 4194304,
            selectedSize: '',
            selectedImageHeight: null,
            selectedImageWidth: '',
            maxImageHeight: 1500,
            currentTab: 0,
            selectedType: 'Color',
            otro: '',
            selectedImage: null,
            peso: '',
            saveNewPreset: false,
            isPreset: false,
            presets: [],
            presetId: '',
            presetName: '',
            showPresetInfo: false,
            isPresetSelected: false,
            selectedPresetIndex: 0,
            showSelectedPreset: '',
            presetAllowedCities: [],
            addingItem: false,
            isLoading: false,
            isFailed: false,
            isSuccess: false,

            dimensiones: '',
            specs: [{
                specName: '',
                specValue: ''
            }],
            keyFeatures: [{ feature: '' }],
            variantes: [
                {
                    mainImage: '',
                    moreImages: [],
                    myImagesError: '',
                    imageListed: [],
                    verified: false,
                    color: "",
                    sizes: [
                        {
                            unidad: '',
                            tamano: '',
                            cantidad: '',
                            precio: '',

                        }
                    ],
                }
            ]
        };
    },
    mounted() {

        this.showTab(this.currentTab);
    },
    methods: {
        showTab: function (n) { //displays tab y los botones de next y prev dependiendo en que tab este

            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";

            if (n == 0) { // si es el tab 1 solo mostrar el next button, esconder el boton de previo
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("nextBtn").style.display = "inline";
            } else { // si el tab es 2 o mas mostrar el boton de previo
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) { // si el tab es igual al numero maximo de tabs (- 1 porque comienzan en 0) mostrar el boton de submit_
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("subBtn").style.display = "inline";
            } else {
                document.getElementById("nextBtn").innerHTML = "Siguiente";
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("subBtn").style.display = "none";
            }

            this.fixStepIndicator(n)
        },
        nextPrev: function (n) { // funciones de los botones - pide el cambio de tab a showTab() dependiendo si validateForm() es valido

            var x = document.getElementsByClassName("tab");

            if (n == 1 && !this.validateForm()) return false;

            x[this.currentTab].style.display = "none";

            this.currentTab = this.currentTab + n;

            if (this.currentTab >= x.length) {

                document.getElementById("regForm").submit();
                return false;
            }

            this.showTab(this.currentTab);
        },
        validateForm: function () { // antes de cambiar de tab verifica si todo las reglas se cumplen y aprueba el cambio en nextPrev()

            var x, y, i, z, f, xl, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[this.currentTab].getElementsByTagName("input");
            select = x[this.currentTab].getElementsByTagName("select");
            f = this.selectedImage;
            xl = x[this.currentTab].getElementsByTagName("small");
            z = x[this.currentTab].getElementsByTagName("textarea");

            if (this.currentTab != 3) {
                for (i = 0; i < y.length; i++) {

                    if (y[i].value == "") {

                        y[i].className += " is-invalid";

                        valid = false;
                    }


                }
                // } else {
                //     for(var i = 0; i < this.keyFeatures.length; i++){
                //             if(this.keyFeature[i].feature == ""){
                //                 y[i].className += " is-invalid";

                //             }
                //     }
            }
            for (i = 0; i < select.length; i++) {
                if (!select[i].value) {
                    select[i].className += " is-invalid"
                    valid = false;
                }
            }
            if (this.currentTab != 3) {
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

                }
            }
            if (this.currentTab == 1) {
                if (this.selectedImage == '') {
                    valid = false;
                }
                if (this.selectedImageSize > this.maxFileSize) {
                    valid = false;
                }
                for (var i = 0; i < this.variantes.length; i++) {

                    if (this.variantes[i].moreImages.length == 0) {
                        valid = false
                        break

                    }

                }
            }


            if (valid) {
                document.getElementsByClassName("step")[this.currentTab].className += " finish";
            }
            return valid; // return the valid status
        },
        fixStepIndicator: function (n) { // indica en que paso va dependiendo si click en next o prev

            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }

            x[n].className += " active";
        },
        CHECKER: function (main, index) { //tab3
            if (this.variantes[main].sizes[index].unidad == 'NoAplica') {
                for (var i = 0; i < this.variantes.length; i++) {
                    for (var e = 0; e < this.variantes[i].sizes.length; e++) {
                        this.variantes[i].sizes.splice(1, this.variantes[main].sizes.length);
                        this.variantes[i].sizes[e].unidad = 'NoAplica';
                    }
                }
            } else {
                for (var i = 0; i < this.variantes.length; i++) {
                    for (var e = 0; e < this.variantes[i].sizes.length; e++) {
                        this.variantes[i].sizes[e].unidad = this.variantes[main].sizes[index].unidad;
                    }
                }
            }
        },
        controlVariante: function () {
            if (this.selectedType == 'N/A') {
                for (var i = 0; i < this.variantes.length; i++) {

                    this.variantes.splice(1, this.variantes.length);
                    this.variantes[0].color = '';

                }

            }

        },
        saveData: function () { //envia todo al servidor
            if (this.validateForm()) {
                let formData = new FormData();
                let store_id = document.getElementById("store_id").value;
                let store_name = document.getElementById("store_name").value;
                let user_id = document.getElementById("user_id").value;
                formData.append('empresaEnvios', this.empresaEnvios);
                if (this.selectedType == 'otro') {
                    formData.append('tipoVariante', this.otro);
                } else {
                    formData.append('tipoVariante', this.selectedType);
                }
                formData.append('nombre', this.nombre);
                formData.append('marca', this.marca);
                formData.append('descripcion', this.descripcion);
                formData.append('categoria', this.selectedCategory.id);
                formData.append('subcategoria', this.selectedSubCategory);
                formData.append('store_id', store_id);
                formData.append('store_name', store_name);
                formData.append('user_id', user_id);
                formData.append('peso', this.peso);
                formData.append('dimensiones', this.dimensiones);
                formData.append('empresa', this.empresaEnvios);
                formData.append('specs', JSON.stringify(this.specs));
                formData.append('preset_name', this.presetName);
                formData.append('isNewPreset', JSON.stringify(this.saveNewPreset));
                formData.append('isPreset', JSON.stringify(this.isPreset));
                formData.append('allowed_cities', JSON.stringify(this.showSelectedPreset.allowed_cities));
                formData.append('variantes', JSON.stringify(this.variantes));
                formData.append('provincias', JSON.stringify(this.provincias));
                formData.append('image', this.selectedImage, this.selectedImage.name);
                formData.append('fileNamed', this.selectedImage.name);
                formData.append('keyFeature', JSON.stringify(this.keyFeatures));
                for (var i = 0; i < this.variantes.length; i++) {
                    let images = this.variantes[i].moreImages;
                    images.forEach(img => {
                        formData.append("moreImages[" + i + "][]", img)
                    }
                    )
                }
                this.addingItem = true
                this.isLoading = true;
                axios.post('/nuevo-producto', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
                ).then(function (response) {

                    console.log(response.status);

                }).finally(() => this.isLoading = false, this.isSuccess = true);
            } else {
                alert('Faltan Cosas!!!')
            }

        },
        addSpec: function () {
            this.specs.push(
                {
                    specName: '',
                    specValue: ''
                }
            )
        },
        addFeature: function () {
            this.keyFeatures.push(
                { feature: '' }
            )
        },
        addFind: function () {
            this.variantes.push({
                moreImages: [],
                myImagesError: '',
                imageListed: [],
                verified: false,
                color: "",
                sizes: [
                    {
                        unidad: '',
                        tamano: '',
                        cantidad: '',
                        precio: '',
                    }
                ],
            });
        },
        addSize: function (index) {
            this.variantes[index].sizes.push(
                {
                    unidad: '',
                    tamano: '',
                    cantidad: '',
                    precio: '',
                }
            );
        },
        deleteFind: function (index) {
            console.log(index);
            console.log(this.variantes);
            this.variantes.splice(index, 1);
        },
        deleteSize: function (mainIndex, index) {
            console.log(index);
            console.log(this.variantes);
            this.variantes[mainIndex].sizes.splice(index, 1);
        },
        deleteDetalle: function (index) {
            console.log(index);
            console.log(this.specs[index]);
            this.specs.splice(index, 1);
        },
        deleteFeature: function (index) {
            console.log(index);
            console.log(this.keyFeatures[index]);
            this.keyFeatures.splice(index, 1);
        },
        onFileChange(e) {
            // set IF id i MIMG or indexMainImage
            console.log(e.target);
            this.selectedImage = e.target.files[0];
            var filename = e.target.files[0].name;
            var ext = filename.split('.').pop();
            var files = e.target.files || e.dataTransfer.files;

            if (ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif' || ext == 'webp') {
                this.myImageError = '';
                this.createImage(files[0]);
            } else {
                document.getElementById('MIMG').value = "";
                this.myImageError = "El Archivo no es .jpg, .jpeg o .png";

            }



        },

        createImage(file) {


            var reader = new FileReader();
            var vm = this;

            reader.readAsDataURL(file);
            reader.onload = (e) => {
                var image = new Image();
                vm.image = e.target.result;
                image.src = e.target.result;

                image.onload = function () {
                    var height = this.height;
                    if (height > vm.maxImageHeight) {
                        vm.myImageError = "Excede el Alto de la imagen";
                        vm.image = '';
                        vm.selectedImage = '';
                    }

                }



            };




        },

        createImages(e, index) {
            var imageList = e.target.files || e.dataTransfer.files;

            console.log(imageList);


            for (var i = 0; i < imageList.length; i++) {
                var filename = imageList[i].name;
                var ext = filename.split('.').pop();
                var reader = new FileReader();

                if (this.variantes[index].imageListed.length > 0) {
                    while (this.variantes[index].imageListed.length > 0) {
                        this.variantes[index].imageListed.pop();
                    }
                    while (this.variantes[index].moreImages.length > 0) {
                        this.variantes[index].moreImages.pop();
                    }
                }
                if (ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif' || ext == 'webp') {
                    this.variantes[index].myImagesError = "";
                    this.variantes[index].moreImages.push(imageList[i]);
                    reader.readAsDataURL(imageList[i]);
                    this.variantes[index].verified = true;
                    reader.onload = e => {
                        this.variantes[index].imageListed.push(e.target.result);
                        console.log(imageList.length);
                        console.log(this.variantes[index].moreImages.length);


                    }

                } else {

                    while (this.variantes[index].imageListed.length > 0) {
                        this.variantes[index].imageListed.pop();
                    }
                    while (this.variantes[index].moreImages.length > 0) {
                        this.variantes[index].moreImages.pop();
                    }
                    this.variantes[index].myImagesError = "Una o mas imagenes no cumplen con los requisitos";

                    reader.abort();
                    console.log(imageList.length);
                    console.log(this.variantes[index].imageListed.length)
                    console.log(this.variantes[index].moreImages.length);
                    this.variantes[index].verified = false;
                    break

                }


            }


        },
        removeImage: function (e) {
            this.image = '';
            const input = this.$refs.mainImage;
            input.type = 'text';
            input.type = 'file';
        },
        quitarVideo: function () {
            this.tutorial = !this.tutorial;
        },
        quitarVistaPrevia: function () {
            this.vistaPrevia = !this.vistaPrevia;
        },
        AllCR: function () {
            if (!this.allCRChecked) {
                this.SelectedProv = [];
                for (var x = 0; x < this.provincias.length; x++) {
                    this.SelectedProv.push(this.provincias[x].provincia);
                    this.allCRChecked = true;
                }
            } else {
                this.SelectedProv = [];
                this.allCRChecked = false;
            }
        },
        EnvioGratis: function () {
            if (!this.todoGratis) {

                for (var x = 0; x < this.provincias.length; x++) {
                    this.provincias[x].gratis = true;
                    this.todoGratis = true;
                }
            } else {
                for (var x = 0; x < this.provincias.length; x++) {
                    this.provincias[x].gratis = false;

                }
                this.todoGratis = false;
            }
        },

        savePreset: function () {
            this.saveNewPreset = !this.saveNewPreset;

        },

        usePreset: function () {
            this.saveNewPreset = false;
            this.isPresetSelected = !this.isPresetSelected;

            this.provincias.forEach(provincia => {
                provincia.tiempoEntrega = '';
                provincia.precioEnvio = 0;
                this.SelectedProv = [];
            });
            this.isPreset = !this.isPreset;
            let store_id = document.getElementById("store_id").value;
            axios.get('/getPresets', {
                params: {
                    store_id: store_id,
                }

            }).then(x => {
                this.presets = x.data[0];

                if (this.isPresetSelected) {
                    this.showSelectedPreset = this.presets[this.selectedPresetIndex];
                } else {
                    this.showSelectedPreset = '';
                }

            })

        },
        showPresetInfos: function (index) {

            this.selectedPresetIndex = index;
            this.showSelectedPreset = this.presets[this.selectedPresetIndex];
            console.log(typeof this.presets[this.isPresetSelected]);

        },
        onSuccess: function () {
            var modal = document.getElementById('UploadSuccess');
            modal.classList.add('animate__animated')
            modal.classList.add('animate__bounce')
            if (modal.style.display == 'none') {
                modal.style.display = 'block';
            } else {
                modal.style.display = 'none';

            }
        },
        ModalLogic: function () {
            var homeLink = document.getElementById('BusinessButton');
            if (homeLink) {
                if (this.isFailed == true) {
                    this.isLoading = false;
                }
                if (this.isSuccess == true) {
                    window.location.replace(homeLink.href);
                }
            } else {
                console.log('Not Finished')
            }
        }



    }

}

Vue.createApp(itemLayout).mount('#itemLayout');






