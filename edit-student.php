<?php include 'includes/header.php'; ?>
    <div class="container">
        <h2 class="pt-4">Student Update</h2>

        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT * FROM students WHERE id = :id";
                $stmt = $con->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
        ?>

        <form class="py-2" autocomplete="off" action="update_data.php" method="post">
            <div class="form-group">
                <label for="studentName">Student Name</label>
                <input type="text" class="form-control" name="fname" value="<?php 
                echo $row['student_name'] ?>"  placeholder="Student Name">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" value = "<?php 
                echo $row['student_city'] ?>" placeholder="City Name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" name="age" value="<?php 
                echo $row['student_age'] ?>" placeholder="Student Age">
            </div>
            <button type="submit" name="getData" class="btn btn-primary">Update</button>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        </form>

        <?php
            }else{
                header('Location: index.php');
            }
        ?>

    </div>
<?php include './includes/footer.php'; ?>