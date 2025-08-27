<?php include 'includes/header.php' ?>
    <div class="container"> <!-- lera kode html anusin la naw php u keshay nya ballam hane jar bas to wa maka -->
         <form class="py-4" action="./includes/add_student.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" name="fname" class="form-control" placeholder="Student Name">
                </div>
                <div class="col">
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div>
                <div class="col">
                    <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <div class="col">
                    <input type="submit" name="add" class="form-control btn btn-secondary" value="Add New Student">
                </div>
            </div>
        </form>

        <h2>All Students</h2>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">City</th>
                <th scopt="col">Age</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM students order by id DESC";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  echo "<tr>";
                  echo "<th>".$row['id']."</th>";
                  echo "<td>".$row['student_name']."</td>";
                  echo "<td>".$row['student_city']."</td>";
                  echo "<td>".$row['student_age']."</td>";
                  echo "<td><a href='edit-student.php?id=".$row['id']."'>Edit</a></td>";
                  echo "<td><a href='delete-student.php?id=".$row['id']."'>Delete</a></td>";
                }
                
              ?>
              
            </tbody>
        </table>

    </div>

<?php include './includes/footer.php'; ?>