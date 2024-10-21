<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="display-5 text-danger">Probando bootstrap</div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-text">
                        <a href="#" class="d-inline-block text-decoration-none" data-bs-toggle="tooltip"
                            data-bs-title="Solo se admiten 3 letras">
                            <i class="fa-solid fa-circle-question text-dark fs-5"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
