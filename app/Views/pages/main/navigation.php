<?php echo $this->extend('layouts/main/main_layout'); ?>
<?php echo $this->section('content'); ?>

<main class="content">
    <section class="page-content">
        <div class="container-fluid">
            <h2>Navigation Management</h2>
            <div class="row">
                <div class="col-lg-2 side-bar">
                    <nav class="left-navigation">
                        <ul>
                            <li><a href="<?php echo base_url('navigation/create'); ?>">Create New</a></li>
                            <li><a href="<?php echo base_url('navigation'); ?>">Show All</a></li>
                        </ul>
                    </nav>
                    
                </div>
                <div class="col-lg-10">
                    <?php 
                        if(session()->getFlashdata('message')){
                            echo '<div class="alert alert-success">'.session()->getFlashdata('message').'</div>';
                        }
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Navigation Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($navigations){
                                    $no = 1;
                                    foreach($navigations as $data){
                                        echo '<tr>
                                                <td>'.$no.'</td>
                                                <td>'.$data['navigation_label'].'</td>
                                                <td>'.$data['status'].'</td>
                                                <td>
                                                    <a href="'.base_url('navigation/edit/'.$data['id']).'" class="btn btn-primary">EDIT</a>
                                                    <a href="'.base_url('navigation/delete/'.$data['id']).'" class="btn btn-danger">DELETE</a>
                                                </td>
                                            </tr>';
                                            $no++;
                                    }
                                }else{
                                    echo '<tr><td colspan="4">There is no data to display</td></tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>   
    </section>
</main>

<?php echo $this->endSection(); ?>