<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("./assets/nav.php");
    include("./assets/header.php");
    include("./assets/footer.php")
    ?>
    <div id="container">
        <section>
            <form>
                <div class="input-data">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" required>
                    <div class="underline"></div>
                </div>
                <div class="input-data">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                    <div class="underline"></div>
                </div>
                <div class="input-data">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <div class="underline"></div>
                </div>
                <div class="input-data">
                    <label for="telephone">Telephone</label>
                    <input type="tel" name="telephone" id="telephone" required>
                    <div class="underline"></div>
                </div>
                <div class="input-data textarea">
                    <label for="message">Message</label>
                    <textarea id="message" required></textarea>
                    <div class="underline"></div>
                </div>
                <button>Envoyer le message</button>
            </form>
        </section>
    </div>
</body>

</html>