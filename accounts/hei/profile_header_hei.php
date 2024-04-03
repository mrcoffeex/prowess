<div class="row">
    <div class="col-12">
        <div class="card mb-4">
        <div class="user-profile-header-banner">
            <img src="<?= getBannerImg(1) ?>" alt="Banner image" class="rounded-top" />
        </div>
        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
            <img src="<?= previewImage(getHeiImageById($heiId), "../../assets/img/avatars/1.png", "../../imagebank/") ?>" alt="default-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-5">
            <div
                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                <h4><?= getSchoolName($heiId) ?></h4>
                <ul
                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                    <li class="list-inline-item">
                    <i class="mdi mdi-invert-colors me-1 mdi-20px"></i
                    ><span class="fw-semibold">HEI</span>
                    </li>
                    <li class="list-inline-item">
                    <i class="mdi mdi-account-check me-1 mdi-20px"></i
                    ><span class="fw-semibold"><?= heiStatus($heiId) ?></span>
                    </li>
                    <li class="list-inline-item">
                    <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                    ><span class="fw-semibold"> Joined <?= getHei_Joined($heiId) ?></span>
                    </li>
                </ul>
                </div>
                <a href="hei_profile_edit?rand=<?= my_rand_str(100) ?>&heiId=<?=$heiId ?>" class="btn btn-primary">
                <i class="mdi mdi-image-edit-outline me-1"></i>Edit Profile
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php  
$HeiImage = getHeiImageById($heiId);
?>