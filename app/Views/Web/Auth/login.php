<?php echo $this->extend('Web/main'); ?>

<?php echo $this->section('content'); ?>

    <div class="row">

        <div class="col m-4">

            <?php
                if (session('errors')) 
                {
                    ?>
                        <div class="alert alert-danger" role="alert">
                        
                            <?php 
                                
                                foreach (session('errors') as $error) 
                                {
                                    echo $error.'<br>';    
                                }
                            ?>

                        </div>

                    <?php
                }
            ?>

            <form method="POST" action="/login">
                
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>

                <div class="d-grid gap-2 py-2">
                    <button class="btn btn-primary" type="submit">Log in</button>
                </div>

            </form>

        </div>

    </div>


<?php echo $this->endSection(); ?>