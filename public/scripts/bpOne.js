


const BPONE = {

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
      ],
      itemIdentifier: '',
      itemQuantity: '',

      errors: [],

      showAddress: false,
      provincia: '',
      canton: '',
      ciudad: '',
      direccion: '',
      phonePrefix: '+504',
      phoneNumber: '',
      codigoPostal: '',
      pais: '',
      persona: '',
      direccion: '',
      infoAdicional: '',
      isNewAddressSelected: false,

      precioEnvio: '',
      precioTotal: '',
      qty: '',

      cardName: 'hello',
      cardNum: '5555555555',
      cardMonth: '05/05',
      cardYear: '2022',
      cardCvv: '444',
      isBuyable: true,
      formConfirmation: true,
    };
  },
  mounted() {
    this.itemIdentifier = document.getElementById("LOKid").value;
    this.itemQuantity = document.getElementById("CAid").value;
    this.FetchADDR();
  },
  methods: {
    statusChange: function (statusChange) {
      this.showAddress = !statusChange;
      this.isNewAddressSelected = !statusChange;
      if (this.isNewAddressSelected == true) {
        this.isBuyable = false;
      } else {
        this.FetchADDR();
      }


    },
    FetchADDR: function () {
      let lokid = this.itemIdentifier;
      let qty = this.itemQuantity;
      axios.get('/ADDR', {
        params: {
          linkId: lokid,
          qty: qty
        }
      }).then(x => {
        this.provincia = x.data[0];
        this.canton = x.data[1];
        this.ciudad = x.data[1];
        this.direccion = x.data[2];
        this.phoneNumber = x.data[3];
        this.codigoPostal = x.data[4];
        this.pais = x.data[5];
        this.persona = x.data[6];
        this.infoAdicional = x.data[7];
        this.precioEnvio = x.data[8];
        this.precioTotal = x.data[9];
        this.isBuyable = x.data[10];

        this.formConfirmation = this.isBuyable;
      }).catch((error) => {
        console.log(error);
      });
    },

    newAddr: function () {
      let lokid = this.itemIdentifier;
      let qty = this.itemQuantity;
      let prov = this.addressSelected.provincia;
      let ciudad = this.ciudad;
      this.canton = this.ciudad;
      console.log(lokid);
      axios.get('/newADDR', {
        params: {
          linkId: lokid,
          qty: qty,
          ciudad: ciudad,
          provincia: prov,

        }
      }).then(x => {
        this.precioEnvio = x.data[0];
        this.precioTotal = x.data[1];
        this.isBuyable = x.data[2];


      }).catch((error) => {
        console.log(error);
      });

    },
    deliveryChanged: function () {
      if (this.isBuyable == true) {
        this.isBuyable = false;
      }
    },
    checkForm: function () {
      if (this.cardName && this.cardNum && this.cardMonth && this.cardYear && this.cardCvv) {
        axios.get('/checkForm', {
          params: {
            CardName: this.cardName,
            CardcNumber: this.cardNum,
            CardMonth: this.cardMonth,
            CardYear: this.cardYear,
            CardCVV: this.cardCvv
          }
        }).then(x => {
          this.formConfirmation = !this.formConfirmation;
          const el = this.$el.getElementsByClassName('SKRILL')[0];

          if (el) {
            el.scrollIntoView({ behavior: 'smooth' });
          }
          console.log(x);
          return x.data[0];


        }).catch((error) => {
          console.log(error);
        });


      }
    },
    BuyItem: function () {
      if (this.cardName && this.cardNum && this.cardMonth && this.cardYear && this.cardCvv) {
        var Data = new FormData();
        // Data.append('CardName', this.cardName);
        // Data.append('CardNumber', this.CardNum);
        // Data.append('CardMonth', this.cardMonth);
        // Data.append('CardYear', this.cardYear);
        // Data.append('CardCvv', this.cardCvv);
        var message;

        axios.get('/BuyItem',
          {
            params: {
              city: this.ciudad,
              provincia: this.provincia,
              address: this.direccion,
              reference: this.infoAdicional,
              totalPrice: this.precioTotal,
              quantity: this.itemQuantity,
              isBuyable: this.isBuyable,
              itemId: this.itemIdentifier,
            },
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }
        ).then(x => {
          let isSuccess = x.data[0];
          message = x.data[1]
          this.isBuyable = x.data[2];
          if (isSuccess) {
            alert(message);
          } else {
            alert(message);
          }
        });
      }
    }
  }

}






Vue.createApp(BPONE).mount('#BPONE');






