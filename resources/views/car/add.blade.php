<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    @include("inc.head")
</head>
<body>

@include("inc.menu")

{{ Form::open()  }}

@foreach($errors->all() as $error)
    <p class="error">{{$error}}</p>
@endforeach

{{ Form::input("string", "price", "", ["placeholder"=>"price"])  }}
{{ Form::input("string", "model", "", ["placeholder"=>"model"])  }}
{{ Form::input("string", "year", "", ["placeholder"=>"year"])  }}
{{ Form::input("string", "mileage", "", ["placeholder"=>"mileage"])  }}
{{ Form::input("string", "insuranceBasePrice", "", ["placeholder"=>"insuranceBasePrice"])  }}
{{ Form::input("string", "seats", "", ["placeholder"=>"seats"])  }}
{{ Form::input("string", "comments", "", ["placeholder"=>"comments"])  }}
{{ Form::submit()  }}

{{ Form::close()  }}

</body>
</html>