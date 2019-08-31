<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 09-11-2018
 * Time: 23:55
 */

require_once 'header.php';
?>



    <section style="min-height: calc(100% - 225px)">

        <div class="container my-md-5 py-md-5" >

            <div class="row">
                <h4><a href="#" class="text-warning">Link will provided soon ...</a></h4>
                <div class="col-12 col-md-6 offset-md-3 d-none">
                    <div class="py-3 text-center">Please sign in for your conference participation</div>
                   <div class="card">
                       <div class="card-header">
                           Sign-In <span class="float-right">Forgot Password? <a href="">Reset</a></span>
                       </div>
                       <div class="card-body mx-lg-3">
                           <form action="" method="post">
                               <div class="my-4">
                                   <label class="sr-only" for="email">Username</label>
                                   <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text">@</div>
                                       </div>
                                       <input type="text" class="form-control" id="email" placeholder="Email">
                                   </div>
                               </div>
                               <div class="my-4">
                                   <label class="sr-only" for="password">Username</label>
                                   <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                       </div>
                                       <input type="password" class="form-control" id="password" placeholder="Password">
                                   </div>
                               </div>
                               <div class="my-3">
                                   <button type="submit" class="btn btn-block btn-info">Login</button>
                               </div>
                               <div class="my-3 border-bottom">
                                   <div class="form-check mb-2">
                                       <input class="form-check-input" type="checkbox" id="check">
                                       <label class="form-check-label" for="check">
                                           Remember me
                                       </label>
                                   </div>
                               </div>
                               <div class="">
                                   Don't have an account? <a href="/register">Create an Account</a>
                               </div>
                           </form>
                       </div>
                   </div>
                </div>
            </div>

        </div>
    </section>



<?php
require_once TEMPLATE_PATH . '/footer.php';

