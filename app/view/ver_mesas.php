<?php include 'include/header.php'?>
<?php include "include/navbar.php";?>
    <!--<main>-->
        <main>
            <div class="breadcrumb">
                <ol>
                    <li><a href="#">Ver Mesas</a></li>
                </ol> 
            </div>
            <div class="mesas-container">
                <?php
                    for($i=1;$i<=260;$i++):
                        echo '<div class="mesas"><span id="'.$i.'" class="number">'.$i.'</div>';
                    endfor;?>
                <div class="pedidos-container">TABLA DE PEDIDOS</div>
            </div>
        </main>
    <!--</main>

<?php include 'include/footer.php'?>