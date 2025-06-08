<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <h2>New car details</h2>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('vehicles.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="colors" class="form-label">colors</label>
                <input type="color" class="form-control" id="colors" name="colors" value="#ff0000" required>
                <div class="invalid-feedback">Please provide color.</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                <div class="invalid-feedback">Please provide a valid name.</div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter standard" required>
                <div class="invalid-feedback">Please provide a valid price.</div>
            </div>



            <div class="mb-3">
                <label for="model" class="form-label">model</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Enter model" required>
                <div class="invalid-feedback">Please provide model.</div>
            </div>

            <div class="mb-3">
                <label for="company" class="form-label">company</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Enter company" required>
                <div class="invalid-feedback">Please provide comapny.</div>
            </div>

             <div class="mb-3">
                <label for="manufacturing_date" class="form-label">Manufacturing Date</label>
                <input type="date" class="form-control" id="manufacturing_date" name="manufacturing_date"  required>
                <div class="invalid-feedback">Please provide comapny.</div>
            </div>

            <button type="submit" class="btn btn-primary">Save Data</button>
        </form>

    </div>
    <script>
        (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

    </script>

</body>

</html>
