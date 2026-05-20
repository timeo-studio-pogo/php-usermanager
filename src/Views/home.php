<?php

/**  @var array $users */ ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>Dashboard - Gestion des utilisateur</title>
</head>

<body class="dashboard">

  <div class="container">
    <a class="button sidebar__button">List 1</a>
    <a class="button sidebar__button">List 2</a>
    <a class="button sidebar__button">List 3</a>
    <a class="button sidebar__button">List 4</a>
    <a class="button sidebar__button">List 5</a>
  </div>
  <div class="tinycontainer">
  </div>
  <div class="searchbar">
    <label for="site-search">Rechercher sur le site&nbsp;:</label>
    <input type="search" id="site-search" name="q" />
  </div>
  <button>Rechercher</button>
  <div class=" header">
    <div class="side-nav">
      <div class="user">
        <img src="placeholder" class="user-img">
        <div>
          <h2><?= (isset($_POST['nom'])) ?></h2>
        </div>
      </div>
      <p>Utilisateurs</p>
      <p>Paramètres</p>
    </div>
  </div>

  <header class="dashboard_header">
    <h1 class="dashboard__title dashboard__title--main">Liste des Utilisateurs</h1>
  </header>
  <main class="dashboard__content">
    <table class="user-table">
      <thead class="user-table__head">
        <tr class="user-table__row user-table__row--header">
          <th class="user-table__cell user-table__cell--heading">ID</th>
          <th class="user-table__cell user-table__cell--heading">Nom</th>
          <th class="user-table__cell user-table__cell--heading">Email</th>
          <th class="user-table__cell user-table__cell--heading">Rôle</th>
          <th class="user-table__cell user-table__cell--heading">Actions</th>
        </tr>
      </thead>
      <tbody ckass="user-table__body">
        <?php foreach ($users as $user): ?>
          <tr class="user-table__row">
            <td class="user-table__cell"><?= htmlspecialchars($user['id']) ?></td>
            <td class="user-table__cell"><?= htmlspecialchars($user['nom']) ?></td>
            <td class="user-table__cell"><?= htmlspecialchars($user['email']) ?></td>
            <td class="user-table__cell">
              <span class="role-badge role-badge--<?= strtolower(htmlspecialchars($user['role_nom'])) ?>">
                <?= htmlspecialchars($user['role_nom']) ?>
              </span>
            </td>
            </td>
            <td class="user-table__cell user-table__cell--actions">
              <a href="/edit?id=<?= $user['id'] ?>" class="button button--edit">Modifier</a>
              <a href="/user/delete?id=<?= $user['id'] ?>" class="button button--delete">Supprimer</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>

</html>