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
            <form id="productForm">
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="Enter product price">
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
                <tbody id="productList">
                    <!-- Product rows will be added dynamically here -->
                </tbody>
            </table>
        </div>

        <footer>
            &copy; 2024 Product Management. All rights reserved.
        </footer>
    </div>

    <script>
        // Handle form submit to create a new product
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const productName = document.getElementById('productName').value;
            const productDescription = document.getElementById('productDescription').value;
            const productPrice = document.getElementById('productPrice').value;

            fetch('http://localhost:8000/api/products', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: productName,
                    description: productDescription,
                    price: productPrice,
                }),
            })
            .then(response => response.json())
            .then(data => {
                addProductToTable(data);
                alert('Product added successfully!');
                document.getElementById('productForm').reset();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to add product');
            });
        });

        // Add product row to table
        function addProductToTable(product) {
            const tableBody = document.getElementById('productList');
            const row = document.createElement('tr');
            row.setAttribute('data-id', product.id);

            row.innerHTML = `
                <td>${product.id}</td>
                <td>${product.name}</td>
                <td>${product.description}</td>
                <td>Rp${parseFloat(product.price).toLocaleString()}</td>
                <td>
                    <button class="btn btn-sm btn-primary" onclick="editProduct(${product.id})">Edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deleteProduct(${product.id})">Delete</button>
                </td>
            `;
            tableBody.appendChild(row);
        }

        // Edit product
        function editProduct(productId) {
            // Placeholder function for editing a product
            alert(`Edit product with ID: ${productId}`);
            // Typically, you would fetch the product data and display it in an editable form here.
        }

        // Delete product
        function deleteProduct(productId) {
            if (confirm('Are you sure you want to delete this product?')) {
                fetch(`http://localhost:8000/api/products/${productId}`, {
                    method: 'DELETE',
                })
                .then(response => response.json())
                .then(data => {
                    alert('Product deleted successfully!');
                    // Remove the row from the table
                    document.querySelector(`#productList tr[data-id="${productId}"]`).remove();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to delete product');
                });
            }
        }

        // Display products on page load
        window.onload = function() {
            fetch('http://localhost:8000/api/products')
                .then(response => response.json())
                .then(data => {
                    data.forEach(product => {
                        addProductToTable(product);
                    });
                })
                .catch(error => console.error('Error:', error));
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
