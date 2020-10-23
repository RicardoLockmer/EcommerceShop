var app = new Vue({
    el: '#appAd',
    data: {
        addressSelected: '',
        addresses: [{
                provincia: 'San José',
                canton: ['San José', 'Escazú', 'Desamparados', 'Puriscal', 'Tarrazú', 'Aserrí', 'Mora', 'Goicoechea', 'Santa Ana', 'Alajuelita', 'Vázquez de Coronado', 'Acosta', 'Tibás', 'Moravia', 'Montes de Oca', 'Turrubares', 'Dota', 'Curridabat', 'Pérez Zeledón', 'León Cortés Castro' ] 
        },
        {
            provincia: 'Alajuela',
            canton: ['Alajuela', 'San Ramón', 'Grecia', 'San Mateo', 'Atenas', 'Naranjo', 'Palmares', 'Poás', 'Orotina', 'San Carlos', 'Zarcero', 'Sarchí', 'Upala', 'Los Chiles', 'Guatuso', 'Río Cuarto' ]
        },
        {
            provincia: 'Cartago',
            canton: ['Cartago', 'Paraíso', 'La Unión', 'Jiménez', 'Turrialba', 'Alvarado', 'Oreamuno', 'El Guarco']
        },
        {
            provincia: 'Heredia',
            canton: ['Heredia', 'Barva', 'Santo Domingo', 'Santa Bárbara','San Rafael', 'San Isidro', 'Belén', 'Flores','San Pablo', 'Sarapiquí']
        },
        {
            provincia: 'Guanacaste',
            canton: ['Liberia', 'Nicoya', 'Santa Cruz', 'Bagaces','Carrillo', 'Cañas', 'Abangares', 'Tilarán','Nandayure', 'La Cruz', 'Hojancha']
        },
        {
            provincia: 'Puntarenas',
            canton: ['Puntarenas', 'Esparza', 'Buenos Aires', 'Montes de Oro', 'Osa', 'Quepos', 'Golfito', 'Coto Brus','Parrita', 'Corredores', 'Garbito']
        },
        {
            provincia: 'Limón',
            canton: ['Limón', 'Pococí', 'Siquirres', 'Talamanca','Matina', 'Guácimo']
        }
        ]

    }


})