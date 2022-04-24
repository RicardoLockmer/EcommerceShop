@extends('mainLayout')

@if($user->store_id == $user->store->store_id)

<!-- @section('storebanner')


@endsection -->

@section('agregarProductos') 

<div class='container'>
<div class="grid grid-cols-1 md:grid-cols-3 tablet:grid-cols-3 lg:grid-cols-3 rounded-md border shadow-md my-10">
        <div class="col-span-1 h-full p-2">
        <h1 class="text-xl font-bold">Hoy</h1>
            <h3 class=" centerMyImages text-3xl my-3 text-green-500">$0.00</h3>
            
        </div>
        <div class="col-span-1 h-full border-l border-r p-2">
            <h1 class="text-xl font-bold">Mes</h1>
            <h3 class="text-muted centerMyImages text-3xl my-3">$0.00</h3>
        </div>
        <div class="col-span-1 h-full p-2">
            <h1 class="text-xl font-bold">Año</h1>
            <h3 class="text-muted centerMyImages text-3xl my-3">$0.00</h3>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-2 lg:pt-10 place-items-center">
        
        <a class="border border-yellow-500 font-bold rounded-md  bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 centerMyImages"  href="/negocio/{{$user->store->nombreNegocio}}/nuevo-producto">
        <div class="grid grid-col-1 justify-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                Agregar Producto
            </div>
        </div>
        </a>
        <a class='border border-solid font-bold rounded-md md:col-start-1 md:col-span-2 shadow-md tablet:col-span-2 tablet:col-start-1 lg:col-span-1 h-16 w-80 md:w-96 lg:w-80 lg:h-20 centerMyImages hover:bg-grey-200' href="/negocio/{{$user->store->nombreNegocio}}/productos/">
            <div class="grid grid-col-1 justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <div>
                Productos
                </div>

            </div>
        </a>
        <a href="/negocio/{{$user->store->nombreNegocio}}/editar" class=' border border-solid font-bold  rounded-md  bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages' >
            <div class="grid grid-col-1 justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
                <div>
                    Editar Negocio
                </div>
            </div>  
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-2 my-10">
        <div class="my-8 mr-5">
            <div class="grid grid-cols-2 gap-4 text-gray-600">
                <div class="grid justify-items-center border shadow-md p-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>
                    </div>
                    <div>
                        Entregas Pendientes
                    </div>
                    <div class="font-bold text-green-700">
                        99+
                    </div>    
                </div>
                <div class="grid justify-items-center border shadow-md p-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>    
                    <div>
                        Productos Devueltos
                    </div>
                    <div class="font-bold text-yellow-500">
                        0
                    </div>
                </div>
                <div class="grid justify-items-center border shadow-md p-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>    
                    <div>
                        Facturas 
                    </div>
                    <div>
                        0
                    </div>
                </div>
                <div class="grid justify-items-center border shadow-md p-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>    
                    <div>
                        Mensajes
                    </div>
                    <div class="font-bold text-green-700">
                        3
                    </div>
                </div>
                <div class="border shadow-md p-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>    
                    <div>
                        Reportes
                    </div>
                    <div>
                        
                    </div>
                </div>
                <div class="border shadow-md p-2">
                    <div>
                        ICON
                    </div>    
                    <div>
                        XX Entregas Pendientes
                    </div>
                </div>
            </div>
        </div>
    
    <div class=" col-span-1 h-full ">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <!-- <div class="col-span-1 h-full border-2 border-red-500">
            <canvas id="mySecondChart" width="400" height="200"></canvas>
        </div> -->
    </div>


    




</div>

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Total Ventas: ',
            data: [10, 15, 13, 25, 35, 45, 22, 26, 38, 50, 60, 58],
            backgroundColor: [
                'rgba(255, 99, 132, 0.0)',
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(45, 106, 80, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<script>
var ctx = document.getElementById('mySecondChart');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
        datasets: [{
            label: '# de Ventas: ',
            data: [6, 12, 28, 25, 29, 17,50],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(45, 106, 80, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(45, 106, 80, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection



@else

@section('errorStore')
<h1 style="text-align: center; color: red; font-weight: 800; font-size: 40px;">ESTA NO ES LA PAGINA QUE ESTAS BUSCANDO!</h1>

@endsection
@endif
