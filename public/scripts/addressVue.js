const provincias = {

    data() {
        return {
            addressSelected: '',
            addresses: [{
                provincia: 'Atlántida',
                canton: ['San José', 'Escazú', 'Desamparados', 'Puriscal', 'Tarrazú', 'Aserrí', 'Mora', 'Goicoechea', 'Santa Ana', 'Alajuelita', 'Vázquez de Coronado', 'Acosta', 'Tibás', 'Moravia', 'Montes de Oca', 'Turrubares', 'Dota', 'Curridabat', 'Pérez Zeledón', 'León Cortés Castro']
            },
            {
                provincia: 'Colón',
                canton: ['Alajuela', 'San Ramón', 'Grecia', 'San Mateo', 'Atenas', 'Naranjo', 'Palmares', 'Poás', 'Orotina', 'San Carlos', 'Zarcero', 'Sarchí', 'Upala', 'Los Chiles', 'Guatuso', 'Río Cuarto']
            },
            {
                provincia: 'Comayagua',
                canton: ['Cartago', 'Paraíso', 'La Unión', 'Jiménez', 'Turrialba', 'Alvarado', 'Oreamuno', 'El Guarco']
            },
            {
                provincia: 'Copán',
                canton: ['Heredia', 'Barva', 'Santo Domingo', 'Santa Bárbara', 'San Rafael', 'San Isidro', 'Belén', 'Flores', 'San Pablo', 'Sarapiquí']
            },
            {
                provincia: 'Cortés',
                canton: ['Liberia', 'Nicoya', 'Santa Cruz', 'Bagaces', 'Carrillo', 'Cañas', 'Abangares', 'Tilarán', 'Nandayure', 'La Cruz', 'Hojancha']
            },
            {
                provincia: 'Choluteca',
                canton: ['Puntarenas', 'Esparza', 'Buenos Aires', 'Montes de Oro', 'Osa', 'Quepos', 'Golfito', 'Coto Brus', 'Parrita', 'Corredores', 'Garbito']
            },
            {
                provincia: 'El Paraíso',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Francisco Morazán',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Gracias a Dios',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Intibucá',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Islas de la Bahía',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'La Paz',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Lempira',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Ocotepeque',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Olancho',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Santa Bárbara',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            },
            {
                provincia: 'Valle',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            }
                , {
                provincia: 'Yoro',
                canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo']
            }
            ]
        }
    }
}


Vue.createApp(provincias).mount('#appAd');