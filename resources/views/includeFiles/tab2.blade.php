<label class="newbiz" for="image">
    <h4>
        <strong>
            Variaciones del producto
        </strong>
    </h4>

</label>
<div class='form-row' style="width: auto;">

    <div class="newbiz col">

        <small>
            <strong>

                Imagen Principal
            </strong>

        </small>
        <br>

        <label for="MIMG" style=" border: 2px dotted grey; width: 200px; height: 80px; text-align: center; padding-top:5%;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
            </svg>
        </label>
        <input name="image" @change="onFileChange" id="MIMG" ref="mainImage" type="file" class="custom-file-input" multiple required hidden>

    </div>

</div>
{{-- VARIACION COLORES TAMANOS QTY IMG --}}

<span class="btn btn-warning btn-sm " style="margin-bottom:15px;margin-top:15px;" @click="addFind">Agregar Otro Color +</span>

<div style=" position:relative;" class="row" v-for="(variante, index) in variantes">
    <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
        <div class="control">
            <strong>

                @{{ index+1 }}.
            </strong>
        </div>
    </div>
    <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
        <div class="control">

            <small>
                <strong>

                    Color
                </strong>

            </small>
            <input v-model="variante.color" style="width: 100px;" placeholder="Color" type="text" name="color[]" class="form-control">

        </div>
    </div>





    <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
        <div class="custom-file">
            <small>
                <strong>

                    Imagen
                </strong>

            </small>
            <div>

                <label  class="form-control" style="border: 3px dotted grey; text-align:center; width: 80px; " v-bind:for="index" v-bind:key="index">
                


                    <svg style="vertical-align: baseline;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                        <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                    </svg>
                </label>

                <input name="imageList" @change="createImages" v-bind:id="index" ref="listImage" type="file" class="custom-file-input" multiple required hidden>
                <span style="position: absolute; top:26px; right: -40px;" v-if="index != 0" class="btn btn-outline-danger" @click="deleteFind(index)">
                    x
                </span>

            </div>
        </div>

    </div>

</div>
