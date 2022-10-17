

<?php


require('db_connnection.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo '
        
  <section id="portfolio">
  <div class="project">
  <img src='.$row["image"].' alt=""/>
  <p>'.$row["tittle"].'</p>

    <h3 class="grid__title"> front-end</h3>
    <div class="grid__overlay">
      <button class="viewbutton">view more</button>
    </div>
  </div>

  <div class="overlay">
    <div class="overlay__inner">
      <button class="close">close X</button>
      <img>
    </div>
  </div>
</section>'
    ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>