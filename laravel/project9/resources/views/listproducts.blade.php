<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-2">Products</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped" id="myDataTable">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Rating</th>
                        <th>Stock</th>
                        {{-- <th>Brand</th> --}}
                        <th>SKU</th>
                        <th>Weight</th>
                        <th>Photo</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product["id"] }}</td>
                            <td>{{ $product["title"] }}</td>
                            <td>{{ $product["category"] }}</td>
                            <td>{{ $product["price"] }}</td>
                            <td>{{ $product["discountPercentage"] }}</td>
                            <td>{{ $product["rating"] }}</td>
                            <td>{{ $product["stock"] }}</td>
                            {{-- <td>{{ $product["brand"] }}</td> --}}
                            <td>{{ $product["sku"] }}</td>
                            <td>{{ $product["weight"] }}</td>
                            <td><img src="{{$product['thumbnail']}}" class="w-25"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
