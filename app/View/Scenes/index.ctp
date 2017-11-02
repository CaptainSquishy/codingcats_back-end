<h1>Blog scenes</h1>

 <table>
    <thead>
      <tr>
          <th>Name</th>
          <th>Item Name</th>
          <th>Item Price</th>
      </tr>
    </thead>

    <tbody>
        <?php foreach ($scenes as $scene): ?>

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
    </tbody>
</table>