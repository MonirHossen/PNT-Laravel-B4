<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of posts</title>
</head>
<body>
    <h1>List of Posts</h1>
    <table border="1" width="300px">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        <?php foreach ($posts as $post) { ?>
            <tr>
                <td><?php echo $post->id; ?></td>
                <td><?php echo $post->title; ?></td>
                <td><?php echo $post->details; ?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>
