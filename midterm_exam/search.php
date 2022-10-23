<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
        <label for="pet-select">Choose a pet:</label>
    <option value="Beverages">Beverages</option>
    <option value="Condimenth">Condimenth</option>
    <option value="Confections">Confections</option>
    <option value="Driry products">Driry products</option>
    <option value="Grains/cereals">Grains/cereals</option>
    <option value="Meat/poultry">Meat/poultry</option>
    <option value="Produce">Produce</option>
    <option value="Seafood">Seafood</option>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>