const provincias = {

    data() {
        return {
            addressSelected: '',
            addresses: [{
                provincia: 'Atlántida',
                canton: ['Tela', 'La Ceiba']
            },
            {
                provincia: 'Colón',
                canton: ['Trujillo', 'Tocoa']
            },
            {
                provincia: 'Comayagua',
                canton: ['Comayagua', 'Siguatepeque']
            },
            {
                provincia: 'Copán',
                canton: ['Santa Rosa de Copán', 'La Entrada']
            },
            {
                provincia: 'Cortés',
                canton: ['San Pedro Sula', 'Choloma', 'Puerto Cortés', 'La Lima', 'Villanueva', 'Cofradía', 'Potrerillos']
            },
            {
                provincia: 'Choluteca',
                canton: ['Choluteca']
            },
            {
                provincia: 'El Paraíso',
                canton: ['Danlí', 'El Paraíso', 'Yuscarán']
            },
            {
                provincia: 'Francisco Morazán',
                canton: ['Tegucigalpa', 'Comayaguela', 'Talanga', 'Guaimaca']
            },
            {
                provincia: 'Gracias a Dios',
                canton: ['Puerto Lempira']
            },
            {
                provincia: 'Intibucá',
                canton: ['Intibucá', 'La Esperanza']
            },
            {
                provincia: 'Islas de la Bahía',
                canton: ['Coxen Hole (Roatán)']
            },
            {
                provincia: 'La Paz',
                canton: ['	La Paz']
            },
            {
                provincia: 'Lempira',
                canton: ['Gracias']
            },
            {
                provincia: 'Ocotepeque',
                canton: ['Nueva Ocotepeque']
            },
            {
                provincia: 'Olancho',
                canton: ['Catacamas', 'Juticalpa']
            },
            {
                provincia: 'Santa Bárbara',
                canton: ['Santa Bárbara']
            },
            {
                provincia: 'Valle',
                canton: ['San Lorenzo', 'Nacaome']
            }
                , {
                provincia: 'Yoro',
                canton: ['El Progreso', 'Olanchito', 'Yoro', 'Santa Rita', 'Morazán']
            }
            ]
        }
    }
}


Vue.createApp(provincias).mount('#appAd');