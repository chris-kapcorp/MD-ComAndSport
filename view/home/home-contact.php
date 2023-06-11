<!-- <div id="contact">
    <div class="wrap">
        <h2 class="title">Contact</h2>
    </div>

    <div class="form-box">
        <div class="form-value">
            <form action="" method="post" novalidate>

                <div class="inputbox">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>

                <div class="inputbox">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>

                <button>Envoyer</button>
            </form>
        </div>
    </div>
</div> -->

<div id="contact">
    <div class="wrap">
        <h2 class="title">Contact</h2>

        <div class="form-container">
            <div class="form-wrap">
                <form action="" method="post" novalidate>
                    <div class="input-wrap">
                        <div class="inputbox">
                            <input type="text" name="lastname" id="lastname" required>
                            <label for="lastname">Nom*</label>
                        </div>

                        <div class="inputbox">
                            <input type="text" name="firstname" id="firstname" required>
                            <label for="firstname">Prénom*</label>
                        </div>
                    </div>

                    <div class="input-wrap">
                        <div class="inputbox">
                            <input type="text" name="structure" id="structure" required>
                            <label for="structure">Structure</label>
                        </div>

                        <div class="inputbox">
                            <input type="email" name="email" id="email" required>
                            <label for="email">E-mail*</label>
                        </div>
                    </div>

                    <div class="input-wrap message-infos">
                        <div class="inputbox object">
                            <input type="text" name="objet" id="objet" required>
                            <label for="objet">Objet*</label>
                        </div>

                        <div class="content">
                            <textarea name="message" id="message"></textarea>
                            <label for="message">Message*</label>
                        </div>
                    </div>

                    <button id="sent">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>