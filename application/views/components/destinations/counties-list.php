<?php
$data = [
    [
        'img' => 'https://cdn.pixabay.com/photo/2020/05/20/11/12/mt-5195924_1280.jpg',
        'name' => 'JAPAN',
        'detail' => 'Japan, island country lying off the east coast of Asia. It consists of a great string of islands in a northeast-southwest arc that stretches for approximately 1,500 miles (2,400 km) through the western North Pacific Ocean.',
        'link' => '/destinations/japan/-/TUEAbcDefABcdfe',
    ],
    [
        'img' => 'https://cdn.pixabay.com/photo/2018/08/08/22/41/lake-3593378_960_720.jpg',
        'name' => 'CANADA',
        'detail' => 'Canada, the second largest country in the world in area (after Russia), occupying roughly the northern two-fifths of the continent of North America.',
        'link' => '/destinations/canada/-/TUEAbcDefABcdfe',
    ],

];

?>



<div class="bg-white">
    <div class="container pb-4">
        <div class="row g-3">
            <?php foreach ($data as $key => $item) {
                ?>
                <div class="col-12 col-lg-6 border-start border-danger border-3">
                    <div class="border-0 rounded-1">
                        <div class="row g-0 ">
                            <div class="col-12 col-lg-6 ">
                                <a href="<?php echo $item['link'] ?>">
                                    <img src="<?php echo $item['img'] ?>" class="w-100">
                                </a>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="p-2 fw-bold fs-5 text-primary">
                                    <?php echo $item['name'] ?>
                                </div>
                                <div class="p-2 fs-8">
                                    <?php echo $item['detail'] ?>
                                </div>

                                <div class="p-2 fs-9">
                                    <a href="<?php echo $item['link'] ?>">
                                        <button class="btn btn-primary btn-sm fs-9">
                                            More Detail
                                        </button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>

        </div>

    </div>
</div>