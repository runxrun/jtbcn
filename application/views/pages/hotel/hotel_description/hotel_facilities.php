<div class="border-bottom mb-3">
    <div class="row">
        <div class="pb-2 col-12 col-lg-3">
            <div class="fs-6 font-weight-bold text-dark">
                Hotel Description
            </div>
        </div>
        <div class="pb-4 col-12 col-lg-9">
            <div class="fs-6 text-secondary rn-content-html">
                Get your trip off to a great start with a stay at this property, which offers free
                Wi-Fi in all rooms.
                Conveniently situated in the Juso part of Osaka, this property puts you close to
                attractions and
                interesting dining options. Don't leave before paying a visit to the famous
                Dotonbori. This 3.5-star
                property features restaurant to make your stay more indulgent and memorable.
            </div>
        </div>
    </div>
</div>
<div class="border-bottom mb-3">
    <div class="row">
        <div class="pb-2 col-12 col-lg-3">
            <div class="fs-6 font-weight-bold text-dark">
                Room Information
            </div>
        </div>
        <div class="pb-4 col-12 col-lg-9">
            <div class="fs-6 text-secondary rn-content-html">
                Get your trip off to a great start with a stay at this property, which offers free
                Wi-Fi in all rooms.
                Conveniently situated in the Juso part of Osaka, this property puts you close to
                attractions and
                interesting dining options. Don't leave before paying a visit to the famous
                Dotonbori. This 3.5-star
                property features restaurant to make your stay more indulgent and memorable.
            </div>
        </div>
    </div>
</div>





<div>

    <div class="row">
        <div class="pb-2 col-12 col-lg-3">
            <div class="fs-6 font-weight-bold text-dark">Facilities</div>
        </div>
        <div class="pb-4 col-12 col-lg-9">
            <div class="">
                <div class="fs-6 text-secondary rn-content-html">
                    <h4><strong>Restaurants</strong></h4>
                    <p>
                        Enjoy the culinary tour in the resort, eat at a different country
                        every day Visitors who have the good sense to stay in the unique,
                        ‘Resort in the City' <br /><br /><strong>Sport Complex</strong>
                    </p>
                    <p>
                        We are the next generation of sports and health centers in Bangkok -
                        we aim to attack the mental and physical health issues impacting our
                        society while embracing today's
                    </p>
                </div>
            </div>
            <!---->
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
            <div class="">
                <div class="bg-light rounded py-2 px-3 mb-2">
                    <div class="fs-8 font-weight-bold text-dark">
                        <?php echo $item['title'] ?>
                    </div>
                </div>
                <div class="row pb-4">
                    <?php foreach ($item['list'] as $key2 => $data) { ?>
                    <div class="col-6 col-md-4 pb-1">
                        <div class="d-flex fs-7">
                            <span class="px-1 text-success"><i class="fas fa-check"></i></span><span
                                class="px-2 text-secondary">
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