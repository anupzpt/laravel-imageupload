<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>upload image</h5>
                    </div>
                    <img src="{{asset('/storage/images/H8Iv7vwNtHMEQZQ0mDlHIoJ3JSVg6j8c0egaUult.png')}}" alt="">
                    <div class="card-body">
                        <form action="{{route('uploadImage')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" class="form-control" >
                            <button type="submit" class="btn btn-primary mt-2">upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
