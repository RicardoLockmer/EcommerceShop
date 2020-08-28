var app = new Vue({
    el: '#app',
    data: {
        selected: '',
        products: [{
                id: 'Hombres',
                name: ['Camisas', 'Accesorios', 'Deportivo', 'Formal', 'Pantalones', 'Verano']
            },
            {
                id: 'Mujeres',
                name: ['Blusas', 'Accesorios', 'Deportivo', 'Formal', 'Pantalones', 'Faldas', 'Verano', 'Vestidos']
            },
            {
                id: 'Accesorios',
                name: 'Deportivo'
            },
            {
                id: 'Niños',
                name: 'Formal'
            },
            {
                id: 'Mascotas',
                name: 'Pantalones'
            },
            {
                id: 'Tecnologia',
                name: 'Verano'
            },
            {
                id: 'Hogar',
                name: 'Verano'
            },
            {
                id: 'Oficina',
                name: 'Verano'
            },
            {
                id: 'Automovil',
                name: 'Verano'
            },
            {
                id: 'Recreativo',
                name: 'Verano'
            },
            {
                id: 'Bebes',
                name: 'Verano'
            },
            {
                id: 'Artesanal',
                name: 'Verano'
            },
            {
                id: 'Belleza',
                name: 'Verano'
            }

        ]

    }
})
