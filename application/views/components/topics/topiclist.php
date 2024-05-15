<div class="bg-white">
  <div class="container py-4">

    <div class="pb-3">
      <div class="row justify-content-between align-items-end">
        <div class="col-auto">
          <div class="fs-5 fw-bold text-primary">
            <?php echo getTS('_Topic', $lang, $mlangs); ?>
          </div>
        </div>
        <!-- 
          <div class="col-auto">
            <div class="text-end">
              <button class="btn btn-outline-info fs-8 rounded-1">
                Load more
              </button>
            </div>
          </div> 
        -->
      </div>
    </div>

    <div class="row g-3">
      <?php
      $toppage = [
        [
          'title' => 'Office Holiday Closure Notice 【11/2023】',
          'desc' => 'Richmond office including J-station will be closed from December 23rd,2023 to January 7th, 2024. (Phone is available on the business days),',
        ],
        [
          'title' => 'Notice from JTB Canada.',
          'desc' => 'Thank you for using us.We are accepting customer requests by phone and email at all our branches, and continue most of our business as usual.Please contact us for any inquiries.We will do our best to support you.'
        ],
        [
          'title' => 'Notice of relocation of J-Station Vancouver',
          'desc' => 'From Octber 15th, our new adress is 8899 Odlin Crescent Richmond, BC V6X 3Z7 CANADA'
        ],
      ];
      ?>
      <?php
      foreach ($toppage as $key => $item) {
      ?>
        <div class="col-12 col-md-4">
          <div class="border rounded-1 h-100 bg-white shadow-sm">
            <div class="border-top border-3 border-primary p-3">
              <div class="pb-2">
                <button class="btn border-0 p-0 text-start fs-6 text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#newsModal">
                  <?php echo $item['title']; ?>
                </button>
              </div>
              <div class="pb-2 fs-7 text-secondary"><?php echo $item['desc']; ?></div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="modal fade" id="newsModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-6 fw-bold">Topics</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="pb-3">
          <div class="row">
            <div class="col-12 col-lg-6">
              <img src="https://www.jtb.ca/handlers/ImageRequest.ashx?path=%2fimages%2fupload%2fJTBIC%2fTOP+PAGE%2fBanner%2fEN%2fOptional2-large.png&mediaSize=lg&imgSize=big" class="w-100">
            </div>
            <div class="col-12 col-lg-6">
              <div class="pb-2 fs-5 text-dark fw-bold">
                Office Holiday Closure Notice 【11/2023】
              </div>
              <div class="pb-2 fs-7 text-secondary">
                Richmond office including J-station will be closed from December 23rd,2023 to January 7th, 2024. (Phone is available on the business days),
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 
      <div class="modal-footer">
        <button type="button" class="btn btn-dark fs-7 rounded-1" data-bs-dismiss="modal">Close</button>
      </div>
      -->
    </div>
  </div>
</div>