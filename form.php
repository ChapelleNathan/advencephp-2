<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="user_name" id="name" required="required">
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="user_lastname" id="prenom" required="required">
        </div>
        <div>
            <label for="courriel">Courriel</label>
            <input type="email" name="user_email" id="courriel" required="required">
        </div>
        <div>
            <label for="subject">Sujet</label>
            <select name="subject" id="subject">
                <option value="cat">chats</option>
                <option value="dog">chiens</option>
            </select>
        </div>
        <div>
            <label for="phoneNumber">Numéro de téléphone</label>
            <input type="tel" name="user_phoneNumber" id="phoneNumber" required="required">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="user_message" id="message" required="required"></textarea >
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>