<style>
  .green {
    color: green;
  }
  .red {
    color: red;
    font-weight: bold;
  }
  .even {
    background-color: gray;
  }
</style>

<table border="1">
  <tr>
    <th></th>
    <?php for ($i = 4; $i <= 9; $i++): ?>
      <th><?= $i ?></th>
    <?php endfor; ?>
  </tr>
  <?php for ($i = 4; $i <= 9; $i++): ?>
    <tr>
      <td><?= $i ?></td>
      <?php for ($j = 4; $j <= 9; $j++): ?>
        <?php $product = $i * $j; ?>
        <td class="<?= $product < 40 ? 'green' : ($product > 75 ? 'red' : '') ?>
        <?= $product % 2 == 0 ? ' even' : '' ?>"><?= $product ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>
