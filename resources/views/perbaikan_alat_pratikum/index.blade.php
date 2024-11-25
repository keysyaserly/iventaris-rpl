<!-- resources/views/perbaikan_alat_pratikum/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbaikan Alat Pratikum</title>

    <!-- Internal CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #4CAF50;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
            font-size: 16px;
        }

        .button:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        li a {
            color: #007BFF;
            text-decoration: none;
            margin-right: 15px;
        }

        li a:hover {
            text-decoration: underline;
        }

        form {
            margin: 0;
        }

        button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d32f2f;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Perbaikan Alat Pratikum</h1>
        <a href="{{ route('perbaikan_alat_pratikum.create') }}" class="button">Tambah Perbaikan</a>

        <ul>
            @foreach($perbaikanAlatPratikum as $repair)
                <li>
                    <span>{{ $repair->nama_alat_pratikum }}</span>
                    <div>
                        <a href="{{ route('perbaikan_alat_pratikum.show', $repair->id) }}">Detail</a> |
                        <a href="{{ route('perbaikan_alat_pratikum.edit', $repair->id) }}">Edit</a> |
                        <form action="{{ route('perbaikan_alat_pratikum.destroy', $repair->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
