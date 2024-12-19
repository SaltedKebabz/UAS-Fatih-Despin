<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4a90e2, #007aff);
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin-top: 40px;
        }
        h2 {
            font-weight: 900;
            color: #ffffff;
            text-align: center;
            text-shadow: 2px 2px rgba(0, 0, 0, 0.1);
        }
        .create-section, .table-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            transition: transform 0.2s;
        }
        .create-section:hover, .table-container:hover {
            transform: scale(1.03);
        }
        .form-label {
            font-weight: 600;
            color: #4a90e2;
        }
        .form-control {
            border: 2px solid #4a90e2;
            border-radius: 10px;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #4a90e2;
            box-shadow: 0px 0px 5px #4a90e2;
        }
        .btn-primary {
            background-color: #4a90e2;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #007aff;
            box-shadow: 0px 5px 15px rgba(0, 122, 255, 0.5);
        }
        .btn-danger {
            background-color: #ff4d6d;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
        }
        .btn-danger:hover {
            background-color: #c40036;
            box-shadow: 0px 5px 15px rgba(196, 0, 54, 0.5);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
        }
        thead {
            background: #4a90e2;
            color: white;
        }
        tbody tr {
            background-color: #ffffff;
            transition: background-color 0.3s;
        }
        tbody tr:hover {
            background-color: rgba(74, 144, 226, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Product Management Dashboard</h2>

        <div class="create-section">
            <h4>Add New Product</h4>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name">
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="Enter product description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price">
                </div>
                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>

        <div class="table-container">
            <h4>Product List</h4>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer>
            &copy; 2024 Product Management. All rights reserved.
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
