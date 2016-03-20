<?php
// echo debug($posts);
?>

<h2>Blog Posts</h2>

<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>操作</th>
        <th>投稿日</th>
    </tr>
    <tr>
    <?php foreach ($posts as $post) : ?>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $post['Post']['title']; ?></td>
        <td></td>
        <td><?php echo $post['Post']['created'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

