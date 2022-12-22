<?php echo view("includes/header"); ?>
<?php echo view("includes/navbar"); ?>
<div class="container">
    <h1>Student Entry</h1>
    <form method="post" action="/student/update/<?= $student['id'] ?>">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" value="<?php echo $student['name']; ?>" name="name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $student['phone']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $student['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Postal address</label>
            <textarea name="address" class="form-control" id="address" cols="30" rows="10"><?php echo $student['address']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" value="SUBMIT">Update</button>
    </form>
</div>

<?php echo view("includes/footer"); ?>