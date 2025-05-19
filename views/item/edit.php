<h1>Modifier un item</h1>
<form method="post" action="index.php?action=update&id=<?= $item['id'] ?>">
    <label>Nom : <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>" required></label><br>
    <label>Description : <textarea name="description" required><?= htmlspecialchars($item['description']) ?></textarea></label><br>
    <button type="submit">Mettre à jour</button>
</form>
<a href="index.php">Retour</a>
