<form id="updateForm" name="updateAccount" method="post" action="index.php?action=updateAccount" enctype="multipart/form-data">
    <fieldset>
        <legend>Account Information</legend>
        <label for="email">Email</label>
        <input name="email" type="email" value=<?php echo htmlentities($clientInfo['Email'], ENT_HTML5 | ENT_QUOTES, 'UTF-8') ; ?>> <br>
        <label for="newPassword">Change password</label>
        <input id="passw" name="newPassword" type="password"> <br>
        <label for="repNewPassword">Repeat new password</label>
        <input id="repPassw" name="repNewPassword" type="password">
    </fieldset>
    <br>
    <fieldset>
        <legend>Personal Information</legend>
        <label for="username">Username</label>
        <input name="username" type="text" value="<?php echo htmlentities($clientInfo['Name'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?>"> <br>

        <label for="address">Address</label>
        <input name="address" type="text" maxlength="30" value="<?php echo htmlentities($clientInfo['Address'], ENT_HTML5 | ENT_QUOTES, 'UTF-8') ; ?>"> <br>

        <label for="city">City</label>
        <input name="city" type="text" maxlength="30" value="<?php echo htmlentities($clientInfo['City'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?>"> <br>

        <label for="zipcode">Zip Code</label>
        <input name="zipcode" type="number" pattern="ˆ\d{5}$" value="<?php echo htmlentities($clientInfo['PostalCode'], ENT_HTML5 | ENT_QUOTES, 'UTF-8'); ?>">

        <label for="profileImg">Profile image</label>
        <input name="profileImg" type="file"> <br>
    </fieldset>
    <br>
    <button type="submit">Update information</button>
</form>
