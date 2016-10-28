<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    @include("inc.head")
</head>
<body>

@include("inc.menu")

{{ Html::linkRoute("addCar", "Ny bil")  }}

@foreach($car as $item)
    <p>
        {{ Html::linkRoute("showCar", $item['model']. "-" .$item['year'], [$item['id']]  )  }}
    </p>
@endforeach

</body>
</html>