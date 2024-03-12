<?php 
    $this->layout('layout', ['title' => 'Login']);
    
    if (isset($_SESSION['username']))
        header('Location: /');
?>

<section class="login-section container-fluid pt-5">
    <form class="container col-lg-5">
        <h1 class="display-3 mb-5 mt-3 text-center">Login</h1>
        <div class="form-group my-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group my-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control my-2" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary bg-gradient py-3 px-5 my-3 mx-auto">Login</button>
    </form>
</section>
