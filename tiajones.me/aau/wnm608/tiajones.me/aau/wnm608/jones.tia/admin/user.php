echo <<<HTML 
<nav class="nav nav-crumbs">
  <ul>
    <li><a href="admin/user.php"></a></li>
  </ul>
</nav>

<form method="get" action="">
      <h2>$user-></h2>
      <div class="form-control">
        <label class="form-label" for="user-name">Name</label>
        <input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" value="$classes"> placeholder="Enter the User Name, comma separated">
      </div>

      <div class="form-control">
        <label class="form-label" for="user-type">Email</label>
        <input class="form-input" name="user-type" id="user-email" type="text" value="$user->type" value="$classes"> placeholder="Enter the User Type, comma separated">
      </div>

      <div class="form-control">
        <label class="form-label" for="user-email">Email</label>
        <input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" value="$classes"> placeholder="Enter the User Email, comma separated">
      </div>

    <div class="form-control">
        <label class="form-label" for="user-classes">Classes</label>
        <input class="form-input" name="user-classs" id="user-classes" type="text" value="$classes"> placeholder="Enter the User Classes, comma separated"
      </div>

    <div class="form-control">
        <input class="form-button" type="submit" value="Save Changes">
    </div>
</form>
HTML;
}