
const itemPage = {

    data() {
        return {
            loading: false,
            price: '',
            imgPreUrl: "/storage/assetItems/",
            cantidad: 0,
            cant: 1,
            sizeId: '',
            itemId: '',
            qty: 0,
            selectedQty: 1,
            item: '',
            colors: [],
            sizes: [],
            images: [],
            mainImages: [],
            itemIDL: '',

        };
    },
    mounted() {

        axios.get('/cheese', {
            params: {
                itemLink: document.getElementById("Item").value,

            }
        }).then(x => {
            this.item = x.data[0];
            this.price = x.data[1];
            this.colors = x.data[2];
            this.mainImages = x.data[3]
            // this.images = x.data[4];
            this.sizes = x.data[4];
            console.log(this.colors);

        })
    },

    methods: {

        updateItem: function (event) {
            let selectedColor = "rgba(245, 158, 11)";
            console.log(event.target.id);

            //ITEMS
            var allItems = document.getElementById("Items");
            allItems.childNodes.forEach(item => item.style = '');
            event.target.style.borderColor = selectedColor;

            axios.get('/updateItem', {
                params: {
                    itemLink: event.target.id,
                }
            }).then(x => {
                this.item = x.data[0];
                this.price = x.data[1];
                this.colors = x.data[2];
                this.mainImages = x.data[3]
                // this.images = x.data[4];
                this.sizes = x.data[4];
                var firstSize = document.getElementById(this.sizes.id);

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






