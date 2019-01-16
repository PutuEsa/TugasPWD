<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1><a href="<?=base_url()?>index.php/welcome/dashboard/Esa/Cowok">Welcome</a></h1>
    <?= $this->uri->segment(1) ?> <br>
    <?= $this->uri->segment(2) ?> <br>
    <?= $this->uri->segment(3) ?>
</body>
</html>