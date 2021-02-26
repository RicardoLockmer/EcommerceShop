
const itemPage = {

    data() {
        return {
            loading: false,
            price: '',
            cantidad: 0,
            cant: 1,
            sizeId: '',
            itemId: '',
            qty: 0,
            selectedQty: 1,

        };
    },

    methods: {

        updateItem: function (event) {

            axios.get('/cheese', {
                params: {
                    sizeId: event.target.value,

                }
            }).then(x => {
                this.price = x.data[0];
                this.loading = true;
                this.cantidad = x.data[1];
                this.cant = x.data[1];
                this.qty = x.data[1];
                this.sizeId = event.target.value;
            })

        },



    }

}

Vue.createApp(itemPage).mount('#DTpageUp');






