<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h3 {
            color: #ff6600;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #fff;
        }

        input,
        textarea {
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #666;
            border-radius: 4px;
            font-size: 16px;
            background-color: #444;
            color: #fff;
        }

        button {
            background-color: #ff6600;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #d45a00;
        }

        .btn-container {
            text-align: center;
        }

        .btn-back {
            background-color: #ff6600;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-back:hover {
            background-color: #d45a00;
        }

    </style>
</head>

<body>
    <div class="container">
        <h3>Editar Usuario</h3>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $post->nombre }}" required>

            <label for="email">Email</label>
            <textarea id="email" name="email" rows="3" required>{{ $post->email }}</textarea>

            <button type="submit">Actualizar Post</button>
        </form>

        <a href="{{ route('posts.index') }}" class="btn-back">Volver al Índice</a>
    </div>
</body>

</html>
