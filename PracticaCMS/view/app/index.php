<div class="slider-componentes">
    <section>
        <div class="reviews">
            <div class="slideshow-container">
                <div class="elemento">
                    <img src="<?php echo $_SESSION['public'] ?>img/AMD-Radeon-RX-6900-XT.jpg" style="width:100%" alt="intro">
                    <div class="text"></div>
                </div>
                <a class="prev" onclick="plusSlides(-1)"><</a>
                <a class="next" onclick="plusSlides(1)">></a>
            </div>
        </div>
    </section>
    <ul id="tabs-swipe-demo" class="tabs">
        <?php foreach ($datos as $row){ ?>
        <li>
            <a href="<?php echo $_SESSION['home']."componente/".$row->slug ?>"><h3> <?php echo $row->titulo ?></h3>
                <div class="datos">
                    Por <span style="color: #2580bd;"> <?php echo $row->autor ?></span>
                    / <?php echo date("d/m/Y", strtotime($row->fecha)) ?></a>
                </div>
        </li>
        <?php } ?>
    </ul>
</div>

<div class="row">
    <?php foreach ($datos as $row){ ?>
        <article class="col m12 l6">
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo $_SESSION['home']."componente/".$row->slug ?>">
                        <img src="<?php echo $_SESSION['public']."img/".$row->imagen ?>" alt="<?php echo $row->titulo ?>">
                    </a>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h2><?php echo $row->titulo ?></h2>
                        <p class="card-action"><?php echo $row->entradilla ?></p>
                    </div>
                    <div class="card-info">
                        <p>Por <span style="color: rgba(31,110,163,.8);"> <?php echo $row->autor ?></span>
                            / <?php echo date("d/m/Y", strtotime($row->fecha)) ?> /
                            <a href="<?php
                                $tipo = $row->review;
                                $categoria=null;
                                if($tipo == 0){
                                    $categoria="componente";
                                }
                                else $categoria= "review";
                                echo $_SESSION['home'].$categoria?>s" style="color: rgba(31,110,163,.8)">
                                <?php echo $categoria ?>
                            </a>

                        </p>
                    </div>
                </div>
            </div>
        </article>
    <?php } ?>
</div>
<aside>
    <form>
        <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
        </div>
    </form>
    <img src="https://elchapuzasinformatico.com/wp-content/uploads/2022/01/B4nner-MSI-Alder-Lake.jpg%22">
</aside>
