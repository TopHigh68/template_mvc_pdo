<h1>Liste des items</h1>
<a href="index.php?action=create">Ajouter un item</a>
<ul>
<?php foreach ($items as $item): ?>
    <li>
        <strong><?= htmlspecialchars($item['name']) ?></strong><br>
        <?= htmlspecialchars($item['description']) ?><br>
        <a href="index.php?action=edit&id=<?= $item['id'] ?>">Modifier</a> |
        <a href="index.php?action=delete&id=<?= $item['id'] ?>" onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
