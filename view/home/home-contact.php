<?php

?>

<div id="contact">
    <div class="wrap">
        <h2 class="title">Contact</h2>

        <div class="form-container">
            <div class="form-wrap">
                <form action="" method="post" novalidate>
                    <div class="input-wrap">

                        <div class="inputbox-container">
                            <div class="inputbox">
                                <input type="text" name="lastname" id="lastname" required>
                                <label for="lastname">Nom*</label>
                            </div>
                        </div>

                        <div class="inputbox-container">
                            <div class="inputbox">
                                <input type="text" name="firstname" id="firstname" required>
                                <label for="firstname">Prénom*</label>
                            </div>
                            <span class="error"></span>
                        </div>
                    </div>

                    <div class="input-wrap">
                        <div class="inputbox-container">
                            <div class="inputbox">
                                <input type="text" name="structure" id="structure" required>
                                <label for="structure">Structure</label>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="inputbox-container">
                            <div class="inputbox">
                                <input type="email" name="email" id="email" required>
                                <label for="email">E-mail*</label>
                            </div>
                            <span class="error"></span>
                        </div>
                    </div>

                    <div class="input-wrap message-infos">
                        <div class="inputbox-container">
                            <div class="inputbox object">
                                <input type="text" name="objet" id="objet" required>
                                <label for="objet">Objet*</label>
                            </div>
                            <span class="error"></span>
                        </div>
                        
                        <div class="inputbox-container">
                            <div class="content">
                                <textarea name="message" id="message"></textarea>
                                <label for="message">Message*</label>
                            </div>
                            <span class="error"></span>
                        </div>
                    </div>

                    <input type="submit" id="sent" value="Envoyer">
                </form>
            </div>
        </div>
    </div>
</div>