<x-layout-admin>
<a href="{{ route('admin.tickets') }}">Volver</a>
    <h2>{{ $ticket->title }}</h2>
        <p><strong>Creado por:</strong> {{ $ticket->user->name }}</p>
        <p><strong>Contenido:</strong> {{ $ticket->content }}</p>
        <p><strong>Imagen:</strong> 
            @if($ticket->img)
                <img src="{{ asset('storage/' . $ticket->img) }}" alt="Imagen del ticket" width="100">
            @else
                No se subió ninguna imagen
            @endif
        </p>
        <p><strong>Tipo de Solicitud:</strong> {{ $ticket->tipo_solicitud }}</p>
        <p><strong>Equipo:</strong> {{ $ticket->equipo }}</p>
        <form action="{{ route('admin.updateStatus', $ticket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="status" class="form-label"><strong>Estado:</strong></label>
                <select name="status" id="status" class="form-control">
                    <option value="activo" {{ $ticket->status == 'activo' ? 'selected' : '' }}>Activo</option>
                    <option value="pendiente" {{ $ticket->status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="en proceso" {{ $ticket->status == 'en proceso' ? 'selected' : '' }}>En proceso</option>
                    <option value="cerrado" {{ $ticket->status == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Estado</button>
        </form>

        <form action="{{ route('admin.updatePrioridad', $ticket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="prioridad" class="form-label"><strong>Prioridad:</strong></label>
                <select name="prioridad" id="prioridad" class="form-control">
                    <option value="media" {{ $ticket->prioridad == 'media' ? 'selected' : '' }}>Media</option>
                    <option value="alta" {{ $ticket->prioridad == 'alta' ? 'selected' : '' }}>Alta</option>
                    <option value="baja" {{ $ticket->prioridad == 'baja' ? 'selected' : '' }}>Baja</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Prioridad</button>
        </form>
    </div>
</x-layout-admin>