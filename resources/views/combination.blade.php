<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('test.combination') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

            <div class="form-group">
                <label>String :</label>
                <input type="text" class="form-control" name="string" id="string" value="{{ !empty($oldValue) ? $oldValue['string'] : old('string') }}">
            </div>

            <div class="form-group">
                <label>Number :</label>
                <input type="number" class="form-control" name="number" id="number" value="{{ !empty($oldValue) ? $oldValue['number'] : old('number') }}">
            </div>

            <input type="submit" class="btn btn-dark btn-block">
        </form>

    </div>

    @if(!empty($outputs))
    <div class="container mt-5">
        <div class="ml-4 text-lg leading-7 font-semibold mb-2"> Outputs :</div>
        <ul>
            @foreach($outputs as $key => $output)
            <li class="mt-2"> {{ implode(" ", $output) }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>
