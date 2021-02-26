const BPONE = {

    data() {
        return {
          addressSelected: '',
        addresses: [{
                provincia:'San José',
                canton: ['San José', 'Escazú', 'Desamparados', 'Puriscal', 'Tarrazú', 'Aserrí', 'Mora', 'Goicoechea', 'Santa Ana', 'Alajuelita', 'Vázquez de Coronado', 'Acosta', 'Tibás', 'Moravia', 'Montes de Oca', 'Turrubares', 'Dota', 'Curridabat', 'Pérez Zeledón', 'León Cortés Castro' ] 
        },
        {
            provincia:'Alajuela',
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
        ],

            errors: [],

            showAddress: false,
            provincia: '',
            canton: '',
            direccion: '',
            phoneNumber: '',
            codigoPostal: '',
            pais: '',
            persona: '',
            infoAdicional: '',

            
            precioEnvio: '',
            precioTotal: '',
            qty: '',

            cardName: '',
            cardNum: '',
            cardMonth: '',
            cardYear: '',
            cardCvv: '',

            formConfirmation: false,
        };
    },
    
    methods: {
       
        FetchADDR: function (){
          let lokid = document.getElementById("LOKid").value;
          let qty = document.getElementById("CAid").value;
          axios.get('/ADDR', {
            params: {
              linkId: lokid,
              qty: qty
            } 
          }).then( x => {
            this.showAddress = !this.showAddress;
            this.provincia = x.data[0];
            this.canton = x.data[1];
            this.direccion = x.data[2];
            this.phoneNumber = x.data[3];
            this.codigoPostal = x.data[4];
            this.pais = x.data[5];
            this.persona = x.data[6];
            this.infoAdicional = x.data[7];
            this.precioEnvio = x.data[8];
        this.precioTotal = x.data[9];
            
             }).catch((error) => {
                console.log(error);
              });
        },

        newAddr: function(){
          let lokid = document.getElementById("LOKid").value;
          let qty = document.getElementById("CAid").value;
          let prov = this.addressSelected.provincia;

          console.log(this.addressSelected.provincia);
          var fd = new FormData();
          fd.append('linkId', lokid);
          fd.append('qty', qty);
          fd.append('provincia', prov);
          axios.post('/newADDR', fd, {
            headers: {
              'Content-Type': 'multipart/form-data'
          }
            
        }).then( x => {
        this.precioEnvio = x.data[0];
        this.precioTotal = x.data[1];
        
         }).catch((error) => {
            console.log(error);
          });

        },
        checkForm: function () {
          if (this.cardName && this.cardNum && this.cardMonth && this.cardYear && this.cardCvv) {
                axios.get('/drumroll', {
                 
                  params: {
                      
                      cName: this.cardName,
                      cNumber: this.cardNum,
                      cMonth: this.cardMonth,
                      cYear: this.cardYear,
                      cCvv: this.cardCvv 
                      
                  } 
              }).then( x => {
                
               var exito = x.data;
              
                
                if (this.cardName && this.cardNum && this.cardMonth && this.cardYear && this.cardCvv) {
                  this.formConfirmation = !this.formConfirmation; 
                  const el = this.$el.getElementsByClassName('SKRILL')[0];
                    if (el) {
                      el.scrollIntoView({behavior: 'smooth'});
                    }
                  }
          
              

              }).catch((error) => {
                
                  console.log(error);
              });
              e.preventDefault();
            } else {
              
              alert('Datos Invalidos')
            };
        },

          BYU:  function(){
                alert("COMPRADO!")
          }

        }
       
        

}


Vue.createApp(BPONE).mount('#BPONE');




    

