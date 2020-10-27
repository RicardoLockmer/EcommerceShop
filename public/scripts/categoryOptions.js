const categoriesApp = {
    
    data(){ return { 
        categorySelected: '',
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

        ]
    }
    }
}
Vue.createApp(categoriesApp).mount('#app');