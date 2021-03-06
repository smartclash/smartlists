<?php defined('BASEPATH') OR exit('DIRECT SCRIPT ACCESS NOT ALLOWED')  ?>

<div class="row padding-list grey-text text-darken-2">
    <div class="col s12 m12 l10">
        <div class="card light-white">
            <div class="card-content">
                <center>
                    <span class="card-title">ALL SERVERS</span>
                </center>
                {server}
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li class="white">
                        <div class="collapsible-header"><i class="fa fa-signal green-text"></i>{name}  ::  {votes}</div>
                        <div class="collapsible-body"><p>{description}</p></div>
                    </li>
                </ul>
                {/server}
            </div>
            <div class="card-footer">
                {pagination}
            </div>
        </div>
    </div>
    <div class="col s12 m12 l2">
        <div class="card light-white">
            <div class="card-content">
                <span class="card-title">
                    <?php
                        if($this->session->loggedin == FALSE){
                            echo 'Howdy, Stranger!';
                        } else {
                            echo 'Howdy, ' . $this->session->username;
                        }
                    ?>
                </span>
                <p>
                    <?php
                        if($this->session->loggedin == FALSE){
                            echo 'Looks like you are new here. Sign in to get recognised or Sign Up to join the party.';
                        } else {
                            echo 'Add your server by clicking link below. Also, get your server listed first by becoming pro user!';
                        }
                    ?>
                </p>
            </div>
            <div class="card-action">
                <?php
                if($this->session->loggedin == FALSE){
                    echo '
                    <a href="auth/login">SignIn</a>
                    <a href="auth/register">SignUp</a>
                    ';
                } else {
                    echo '
                    <a href="#" onclick="start(\'Add Servers\')">Add server</a>
                    <a href="#" onclick="start(\'Manage Account\')">Manage Account</a>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card light-green white-text">
            <div class="card-content">
                <span class="card-title">
                    Awesome, now you can see the speed
                </span>
                <p>The page was dynamically generated in just {elapsed_time} seconds</p>
            </div>
        </div>
    </div>
</div>