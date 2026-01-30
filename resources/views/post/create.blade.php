<h1>Liste des Posts</h1>

<form action="/posts" method="post">
    @csrf
    <input type="text" name="titre" placeholder ='titre'>
    <input type="text" name ="contenu" placeholder="contenu">
    <input type="text" name ="image" placeholder="image">
    <input type ="number" name ="categorie_id" placeholder="categorie_id">
    <button type="submit">Ajouter</button>
</form>
