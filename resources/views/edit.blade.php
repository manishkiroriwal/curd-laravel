<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }

    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s ease-in-out;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: #6c63ff;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #6c63ff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .form-group button:hover {
      background-color: #5148e2;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Edit Product Details</h2>
    <form action="{{route('product.update',['product' => $product])}}" method="post">
        @csrf
        @method('put')
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$product->name}}" required>
      </div>

      <div class="form-group">
        <label for="qty">Quantity:</label>
        <input type="text" id="qty" name="qty" value="{{$product->qty}}" required>
      </div>

      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{$product->price}}" required>
      </div>

      <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" value="{{$product->description}}" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
