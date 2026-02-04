<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class="space-y-4">
            <?php foreach ($notes as $note) : ?>
                <li class="p-4 bg-gray-800 rounded-lg border border-white/10 hover:border-indigo-500 transition">
                    <a href="note?id=<?= $note['id'] ?>" class="text-indigo-400 hover:text-indigo-300 font-medium">
                        <?= htmlspecialchars($note['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php require("partials/footer.php") ?>