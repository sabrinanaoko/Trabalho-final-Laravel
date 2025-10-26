<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1>Categorias</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/categorias" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Categoria</button>
    </form>

    <h2>Lista de Categorias</h2>
    @if($categorias->isEmpty())
        <p>Nenhuma categoria cadastrada.</p>
    @else
        <ul class="list-group">
            @foreach($categorias as $categoria)
                <li class="list-group-item">{{ $categoria->nome }}</li>
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>
