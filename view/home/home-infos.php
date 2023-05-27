<?php global $all; global $metaHome; global $svg;



debug($metaHome);
debug($svg);
debug($all);
?>

<div id="infos">
    <div class="head-wrap">
        <div class="header-infos">
            <img src="<?php echo asset('img/bg-green-white.svg'); ?>" alt="logo MD Com&Sport">

            <h1 class="title head-infos"><?php echo $metaHome['nom_marque'][0]; ?></h1>

            <img src="<?php echo asset('img/bg-green-white.svg'); ?>" alt="logo MD Com&Sport">
        </div>
    </div>

        <div class="line"></div>
        
    <div class="wrap">
        <h2 class="title">Qui suis-je ?</h2>

        <div class="infos-container">
            <div class="infos-left">
                <p class="infos-desc"><?php echo nl2br($metaHome['description_gauche'][0]); ?></p>
            </div>

            <div class="infos-right">
                <p class="infos-desc"><?php echo nl2br($metaHome['description_droite'][0]); ?></p>
            </div>
        </div>

        <h2 class="title">Mes Services</h2>

        <div class="card-container">
            <div class="card one hover">
                <!-- <div class="card-back">
                    <div class="icon_card">
                        <?php echo $svg['icon_service_1']; ?>
                    </div>
                
                    <?php if(!empty($metaHome['titre_service_1'][0])){ ?>
                        <h2 class="card-title"><?php echo ucfirst($metaHome['titre_service_1'][0]); ?></h2>
                    <?php  } ?>
                </div> -->

                <div class="card-front">
                    <?php if(!empty($metaHome['titre_service_1'][0])){ ?>
                            <h2 class="card-title hover"><?php echo ucfirst($metaHome['titre_service_1'][0]); ?></h2>
                    <?php  } ?>

                    <div class="line-hover"></div>

                    <ul class="desc-service">
                        <li><?php echo ucfirst(nl2br($metaHome['description_service_1'][0])); ?></li>
                    </ul>   
                </div> 
                                   
            </div>
        </div>
    </div>
</div>