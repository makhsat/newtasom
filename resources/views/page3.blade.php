<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brick Wall</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .brick {
            width: 50px;
            height: 20px;
            background-color: #b5651d;
            border: 1px solid #a0522d;
            display: inline-block;
            margin: 1px;
            position: relative;
            cursor: pointer;
        }
        .brick:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
        .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .tooltiptext::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: black transparent transparent transparent;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div id="brick-wall" class="d-flex flex-wrap"></div>
</div>

<script>
    const bricks = [
        { name: 'Alice' },
        { name: 'Bob' },
        { name: 'Charlie' },
        { name: 'David' },
        { name: 'Eve' },
        { name: 'Frank' }
        // Add more names as needed
    ];

    const brickWall = document.getElementById('brick-wall');

    bricks.forEach(brick => {
        const brickDiv = document.createElement('div');
        brickDiv.className = 'brick';
        brickDiv.innerHTML = `<span class="tooltiptext">${brick.name}</span>`;
        brickWall.appendChild(brickDiv);
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
