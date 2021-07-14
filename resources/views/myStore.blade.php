@extends('mainLayout')

@if(Auth::user()->id == $store->user_id)

<!-- @section('storebanner')


@endsection -->

@section('agregarProductos') 

<div class='container'>
<div class="grid grid-cols-1 md:grid-cols-3 tablet:grid-cols-3 lg:grid-cols-3 border my-10">
        <div class="col-span-1 h-full border-2 p-2">
        <h1 class="text-xl font-bold">$ Total Hoy</h1>
            <h3 class=" centerMyImages text-3xl my-3 text-green-500">$2,450.00</h3>
            
        </div>
        <div class="col-span-1 h-full border-2 p-2">
            <h1 class="text-xl font-bold">$ Total Mes</h1>
            <h3 class="text-muted centerMyImages text-3xl my-3">$8,220.00</h3>
        </div>
        <div class="col-span-1 h-full border-2 p-2">
            <h1 class="text-xl font-bold">$ Total Año</h1>
            <h3 class="text-muted centerMyImages text-3xl my-3">$45,990.00</h3>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-2 lg:pt-10 place-items-center">

        <a class="border-2 border-solid font-bold hover:bg-gray-500 rounded-full relative bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages "  href="/negocio/{{$store->nombreNegocio}}/nuevo-producto">
            Agregar Producto
        </a>

        <a href="/negocio/{{$store->nombreNegocio}}/editar" class=' border-2 border-solid font-bold hover:bg-gray-100 rounded-full relative bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages ' >
            Editar Información
        </a>

        <a class='border-2 border-solid font-bold hover:bg-gray-100 rounded-full relative md:col-start-1 md:col-span-2 shadow-md tablet:col-span-2 tablet:col-start-1 lg:col-span-1 bg-white h-16 w-80 md:w-96 lg:w-80 lg:h-20 centerMyImages' href="/negocio/{{$store->nombreNegocio}}/productos/">
            Productos
        </a>

    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-2 border my-10">
        <div class="col-span-1 h-full border-2 border-red-500">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <div class="col-span-1 h-full border-2 border-red-500">
            <canvas id="mySecondChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
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
