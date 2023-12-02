@include('header')
<body>
<!-- Jumbotron -->
<div class="jumbotron text-center">
    <h1 class="display-4">Registrar Documento</h1>
    <p class="lead">Para ingresar su documento en la mesa de Entrada ingrese aqui.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('create') }}" role="button">Registrar</a>
</div>

<!-- Features Section -->
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Feature 1</h2>
                <p>A brief description of the first feature.</p>
            </div>
            <div class="col-md-4">
                <h2>Feature 2</h2>
                <p>A brief description of the second feature.</p>
            </div>
            <div class="col-md-4">
                <h2>Feature 3</h2>
                <p>A brief description of the third feature.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
