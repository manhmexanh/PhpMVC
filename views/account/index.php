<p>Here is a list of all users:</p>

<?php foreach($users as $user) { ?>
    <p>
        <?php echo $user->username; ?>
        <a href='?controller=account&action=show&id=<?php echo $user->id; ?>'>See content</a>
    </p>
<?php } ?>