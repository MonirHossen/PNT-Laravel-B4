<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Create</title>
</head>
<body>
<hr>
<a href="<?php echo url('comments')?>">Comments</a>
<hr>
<table>
    <form action="<?php echo url('comment/store')?>" method="post">
        <?php echo csrf_field() ?>
        <tr>
            <td>Post Id</td>
            <td><input type="number" required min="1" name="post_id"></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><textarea name="comment" required placeholder="Please Comments Here" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button>Save</button></td>
        </tr>
    </form>
</table>
</body>
</html>
