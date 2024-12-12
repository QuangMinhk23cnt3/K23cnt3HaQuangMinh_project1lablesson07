<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HQM - Danh sach mon hoc</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sach mon hoc</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ma mon hoc</th>
                            <th>Ten mon hoc</th>
                            <th>So tiet</th>
                            <th>Chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hqmMonHocs as $item)
                            <tr>
                                <td>1</td>
                                <td>{{$item->hqmmamh}}</td>
                                <td>{{$item->hqmtenmh}}</td>
                                <td>{{$item->hqmsotiet}}</td>
                                <td>
                                    view / edit / delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                                <h3>Tong so mon hoc: {{$hqmMonHocs->count()}}</h3>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

