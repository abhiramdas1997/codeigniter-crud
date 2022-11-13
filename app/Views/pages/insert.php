<?php $this->extend('includes/default') ?>
<?php $this->section('base') ?>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <a href="<?php echo base_url("/") ?>" class="btn btn-danger btn-sm rounded">Back</a>
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="agent_name" class="form-label">Name <span class="text-danger">
                                                *</span>
                                        </label>
                                        <input type="text" id="agent_name" name="agent_name" class="form-control" value="">

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="agent_address" class="form-label">Address<span class="text-danger"> *</span></label>
                                        <input type="text" id="agent_address" name="agent_address" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endSection() ?>