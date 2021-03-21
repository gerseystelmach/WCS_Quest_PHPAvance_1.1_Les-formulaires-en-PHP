<form action="thanks.php" method="post">

    <label for="firstName">Prénom:</label>
    <input type="text" id="firstName" name="userFirstName" placeholder="John" required>

    <label for="lastName">Nom:</label>
    <input type="text" id="lastName" name="userLastName" placeholder="Smith" required>

    <label for="telephone">Téléphone:</label>
    <input type="number" id="telephone" name="userTelephone" placeholder="01 02 03 04 05" required>

    <label for="telephone">Téléphone:</label>
    <input type="email" id="email" name="userEmail" placeholder="johnsmith@john.com" required>


    <label for="message">Votre message:</label>
    <textarea name="message" id="message" required></textarea>

    <label for="reasonContact">Pourquoi nous contactez-vous?</label>
    <select name="reasonContact" id="reason" required>
        <option value="">-- Choisissez une option --</option>
        <option value="Plainte">Plainte</option>
        <option value="Suggestion">Suggestion</option>
        <option value="Information">Information</option>
        <option value="Candidature spontanée d'emploi">Candidature spontanée d'emploi</option>

    </select>


    <input type="submit" value="Envoyer">

</form>



