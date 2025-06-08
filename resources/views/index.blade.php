<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Record List</h2>

        <!-- Success Message (if any) -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('vehicles.create') }}" class="btn btn-primary">Add New record</a>
        <!-- Display the Records -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>colors</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>model</th>
                    <th>company</th>
                    <th>manufacturing_date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($table as $key => $tables)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td style="background-color: {{ $tables->colors }};">
    {{ $tables->colors }}
</td>
                        <td>{{ $tables->name }}</td>
                         <td>{{ $tables->price }}</td>
                          <td>{{ $tables->model }}</td>
                           <td>{{ $tables->company }}</td>
                        <td>{{ $tables->manufacturing_date }}</td>
                        <td>{{ $tables->status }}</td>
                        <td>
                        <a href="{{ route('vehicles.edit', $tables->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('vehicles.delete', $tables->id) }}" class="btn btn-warning btn-sm">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
