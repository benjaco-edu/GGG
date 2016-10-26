<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    @include("inc.head")
</head>
<body>

@include("inc.menu")

@foreach($car as $item)
    <p>
        {{ Html::linkRoute("showCar", $item['model']. "-" .$item['year'], [$item['id']]  )  }}
    </p>
@endforeach

</body>
</html>