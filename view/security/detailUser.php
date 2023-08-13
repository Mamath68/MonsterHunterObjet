<?php
if (Core\Session::isAdmin()) {
    ?>
    <div class="main2">
        <button class="openbtn" onclick="openNav()">☰</button>
        <h1 class="p-4 primetitle text-light">Detail User</h1>
    </div>
    <div class="main3">
        <h1 class="p-1 primetitle text-light">Detail User</h1>
    </div>
    <div class="versionBureau-maison form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="versionBureau form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="portable-maison-portrait form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="portable-portrait form">
        <div class="card text-center user">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="portable-maison-paysage form">
        <div class="card text-center user">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="portable-paysage form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="tablette-maison-portrait form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="tablette-portrait form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="tablette-maison-paysage form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>
    <div class="tablette-paysage form">
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                </h5>
                <p class="card-text">Bienvenue administrateur</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
                <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
                <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                    class="card-link btn btn-primary"> Mes Publications
                </a>
                <!--  <a href="#" class="card-link">Another link</a>-->
            </div>
        </div>
    </div>

<?php } else if (Core\Session::getUser()) {
    ?>

        <div class="main2">
            <button class="openbtn" onclick="openNav()">☰</button>
            <h1 class="p-4 primetitle text-light">Detail User</h1>
        </div>
        <div class="main3">
            <h1 class="p-3 primetitle text-light">Detail User</h1>
        </div>
        <div class="versionBureau-maison form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="versionBureau form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="portable-maison-portrait form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="portable-portrait form">
            <div class="card text-center user">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="portable-maison-paysage form">
            <div class="card text-center user">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="portable-paysage form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="tablette-maison-portrait form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="tablette-portrait form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="tablette-maison-paysage form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
        <div class="tablette-paysage form">
            <div class="card text-center user ">
                <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= Core\Session::getUser()->getPseudo() ?>
                    </h5>
                    <p class="card-text">Bienvenue administrateur</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Addresse Email
                    <?= Core\Session::getUser()->getEmail() ?>
                    </li>
                    <li class="list-group-item">Date D'inscription <br>
                    <?= Core\Session::getUser()->getRegisterDate() ?>
                    </li>
                    <!-- <li class="list-group-item">A third item</li> -->
                </ul>
                <div class="card-body">
                    <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                        class="card-link btn btn-primary"> Mes Publications
                    </a>
                    <!--  <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>

    <?php }
$title = "Mon Profil Utilisateur";

?>