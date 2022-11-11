<h2>Rechercher un Etudiant</h2>

<form action="rechercheEtud_action.php" method="post">
    Critère
<select name="champ">
    <option value="codeEtudiant">codeEtudiant</option>
    <option value="nom">nom</option>
    <option value="prenom">prenom</option>
    <option value="adresse">adresse</option>
    <option value="classe">classe</option>
  </select>
  <br><br>
    Valeur<input type="text" name="valeur"><br><br>

    <button type="reset">Annuler</button>
    <button type="submit">Rechercher</button>
</form>