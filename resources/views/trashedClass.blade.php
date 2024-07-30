<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Classes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>

    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All Classes</h2>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col"> Class Name</th>
              <th scope="col">Capacity</th>
              <th scope="col">Is Fulled</th>
              <th scope="col">Price</th>
              <th scope="col">Time From</th>
              <th scope="col">Time To</th>
              <th scope="col">Restore</th>
              <th scope="col">Permenant Delete</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach($class as $cl)
            <tr>
              <td scope="row">{{$cl['className']}}</td>
              <td>{{$cl['capacity']}}</td>
              <td>{{$cl['isFulled'] ? 'Yes' : 'No'}}</td>
              <td>{{$cl['price']}}</td>
              <td>{{$cl['timeFrom']}}</td>
              <td>{{$cl['timeTo']}}</td>
              <td><form action="{{ route('class.restore' ,$cl['id']) }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $cl->id }}">
                <input type="submit" class="btn btn-link m-0 p-0" value="Restore">
                </form></td>
              <td>
                <form action="{{ route('class.forceDelete' ,$cl['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $cl->id }}">
                <input type="submit" class="btn btn-link m-0 p-0" onclick=" return confirm('Are you sure you want to delete it')" value="Delete">
                </form>
              </td>

             <td><a href="{{route('class.edit', $cl['id'])}}">Edit</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
