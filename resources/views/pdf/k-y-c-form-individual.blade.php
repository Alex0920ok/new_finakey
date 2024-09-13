<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $customerUuid }}</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 20px;
        }

        .form-title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-row {
            width: 100%;
            margin-bottom: 15px;
        }

        .form-column {
            display: inline-block;
            width: 48%;
            margin-right: 2%;
        }

        .form-column:last-child {
            margin-right: 0;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer p {
            margin: 0;
        }
    </style>


    @include('livewire.partials.partial-k-y-c-form-individual')

    </body>
</html>
