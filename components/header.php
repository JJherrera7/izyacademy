<header class="bg-primary text-white relative">
    <div class="mx-auto container flex justify-between z-10 py-4 px-4">
        <div class="flex justify-between items-center gap-16">
            <div>
                <a href="./"><img class="h-[50px]" src="assets/img/logo.png" /></a>
            </div>
            <div>
                <a href="./">Inicio</a>
            </div>
            <div class="relative group">
                <p>Rutas de formación <span><i class="fa-solid fa-angle-down"></i></span></p>
                <div class="absolute top-full w-[200%]">
                    <div
                        class="header-menu mt-4 bg-white p-3 rounded-xl shadow text-black  space-y-3 hidden group-hover:block">
                        <a href="#" class="block px-4">Científico De Datos</a>
                        <hr>
                        <a href="aprendeconnet.php" class="block px-4">Ruta de Formación En .NET</a>
                        <hr>
                        <a href="#" class="block px-4">Ruta de Formación en Automatización</a>
                        <div class="flecha"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center gap-4">
            <?php
            if (isset($_SESSION["user"])) {
                ?>
                <div>
                    <p>
                        <span><i class="fa-regular fa-user"></i></span>
                        <?= $_SESSION["user"] ?>
                    </p>
                </div>
                <?php
            } else {
                ?>
                <div id="abrir-sesion-formulario">
                    <p class="cursor-pointer"><span><i class="fa-regular fa-user"></i></span> Inicio de Sesión</p>
                </div>
                <?php
            }
            ?>
            <div class="h-2/4 border-l border-white"></div>
            <div>
                <p><span class="text-2xl"><i class="fa-solid fa-search"></i></span></p>
            </div>
        </div>
    </div>
    <div class="text-center py-24 px-12">
        <h1 class="text-6xl font-semibold">Continua tu formación con IzyAcademy</h1>
        <p>Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos, <br />
            apoyada en el uso derecursos interactivos para que tu aprendizaje sea efectivo</p>
    </div>
    <?php
    if (!isset($_SESSION["user"])) {
        ?>
        <div id="sesion-formulario" class="hidden fixed top-0 left-0 w-screen h-screen bg-black/80 p-8 overflow-auto">
            <div class="m-auto bg-white rounded-xl p-8 relative text-black">
                <h1 class="text-primary text-2xl px-8 font-bold">Inicie sesión en su cuenta</h1>
                <form class="space-y-4" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                    <input type="hidden" name="signin">
                    <div>
                        <input name="email" required class="w-full border p-4 py-2" placeholder="Correo electrónico"
                            type="text">
                    </div>
                    <div>
                        <input name="password" required class="w-full border p-4 py-2" placeholder="Contraseña"
                            type="password">
                    </div>
                    <div class="text-white bg-primary rounded"><button class="w-full p-4 py-2"
                            type="submit">Acceder</button></div>
                </form>
                <button type="submit" id="cerrar-sesion-formulario"
                    class="absolute top-0 right-0 rounded-full flex bg-primary py-[0.9rem] px-[1rem] -m-4 hover:bg-blue-950">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
        </div>
        <?php
    }
    ?>
    <script src="assets/js/header.js"></script>
</header>