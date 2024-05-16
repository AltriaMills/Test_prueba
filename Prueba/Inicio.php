<!DOCTYPE html>
<html lang= "en">






</head>
<body>
        <div class= "container">
                <?php
                
                ?>
                <div class="login">
                    <form method= "post" action="">
                    <h2 class= "titulo">PHP Login</h2>

                    <div class= "input-div one">
                        <div class="i">
                            <i class= "fas fa-user"></i>
                </div>
                <div class="Usuario">
                    <h5>Usuario</h5>
                    <input type="text" class="input" name= "usuario">
                </div>
                </div>
                <div class= "input-div one">
                        <div class="i">
                            <i class= "fas fa-user"></i>
                </div>
                <div class="Clave">
                    <h5>Contraseña</h5>
                    <input type="password" class="input" name= "clave">
                </div>
                </div>
                <div class="view">
                    <div class="fas fa-eye verPassword" onclick="vista()"></div>
                </div>

                <div class="text-centre">
                    <a class="font-italic" href="">Olvide mi contraseña</a>
                </div> 
                <input name="betningresar" class="btn" type="submit" value="Iniciar Sesion">
                include("Login.php");
                <!-- <a href= "Login.php"></a> -->
            </form>  
    </div>
</body>
</html>