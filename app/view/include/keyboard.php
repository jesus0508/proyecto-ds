    <!--<div class="login-background">-->
        <main>
            <div class="container-login">
                <form id="form-login" name="login" class="form-login" method="POST" action="<?=RUTA_URL?>LoginController/ingresar_codigo">
                    <div class="login-title">Bienvenido</div>
                    <div class="login-img">
                        <img src="<?=RUTA_URL?>img/LOGO-ROKYS-2017-01.png" class="login-image">
                    </div>
                    <div class="login-password">
                        <input id="password" class="input-password" type="password" name="password" placeholder="Ingrese su Codigo" required>
                    </div>
                    <div id="keyboard" class="keyboard">
                        <!--Si desea ingresar por teclado quitar el readonly-->
                        <button id="1" type="button" class="number">1</button>
                        <button id="2" type="button" class="number">2</button>
                        <button id="3" type="button" class="number">3</button>
                        <button id="back" type="button" class="button-back">Back</button>
                        <button id="4" type="button" class="number">4</button>
                        <button id="5" type="button" class="number">5</button>
                        <button id="6" type="button" class="number">6</button>
                        <button id="ok" type="submit" class="button-ok">OK</button>
                        <button id="7" type="button" class="number">7</button>
                        <button id="8" type="button" class="number">8</button>
                        <button id="9" type="button" class="number">9</button>
                        <button id="0" type="button" class="number">0</button>
                        <button id="00" type="button" class="number">00</button>
                        <button id="c" type="button" class="number">C</button>
                        <button id="cancel" type="button" class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </main>

    <!--</div>-->