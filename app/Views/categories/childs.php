<h2>Select sub of <?php echo $parent['name']?></h2>
    <select class="category">
        <option value=''>Select Sub</option>
       <?php foreach($categories as $category){
         echo "<option value='".$category['id']."'>".$category['name']."</option>";
        }?>
   </select>