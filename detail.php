<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Details | Perpustakaan Bina Darma</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="detail.css" rel="stylesheet" />
</head>

<body>
  <!-- page-content -->
  <div class="page-content page-details">
    <section class="store-breadcrumb" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">
                  <a href="koleksi.html">Koleksi</a>
                </li>
                <li class="breadcrumb-item active">Detail Buku</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="" class="thumbnail-image w-100" />
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row">
              <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                <a href="#" @click="changeActive(index)">
                  <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
      <form action="" method="POST">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 d-flex justify-content-between">
                <div>
                  <h1><?= $buku["product_name"]; ?></h1>
                  <div class="owner"><?= $product["unit"] / 1; ?> Unit</div>
                  <div class="form-group d-flex align-items-center justify-content-between" style="width: 150px;">
                    <input type="number" required name="banyak" id="banyak" class="form-control w-50" value="1" min="0"> Barang
                  </div>
                  <div class="price">Rp. <?= number_format($product["price"]); ?></div>
                </div>
  
              </div>
            </div>
          </div>
        </section>
      </form>
      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <p>
                <?= $product["descriptions"]; ?>
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>