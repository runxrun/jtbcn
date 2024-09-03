<?php
function inputNumber($data, $disabled)
{
  return '
      <div class="d-flex">
        <div class="p-0">
          <button class="btn border-0 py-2 px-3 text-primary h-100 w-100 fs-6" ' . $disabled . '>-</button>
        </div>
        <div class="p-0">
          <input type="text" class="form-control fs-7 rounded-0 text-center py-2 px-0" value="' . $data . '" ' . $disabled . '>
        </div>
        <div class="p-0">
          <button class="btn border-0 py-2 px-3 text-primary h-100 w-100 fs-6" ' . $disabled . '>+</button>
        </div>
      </div>
      ';
}
?>

<div class="bg-white mt-4">
  <div class="border-bottom border-3 border-primary p-0"></div>
  <div class="border">
    <div class="p-0">
      <button class="btn border-0 w-100 text-start py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSelectRooms" aria-expanded="false">
        <div class="d-flex justify-content-between">
          <div class="fs-6 fw-bold text-dark">
            Select your room(s)
          </div>
          <div class="fs-6 text-secondary">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </button>
    </div>
    <div class="border-top collapse show" id="collapseSelectRooms">
      <div class="p-3">
        <div class="row g-3">
          <div class="col-12 col-sm-4 col-lg-2">
            <div class="pb-1 fs-7 text-secondary">
              Room
            </div>
            <div class="">
              <select name="" id="" class="form-select fs-7 rounded-0">
                <option>1</option>
                <option selected>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-lg-10">
            <div class="row g-2">
              <?php for ($i = 1; $i <= 2; $i++) {
                $showTitle = $i > 1 ? 'd-block d-lg-none' : '';
                $showTitle2 = $i === 1 ? 'd-lg-block' : '';
              ?>
                <div class="col-12">
                  <div class="row g-3">
                    <div class="col-6 col-lg-4 col-xl-3">
                      <div class="pb-1 fs-7 text-secondary <?php echo $showTitle; ?>">
                        Adult(s)
                      </div>
                      <div class="p-0">
                        <select name="" id="" class="form-select fs-7 rounded-0">
                          <option>1 </option>
                          <option selected>2 - Twin Bed</option>
                          <option>2 - Double Bed</option>
                          <option>3 </option>
                          <option>4 </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6 col-lg-8">
                      <div class="row g-3">
                        <div class="col-12 col-lg-3">
                          <div class="pb-1 fs-7 text-secondary <?php echo $showTitle; ?>">
                            No. of Child
                          </div>
                          <div class="p-0">
                            <select name="" id="" class="form-select fs-7 rounded-0">
                              <option>0</option>
                              <option selected>1</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3">
                          <div class="pb-1 fs-7 text-secondary <?php echo $showTitle; ?>">
                            Child ages 1
                          </div>
                          <div class="p-0">
                            <select name="" id="" class="form-select fs-7 rounded-0" disabled>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option selected>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="pb-1 fs-7 text-secondary d-none <?php echo $showTitle2; ?>">
                            &nbsp;
                          </div>
                          <div class="form-check fs-7 text-secondary">
                            <input class="form-check-input rounded-0" type="checkbox" value="" id="<?php echo 'chkRqXBed' . $i; ?>">
                            <label class="form-check-label" for="<?php echo 'chkRqXBed' . $i; ?>">
                              Request extra bed
                            </label>
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
      </div>
      <div class="mt-2 p-3 border-top">
        <div class="text-end">
          <button class="btn btn-primary py-2 px-4 rounded-1 fs-7 fw-bold">
            Check rates
          </button>
        </div>
      </div>
    </div>
  </div>
</div>