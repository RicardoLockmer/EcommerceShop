const MCTG = {

    data() {
        return {
            category: [{key:'Hombres',value:'Hombre'},{key:'Mujeres',value:'Mujer'},{key:'Mascotas',value:'Mascota'},{key:'Hogar',value:'Hogar'},{key:'Cocina',value:'Cocina'},{key:'Decoración',value:'Decoracion'},{key:'Deportes',value:'Deporte'}, {key:'Computadoras',value:'Computadoras'}],
            allCategories: [{


                products1: [{
                    category: 'Electrónica',
                    subcategory: ['Accesorios', 'Cámara y Fotografía', 'Accesorios de Vehículo', 'Celulares y Accesorios', 'Computadoras y Accesorios', 'GPS y Navegación', 'Audífonos', 'Sistema de Audio', 'Oficina', 'Audio y Video Portátil', 'Seguridad y Vigilancia', 'Televisión y Video', 'Consolas y Accesorios', 'Proyectores', 'Tecnología Portátil'  ]
                },
                {
                    category: 'Oficina',
                    subcategory: ['Muebles', 'Accesorios', 'Papelería', 'Decoración', 'Escritura', 'Impresión', 'Electrónica']
                },
                {
                    category: 'Computadoras', 
                    subcategory: ['Accesorios', 'Componentes', 'Computadoras y Tablets', 'Componentes Exteriores', 'Accesorios para Laptop', 'Monitores', 'Accesorios de Red', 'Regletas y Protectores', 'Impresoras', 'Escáneres', 'Accesorios para Tablets']
                },
                {
                    category: 'Casa Inteligente',
                    subcategory: ['Luces', 'Cerradura de Puertas', 'Cámaras', 'Enchufes', 'Termostatos', 'Televisión', 'Altavoces', 'Cocina', 'Aspiradoras', 'Impresoras', 'Red y WiFi']
                },
                {
                    category: 'Artesanal',
                    subcategory: ['Suministros de Pintura, Dibujo y Arte', 'Bisutería y Joyas', 'Elaboración', 'Tela', 'Decoración de Tela', 'Tejer y Crochet', 'Costura', 'Grabado', 'Estampados', 'Coser', 'Suministros para Fiestas', 'Suministros para Regalos' ]
                },],
            },
             {  products2:[{
                category: 'Accesorios Automóvil',
                subcategory: ['Cuidado de Automóvil', 'Electrónica y Accesorios', 'Accesorios para Exterior', 'Accesorios para Interior', 'Luces e Iluminación', 'Motocicletas', 'Aceites y Fluidos', 'Pintura', 'Accesorios y Piezas de Rendimiento', 'Repuestos', 'Accesorios para RV', 'Neumáticos y Ruedas', 'Herramientas y Equipo']
            },
            {
                category: 'Bebes',
                subcategory: ['Actividad y Entretenimiento', 'Ropa y Accesorios', 'Juguetes para Bebe y Niños Pequeños', 'Cuidado del Bebe', 'Asiento de Automóvil y Accesorios', 'Cambio de Pañales', 'Alimentación', 'Regalos', 'Guardería', 'Entrenamiento para ir al Baño', 'Embarazo y Maternidad', 'Seguridad', 'Coches y Accesorios', 'Equipo de Viaje']
            },
            {
                category: 'Cosméticos y Cuidado Personal',
                subcategory: ['Maquillaje', 'Protección de la Piel', 'Cuidado del Cabello', 'Fragancia', 'Cuidado de Pies, Manos y Uñas', 'Accesorios', 'Afeitado y Depilación', 'Cuidado Personal', 'Cuidado Bucal', 'Cuidado Femenino', 'Belleza']
            },
            {
                category: 'Mujer',
                subcategory: ['Ropa', 'Calzado', 'Zapatos', 'Tacones', 'Flats', 'Tennis','Blusas', 'Vestidos', 'Formal', 'Etiqueta', 'Casual', 'Pantalones', 'Leggins',  'Joyería', 'Relojes', 'Bolsos', 'Accesorios', 'Deporte', 'Ropa Interior', 'Maternidad', 'Ropa Verano', 'Calcetines']
            },
            {
                category: 'Hombre',
                subcategory: ['Ropa', 'Calzado Casual', 'Tennis', 'Zapatos', 'Ropa Formal', 'Ropa Casual', 'Pantalones', 'Billeteras', 'Ropa Interior', 'Calcetines', 'Relojes', 'Accesorios', 'Deportes', 'Verano']
            },],
            },
            {
                products3: [{
                    category: 'Niña',
                    subcategory: ['Ropa', 'Calzado', 'Joyería', 'Relojes', 'Accesorios', 'Verano']
                },
                {
                    category: 'Niño',
                    subcategory: ['Ropa', 'Calzado', 'Relojes', 'Accesorios', 'Verano']
                },
                {
                    category: 'Hogar',
                    subcategory: ['Electrodomésticos','Utensilios', 'Comedor y Cocina', 'Cama', 'Bañera', 'Muebles', 'Decoración', 'Mural', 'Iluminación', 'Ventilación', 'Planchas y Vapores', 'Aspiradoras', 'Almacenamiento y Organización', 'Suministros de Limpieza','Alfombras', 'Cortinas','Escritorios','Lamparas de Piso','Mesas de Noche', 'Sillas']
                },
                {
                    category: 'Lavanderia',
                    subcategory: ['Electrodomésticos','Utensilios', 'Suministros', 'Manteleria', 'Accesorios', 'Muebles', 'Decoración', 'Limpieza', 'Ventilación', 'Planchas y Vapores', 'Aspiradoras', 'Almacenamiento y Organización']
                },
                {
                    category: 'Cocina',
                    subcategory: ['Cubiertos', 'Manteleria', 'Utensilios', 'Recipientes', 'Cristalería', 'Jarros y Botellas', 'Limpieza', 'Decoración', 'Refrigeración', 'Accesorios', 'Encimeras', 'Electrodomésticos','Almacenamiento']
                },],
            },
            {
                
                products4: [{
                    category: 'Cuarto de Baño',
                    subcategory: ['Bañera', 'Ducha', 'Papel Higienico', 'Decoraciones', 'Toallas', 'Jabonera', 'Escobillas', 'Equipo de Baño', 'Inodoros', 'Accesorios', 'Encimeras', 'Limpieza']
                },
                {
                    category: 'Patio y Jardin',
                    subcategory: ['Muebles de Jardin', 'Jardin', 'Patio', 'Decoraciones', 'Cobertizo', 'Almacenamiento', 'Iluminación', 'Plantas', 'Parrilla y Cocina Exterior', 'Pergolas','Toldos','Sombrillas para Patio','Accesorios para Parrilla','Muebles para Exterior','Herramientas de Jardin', 'Riego', 'Mantenimiento', 'Piscinas', 'Suministros de Piscina', 'Limpieza']
                },
                {
                    category: 'Equipaje',
                    subcategory: ['Equipaje de Mano', 'Mochilas', 'Bolsas de Ropa', 'Bolsos de Viaje', 'Accesorios', 'Maletas', 'Equipaje para Niños', 'Paraguas']
                },

                {
                    category: 'Mascotas',
                    subcategory: ['Perros', 'Gatos', 'Peces y Mascotas Acuáticas', 'Aves', 'Caballos', 'Reptiles y Anfibios', 'Animales Pequeños']
                },
                {
                    category: 'Deportes y mas',
                    subcategory: ['Deportes', 'Recreativo', 'Fitness', 'Equipo y Maquinaria', 'Ejercicio']
                }
    
                ]
            },
            {   products5:[{
                category: 'Herramientas de Trabajo',
                subcategory: ['Herramientas y Mejoras para el Hogar', 'Accesorios', 'Materiales de Construcción', 'Eléctrico', 'Accesorios de cocina y Baño', 'Bombillos', 'Iluminación', 'Ventiladores de Techo', 'Herramientas de Medición', 'Herramientas de Diseño', 'Suministros de Pintura', 'Tratamientos de Pared', 'Herramientas Manuales', 'Herramientas Eléctricas']
            },
            {
                category: 'Juguetes y Juegos',
                subcategory: ['Figuras de Acción', 'Arte y Artesanía', 'Juguete para Bebes', 'Juguetes para Niños Pequeños', 'Juguetes de Construcción', 'Muñecas y Accesorios', 'Tecnología para Niños', 'Juegos', 'Juguetes para Adultos', 'Aficiones', 'Mobiliario, Decoración y Almacenamiento para Niños', 'Aprendizaje y Educación', 'Juguetes de Bromas', 'Suministros para Fiestas', 'Marionetas', 'Rompecabezas', 'Juegos al Aire Libre', 'Peluches', 'Control Remoto', 'Triciclos', 'Scooter', 'Vagones']
            }],
        },
          ],
        
        }
    },

    
    methods: {
       
       
        

       
    }

}

Vue.createApp(MCTG).mount('#MCTG');




    

