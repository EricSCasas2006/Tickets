<x-layout-user>
<a href="{{ route('user.dashboard') }}">Volver</a>

    <div class="container mt-5">
        <h2>Mis Tickets</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Solicitud</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Fecha Creación</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tickets as $ticket)
                    <tr>
                        <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->title }}</a></td>
                        <td>{{ $ticket->tipo_solicitud }}</td>
                        <td>{{ Str::limit($ticket->content, 100) }}</td>
                        <td>{{ $ticket->status }}</td>
                        <td>{{ $ticket->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No has creado ningún ticket aún.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layout-user>