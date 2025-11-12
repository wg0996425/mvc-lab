<h2>Menu</h2>

<?php if (empty($items)): ?>
    <p>No menu items found</p>
<?php else: ?>
    <ul>
        <?php foreach ($items as $i): ?>
            <li>
                <?= htmlspecialchars($i['name']) ?>
                <?= htmlspecialchars($i['size']) ?>
                <?= htmlspecialchars($i['price']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>