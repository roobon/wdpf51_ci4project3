<?php echo view("includes/header"); ?>
<?php echo view("includes/navbar"); ?>
<div class="container">
    <h1>All student list</h1>
    <?php foreach ($students as $student) {
        echo $student['name'] . "<br>";
    } ?>

</div>

<?php echo view("includes/footer"); ?>