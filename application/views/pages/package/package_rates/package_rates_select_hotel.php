<?php
$listHotels = [
  [
    "hotelImage" => "https://pix8.agoda.net/hotelImages/186959/-1/146bf6360f0c9fe068b85eb62226487e.jpg?ca=8&ce=1&s=1024x",
    "hotelName" => "Hotel Hokke Club Kyoto",
    "address" => "579-16, Higashishiokojicho, Kyoto Shi Shimogyo Ku",
    "city" => "Kyoto",
    "zipcode" => "600-8216",
    "country" => "Japan",
    "formDate" => "Fri, 11/15/2024",
    "toDate" => "Sat, 11/16/2024",
    "night" => "1",
    "roomCategory" => [
      "Twin Bed Room (Non Smoking)",
      "Twin Room A - Non-Smoking",
      "Deluxe Twin Room",
    ],
  ],
  [
    "hotelImage" => "https://pix8.agoda.net/hotelImages/705/705974/705974_16080207170045110451.jpg?ca=6&ce=1&s=600x",
    "hotelName" => "Hotel Shin Imamiya",
    "address" => "1-2-20 Haignochaya, Nishinari-ku, Namba",
    "city" => "Osaka",
    "zipcode" => "557-0004",
    "country" => "Japan",
    "formDate" => "Sat, 11/16/2024",
    "toDate" => "Sun, 11/17/2024",
    "night" => "1",
    "roomCategory" => [
      "Semi Double Room Shared Bathroom - Non Smoking, Renovated",
      "Renovated Semi Double Shared Room",
      "Semi Double Room - Non Smoking, Renovated",
      "Standard Double Room - Non-Smoking, Renovated",
      "Japanese Style - Twin",
      "Standard Twin Room - Non Smoking, Renovated",
    ],

  ]
];

?>

<div class="bg-white mt-4">
  <div class="border-bottom border-3 border-primary p-0"></div>
  <div class="border">
    <div class="p-0">
      <button class="btn border-0 w-100 text-start py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSelectHotel" aria-expanded="false">
        <div class="d-flex justify-content-between">
          <div class="fs-6 fw-bold text-dark">
            Select Hotel
          </div>
          <div class="fs-6 text-secondary">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </button>
    </div>
    <div class="border-top collapse show" id="collapseSelectHotel">
      <?php foreach ($listHotels as $key => $item) { ?>
        <div class="row g-0">
          <div class="col-3 col-sm-4 col-md-3 col-lg-2">
            <div class="p-3">
              <div class="pb-2">
                <img src="<?php echo $item['hotelImage']; ?>" class="w-100 rounded-1">
              </div>
              <div class="pb-0">
                <button class="btn border-0 p-0 fs-8 text-secondary text-decoration-underline">
                  Change Hotel
                </button>
              </div>
            </div>
          </div>
          <div class="col-9 col-sm-8 col-md-9 col-lg-10">
            <div class="py-3 pe-3">
              <div class="row gy-3 gx-4">
                <div class="col-12 col-lg-4">
                  <div class="pb-2 fs-6 fw-bold text-dark">
                    <?php echo $item['hotelName']; ?>
                  </div>
                  <div class="pb-2 fs-7 text-secondary">
                    <?php echo $item['address']; ?>
                    <?php echo ', ' . $item['city']; ?>
                    <?php echo ', ' . $item['zipcode']; ?>
                    <?php echo ', ' . $item['country']; ?>
                  </div>
                </div>
                <div class="col-12 col-lg-3">
                  <div class="pb-2 fs-7 text-dark fw-bold">Check-in / Check-out</div>
                  <div class="pb-0 fs-7 text-secondary">
                    <?php echo $item['formDate']; ?> to
                    <?php echo $item['toDate']; ?>
                  </div>
                  <div class="pb-2 fs-7 text-secondary">
                    <?php echo $item['night']; ?>
                    <?php echo $item['night'] > 1 ? 'Nights' : 'Night'; ?>
                  </div>
                </div>
                <div class="col-12 col-lg-5">
                  <div class="pb-2 fs-7 text-dark fw-bold">Room category</div>
                  <div class="">
                    <select name="" id="" class="form-select fs-7 rounded-0">
                      <?php foreach ($item['roomCategory'] as $key2 => $item2) { ?>
                        <option value=""><?php echo $item2; ?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>