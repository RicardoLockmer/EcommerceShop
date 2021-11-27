
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
            item: '',
            sizes: [],
            itemIDL: '',

        };
    },


    methods: {

        updateItem: function (event) {
            console.log(event);
            axios.get('/cheese', {
                params: {
                    itemLink: event.target.id,


                }
            }).then(x => {
                this.price = x.data[0];
                this.loading = true;
                this.cantidad = x.data[0];
                this.cant = x.data[0];
                this.qty = x.data[0];
                this.sizeId = event.target.value;
                this.item = x.data.length;
                this.sizes = x.data[1];
                console.log(this.item);
            })

        },
        updateSelectedSize: function (event) {
            console.log(event.target);
            var allSizes = document.getElementById("Sizes");
            console.log(allSizes.childElementCount);
            console.log(allSizes.childNodes[0]);
            allSizes.childNodes.forEach(size => size.style = '');
            // for (var i = 1; i <= allSizes.childElementCount; i++) {
            //     allSizes.childNodes[i].style.borderColor = "";
            //     console.log(allSizes[i]);
            // };
            event.target.style.borderColor = "rgba(245, 158, 11)";



            // axios.get('/slectedSize', {
            //     params: {
            //         itemLink: event.target.id,


            //     }
            // }).then(x => {
            //     this.price = x.data[0];
            //     this.loading = true;
            //     this.cantidad = x.data[0];
            //     this.cant = x.data[0];
            //     this.qty = x.data[0];
            //     this.sizeId = event.target.value;
            //     this.item = x.data.length;
            //     this.sizes = x.data[1];
            //     console.log(this.item);
            // })

        },


    }

}

Vue.createApp(itemPage).mount('#DTpageUp');






