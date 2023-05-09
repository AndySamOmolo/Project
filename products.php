<?php
 require_once 'header.php';
?>
<div class="products-container">

<aside>
		<nav>
			<h2>Menu</h2>
			<ul>
        <li><a href="#">Bread</a></li>
        <li><a href="#">Cakes</a></li>
        <li><a href="#">Cookies</a></li>
        <li><a href="#">Pies</a></li>
			</ul>
		</nav>
	</aside>

  <div class="items-container2">
    <div class="item">
      <div class="image-container">
        <img src="https://picsum.photos/500/500" alt="Image 1">
      </div>
      <div class="description">
        <p>Description for Image 1</p>
      </div>
      <div class="btnopt">
        <button class="btn1" type="button" name="button" onclick="selectOptions(this)">Select Options</button>
      </div>
    </div>
    <div class="item">
      <div class="image-container">
        <img src="https://picsum.photos/500/500" alt="Image 2">
      </div>
      <div class="description">
        <p>Description for Image 2</p>
      </div>
      <div class="btnopt">
        <button class="btn1" type="button" name="button" onclick="selectOptions(this)">Select Options</button>
      </div>
    </div>
    <div class="item">
      <div class="image-container">
        <img src="https://picsum.photos/500/500" alt="Image 3">
      </div>
      <div class="description">
        <p>Description for Image 3</p>
      </div>
      <div class="btnopt">
        <button class="btn1" type="button" name="button" onclick="selectOptions(this)">Select Options</button>
      </div>
    </div>
  </div>

</div>

<script>
  function selectOptions(button) {
    // Get the parent item div
    var item = button.closest('.item');

    // Get the product name and image
    var name = item.querySelector('.description p').textContent;
    var imageSrc = item.querySelector('.image-container img').src;

    // Store the product name and image in local storage
    localStorage.setItem('productName', name);
    localStorage.setItem('productImage', imageSrc);

    // Redirect to the options page
    window.location.href = 'cake-template.php';
  }
</script>


<?php
 require_once 'footer.php';
?>
