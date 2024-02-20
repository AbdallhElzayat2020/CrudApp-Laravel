<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="form">

    <div class="container">

        <div class="row">

            <form action="{{route('post.update',$post->id)}}" method="post">
                @csrf
                @method("put")
                <h1 class="mt-4">Edit on Post:{{$post->title}}</h1>

                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title"
                           aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label fw-bold">Body</label>
                    <input type="text" name="body" value="{{$post->body}}" class="form-control" id="body">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
