<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TechInnovate Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        tr,th,td{
            border:2px solid black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">TechInnovate Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <h2>Product Management</h2>
        <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">
            Add Product
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productList"></tbody>
        </table>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveAddButton">Add Product</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editProductForm">
                        <input type="hidden" id="editProductId" name="id">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="editName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editDescription" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editPrice" class="form-label">Price</label>
                            <input type="number" class="form-control" id="editPrice" name="price" step="0.01" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveEditButton">Save changes</button>
                </div>
            </div>
        </div>
    
    </div>
     <!-- Footer -->
     <footer class="bg-transparent text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2023 TechInnovate Solutions. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fetch and display products
        function fetchProducts() {
            fetch('products.php?action=get_products')
                .then(response => response.json())
                .then(data => {
                    const productList = document.getElementById('productList');
                    productList.innerHTML = '';
                    data.forEach(product => {
                        productList.innerHTML += `
                            <tr>
                                <td>${product.id}</td>
                                <td>${product.name}</td>
                                <td>${product.description}</td>
                                <td>$${parseFloat(product.price).toFixed(2)}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" onclick="editProduct(${product.id})">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteProduct(${product.id})">Delete</button>
                                </td>
                            </tr>
                        `;
                    });
                });
        }

        // Add product
        document.getElementById('saveAddButton').addEventListener('click', function() {
            const formData = new FormData(document.getElementById('addProductForm'));
            formData.append('add_product', '1');

            fetch('products.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Success:', data);
                fetchProducts();
                document.getElementById('addProductForm').reset();
                const addProductModal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                addProductModal.hide();
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });

        // Edit product
        function editProduct(id) {
            fetch(`products.php?action=get_product&id=${id}`)
                .then(response => response.json())
                .then(product => {
                    document.getElementById('editProductId').value = product.id;
                    document.getElementById('editName').value = product.name;
                    document.getElementById('editDescription').value = product.description;
                    document.getElementById('editPrice').value = product.price;

                    const editProductModal = new bootstrap.Modal(document.getElementById('editProductModal'));
                    editProductModal.show();
                })
                .catch(error => console.error('Error:', error));
        }

        // Save edited product
        document.getElementById('saveEditButton').addEventListener('click', function() {
            const formData = new FormData(document.getElementById('editProductForm'));
            formData.append('update_product', '1');

            fetch('products.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Success:', data);
                fetchProducts();
                const editProductModal = bootstrap.Modal.getInstance(document.getElementById('editProductModal'));
                editProductModal.hide();
            })
            .catch(error => console.error('Error:', error));
        });

        // Delete product
        function deleteProduct(id) {
            if (confirm('Are you sure you want to delete this product?')) {
                const formData = new FormData();
                formData.append('delete_product', '1');
                formData.append('id', id);

                fetch('products.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    console.log('Success:', data);
                    fetchProducts();
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
        }

        // Initial fetch
        fetchProducts();
    </script>
</body>
</html>

