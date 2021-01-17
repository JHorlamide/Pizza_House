@extends ('layout.layout')

@section('pizza_home_page')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="ml-4 text-sm text-gray-500 sm:text-right sm:ml-0">
            <div class="m-b-md">
                <h1 class="title">Pizza List</h1>
                @foreach ($pizzas as $pizza)
                    <div class="alignment">
                        {{ $pizza->name }} - {{ $pizza->base }} - {{ $pizza->type }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- text-center --}}
