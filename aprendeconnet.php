<?php 
    include_once "lib/connection.php";
    include_once "lib/signin.php";
    include_once "lib/signup.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once "components/head.php" ?>

<body class="min-h-screen">

    <?php include_once "components/header.php" ?>
    <main class="py-8">
        <div class="text-center container mx-auto  space-y-8">
            <p>Aprende a construir</p>
            <div class="flex w-full justify-evenly">
                <div class="space-y-4">
                    <div class="w-[150px] h-[150px]">
                        <img class="h-w-full h-full [150px] rounded-full shadow-md border" src="assets/img/net/aplicaciones_web.avif" alt="">
                    </div>
                    <p>Aplicaciones Web</p>
                </div>
                <div class="space-y-4">
                    <div class="w-[150px] h-[150px]">
                        <img class="w-full h-full rounded-full shadow-md border" src="assets/img/net/web_api.avif" alt="">
                    </div>
                    <p>Web API</p>
                </div>
                <div class="space-y-4">
                    <div class="w-[150px] h-[150px]">
                        <img class="w-full h-full rounded-full shadow-md border" src="assets/img/net/aplicaciones_seguras.jpg" alt="">
                    </div>
                    <p>Aplicaciones Seguras</p>
                </div>
            </div>
            <div class="aprendeconnet-parallax bg-primary text-white text-4xl py-32 px-12 space-y-4">
                <p class="leading-4">ASP.NET, el framework de desarrollo web que permite crear aplicaciones web potentes, seguras y
                    escalables de manera fácil, rápida y eficiente</p>
                <h1 class="mb-0 font-bold">COMIENZA TU VIAJE PARA CONVERTIRTE EN DESARROLLADOR</h1>
            </div>
        </div>
    </main>
    <?php include_once "components/footer.php" ?>
</body>

</html>