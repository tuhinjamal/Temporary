<?php
include_once("controller.php");
$fetchdata=new View();
 ?>
 <table width="100%"  border="0" >
  <tr>
    <th width="9%" height="42" scope="col" >S no.</th>
    <th width="13%" scope="col">Title</th>
    <th width="11%" scope="col">Hadith</th>
    <th width="11%" scope="col">Reference</th>
    <th width="11%" scope="col">Translation</th>
  </tr>
  <?php
  $sql=$fetchdata->fetchdata();
  $count=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
  <tr>
      <td height="29"><?php echo $count;?></td>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['hadith'];?></td>
    <td><?php echo $row['reference'];?></td>
    <td><?php echo $row['translation'];?></td>
  </tr>
  <?php $count=$count+1;} ?>
</table>
<a href="hadith_1.php" class="attribute1"> Hadith:1</a>
