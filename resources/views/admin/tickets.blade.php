<x-layout-admin>
<a href="{{ route('dashboard') }}">Volver</a>
    <div class="container">
        <h2>Lista de Tickets</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Creado por</th>
                    <th>Contenido</th>
                    <th>Estado</th>
                    <th>Tipo de Solicitud</th>
                    <th>Equipo</th>
                    <th>Prioridad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td><a href="{{ route('admin.show', $ticket->id) }}">{{ $ticket->title }}</a></td>
                        <td><a href="">{{ $ticket->user->name }}</a></td>
                        <td>{{ $ticket->content }}</td>
                        <td>{{ $ticket->status }}</td>
                        <td>{{ $ticket->tipo_solicitud }}</td>
                        <td>{{ $ticket->equipo }}</td>
                        <td>{{ $ticket->prioridad }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-admin>