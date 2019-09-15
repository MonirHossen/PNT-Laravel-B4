<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
<hr>
<a href="<?php echo url('post/index')?>">View Post</a>
<hr>
<form action="<?php echo url('post/update',$post->id) ?>" method="post">
    <?php echo csrf_field(); ?>
    <table>
        <h3>Create New Post</h3>
        <tr>
            <th>Title</th>
            <td>
                <input type="text" name="title" value="<?php echo $post->title; ?>">
<!--                <input type="hidden" name="_method" value="PUT">-->
            </td>
        </tr>
        <tr>
            <th>Details</th>
            <td><textarea name="details" id="" cols="30" rows="10"><?php echo $post->details; ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><button>Update</button></td>
        </tr>
    </table>
</form>
</body>
</html>

