<?php echo $this->extend('layouts/main/main_layout'); ?>
<?php echo $this->section('content'); ?>
<main class="content">
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
</main>
<?php echo $this->endSection(); ?>