
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
    mounted: {
        item = document.getElementById("")
    },

    methods: {

        updateItem: function (event) {
            let selectedColor = "rgba(245, 158, 11)";
            console.log(event);

            //ITEMS
            var allItems = document.getElementById("Items");
            allItems.childNodes.forEach(item => item.style = '');
            event.target.style.borderColor = selectedColor;


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
                var firstSize = document.getElementById(this.sizes[0]);

                firstSize.style.borderColor = selectedColor;

            })
            // SIZES

            //QTY

        },
        updateSelectedSize: function (event) {
            console.log(event.target);
            var allSizes = document.getElementById("Sizes");
            console.log(allSizes.childElementCount);

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
        updateSelectedQTY: function (event) {
            console.log(event.target);
            var allSizes = document.getElementById("QTY");
            console.log(allSizes.childElementCount);

            allSizes.childNodes.forEach(size => size.style = '');

            event.target.style.borderColor = "rgba(245, 158, 11)";
        }

    }

}

Vue.createApp(itemPage).mount('#DTpageUp');






