<a href="index.php?demo=user">Back to form</a>
<?php if (isset($data)) { ?>
    <?php foreach ($data as $index => $item) { ?>
        

<form action="index.php?demo=user&method=update" method="post">   
    ID : <input type="text" name="update_id" value="<?=  $item['id']; ?>" readonly="readonly"/>
    Username Update : <input type="text" name="update_name" value="<?=  $item['username']; ?>"/><br/>
    Email Update : <input type="text" name="update_email" value="<?=  $item['email']; ?>"/><br/>
    <input type="submit" name="btn_update" value="Update"/>
</form>


<?php } ?>
        <?php } ?>