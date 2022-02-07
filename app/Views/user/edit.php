<?php
	$this->session = session();

    if(!$this->session->level==2){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/edit.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

<div class="form-bg">
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-8 mx-auto mt-4">
                <div class="card xl-4">
                    <div class="text-center pt-4">
                        <h1 class="mb-4">Edit Account</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('edit'); ?>" method="POST" class="form-container user" autocomplete="off">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $this->session->id; ?>">
                            <div class="form-group mb-4">
                                <label class="mb-2" for="nama">Full name</label>
                                <input class="form-control" id="nama" name="nama" type="text" value="<?= set_value('nama') ? set_value('nama') : $this->session->nama; ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nama') : '' ?></span>
                                
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="email">Email address</label>
                                <input class="form-control" id="email" name="email" type="text" value="<?= set_value('email') ? set_value('email') : $this->session->email; ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="Phone">Phone number</label>
                                <input class="form-control" id="phone" name="phone" type="text" value="<?= set_value('phone') ? set_value('phone') : $this->session->phone; ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>
                            </div>
                            <div class="form-group" style="float: right;">
                                <a href="/user"> Cancel</a>
                                <button type="submit" class="btn btn-primary btn-user btn-block m-1">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>