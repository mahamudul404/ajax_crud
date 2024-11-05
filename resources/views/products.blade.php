<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center my-5">Laravel 11 Ajax Crud</h2>
                <a class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal" href="">Add
                    Product</a>
                <div class="table-data">

                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="text-center">

                                    <th scope="row"> {{ $product->id }} </th>
                                    <td> {{ $product->name }} </td>
                                    <td> {{ $product->price }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary " href=""> <i class="las la-edit"></i></a>
                                        <a class="btn btn-danger" href=""> <i class="las la-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $products->links('pagination::bootstrap-5') }}
                    </div>

                </div>
            </div>

        </div>

    </div>


    @include('add_products_modal')
    @include('products_js')

</body>

</html>
