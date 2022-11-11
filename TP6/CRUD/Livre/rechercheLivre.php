<h2>Rechercher un Etudiant</h2>

<form action="rechercheLivre_action.php" method="post">
    Critère
<select name="champ">
    <option value="codeLivre">codeLivre</option>
    <option value="titre">titre</option>
    <option value="auteur">auteur</option>
    <option value="dateEdition">dateEdition</option>
  </select>
  <br><br>
    Valeur<input type="text" name="valeur"><br><br>

    <button type="reset">Annuler</button>
    <button type="submit">Rechercher</button>
</form>