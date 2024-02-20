<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="form">

    <div class="container">

        <h1 class="text-center"> All Posts From DataBase</h1>

        <div class="row ">

            <div class="col-lg-12 ">
                <a class="btn btn-success" href="{{route("post.create")}}">Add new Post</a>
                <a class="btn btn-danger" href="{{route("post.delete.all")}}">DeleteAll</a>
                <a class="btn btn-danger" href="{{route("post.delete.all.truncate")}}">DeleteAll TranCate</a>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">BodyPost</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>#{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{route("post.delete",$post->id)}}">Delete</a>
                                <a class="btn btn-primary" href="{{route("post.edit",$post->id)}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
