
<!DOCTYPE html>
<html>
  <head>
    <title>
      Student Details Page
    </title>
    <style>
      table, th, td {
      border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <h1>Student Details</h1>
      <?php require "reg.php";?>
      <table>
        <tr>
          <th>name</th>
          <th>father_name</th>
          <th>address</th>
          <th>gender</th>
          <th>state</th>
          <th>city</th>
          <th>course</th>
          <th>email</th>
          <th>dob</th>
          <th>mob</th>
        </tr> 
        <tr>
          <td><?php echo $name1;?></td>
          <td><?php echo $fname1;?></td>
          <td><?php echo $addr1;?></td>
          <td><?php echo $gender1;?></td>
          <td><?php echo $state1;?></td>
          <td><?php echo $city1;?></td>
          <td><?php echo $course1?></td>
          <td><?php echo $mail1;?></td>
          <td><?php echo $dob1;?></td>
          <td><?php echo $mob1;?></td>
        </tr>
      </table>
  </body>
</html>
