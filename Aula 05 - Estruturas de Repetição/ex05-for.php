<select>
  <option selected> -- Selecione o Ano -- </option>
  <?php
  for ($year = 2022; $year >= 1900; $year--) { 
    echo "<option>{$year}</option>";
  }
  ?>
</select>