<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #6c63ff;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .search-bar {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 200px;
    }

    .btn {
      padding: 8px 12px;
      background-color: #6c63ff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #5148e2;
    }
  </style>
</head>
<body>
  <div class="table-actions">
    <input type="text" class="search-bar" placeholder="Search...">
    <button class="btn">Add</button>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td>
          <a href="{{route('product.edit',['product' => $product])}}"><button class="btn">Edit</button></a>
        </td>
        <td><form action="{{route('product.delete',['product'=>$product])}}" method="post">
            @csrf
            @method('delete')
          <button class="btn">Delete</button>
        </form></td>
    </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>
