<?php
echo form_open('auth/login');
?>
<table class="table table-border">
    <tr>
        <td width="150">Username</td>
        <td><input class="form-control" type="text" name="username" placeholder="username">        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input class="form-control" type="password" name="password" placeholder="password">        </td>
    </tr>
    <tr>
        <td><button type="submit" name="submit" class="btn btn-primary btn-sm">Login</button>        </td>
    </tr>
</table>
</form>