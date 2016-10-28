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

{{ Form::input("string", "price", $car["price"], ["placeholder"=>"price"])  }}
{{ Form::input("string", "model", $car["model"], ["placeholder"=>"model"])  }}
{{ Form::input("string", "year", $car["year"], ["placeholder"=>"year"])  }}
{{ Form::input("string", "mileage", $car["mileage"], ["placeholder"=>"mileage"])  }}
{{ Form::input("string", "insuranceBasePrice", $car["insuranceBasePrice"], ["placeholder"=>"insuranceBasePrice"])  }}
{{ Form::input("string", "seats", $car["seats"], ["placeholder"=>"seats"])  }}
{{ Form::input("string", "comments", $car["comments"], ["placeholder"=>"comments"])  }}
{{ Form::submit()  }}

{{ Form::close()  }}

</body>
</html>