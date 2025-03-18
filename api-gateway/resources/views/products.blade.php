<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - E-Commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #ff8a00;
            border-color: #ff8a00;
        }
        .btn-primary:hover {
            background-color: #ff7a00;
            border-color: #ff7a00;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">E-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Keranjang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Produk</h2>
        <div class="row" id="product-list">
            <!-- Produk akan ditampilkan di sini -->
        </div>
    </div>

    <script>
        fetch('http://localhost:8000/product/products')
            .then(response => response.json())
            .then(data => {
                let productList = document.getElementById('product-list');
                data.forEach(product => {
                    let productCard = `
                        <div class="col-md-4 mb-4">
                            <div class="card product-card shadow-sm border-0 rounded">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk">
                                <div class="card-body">
                                    <h5 class="card-title">${product.name}</h5>
                                    <p class="card-text">Rp ${product.price}</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    `;
                    productList.innerHTML += productCard;
                });
            })
            .catch(error => console.log(error));
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
