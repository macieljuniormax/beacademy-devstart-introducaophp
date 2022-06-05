<select>
  <option selected> -- Selecione o Ano -- </option>
  <?php
  $year = 2022;
  while ($year >= 1900) {
    echo "<option>{$year}</option>";
    $year--;
  }
  ?>
</select>