
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
  <form class="form form--add-lot container <?=$template_data['form_invalid']; ?>" action="add.php" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
    <h2>Добавление лота</h2>
    <div class="form__container-two">
      <div class="form__item <?=$template_data['form__item--invalid']['lot-name'];?>"> <!-- form__item--invalid -->
        <label for="lot-name">Наименование</label>
        <input id="lot-name" type="text" name="lot-name" placeholder="Введите наименование лота" value="<?=$_POST['lot-name'];?>" >  <!-- required -->
        <span class="form__error"><?=$template_data['errors']['lot-name'];?></span>
      </div>
      <div class="form__item">
        <label for="category">Категория</label> <!-- required -->
        <select id="category" name="category" >
          <option>Выберите категорию</option>
          <option>Доски и лыжи</option>
          <option>Крепления</option>
          <option>Ботинки</option>
          <option>Одежда</option>
          <option>Инструменты</option>
          <option>Разное</option>
        </select>
        <span class="form__error"><?=$template_data['errors']['category'];?></span>
      </div>
    </div>
    <div class="form__item form__item--wide <?=$template_data['form__item--invalid']['message'];?>">
      <label for="message">Описание</label>
      <textarea id="message" name="message" placeholder="Напишите описание лота" ><?=$_POST['message'];?></textarea><!-- required -->
      <span class="form__error"><?=$template_data['errors']['message'];?></span>
    </div>
    <div class="form__item form__item--file"> <!-- form__item--uploaded $template_data['file_uploaded'] -->
      <label>Изображение</label>
      <div class="preview">
        <button class="preview__remove" type="button">x</button>
        <div class="preview__img">
          <img src="img/<?=$_FILES['photo']['name'];?>" width="113" height="113" alt="Изображение лота">
        </div>
      </div>
      <div class="form__input-file">
        <input class="visually-hidden" type="file" id="photo2" value="" name="photo">
        <label for="photo2">
          <span>+ Добавить</span>
        </label>
      </div>
    </div>
    <div class="form__container-three">
      <div class="form__item form__item--small <?=$template_data['form__item--invalid']['lot-rate'];?>">
        <label for="lot-rate">Начальная цена</label>
        <input id="lot-rate" type="number" name="lot-rate" placeholder="0" value="<?=$_POST['lot-rate'];?>"><!-- required -->
        <span class="form__error"><?=$template_data['errors']['lot-rate'];?></span>
      </div>
      <div class="form__item form__item--small <?=$template_data['form__item--invalid']['lot-step'];?>">
        <label for="lot-step">Шаг ставки</label>
        <input id="lot-step" type="number" name="lot-step" placeholder="0" value="<?=$_POST['lot-step'];?>"><!-- required -->
        <span class="form__error"><?=$template_data['errors']['lot-step'];?></span>
      </div>
      <div class="form__item <?=$template_data['form__item--invalid']['lot-date'];?>">
        <label for="lot-date">Дата окончания торгов</label>
        <input class="form__input-date" id="lot-date" type="date" name="lot-date" value="<?=$_POST['lot-date'];?>" ><!-- required -->
        <span class="form__error"><?=$template_data['errors']['lot-date'];?></span>
      </div>
    </div>
    <span class="form__error form__error--bottom ">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button">Добавить лот</button>
  </form>
</main>