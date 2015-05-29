<?php
if (!defined('IN_WONIU_APP')) {
    exit('No direct script access allowed');
}
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AliBudget</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        </head>
    <body>
        <nav class="navbar navbar-default" id="header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <span><img alt="AliBudget" src="/img/logo-new-1x.png"></span>
                        <span class="logo-slogan">Smarter Shopping, Better Living!</span>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/index.php/coupon.index" class="coupon-link">Coupon</a></li>
                        <li><a href="http://s.click.aliexpress.com/e/AE2vNniqJ">Buyer Protection</a></li>
                        <!--                    <li class="dropdown">-->
                        <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                        <!--                        <ul class="dropdown-menu" role="menu">-->
                        <!--                            <li><a href="#">Action</a></li>-->
                        <!--                            <li><a href="#">Another action</a></li>-->
                        <!--                            <li><a href="#">Something else here</a></li>-->
                        <!--                            <li class="divider"></li>-->
                        <!--                            <li><a href="#">Separated link</a></li>-->
                        <!--                            <li class="divider"></li>-->
                        <!--                            <li><a href="#">One more separated link</a></li>-->
                        <!--                        </ul>-->
                        <!--                    </li>-->
                    </ul>
                    <form class="navbar-form navbar-left" role="search" method="post" action="/index.php/catlist.index">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keywords" placeholder="I'm shopping for...">
                        </div>
                        <button type="submit" class="btn btn-default">GO!</button>
                    </form>
                    <!--                <ul class="nav navbar-nav navbar-right">-->
                    <!--                    <li><a href="#">Link</a></li>-->
                    <!--                    <li class="dropdown">-->
                    <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                    <!--                        <ul class="dropdown-menu" role="menu">-->
                    <!--                            <li><a href="#">Action</a></li>-->
                    <!--                            <li><a href="#">Another action</a></li>-->
                    <!--                            <li><a href="#">Something else here</a></li>-->
                    <!--                            <li class="divider"></li>-->
                    <!--                            <li><a href="#">Separated link</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!--                </ul>-->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>