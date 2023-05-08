<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


<nav  class="navbar navbar-expand-lg backColor">
  <div class="w-100 d-flex justify-content-between">
    <div class=" d-flex justify-content-between">
      <a class="navbar-brand" ><img src="../../images/msg704385414-285121.jpg" alt="" class="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link  text-light">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-light" >Product</a>
          </li>

          <li class="nav-item">
            <a class="nav-link  text-light" >Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-light">Manual Order</a>
          </li>
        </ul>
      </div>
    </div>

    <div class=" d-flex justify-content align-items-center">
      <div class="row">
        <div class="col">
          <div class="w-100 d-flex justify-content align-items-center">
            <img class="logo mx-3 " src="" />
            <a class="text-light text-decoration-none ">Admin</a>
          </div>
        </div>
      </div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <i class="fa-regular fa-user text-light "></i>
        </li>
        <li class="nav-item">
          <a><i class="fontSize mx-3 text-light fa-solid fa-right-from-bracket"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>