
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
            qty: null,
            item: '',
            colors: [],
            sizes: [],
            images: [],
            mainImages: [],
            itemIDL: '',
            test: '',
            selectedColor: '',
            selectedSize: '',
            selectedQty: '',

        };
    },
    mounted() {

        axios.get('/cheese', {
            params: {
                itemLink: document.getElementById("Item").value,

            }
        }).then(x => {
            this.item = x.data[0];
            this.selectedColor = x.data[2];
            this.price = x.data[1];
            this.colors = x.data[2];
            this.mainImages = x.data[3]
            this.sizes = x.data[4];
            if (this.sizes[0].quantity <= 5) {
                this.qty = this.sizes[0].quantity;
            } else {
                this.qty = 5
            }


        })
    },


    methods: {

        updateItem: function (event) {
            let selectedColor = "rgba(245, 158, 11)";

            //ITEMS
            var allItems = document.getElementById("Items");
            allItems.children[0].classList.remove('border-yellow-500')
            allItems.childNodes.forEach(item => item.style = '');
            event.target.style.borderColor = selectedColor;
            var mainImage = document.getElementById("image");
            var imgSource = event.target.src;
            var allSizes = document.getElementById("Sizes");
            allSizes.childNodes.forEach(size => size.style = '');

            axios.get('/updateItem', {
                params: {
                    itemLink: event.target.id,
                }
            }).then(x => {
                this.item = x.data[0];
                this.price = x.data[1];
                this.colors = x.data[2];
                this.selectedColor = x.data[3];
                this.mainImages = x.data[4];
                this.selectedSize = '';
                this.sizes = x.data[5];
                if (this.sizes[0].quantity <= 5) {
                    this.qty = this.sizes[0].quantity;
                } else {
                    this.qty = 5
                }
                console.log(this.qty);
                mainImage.src = imgSource;


            })
            // SIZES

            //QTY

        },

        updateSelectedSize: function (id) {
            var allSizes = document.getElementById("Sizes");
            axios.get('/selectedSize', {
                params: {
                    itemLink: id,
                }
            }).then(x => {
                this.qty = x.data[0].quantity;
                if (this.qty > 0) {
                    var sizesElements = document.getElementById(id);
                    allSizes.childNodes.forEach(size => size.style = '');
                    sizesElements.style.borderColor = "rgba(245, 158, 11)";
                    this.selectedSize = x.data[0];

                    if (this.selectedSize.quantity <= 5) {
                        this.qty = this.selectedSize.quantity;
                    } else {
                        this.qty = 5;
                    }
                    this.price = x.data[1];
                    this.test = x.data[0];
                } else {
                    this.selectedQty = '';
                    allSizes.childNodes.forEach(size => size.style = '');
                }
            })
        },

        updateSelectedQTY: function (event) {
            let selectedQuantity = parseInt(event.target.parentNode.id, 10);
            var allSizes = document.getElementById("QTY");

            console.log(selectedQuantity);

            allSizes.childNodes.forEach(size => size.style = '');
            event.target.parentNode.style.borderColor = "rgba(245, 158, 11)";

            if (selectedQuantity <= 5) {
                if (selectedQuantity == 1 || selectedQuantity == 2 || selectedQuantity == 3 || selectedQuantity == 4 || selectedQuantity == 5) {
                    this.selectedQty = selectedQuantity;
                }
            } else {
                console.log("You are not entering a number");
            }
        },
        updateCart: function (event) {
            let id = this.selectedSize.id;
            let item_id = this.selectedSize.item_id;
            let qty = parseInt(this.selectedQty);
            let itemName = this.item.nombre;
            let precio = this.selectedSize.precio;
            axios.get('/shoppingCart', {

                params: {
                    id: id,
                    item_id: item_id,
                    name: itemName,
                    precio: precio,
                    qty: qty
                }

            }).then(x => {
                console.log(x);
            })
        },
        buyItem: function (event) {
            let id = this.selectedSize.id;
            let item_id = this.selectedSize.item_id;
            let qty = parseInt(this.selectedQty);
            let itemName = this.item.nombre;
            let precio = this.selectedSize.precio;
            axios.get('/comprar', {

                params: {
                    id: id,
                    item_id: item_id,
                    name: itemName,
                    precio: precio,
                    qty: qty
                }

            }).then(x => {
                console.log(x);
            })
        },



    }

}

Vue.createApp(itemPage).mount('#DTpageUp');






