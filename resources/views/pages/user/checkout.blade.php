@extends('layouts.checkout')

@section('title','checkout')
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0 pl-3 pl-lg-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                  Paket Travel
                </li>
                <li class="breadcrumb-item" aria-current="page">
                  Details
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Checkout
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details mb-3">
              <h1>Who is Going?</h1>
              <p>
                Trip to Ubud, Bali, Indonesia
              </p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td scope="col">Picture</td>
                      <td scope="col">Name</td>
                      <td scope="col">Nationality</td>
                      <td scope="col">Visa</td>
                      <td scope="col">Passport</td>
                      <td scope="col"></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img
                          src="frontend/images/avatar-4.png"
                          alt=""
                          height="60"
                        />
                      </td>
                      <td class="align-middle">Angga Risky</td>
                      <td class="align-middle">CN</td>
                      <td class="align-middle">N/A</td>
                      <td class="align-middle">Active</td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="frontend/images/ic_remove.png" alt="" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          src="frontend/images/avatar-5.png"
                          alt=""
                          height="60"
                        />
                      </td>
                      <td class="align-middle">Galih Pratama</td>
                      <td class="align-middle">SG</td>
                      <td class="align-middle">30 Days</td>
                      <td class="align-middle">Active</td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="frontend/images/ic_remove.png" alt="" />
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <form class="form-inline">
                  <label class="sr-only" for="inputUsername">Name</label>
                  <input
                    type="text"
                    class="form-control mb-2 mr-sm-2"
                    id="inputUsername"
                    placeholder="Username"
                  />

                  <label
                    class="sr-only"
                    class="mr-2"
                    for="inlineFormCustomSelectPref"
                    >Preference</label
                  >
                  <select
                    class="custom-select mb-2 mr-sm-2"
                    id="inlineFormCustomSelectPref"
                  >
                    <option selected value="">VISA</option>
                    <option value="2">30 Days</option>
                    <option value="3">N/A</option>
                  </select>

                  <label class="sr-only" for="doePassport"
                    >DOE Passport</label
                  >
                  <div class="input-group mb-2 mr-sm-2">
                    <input
                      type="text"
                      class="form-control datepicker"
                      id="doePassport"
                      placeholder="DOE Passport"
                    />
                  </div>

                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                  </button>
                </form>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered in
                  Nomads.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Information</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">2 person</td>
                </tr>
                <tr>
                  <th width="50%">Additional Visa</th>
                  <td width="50%" class="text-right">$ 190,00</td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">$ 80,00 / person</td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">$ 280,00</td>
                </tr>
                <tr>
                  <th width="50%">Total (+Unique)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">$ 279,</span
                    ><span class="text-orange">33</span>
                  </td>
                </tr>
              </table>

              <hr />
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">
                Please complete your payment before to continue the wonderful
                trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img
                    src="frontend/images/ic_bank.png"
                    alt=""
                    class="bank-image"
                  />
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>
                      0881 8829 8800
                      <br />
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item">
                  <img
                    src="frontend/images/ic_bank.png"
                    alt=""
                    class="bank-image"
                  />
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>
                      0899 8501 7888
                      <br />
                      Bank HSBC
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a
                href="success.html"
                class="btn btn-block btn-join-now mt-3 py-2"
                >I Have Made Payment</a
              >
            </div>
            <div class="text-center mt-3">
              <a href="#" class="text-muted">Cancel Booking</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}" />
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });

    $('.datepicker').datepicker({
      uiLibrary: 'bootstrap4',
      icons: {
        rightIcon: '<img src="{{url('frontend/images/ic_doe.png')}}" alt="" />'
      }
    });
  });
</script>
@endpush

