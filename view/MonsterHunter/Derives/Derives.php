<?php

$movies = $result["data"]["derives"];
$mangas = $result["data"]["derive"];
?>

<table class="table text-center mangas">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Affiche</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody class="fs-4 fw-semibold">
        <?php
        foreach ($movies as $derive) {
            ?>
            <tr>
                <td>
                    <?= $derive->getName() ?>
                </td>
                <td><img src="public/img/<?= $derive->getImg() ?>" class="img-fluid"></td>
                <td><a class="link-light"
                        href="index.php?ctrl=derive&action=findDeriveById&id=<?= $derive->getId() ?>">Details</a></td>
            </tr>
            <?php
        }
        ?>
        <?php
        foreach ($mangas as $derives) {
            ?>
            <tr>
                <td>
                    <?= $derives->getName() ?>
                </td>
                <td><img src="public/img/<?= $derives->getImg() ?>" class="img-fluid"></td>
                <td><a class="link-light"
                        href="index.php?ctrl=derive&action=findDerivesById&id=<?= $derives->getId() ?>">Details</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Dérivés";
?>