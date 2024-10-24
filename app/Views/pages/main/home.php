<?php echo $this->extend('layouts/main/main_layout'); ?>
<?php echo $this->section('content'); ?>

<main class="content">
    <section class="main-banner">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo base_url('assets/images/banner/beach-banner.png'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo base_url('assets/images/banner/dinner.png'); ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="rooms gap">
        <div class="container-fluid">
        
            <h2>Our Rooms</h2>
            <div class="gallery">
                <?php
                    foreach($rooms as $room){
                        echo '<div class="gallery-item">
                                    <img src="'.base_url('assets/images/rooms/'.$room['room_image']).'">
                                    <div class="room-name">
                                    '.$room['room_name'].'   
                                    </div>
                                    <div class="room-description">
                                    '.$room['room_description'].'
                                    </div>
                                </div>';
                    }
                ?>
            </div>
            </div>
    </section>

    <section class="reservation gap">
        <div class="container-fluid">
            <h2>Reservation</h2>
            <?php if (session()->has('succes')) : ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('succes'); ?>
                </div>
            <?php endif; ?>

            <form id="reservation-form" class="reservation-form" action="<?php echo base_url('/submit_reservation'); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" id="name" value="<?php echo old('name'); ?>">

                <?php if($validation->getError('name')){ ?>
                    <div class="alert alert-danger"><?= $validation->getError('name') ?></div>
                <?php } ?>
               

                <label for="phone_number">Nomor HP</label>
                <input type="text" name="phone_number" id="phone_number" value="<?php echo old('phone_number'); ?>">
                <?php if($validation->getError('phone_number')){ ?>
                    <div class="alert alert-danger"><?= $validation->getError('phone_number') ?></div>
                <?php } ?>

                <label for="address">Alamat</label>
                <textarea name="address" id="address" cols="30" rows="10"><?php echo old('address'); ?></textarea>
                <?php if($validation->getError('address')){ ?>
                    <div class="alert alert-danger"><?= $validation->getError('address') ?></div>
                <?php } ?>

                <label for="check_in_date">Tanggal Check in</label>
                <input type="date" name="check_in_date" id="check_in_date" value="<?php echo old('check_in_date'); ?>">
                <?php if($validation->getError('check_in_date')){ ?>
                    <div class="alert alert-danger"><?= $validation->getError('check_in_date') ?></div>
                <?php } ?>

                <label for="check_out_date">Tanggal Check Out</label>
                <input type="date" name="check_out_date" id="check_out_date" value="<?php echo old('check_out_date'); ?>">
                <?php if($validation->getError('check_out_date')){ ?>
                    <div class="alert alert-danger"><?= $validation->getError('check_out_date') ?></div>
                <?php } ?>

                <label for="total_guest">Jumlah Pengunjung</label>
                <input type="text" name="total_guest" id="total_guest" value="<?php echo old('total_guest'); ?>">

                <?php if($validation->getError('total_guest')){ ?>
                    <div class="alert alert-danger"><?= $validation->getError('total_guest') ?></div>
                <?php } ?>

                <label for="room_type">Tipe Kamar</label>
                <select name="room_type" id="room_type">
                    <option value="Standard">Standard</option>
                    <option value="Family">Family</option>
                    <option value="Gold">Gold</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
                <input id="submit" type="submit" value="Submit">

            </form>
        </div>
        
    </section>
</main>

<?php echo $this->endSection(); ?>
