@extends('mainLayout')
@section('AccountType')

<div class="container h-full">

    <div class="">
        <div class="">
            <div>
                Elija su tipo de cuenta
            </div> 
            <div class="flex space-x-10">
                <a href="{{ route('register') }}" class="grid place-items-center hover:bg-gray-100 cursor-pointer shadow-md rounded-md p-5 border border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <div class="font-bold text-gray-700">
                        Cuenta para Compras
                    </div>
                </a>
                <a href="/iniciar-mi-negocio" class="grid place-items-center hover:bg-gray-100 cursor-pointer shadow-md rounded-md p-5 border border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <div class="font-bold text-gray-700">
                        Cuenta para Negocio
                    </div>    
                </a>
            </div>
        </div>

    </div>

    
</div>




@endsection