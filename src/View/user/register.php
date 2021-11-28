<?php include ROOT . '/src/View/parts/_showErrorsForm.php' ?>

<form method="POST" action="/user/register" class="register-box">

  <div class="register-title">
    <h1><?= $this->h1 ?></h1>
  </div>

  <div class="register-first-name">
    <div class="user-box">
      <input type="text" id="first_name" name="first_name" value="<?= App\Service\Validator::get_input_data('first_name'); ?>" onchange="this.setAttribute('value', this.value);">
      <label for="first_name">FirstName</label>
    </div>
  </div>

  <div class="register-last-name">
    <div class="user-box">
      <input type="text" id="last_name" name="last_name" value="<?= App\Service\Validator::get_input_data('last_name');?>" onchange="this.setAttribute('value', this.value);">
      <label for="last_name">LastName</label>
    </div>
  </div>

  <div class="register-birthday">
    <div class="user-box">
      <input type="date" id="birth_date" name="birth_date" value="<?= App\Service\Validator::get_input_data('birth_date'); ?>" required>
      <label for="birth_date">BirthDate</label>
    </div>
  </div>

  <div class="register-phone">
    <div class="user-box">
      <input type="text" id="phone" name="phone" value="<?= App\Service\Validator::get_input_data('phone'); ?>" onchange="this.setAttribute('value', this.value);">
      <label for="phone">Phone</label>
    </div>
  </div>

  <div class="register-email">
    <div class="user-box">
      <input type="text" id="email" name="email" value="<?= App\Service\Validator::get_input_data('email'); ?>" onchange="this.setAttribute('value', this.value);">
      <label for="email">Email</label>
    </div>
  </div>

  <div class="register-mdp-1">
    <div class="user-box">
      <input type="password" id="password" name="password" value="<?= App\Service\Validator::get_input_data('password'); ?>" onchange="this.setAttribute('value', this.value);">
      <label for="password">Password</label>
    </div>

  </div>

  <div class="register-mdp-2">
    <div class="user-box">
      <input type="password" id="password_confirm" name="password_confirm" value="<?= App\Service\Validator::get_input_data('password_confirm'); ?>" onchange="this.setAttribute('value', this.value);">
      <label for="password_confirm">Password Confirm</label>
    </div>
  </div>

  <div class="register-submit">
    <input type="submit" name="submit" value="Submit" class="login-input"></input>
  </div>
</form>
