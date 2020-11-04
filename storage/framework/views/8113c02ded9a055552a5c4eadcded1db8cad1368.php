   
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="assets/css/styles.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="hero">
        <div id="hero-div" style="width: 100%;height: 100%;background-color: rgba(0,0,0,0.32);">
            <nav class="navbar navbar-dark navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgb(252,252,252);font-family: Poppins, sans-serif;font-size: 36px;font-weight: bold;font-style: normal;">Tutor Town</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" id="togle"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto" style="font-size: 18px;">
                            <li class="nav-item" role="presentation" style="font-size: 16px;"><a class="nav-link active" href="requests.html" style="color: rgb(255,255,255);font-size: 20px;">Requests&nbsp; &nbsp; &nbsp;</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="portfolio.html" style="color: rgb(255,255,255);">Profile&nbsp; &nbsp; &nbsp;</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="chat.html" style="color: rgb(255,255,255);">Messages&nbsp; &nbsp; &nbsp;</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo e(url ('/notifications')); ?>" style="color: rgb(255,255,255);">Notifications&nbsp; &nbsp; &nbsp;</a></li>
                        </ul><button class="btn btn-success" id="btn-logout" type="button"><i class="fa fa-lock"></i>&nbsp; Log Out</button></div>
        </div>
        </nav>
        <div class="container justify-content-center align-items-center align-content-center " id="chero" style="margin-left: auto;margin-right: auto;">
            <div class="row">
                <div class="col">
                    <div class="d-flex" id="divc"><input class="form-control form-control-lg bg-white border-white shadow-none form-control d-flex flex-row flex-grow-1 flex-shrink-1 flex-fill justify-content-center" type="search" id="search" style="width:700px;height: 50px;margin-right: 0px;margin-left: 0px;"
                            placeholder="search here" autocomplete="on"></div>
                </div>
            </div>
        </div>
        <div class="row flex-grow-1 flex-shrink-1 justify-content-center align-items-center align-content-center align-self-center" id="srow">
            <div class="col-auto align-self-end"><a class="btn btn-success btn-block text-uppercase text-white d-flex flex-grow-1 flex-shrink-1 justify-content-center align-items-center" role="button" id="btns">Search</a></div>
            <div class="col-auto align-self-end"><a class="btn btn-info text-uppercase text-white d-flex flex-grow-1 flex-shrink-1 align-items-center" role="button" id="btns2"><i class="fa fa-location-arrow"></i>&nbsp; View nearby</a></div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\tutor_town\resources\views/layout/index.blade.php ENDPATH**/ ?>