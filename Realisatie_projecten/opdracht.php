<?php
if(isset($_POST['knop'])){
$chose='Meel: '.$_POST['meel'].'. Vorm: '.$_POST['vorm'] .'. Gewicht: '.$_POST['gewicht'];
}else{
    $chose='Choose your favorite bread';
}

?>


<html>
  <body>
    <h1><?php echo $chose; ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <div>
    <label>select meel</label>
      <select name="meel">
        <option value="volkoren tarwe">volkoren tarwe</option>
        <option value="spelt">spelt</option>
        <option value="rogge">rogge</option>
      </select>
      </div>
      <div>
    <label>select vorm</label>
      <select name="vorm">
        <option value="bolvorm">bolvorm</option>
        <option value="vierkant">vierkant</option>
        <option value="rond">rond</option>
        <option value="rechthoekig">rechthoekig</option>
      </select>
      </div>
      <div>
    <label>select gewicht</label>
      <select name="gewicht">
        <option value="100G">100G</option>
        <option value="150G">150G</option>
        <option value="200G">200G</option>
        <option value="250G">250G</option>
      </select>
      </div>
      <input type="submit" name="knop" value='Kiezen'/>
      </form>
  </body>
</html>
