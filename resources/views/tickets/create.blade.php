<x-layout-user>
    <a href="{{ route('user.dashboard') }}">Volver</a>

    <div class="container mt-5">
        <h2>Crear nuevo ticket</h2>
        <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Subir Imagen</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>

            <div class="mb-3">
                <label for="tipo_solicitud" class="form-label">Tipo de Solicitud</label>
                <select name="tipo_solicitud" class="form-control" id="tipo_solicitud" required>
                    <option value="Mantenimiento y Soporte">Mantenimiento y Soporte</option>
                    <option value="Configuración y Entrega de Equipos">Configuración y Entrega de Equipos</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="equipo" class="form-label">Equipo</label>
                <select name="equipo" class="form-control" id="equipo" required>
                    <option value="Computador">Computador</option>
                    <option value="Celular">Celular</option>
                    <option value="Impresora">Impresora</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Ticket</button>
        </form>

    </div>

</x-layout-user>

