<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Brick Wall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="display-4">Hero Heading</h1>
        <p class="lead">This is a description of the hero section. It provides an overview of the content or product.</p>
        <a href="#" class="btn btn-primary btn-lg">Buy Now</a>
    </div>
</section>

<div class="p-5 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis">Basic jumbotron</h1>
    <p class="lead">
        <div id="brick-wall" class="container mt-5 brick-wall"></div>
    </p>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer Content</h5>
                <p>
                    Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Your Company
    </div>
</footer>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const bricks = [
        { name: 'Alice' },
        { name: 'Bob' },
        { name: 'Charlie' },
        { name: 'David' },
        { name: 'Eve' },
        { name: 'Frank' },
        { name: 'Alice' },
        { name: 'Bob' },
        { name: 'Charlie' },
        { name: 'David' },
        { name: 'Eve' },
    ];

    const brickWall = document.getElementById('brick-wall');

    function getRandomBronzeColor() {
        // Bronze shades typically have RGB values within these ranges
        const r = Math.floor(Math.random() * (205 - 139) + 139); // Between 139 and 205
        const g = Math.floor(Math.random() * (115 - 69) + 69);   // Between 69 and 115
        const b = Math.floor(Math.random() * (66 - 19) + 19);    // Between 19 and 66
        return `rgb(${r}, ${g}, ${b})`;
    }

    bricks.forEach(brick => {
        const brickDiv = document.createElement('div');
        brickDiv.className = 'brick';
        brickDiv.style.backgroundColor = getRandomBronzeColor();
        brickDiv.innerHTML = `<span class="tooltiptext">${brick.name}</span>`;
        brickWall.appendChild(brickDiv);
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
