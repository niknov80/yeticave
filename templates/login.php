<main>
  <nav class="nav">
    <ul class="nav__list container">
        <?php foreach ($template_data['category'] as  $value): ?>                
            <li class="nav__item">
                <a href="all-lots.html"><?=htmlspecialchars($value); ?></a>
            </li>
        <?php endforeach; ?> 
    </ul>
  </nav>
  <form class="form container" action="login.php" method="post"> <!-- form--invalid -->
    <h2>Вход</h2>
    <div class="form__item <?= $template_data['form__item--invalid']['email']; ?> "> <!-- form__item--invalid -->
      <label for="email">E-mail*</label>
      <input id="email" type="text" name="email" value="<?=$_POST['email']?>" placeholder="Введите e-mail" ><!-- required -->
      <span class="form__error"><?= $template_data['errors']['email']; ?></span>
    </div>
    <div class="form__item form__item--last <?= $template_data['form__item--invalid']['password']; ?>">
      <label for="password">Пароль*</label>
      <input id="password" type="text" name="password" placeholder="Введите пароль" ><!-- required -->
      <span class="form__error"><?= $template_data['errors']['password']; ?></span>
    </div>
    <button type="submit" class="button">Войти</button>
  </form>
</main>

