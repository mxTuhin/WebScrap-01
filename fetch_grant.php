<?php
include('config/dbConfig.php');
$category = $_GET['category'];
$sql = "SELECT * FROM data WHERE category='$category'";
$resultMember = mysqli_query($db, $sql);
$i = 1;
while($data = mysqli_fetch_assoc($resultMember)){
    ?>
    <tr onclick="show_info('<?php echo $data['title'] ?>', '<?php echo $data['category'] ?>', ' <?php echo mysqli_real_escape_string($db, $data['text']) ?>')" data-toggle="modal" data-target="#rowInfoViewer">
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $data['title'] ?></td>
        <td><?php echo $data['category'] ?></td>
        <td><?php echo $data['created_at'] ?></td>
    </tr>

    <?php
}

?>