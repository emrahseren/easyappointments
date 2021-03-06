<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Update | Easy!Appointments</title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url ('assets/ext/jquery-ui/jquery-ui.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/update.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">
</head>
<body>
    <div class="container-fluid header">
        <div>
            <a href="https://easyappointments.org" target="_blank">
                <img src="<?= base_url('assets/img/installation-banner.png') ?>"
                     alt="Easy!Appointments Installation Banner">
            </a>
        </div>
    </div>

    <div class="container content">
        <?php if ($success): ?>
            <h4>
                The database was updated successfully!
            </h4>

            <p>
                You can now use the latest Easy!Appointments version.
            </p>
        <?php else: ?>
            <h4>
                There was an error during the update process ...
            </h4>

            <p>
                Please restore your database backup.
            </p>

            <div class="well text-left">
                Error Message: <?= $exception ?>
            </div>
        <?php endif; ?>

        <div>
            <a href="<?= site_url('backend') ?>" class="btn btn-outline-secondary btn-large">
                <i class="fas fa-wrench mr-2"></i>
                <?= lang('backend_section') ?>
            </a>
        </div>
    </div>

    <footer>
        Powered by <a href="https://easyappointments.org">Easy!Appointments</a>
    </footer>
</body>
</html>
