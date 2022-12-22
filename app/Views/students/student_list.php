<?php echo view("includes/header"); ?>
<?php echo view("includes/navbar"); ?>
<div class="container">
    <h1>All student list</h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                    <a href="student/edit/<?= $student['id'] ?>">Edit</a>
                    <a href="student/delete/<?= $student['id'] ?>">Delete</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
    <a href="/student/new" class="btn btn-primary">New Student</a>

</div>

<?php echo view("includes/footer"); ?>