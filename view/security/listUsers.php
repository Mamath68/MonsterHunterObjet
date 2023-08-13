<?php

$users = $result["data"]['users'];
?>

<div class="main2">
  <button class="openbtn" onclick="openNav()">☰</button>
  <h1 class="p-4 primetitle text-light">Liste des Utilisateurs</h1>
</div>
<div class="main3">
  <h1 class="p-3 primetitle text-light">Liste des Utilisateurs</h1>
</div>
<div class="container text-center">
  <table class="table users">
    <thead>
      <tr>
        <th scope="col" class="text-center">Avatar</th>
        <th scope="col" class="text-center">Pseudo</th>
        <th scope="col" class="text-center">Date Inscription</th>
      </tr>
    </thead>
    <?php
    foreach ($users as $user) {
      ?>
      <tbody>
        <tr>
          <td><img src="public/img/<?= $user->getAvatar() ?>" alt="Avatar"></td>
          <td><?= $user->getPseudo() ?></td>
          <td><?= $user->getRegisterDate() ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
  </table>
</div>
<?php
$title = "Les Duellistes";

?>