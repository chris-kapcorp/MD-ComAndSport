<?php global $all; global $metaHome; global $svg;
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

        <div class="all-card-wrap">
            <div class="card-container one">
                <div class="card one">
                    <div class="card-back">
                        <div class="wrap-icon">
                            <div class="icon-card"></div>
                        </div>
                        
                        <?php if(!empty($metaHome['titre_service_1'][0])){ ?>
                            <h2 class="card-title"><?php echo ucfirst($metaHome['titre_service_1'][0]); ?></h2>
                        <?php  } ?>
                    </div>

                    <div class="card-front">
                        <?php if(!empty($metaHome['titre_service_1'][0])){ ?>
                                <h2 class="card-title hover"><?php echo ucfirst($metaHome['titre_service_1'][0]); ?></h2>
                        <?php  } ?>

                        <div class="line-hover"></div>

                        <div class="wrap-desc-service">
                            <?php  
                                if(!empty($metaHome['description_service_1'][0])){
                                firstLetterUpperList($metaHome, 'description_service_1', 'desc-service');
                            } ?>
                        </div>  
                    </div>               
                </div>
            </div>
            
            <div class="card-container two">
                <div class="card two">
                    <div class="card-back">
                        <div class="wrap-icon">
                            <div class="icon-card"></div>
                        </div>
                    
                        <?php if(!empty($metaHome['titre_service_2'][0])){ ?>
                            <h2 class="card-title"><?php echo ucfirst($metaHome['titre_service_2'][0]); ?></h2>
                        <?php  } ?>
                    </div>

                    <div class="card-front">
                        <?php if(!empty($metaHome['titre_service_2'][0])){ ?>
                                <h2 class="card-title hover"><?php echo ucfirst($metaHome['titre_service_2'][0]); ?></h2>
                        <?php  } ?>

                        <div class="line-hover"></div>

                        <div class="wrap-desc-service">
                            <?php  
                                if(!empty($metaHome['description_service_2'][0])){
                                firstLetterUpperList($metaHome, 'description_service_2', 'desc-service');
                            } ?>
                        </div>  
                    </div>               
                </div>
            </div>

            <div class="card-container three">
                <div class="card three">
                    <div class="card-back">
                        <div class="wrap-icon">
                            <div class="icon-card"></div>
                        </div>
                    
                        <?php if(!empty($metaHome['titre_service_3'][0])){ ?>
                            <h2 class="card-title"><?php echo ucfirst($metaHome['titre_service_3'][0]); ?></h2>
                        <?php  } ?>
                    </div>

                    <div class="card-front">
                        <?php if(!empty($metaHome['titre_service_3'][0])){ ?>
                                <h2 class="card-title hover"><?php echo ucfirst($metaHome['titre_service_3'][0]); ?></h2>
                        <?php  } ?>

                        <div class="line-hover"></div>

                        <div class="wrap-desc-service">
                            <?php  
                                if(!empty($metaHome['description_service_3'][0])){
                                firstLetterUpperList($metaHome, 'description_service_3', 'desc-service');
                            } ?>
                        </div>  
                    </div>               
                </div>
            </div>

            <div class="card-container four">
                <div class="card four">
                    <div class="card-back">
                        <div class="wrap-icon">
                            <div class="icon-card"></div>
                        </div>
                    
                        <?php if(!empty($metaHome['titre_service_4'][0])){ ?>
                            <h2 class="card-title"><?php echo ucfirst($metaHome['titre_service_4'][0]); ?></h2>
                        <?php  } ?>
                    </div>

                    <div class="card-front">
                        <?php if(!empty($metaHome['titre_service_4'][0])){ ?>
                                <h2 class="card-title hover"><?php echo ucfirst($metaHome['titre_service_4'][0]); ?></h2>
                        <?php  } ?>

                        <div class="line-hover"></div>

                        <div class="wrap-desc-service">
                            <?php  
                                if(!empty($metaHome['description_service_4'][0])){
                                firstLetterUpperList($metaHome, 'description_service_4', 'desc-service');
                            } ?>
                        </div>  
                    </div>               
                </div>
            </div>

            <div class="card-container five">
                <div class="card five">
                    <div class="card-back">
                        <div class="wrap-icon">
                            <div class="icon-card"></div>
                        </div>
                    
                        <?php if(!empty($metaHome['titre_service_5'][0])){ ?>
                            <h2 class="card-title"><?php echo ucfirst($metaHome['titre_service_5'][0]); ?></h2>
                        <?php  } ?>
                    </div>

                    <div class="card-front">
                        <?php if(!empty($metaHome['titre_service_5'][0])){ ?>
                                <h2 class="card-title hover"><?php echo ucfirst($metaHome['titre_service_5'][0]); ?></h2>
                        <?php  } ?>

                        <div class="line-hover"></div>
                        
                        <div class="wrap-desc-service">
                            <?php  
                                if(!empty($metaHome['description_service_5'][0])){
                                firstLetterUpperList($metaHome, 'description_service_2', 'desc-service');
                            } ?> 
                        </div>
                    </div>               
                </div>
            </div>
        </div>

        <?php if(!empty($metaHome['post_scriptum'][0])){ ?>
            <p class="serv-legend"><?php echo $metaHome['post_scriptum'][0]; ?></p>
        <?php } ?>
    </div>
</div>