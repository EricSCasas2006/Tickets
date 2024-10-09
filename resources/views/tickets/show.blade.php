<x-layout-user>
    <h2>{{ $ticket->title }}</h2>
        <p><strong>Contenido:</strong> {{ $ticket->content }}</p>
        <p><strong>Imagen:</strong> <img src="{{ asset('storage/' . $ticket->img) }}" alt="Imagen del ticket" width="100"></p>
        <p><strong>Estado:</strong> {{ $ticket->status }}</p>
        <p><strong>Tipo de Solicitud:</strong> {{ $ticket->tipo_solicitud }}</p>
        <p><strong>Equipo:</strong> {{ $ticket->equipo }}</p>
        <p><strong>Prioridad:</strong> {{ $ticket->prioridad }}</p>
    </div>
</x-layout-user>