<?php

?>

<div id="contact">
    <div class="wrap">
        <h2 class="title">Contact</h2>

        <div class="form-contact">
            <form action="" method="post" id="formulaire" novalidate>

            <div class="container full-name">
                <div class="input">
                    <label for="l_name">Nom*</label>
                    <input type="text" name="l_name" id="l_name">
                </div>
                
                <div class="input">
                    <label for="f_name">Prénom*</label>
                    <input type="text" name="f_name" id="f_name">
                </div>
            </div>
                
                <div class="container pro-infos">
                    <div class="input">
                        <label for="structure">Structure</label>
                        <input type="text" name="structure" id="structure">
                    </div>
                    
                    <div class="input">
                        <label for="mail">E-mail*</label>
                        <input type="email" name="mail" id="mail">
                    </div>
                </div>

                <div class="message-infos">
                    <div class="input content">
                        <label for="objet">Objet*</label>
                        <input type="text" name="objet" id="objet">
                    </div>
                    
                    <div class="input content">
                        <label for="message">Message*</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                
                <div class="submit">
                    <input type="submit" id="sent" name="sent" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</div>