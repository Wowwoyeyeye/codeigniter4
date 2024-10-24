<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <!-- Login Form -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Login</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Your Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
   
