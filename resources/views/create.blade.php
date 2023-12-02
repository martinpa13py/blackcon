@include('header')


<div class="container mt-5">
    <h2>Registrar Documento</h2>

    <form id="document" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <!-- File Upload -->
        <div class="mb-3">
            <label for="file" class="form-label">Documento</label>
            <input type="file" class="form-control" id="file" name="file" accept=".pdf, .doc, .docx" required>
            <small class="text-muted">Accepted file formats: PDF, DOC, DOCX</small>
        </div>

        <!-- Type (Select) -->
        <div class="mb-3">
            <label for="type" class="form-label">Tipo Documento</label>
            <select class="form-select" id="type" name="type" required>
                <option value="" selected disabled>Elegir Documento</option>
                <option value="option1">C.I. Paraguay</option>
                <option value="option2">Registro Conducir</option>
                <option value="option3">Certificado Nacimiento  </option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
@vite([
    'resources/js/app.js',
])
