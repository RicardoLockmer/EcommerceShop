const itemLayout = {

    data() {
        return {
            tutorial: false,
            vistaPrevia: false,
            nombre: '',
            marca: '',
            unit: '',
            descripcion: '',
            mainImage: '',
            image: '',
            categorySelected: '',
            subCategorySelected: '',
            products: [{
                    id: 'Electrónica',
                    name: ['Accesorios', 'Cámara y Fotografía', 'Accesorios de Vehículo', 'Celulares y Accesorios', 'Computadoras y Accesorios', 'GPS y Navegación', 'Audífonos', 'Sistema de Audio', 'Oficina', 'Audio y Video Portátil', 'Seguridad y Vigilancia', 'Televisión y Video', 'Consolas y Accesorios', 'Proyectores', 'Tecnología Portátil'  ]
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
                    name: ['Suministros de Pintura, Dibujo y Arte', 'Bisutería y Joyas', 'Elaboración', 'Tela', 'Decoración de Tela', 'Tejer y Crochet', 'Costura', 'Grabado', 'Estampados', 'Coser', 'Suministros para Fiestas', 'Suministros para Regalos' ]
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
                    name: ['Ropa', 'Calzado', 'Joyería', 'Relojes', 'Bolsos', 'Accesorios y mas', 'Deporte', 'Ropa Interior', 'Maternidad', 'Ropa Verano']
                },
                {
                    id: 'Hombre',
                    name: ['Ropa', 'Calzado', 'Relojes', 'Accesorios y mas', 'Deportes', 'Verano']
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
                    id: 'Hogar y Cocina',
                    name: ['Electrodomésticos','Baño', 'Comedor y Cocina', 'Cama', 'Bañera', 'Mueble', 'Decoración', 'Mural', 'Iluminación', 'Ventilación', 'Refrigeración', 'Planchas y Vapores', 'Aspiradoras', 'Almacenamiento y Organización', 'Suministros de Limpieza']
                },
                {
                    id: 'Patio y Jardin',
                    name: ['Muebles de Jardin', 'Jardin', 'Patio', 'Decoraciones', 'Cobertizo', 'Almacenamiento', 'Iluminación', 'Plantas', 'Parrilla y Cocina Exterior']
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
            allCRChecked: false,
           
            provincias: [
                { 
                    gratis: false,
                    provincia: 'San José',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia:'Alajuela',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia:'Cartago',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia:'Heredia',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia:'Guanacaste',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia:'Puntarenas',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                },
                {
                    gratis: false,
                    provincia:'Limón',
                    precioEnvio: 0,
                    tiempoEntrega: '',
                }
                    ],
            SelectedProv: [],
            myProvincias: [],
            empresaEnvios: '',
            selected: '',
            selectedSize: '',
            selectedType: '',
            selectedImage: null,
            peso: '',
            dimensiones: '',
            specs: [{
                specName: 'Material',
                specValue: 'Plastico'
            }],
            variantes: [
                {
                moreImages: [],
                imageListed: [],
                color: "",
                sizes: [
                {
                    unidad: '',
                    tamano:'',
                    cantidad: '',
                    precio: '',

                }
                ],
                }
            ]
        };
    },
    
    methods: {
       
        saveData: function() {
           let formData = new FormData();
           let store_id = document.getElementById("store_id").value;
           let store_name = document.getElementById("store_name").value;
           let user_id = document.getElementById("user_id").value;
           formData.append('empresaEnvios', this.empresaEnvios);
           formData.append('tipoVariante', this.selectedType);
           formData.append('nombre', this.nombre);
           formData.append('marca', this.marca);
           formData.append('descripcion', this.descripcion);
           formData.append('categoria', this.categorySelected.id);
           formData.append('subcategoria', this.subCategorySelected);
           formData.append('store_id', store_id);
           formData.append('store_name', store_name);
           formData.append('user_id', user_id);
           formData.append('peso', this.peso);
           formData.append('dimensiones', this.dimensiones);
           formData.append('empresa', this.empresaEnvios);
           formData.append('specs', JSON.stringify(this.specs));
           formData.append('variantes', JSON.stringify(this.variantes));
           formData.append('provincias', JSON.stringify(this.provincias));
           formData.append('image', this.selectedImage, this.selectedImage.name);
           formData.append('fileNamed', this.selectedImage.name);
            for(var i=0; i < this.variantes.length; i++){
                let images = this.variantes[i].moreImages;
                images.forEach(img => {

                    formData.append("moreImages["+i+"][]", img)

                    }
                )
               

               
            }
        

            
            axios.post('/nuevo-producto', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            ).then( function (response) {
                console.log(response);
             })
            //  .then((response) => {
               
            //    this.nombre = response.data.bpi;
            //   })
        },
        addSpec: function(){
            this.specs.push(
                {
                    specName: '',
                    specValue: ''
                }
            )
        },
        
        addFind: function () {
            
            this.variantes.push({
                moreImages: [],
                color: '',
                imageListed: [],
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
        onFileChange(e) {
            this.selectedImage = document.getElementById("MIMG").files[0];
            var files = e.target.files || e.dataTransfer.files;
        
            
            console.log(this.selectedImage);
            if (!files.length)
                return;
                
            this.createImage(files[0]);
         
        },
        
        createImage(file) {

            var image = new Image();
            var reader = new FileReader();
            var vm = this;
            reader.onload = (e) => {
                vm.image = e.target.result;
            };
            
            reader.readAsDataURL(file);
        },
        createImages(e, index) {
              let imageList =  e.target.files || e.dataTransfer.files;
              for(var i = 0; i < imageList.length; i++){
                
                    this.variantes[index].moreImages.push(imageList[i]);
                
            
              }
              for(var e = 0; e < this.variantes[index].moreImages.length; e++){
              console.log(this.variantes[index].moreImages[e]);
              }
              if (this.variantes[index].imageListed.length > 0){
                  this.variantes[index].imageListed.splice(0, this.variantes[index].imageListed.length);

              }
                    for(var i = 0; i < imageList.length; i++){
                        let reader = new FileReader();
                        reader.readAsDataURL(imageList[i]);
                        reader.onload = e => {
                            
                                this.variantes[index].imageListed.push(e.target.result); 
                            
                        }
                    }
                
            },
        removeImage: function (e) {
            this.image = '';
            const input = this.$refs.mainImage;
            input.type = 'text';
            input.type = 'file';
        },
        quitarVideo: function() {
            this.tutorial = !this.tutorial;
        },
        quitarVistaPrevia: function(){
            this.vistaPrevia = !this.vistaPrevia;
        },
        AllCR: function() {
            if(!this.allCRChecked){
            this.SelectedProv = [];
            for(var x = 0; x < this.provincias.length; x++){
            this.SelectedProv.push(this.provincias[x].provincia);
            this.allCRChecked = true;
            }
            } else {
                this.SelectedProv = [];
                this.allCRChecked = false;
            }
        },
        

       
    }

}

Vue.createApp(itemLayout).mount('#itemLayout');




    

