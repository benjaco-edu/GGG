<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    @include("inc.head")
</head>
<body>

@include("inc.menu")
<h1>Bil info {{ Html::linkRoute("deleteCar", "slet bil", [ $car['id'] ])  }} - {{ Html::linkRoute("editCar", "rediger", [$car['id']]) }}</h1>
<p>Price: {{$car['price']}}</p>
<p>Model: {{$car['model']}}</p>
<p>Year: {{$car['year']}}</p>
<p>Mileage: {{$car['mileage']}}</p>
<p>InsuranceBasePrice: {{$car['insuranceBasePrice']}}</p>
<p>Seats: {{$car['seats']}}</p>
<p>Comments: {{$car['comments']}}</p>

</body>
</html>