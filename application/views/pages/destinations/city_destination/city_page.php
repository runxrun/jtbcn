<div class="bg-white border-top">
    <div class="container py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs-8">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="/destinations/japan/-/TUEAbcDefABcdfe"
                        class="text-primary text-decoration-none">Japan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Osaka</li>
            </ol>
        </nav>
        <div class="border-top border-3 border-primary pb-1">
            &nbsp;
        </div>
        <div class="pb-4">
            <div class="row g-4">
                <div class="col-12 col-lg-4">
                    <div class="bg-light">
                        <div class="w-100 bg-light rn-imgcover-center rounded-1"
                            style="background-image: url('/application/images/toppage/osaka-6023328_1280.jpg'); ">
                            <img src="/application/images/japan/japan-3664500_960_720.jpg" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="pb-3 fs-3 text-dark fw-bold">
                        Osaka
                    </div>
                    <div class="pb-3 fs-7 text-secondary">
                        Himeji dolor sit amet consectetur adipisicing elit. Eos illo
                        voluptatibus vel perferendis, rem molestiae tenetur sed praesentium
                        magnam ea, incidunt laborum veniam quo optio architecto similique
                        fugiat eum assumenda.
                        <br>
                        <br>
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC,
                        making it over 2000 years old. Richard McClintock, a Latin professor
                        at Hampden-Sydney College in Virginia, looked up one of the more obscure
                        Latin words, consectetur, from a Lorem Ipsum passage, and going through
                        the cites of the word in classical literature, discovered the undoubtable
                        source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
                        Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in
                        45 BC. This book is a treatise on the theory of ethics, very popular during
                        the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
        </div>

        <!-- 
      <div class="border-bottom">
        <div class="border-top border-3 border-primary py-4">

        </div>
      </div> 
    -->






        <div class="border-top border-3 border-primary pt-3">
            <div class="pb-3 fs-5 fw-bold text-dark">
                <?php echo getTS('_RecommendedActivities', $lang, $mlangs); ?>
            </div>
            <div class="pb-4">
                <?php include('city-html-activities.php'); ?>
            </div>
        </div>
        <div class="pt-4">
            <div class="pb-3 fs-5 fw-bold text-dark">
                <?php echo getTS('_RecommendedPackages', $lang, $mlangs); ?>
            </div>
            <div class="pb-4">
                <?php include('city-html-packages.php'); ?>
            </div>
        </div>
        <div class="pt-4">
            <div class="pb-3 fs-5 fw-bold text-dark">
                <?php echo getTS('_RecommendedTickets', $lang, $mlangs); ?>
            </div>
            <div class="pb-4">
                <?php include('city-html-tickets.php'); ?>
            </div>
        </div>
        <div class="pt-4">
            <div class="pb-3 fs-5 fw-bold text-dark">
                <?php echo getTS('_RecommendedHotels', $lang, $mlangs); ?>
            </div>
            <div class="pb-4">
                <?php include('city-html-hotels.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once(__DIR__ . '/../../../components/banners/banner-bo.php');
?>