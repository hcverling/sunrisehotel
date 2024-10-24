<?php echo $this->extend('layouts/main/main_layout'); ?>
<?php echo $this->section('content'); ?>

<main class="content">
    <section class="page-content">
        <div class="container-fluid">
            <h2>Edit Navigation</h2>
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
                    <form action="<?php echo base_url('/navigation/update/'.$navigation['id']); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $navigation['id']; ?>">
                        <div class="mb-3">
                            <label for="navigation_label" class="form-label">Navigation Label</label>
                            <input type="text" id="navigation_label" name="navigation_label" value="<?php echo $navigation['navigation_label']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                           <select id="status" name="status">
                                <option value="active" <?php if($navigation['status'] == 'active'){ echo 'selected'; } ?>>Active</option>
                                <option value="not-active" <?php if($navigation['status'] == 'not-active'){ echo 'selected'; } ?>>Not Active</option>
                           </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>   
    </section>
</main>

<?php echo $this->endSection(); ?>