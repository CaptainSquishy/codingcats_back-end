<h1>Blog scenes</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($scenes as $scene): ?>
    <?php
        debug($scene);
    ?>
    <tr>
        <td><?php echo $scene['Scene']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($scene['Scene']['title'],
array('controller' => 'scenes', 'action' => 'view', $scene['Scene']['id'])); ?>
        </td>
        <td><?php echo $scene['Scene']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($scene); ?>
</table>