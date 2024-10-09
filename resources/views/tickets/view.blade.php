<x-layout-user>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ __("¡Iniciaste Sesión") }} {{ Auth::user()->name }}!</h3>
                </div>
            </div>
        </div>
    </div><br>

    <div>
        <h4>Mis Tickets</h4>
        <a href="{{ route('tickets.index') }}">Ver Mis Tickets</a>
        <a href="{{ route('tickets.create') }}">Crear Ticket</a>
    </div>
</x-layout-user>