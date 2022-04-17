<!-- CONTENT -->
<section class="content">
    <h2>Select Category</h2>
    <select class="category">
        <option value=''>Select Category</option>
       <?php foreach($categories as $category){
         echo "<option value='".$category['id']."'>".$category['name']."</option>";
        }?>
    </select>
</section>