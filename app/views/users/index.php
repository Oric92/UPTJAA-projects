<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Grupo de programacion ListPersons">
    <meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, Bootstrap, Practica, mini proyecto programacion">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="app/views/users/Style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">


</head>
<body>


    <div class="main-container container-fluid d-flex">

        <div class="page_content col-12  col-md-6  d-flex flex-column justify-content-center align-items-center text-center ">
            <h1 class="title ">ListPersons</h1>
            <h2 class="subtitle">¡Crea tu lista de personas!</h2> 
            <button type="button" class="btn btn-lg "> <a class="Link" href="views/form/form.php">Haz Click Aquí</a> </button> 
        </div>

        <div class="vertical-wave-right  col-md-6 col-6 col-sm-6  d-none d-md-block">
            <svg width="945" height="928" viewBox="0 0 945 928" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_17_2)">
                <path d="M1.64169 940.763L96.2384 892.19C190.835 843.618 380.029 746.755 474.586 649.12C569.144 552.475 569.066 455.341 474.352 359.273C379.638 261.791 190.287 164.385 221.854 68.2155C252.236 -28.9432 506.492 -125.717 663.154 -223.402C819.817 -320.238 884.801 -417.283 789.199 -514.765C695.373 -610.975 440.96 -708.187 284.142 -804.205C127.323 -901.495 62.1834 -997.729 31.6826 -1047.19L-4.9567e-06 -1095.24L946.358 -1096L946.397 -1047.5C946.436 -999.007 946.514 -902.297 946.593 -804.739C946.671 -708.17 946.749 -611.036 946.827 -514.892C946.906 -417.333 946.984 -319.775 947.062 -223.631C947.14 -126.496 947.218 -29.9278 947.297 67.6305C947.375 164.341 947.453 261.333 947.531 358.892C947.609 455.177 947.688 552.594 947.765 648.739C947.844 746.156 947.921 842.442 947.961 891.928L948 940L1.64169 940.763Z" fill="#45556C"/>
                </g>
                <defs>
                <clipPath id="clip0_17_2">
                <rect width="2036" height="946.359" fill="white" transform="translate(1.64169 940.763) rotate(-90.0462)"/>
                </clipPath>
                </defs>
            </svg>
        </div>



    </div>









<!-- 
    <h1>User List</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user['name']); ?></li>
        <?php endforeach; ?>
    </ul> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>