<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <div class="block">
  <div style="max-width: 500px; margin-left: auto; margin-right: auto; padding: 15px;">

    <center><h1>Для подачи заявления заполните бланк</h1></center>
  <form action="fform.php" method="post">
    <div class="text-field">
      <label class="text-field__label" for="name">Имя</label>
      <input class="text-field__input" type="text" name="name" id="name" >
    </div>

    <div class="text-field">
      <label class="text-field__label" for="sname">Фамилия</label>
      <input class="text-field__input" type="text" name="sname" id="sname">
    </div>

    <div class="text-field">
      <label class="text-field__label" for="email">Email</label>
      <input class="text-field__input" type="text" name="email" id="email" >
    </div>

    <div class="text-field">
      <label class="text-field__label" for="pass">Номер паспорта</label>
      <input class="text-field__input" type="text" name="pass" id="pass">
    </div>
    <div class="text-field">
      <label class="text-field__label" for="txt">Опишите ситуацию</label>
      <input class="text-field__input" type="text" name="txt" id="txt">
    </div>
    <button class="butt" type="submit">Подать заявление</button>
  </form>
  </div>

  <script>
    document.querySelector('#email').focus();
  </script>


    </div>

  </body>
</html>