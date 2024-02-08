<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ruta/a/tu/styles.css">
    <title>Lista de Usuarios</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            box-sizing: border-box;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        h3 {
            color: #ff6600;
            text-align: center;
            margin-top: 0;
        }

        .btn-create {
            display: block;
            margin: 20px auto;
            background-color: #ff6600;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .btn-create:hover {
            background-color: #d45a00;
        }

        .post-card {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #444;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
        }

        .post-title {
            color: #ff6600;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .post-content {
            color: #fff;
        }

        .btn-edit,
        .btn-delete {
            background-color: #ff6600;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            background-color: #d45a00;
        }

    </style>
</head>

<body>
    <div class="container">
        <h3>Lista de Usuarios</h3>
        <a href="{{ route('posts.create') }}" class="btn-create">Añadir Usuario</a>
        @foreach ($posts as $post)
        <div class="post-card">
            <h4 class="post-title">{{ $post->nombre }}</h4>
            <p class="post-content">{{ $post->email }}</p>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn-edit">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">Eliminar</button>
            </form>
        </div>
        @endforeach
    </div>
</body>

</html>
