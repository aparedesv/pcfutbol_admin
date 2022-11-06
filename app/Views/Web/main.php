<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <head>
        <?php echo $this->include('Web/Layouts/head'); ?>
    </head>
    <!-- body -->
    <body>
        <div class="container-fluid m-0 p-0">
            
            <div class="w-100">
                <?php echo $this->include('Web/Layouts/topbar'); ?>
            </div>
            
            <?php echo $this->include('Web/Layouts/body'); ?>
        </div>
    </body>
</html>