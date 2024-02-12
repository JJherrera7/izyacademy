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
    <main class="py-12 space-y-8">
        <div class="container mx-auto px-4">
            <h1 class="section-title text-primary">Novedades</h1>
            <div class="flex flex-col gap-8 lg:flex-row">
                <div class="space-y-2 lg:w-1/2">
                    <div class="novedades-imagenes"><img src="assets/img/novedades/2.jpg" alt=""></div>
                    <p class="novedades-titulos">Bienvenidos a IzyAcademy</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa similique
                        expedita inventore
                        animi? Velit blanditiis voluptate necessitatibus nobis vitae a sint molestias animi! Repellat
                        velit vero nesciunt, doloribus suscipit atque?
                        Minima nihil odio nesciunt voluptatem quo, doloremque sed necessitatibus autem itaque velit est
                        culpa voluptatibus aspernatur reprehenderit deserunt earum illo maiores voluptas repudiandae
                        laborum quis! Odio hic perspiciatis ullam libero?</p>
                </div>
                <div class="flex flex-col gap-8 lg:w-1/2">
                    <div class="flex flex-col gap-8 mn:flex-row">
                        <div class="space-y-2">
                            <div class="novedades-imagenes"><img src="assets/img/novedades/1.jpg" alt=""></div>
                            <p class="novedades-titulos">Generalidades de la comunidad</p>
                            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At et
                                veritatis iure nesciunt quasi itaque blanditiis, quo obcaecati nemo eos labore
                                dignissimos minima provident inventore voluptates est possimus delectus magni!</p>
                        </div>
                        <div class="space-y-2">
                            <div class="novedades-imagenes"><img src="assets/img/novedades/3.jpg" alt=""></div>
                            <p class="novedades-titulos">Transferencia de conocimiento</p>
                            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At et
                                veritatis iure nesciunt quasi itaque blanditiis, quo obcaecati nemo eos labore
                                dignissimos minima provident inventore voluptates est possimus delectus magni!</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 mn:flex-row">
                        <div class="space-y-2">
                            <div class="novedades-imagenes"><img src="assets/img/novedades/4.avif" alt=""></div>
                            <p class="novedades-titulos">Certificaciones e insignias</p>
                            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At et
                                veritatis iure nesciunt quasi itaque blanditiis, quo obcaecati nemo eos labore
                                dignissimos minima provident inventore voluptates est possimus delectus magni!</p>
                        </div>
                        <div class="space-y-2">
                            <div class="novedades-imagenes"><img src="assets/img/novedades/5.avif" alt=""></div>
                            <p class="novedades-titulos">Apropiación del conocimiento</p>
                            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At et
                                veritatis iure nesciunt quasi itaque blanditiis, quo obcaecati nemo eos labore
                                dignissimos minima provident inventore voluptates est possimus delectus magni!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container mx-auto px-4 text-center space-y-8">
            <h1 class="section-title text-primary">Aliados</h1>
            <p class="text-primary mb-8">Nuestros entrenamientos, procesos formativos y certificaciones cuentan con el
                respaldo de empresas que confian en nosotros.</p>
            <div class="flex gap-2 flex-wrap justify-evenly items-center">
                <?php
                foreach (array_diff(scandir("assets/img/aliados"), [".", ".."]) as $value) {
                    ?>
                    <div class="w-[100px] hover:scale-150">
                        <img src="<?= "assets/img/aliados/{$value}" ?>" alt="">
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="flex justify-evenly relative pt-24 lg:py-0">
                <div class="absolute lg:relative w-[225px] top-0 left-0 flex lg:w-1/2 p-12">
                    <img class="w-full m-auto border-[0.25rem] border-primary rounded-tr-[2rem] rounded-bl-[2rem] lg:rounded-tr-[4rem] lg:rounded-bl-[4rem]" src="assets/img/register.jpg" alt="">
                </div>
                <div class="w-full lg:w-1/2 px-8">
                    <h1 class="text-primary section-title">Regístrate</h1>
                    <form id="registro-formulario" class="text-left" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" name="signup">
                        <div class="space-y-4">
                            <input type="hidden" name="signup">
                            <div>
                                <div><label class="text-slate-500" for="signup-name">Nombre</label></div>
                                <div><input class="w-full border py-2 px-4" id="name" name="name" type="text"></div>
                            </div>
                            <div>
                                <div><label class="text-slate-500" for="signup-lastname">Apellidos</label></div>
                                <div><input class="w-full border py-2 px-4" id="lastname" name="lastname" type="text"></div>
                            </div>
                            <div>
                                <div><label class="text-slate-500" for="signup-email">Correo electronico</label></div>
                                <div><input class="w-full border py-2 px-4" id="email" name="email" type="email"></div>
                            </div>
                            <div>
                                <div><label class="text-slate-500" for="signup-password">Contraseña</label></div>
                                <div><input class="w-full border py-2 px-4" id="password" name="password" type="password"></div>
                            </div>
                            <div>
                                <div><label class="text-slate-500" for="signup-confirm">Confirmar contraseña</label></div>
                                <div><input class="w-full border py-2 px-4" id="confirm" name="confirm" type="password"></div>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">
                                    <span>
                                        <input type="checkbox" id="registro-tyc">
                                    </span> Acepto <span class="text-xs text-primary font-bold">términos y condiciones</span>
                                </p>
                                <p class="text-xs text-slate-500">
                                    <span>
                                        <input type="checkbox" id="registro-ptd">
                                    </span> Acepto <span class="text-xs text-primary font-bold">politica de tratamiento de datos</span>
                                </p>
                            </div>
                            <div>
                                <button disabled id="enviar-formulario" class="bg-primary !bg-primary/60 text-white w-full py-2 px-4 rounded cursor-default" type="button">Registrate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/register.js"></script>
    </main>
    <?php include_once "components/footer.php" ?>
</body>

</html>