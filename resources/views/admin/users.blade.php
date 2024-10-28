<x-layout-admin>
    <a href="{{ route('admin.tickets') }}">Volver</a>
    <div class="container">
        <h2>Perfil de Usuario</h2>
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        
        <h3>Tickets del Usuario</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                    <th>Tipo de Solicitud</th>
                    <th>Equipo</th>
                    <th>Prioridad</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td><a href="{{ route('admin.show', $ticket->id) }}">{{ $ticket->title }}</a></td>
                        <td>{{ $ticket->status }}</td>
                        <td>{{ $ticket->tipo_solicitud }}</td>
                        <td>{{ $ticket->equipo }}</td>
                        <td>{{ $ticket->prioridad }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No tiene tickets aún.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout-admin>
