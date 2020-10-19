const itemLayout = {
    data() {
        return {
            nombre: '',
            marca: '',
            descripcion: '',
            image: '',
            variantes: [{
                color: "",
                size: "",
                qty: ""
            }]
        }
    },
    methods: {
        addFind: function () {
            this.variantes.push({
                color: '',
                size: '',
                qty: ''

            });
        },
        deleteFind: function (index) {
            console.log(index);
            console.log(this.variantes);
            this.variantes.splice(index, 1);
        },
        onFileChange(e) {
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {

            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
                vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        removeImage: function (e) {
            this.image = '';
            const input = this.$refs.mainImage;
            input.type = 'text';
            input.type = 'file';
        }
    }
}

Vue.createApp(itemLayout).mount('#itemLayout')
