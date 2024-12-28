@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Checkout</h1>
        <div class="row">
            <!-- Thông Tin Thanh Toán -->
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Payment Details</h5>
                        <form>
                            <div class="mb-3">
                                <label for="cardNumber" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber"
                                    placeholder="1234 5678 9101 1121">
                            </div>
                            <div class="mb-3">
                                <label for="expiryDate" class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                            </div>
                            <div class="mb-3">
                                <label for="cvcCvv" class="form-label">CVC/CVV</label>
                                <input type="text" class="form-control" id="cvcCvv" placeholder="123">
                            </div>
                            <div class="mb-3">
                                <label for="nameOnCard" class="form-label">Name on Card</label>
                                <input type="text" class="form-control" id="nameOnCard" placeholder="John Doe">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="saveCard">
                                <label class="form-check-label" for="saveCard">
                                    Save card for future purchases
                                </label>
                            </div>
                            <h6>Payment Methods</h6>
                            <div class="mb-3">
                                <img src="path/to/visa.png" alt="Visa" height="30">
                                <img src="path/to/mastercard.png" alt="MasterCard" height="30">
                                <img src="path/to/amex.png" alt="American Express" height="30">
                                <img src="path/to/discover.png" alt="Discover" height="30">
                                <img src="path/to/paypal.png" alt="PayPal" height="30">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Tóm Tắt Đơn Hàng -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Original Price</span>
                                <strong>₫449,000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Discounts (33% Off)</span>
                                <strong>-₫150,000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (1 course)</span>
                                <strong>₫299,000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Course Title</span>
                                <strong>Email Etiquette: Write More Effective Emails At Work</strong>
                            </li>
                        </ul>
                        <button id="completeCheckout" class="btn btn-primary w-100">Complete Checkout</button>
                        <p class="text-center mt-3"><small>30-day money-back guarantee</small></p>
                    </div>
                </div>
                <p class="text-center"><a href="#">Terms of Service</a></p>
            </div>
        </div>
    </div>

    <!-- Modal for Checkout Success -->
    <div class="modal fade" id="checkoutSuccessModal" tabindex="-1" aria-labelledby="checkoutSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutSuccessModalLabel">Checkout Successful</h5>
                </div>
                <div class="modal-body">
                    Thank you for your purchase! You will be redirected to the homepage shortly.
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.getElementById('completeCheckout').addEventListener('click', function() {
            var checkoutSuccessModal = new bootstrap.Modal(document.getElementById('checkoutSuccessModal'));
            checkoutSuccessModal.show();

            setTimeout(function() {
                window.location.href = "{{ route('home') }}";
            }, 2000); // Redirect after 2 seconds
        });
    </script>
@endsection
