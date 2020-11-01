const itemLayout = {

    data() {
        return {
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
                    id: 'Cosméticas y Cuidado Personal',
                    name: ['Maquillaje', 'Protección de la Piel', 'Cuidado del Cabello', 'Fragancia', 'Cuidado de Pies, Manos y Uñas', 'Accesorios', 'Afeitado y Depilación', 'Cuidado Personal', 'Cuidado Bucal']
                },
                {
                    id: 'Ropa para Mujer',
                    name: ['Ropa', 'Zapatos', 'Joyería', 'Relojes', 'Bolsos', 'Accesorios', 'Moda de Hombres', 'Moda para Niñas', 'Moda para Niños']
                },
                {
                    id: 'Ropa para Hombre',
                    name: ['Ropa', 'Zapatos', 'Relojes', 'Accesorios', 'Moda para Mujeres', 'Moda para Niños', 'Moda para Niñas']
                },
                {
                    id: 'Ropa para Niña',
                    name: ['Ropa', 'Zapatos', 'Joyería', 'Relojes', 'Accesorios', 'Moda de Hombres', 'Moda para Niñas', 'Moda para Niños']
                },
                {
                    id: 'Ropa para Niño',
                    name: ['Ropa', 'Zapatos', 'Relojes', 'Accesorios', 'Moda para Mujeres', 'Moda para Niños', 'Moda para Niñas']
                },
                {
                    id: 'Hogar y Cocina',
                    name: ['Electrodomésticos', 'Comedor y Cocina', 'Cama', 'Bañera', 'Mueble', 'Decoración', 'Mural', 'Iluminación', 'Ventilación', 'Refrigeración', 'Planchas y Vapores', 'Aspiradoras', 'Almacenamiento y Organización', 'Suministros de Limpieza']
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
                    name: ['Deportes', 'Recreativo', 'Fitness']
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
            selected: '',
            selectedSize: '',
            selectedImage: null,
            moreImages: [],
            
            variantes: [
                {
                imageListed: [],
                color: "red",
                sizes: [
                {
                    unidad: '23',
                    tamano:'23',
                    cantidad: '23',
                    precio: '23',

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
           formData.append('nombre', this.nombre);
           formData.append('marca', this.marca);
           formData.append('descripcion', this.descripcion);
           formData.append('categoria', this.categorySelected.id);
           formData.append('subcategoria', this.subCategorySelected);
           formData.append('store_id', store_id);
           formData.append('store_name', store_name);
           formData.append('user_id', user_id);
            
           formData.append('variantes', JSON.stringify(this.variantes));
           formData.append('image', this.selectedImage, this.selectedImage.name);
           formData.append('fileNamed', this.selectedImage.name);

           for(var i = 0; i < this.moreImages.length; i++){
            formData.append('moreImages[]', this.moreImages[i], this.moreImages[i].name);

               formData.append('moreImagesNames[]', this.moreImages[i].name)
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
        addFind: function () {
            
            this.variantes.push({
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
              this.moreImages = imageList;
              console.log(this.moreImages);
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
        


       
    }

}

Vue.createApp(itemLayout).mount('#itemLayout');
