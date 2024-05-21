<div class="border-bottom py-4">
  <div class="row g-4">
    <div class="col-12 col-lg-3">
      <div class="fw-bold text-dark">
        Hotel Description
      </div>
    </div>
    <div class="col-12 col-lg-9">
      <div class="text-secondary rn-content-html">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ipsum quo voluptatibus expedita dolorem dolor, temporibus vitae beatae rem esse illum doloribus facilis quam explicabo quas dolore adipisci repellat. Doloribus.
        Ut itaque aut, deserunt deleniti est ipsam, iste quo omnis reprehenderit ipsum fugiat, voluptatem odit eligendi voluptas culpa nesciunt pariatur neque exercitationem quisquam adipisci eius earum! Nemo quam perferendis labore.

      </div>
    </div>
  </div>
</div>
<div class="border-bottom py-4">
  <div class="row g-4">
    <div class="col-12 col-lg-3">
      <div class="fw-bold text-dark">
        Room Information
      </div>
    </div>
    <div class="col-12 col-lg-9">
      <div class="text-secondary rn-content-html">
        Sed earum quia eligendi laboriosam qui totam ab laborum necessitatibus mollitia ex? In libero optio qui ea quae incidunt ullam iure neque, earum, explicabo autem repellendus cupiditate beatae. Est, voluptatum.
        Suscipit architecto nemo tempora perspiciatis dolore odit numquam voluptatibus illum, labore ex adipisci dignissimos blanditiis vitae nihil, tenetur est sunt odio, fugit repudiandae modi nobis veritatis enim tempore a. Fuga.
      </div>
    </div>
  </div>
</div>


<div class="border-bottom py-4">
  <div class="row g-4">
    <div class="col-12 col-lg-3">
      <div class="fw-bold text-dark">Facilities</div>
    </div>
    <div class="col-12 col-lg-9">
      <div class="text-secondary rn-content-html">
        <p>
          Qui dicta repudiandae voluptas delectus cumque, quae aliquid quaerat maiores vel, explicabo magnam exercitationem debitis distinctio? Neque dolores quibusdam vero aperiam. Vel ullam modi sapiente quia repellat officiis accusamus temporibus.
          Voluptatem, quas! Fugiat eligendi sint molestiae deserunt veniam odit hic cupiditate veritatis, velit laboriosam pariatur, ullam dignissimos eos quas quis sit natus accusamus, rem omnis quasi quo! Itaque, similique quis.
        </p>
      </div>
      <?php
      $facArray = [
        [
          'title' => 'Recreational Facilities',
          'list' => [
            ['name' => 'Swimming Pool'],
            ['name' => 'Fitness'],
            ['name' => 'Tennis Court']
          ],
        ],
        [
          'title' => 'Hotel Facilities',
          'list' => [
            ['name' => 'Parking'],
            ['name' => 'Elevator'],
            ['name' => 'Garden'],
            ['name' => 'Safe Deposit Box'],
            ['name' => 'Smoke Alarm'],
          ],
        ],
        [
          'title' => 'Services',
          'list' => [
            ['name' => 'Room Service'],
            ['name' => 'Laundry'],
            ['name' => 'Morning Call'],
            ['name' => 'Safe Deposit Box'],
            ['name' => 'Maid'],
            ['name' => 'Taxi'],
          ],
        ],
        [
          'title' => 'Dining/Entertainment',
          'list' => [
            ['name' => 'Restaurant'],
            ['name' => 'Coffee'],
            ['name' => 'Bar Lounge'],
            ['name' => 'Bakery'],
          ],
        ],
        [
          'title' => 'Room Facilities',
          'list' => [
            ['name' => 'Wifi'],
            ['name' => 'Non Smoking Room'],
            ['name' => 'Air-condition'],
            ['name' => 'Bath Robe'],
            ['name' => 'Minibar'],
            ['name' => '220 Volt'],
            ['name' => 'Babycot'],
            ['name' => 'TV'],
            ['name' => 'Water'],
            ['name' => 'Tea / Coffee'],
            ['name' => 'Hairdryer'],
          ],
        ],
        [
          'title' => 'Business Facilities',
          'list' => [
            ['name' => 'Banquet'],
            ['name' => 'Meeting Rooms'],
            ['name' => 'Business Center'],
          ],
        ],
      ];

      foreach ($facArray as $key => $item) {
      ?>
        <div class="border-bottom bg-light py-2 px-3">
          <div class="fs-7 fw-bold text-dark">
            <?php echo $item['title'] ?>
          </div>
        </div>
        <div class="py-3">
          <div class="row gy-2">
            <?php foreach ($item['list'] as $key2 => $data) { ?>
              <div class="col-6 col-md-4">
                <div class="d-flex fs-7">
                  <span class="px-1 text-success"><i class="fas fa-check"></i></span><span class="px-2 text-secondary">
                    <?php echo $data['name'] ?>
                  </span>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>


<div class="py-4">
  <div class="row g-4">
    <div class="col-12 col-lg-3">
      <div class="fw-bold text-dark">
        Location Information
      </div>
    </div>
    <div class="col-12 col-lg-9">
      <div class="text-secondary rn-content-html">
        Reiciendis odio officiis ratione aliquid eius, similique excepturi corrupti. Nostrum eligendi suscipit laudantium quis fugiat,
        quisquam, quam sint odit neque aliquam amet. Necessitatibus quis in porro perferendis sunt unde quaerat.
      </div>
    </div>
    <div class="col-12">
      <div class="border bg-light">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="text-center text-secondary">MAP</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>