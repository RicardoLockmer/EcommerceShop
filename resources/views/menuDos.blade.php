<div class="navbar navbar-expand-lg navbar-light justify-content-between navBack" id="MCTG" style="background-color: #a3320b;" v-cloak>

        

        <ul class="navbar-nav " style="color: white; font-size: 14px; text-align: center!important;">


            <li v-for="menuCat in category" class="nav-item" style="padding-left: 20px; padding-right: 20px; ">
               <a class="nav-link" :href="'/Categorias/' + menuCat.value" style="padding: 0 0 0 0;">@{{  menuCat.key  }} </a> 
            </li>
            
            <li class="nav-item" style="padding-left: 20px; padding-right: 20px; ">
               <a class="nav-link" href="" style="padding: 0 0 0 0;">Mas ^ </a> 
            </li>
        </ul>

</div>


   