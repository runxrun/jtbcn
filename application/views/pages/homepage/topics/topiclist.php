<div class="bg-white pt-4">
  <div class="container">
    <div class="pb-3">
      <div class="row justify-content-between align-items-end">
        <div class="col-auto">
          <div class="rn-text-title fs-5 text-info">
            Topic
          </div>          
        </div>
        <div class="col-auto">
          <div class="text-end">
            <button class="btn btn-outline-info fs-8 rounded-1">
              Load more
            </button>
            </div>
        </div>
      </div>
    </div>
    <div class="row g-3">
      <?php
      $toppage = [
        [            
          'title'=>'Office Holiday Closure Notice 【11/2023】',
          'desc'=>'Richmond office including J-station will be closed from December 23rd,2023 to January 7th, 2024. (Phone is available on the business days),',
        ],
        [
          'title'=>'Notice from JTB Canada.', 
          'desc'=>'Thank you for using us.We are accepting customer requests by phone and email at all our branches, and continue most of our business as usual.Please contact us for any inquiries.We will do our best to support you.'
        ],
        [
          'title'=>'Notice of relocation of J-Station Vancouver', 
          'desc'=>'From Octber 15th, our new adress is 8899 Odlin Crescent Richmond, BC V6X 3Z7 CANADA'
        ],
      ];
      ?>
      <?php 
      foreach($toppage as $key => $item) {
      ?>
      <div class="col-12 col-md-4">    
        <div class="border rounded-1 h-100 bg-white shadow-sm">
          <div class="border-top border-3 border-info p-3">
            <div class="pb-2 fs-6 text-dark fw-bold"><?php echo $item['title']; ?></div>
            <div class="pb-0 fs-7 text-secondary"><?php echo $item['desc']; ?></div>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
    </div>
  </div>
</div>
