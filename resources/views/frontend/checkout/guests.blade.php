@extends('frontend.layout.master')
@section('content')
<!-- Cart view section -->
<section id="checkout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <div class="checkout-area">
         <form action="">
           <div class="row">
             <div class="col-md-8">
               <div class="checkout-left">
                 <div class="panel-group" id="accordion">
                   <!-- Coupon section -->
                   <div class="panel panel-default aa-checkout-coupon">
                     <div class="panel-heading">
                       <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                           Bạn có mã giảm giá?
                         </a>
                       </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in">
                       <div class="panel-body">
                         <input type="text" placeholder="Nhập mã giảm giá" class="aa-coupon-code">
                         <input type="submit" value="ÁP DỤNG" class="aa-browse-btn">
                       </div>
                     </div>
                   </div>
                   <!-- Login section -->
                   {{--  <div class="panel panel-default aa-checkout-login">
                     <div class="panel-heading">
                       <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                           Client Login 
                         </a>
                       </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse">
                       <div class="panel-body">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat voluptatibus modi pariatur qui reprehenderit asperiores fugiat deleniti praesentium enim incidunt.</p>
                         <input type="text" placeholder="Username or email">
                         <input type="password" placeholder="Password">
                         <button type="submit" class="aa-browse-btn">Login</button>
                         <label for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                         <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                       </div>
                     </div>
                   </div>  --}}
                   <!-- Billing Details -->
                   <div class="panel panel-default aa-checkout-billaddress">
                     <div class="panel-heading">
                       <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           Địa chỉ nhận hóa đơn
                         </a>
                       </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse">
                       <div class="panel-body">
                         <div class="row">
                           <div class="col-md-12">
                             <div class="aa-checkout-single-bill">
                               <input name="fullname" type="text" placeholder="Họ tên*">
                             </div>                             
                           </div>                            
                         </div>  
                         <div class="row">
                           <div class="col-md-6">
                             <div class="aa-checkout-single-bill">
                               <input type="email" placeholder="Email*">
                             </div>                             
                           </div>
                           <div class="col-md-6">
                             <div class="aa-checkout-single-bill">
                               <input type="tel" placeholder="Số điện thoại*">
                             </div>
                           </div>
                         </div> 
                         <div class="row">
                           <div class="col-md-12">
                             <div class="aa-checkout-single-bill">
                               <select>
                                 <option value="0">Tỉnh/Thành phố</option>
                                 <option value="1">Hà Nội</option>
                                 <option value="2">Hồ Chí Minh</option>
                               </select>
                             </div>                             
                           </div>                            
                         </div>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="aa-checkout-single-bill">
                              <select>
                                <option value="0">Quận/Huyện</option>
                                <option value="1">Ba Đình</option>
                                <option value="2">Thanh Xuân</option>
                              </select>
                             </div>                             
                           </div>
                           <div class="col-md-6">
                             <div class="aa-checkout-single-bill">
                              <select>
                                <option value="0">Phường/Xã</option>
                                <option value="1">Ba Đình</option>
                                <option value="2">Thanh Xuân</option>
                              </select>
                             </div>
                           </div>
                         </div>   
                         <div class="row">
                          <div class="col-md-12">
                            <div class="aa-checkout-single-bill">
                              <textarea placeholder="Địa chỉ*" cols="8" rows="3"></textarea>
                            </div>                             
                          </div>                            
                        </div>                                 
                       </div>
                     </div>
                   </div>
                   <!-- Shipping Address -->
                   <div class="panel panel-default aa-checkout-billaddress">
                     <div class="panel-heading">
                       <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                           Địa chỉ nhận hàng
                         </a>
                       </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse">
                       <div class="panel-body">
                         <div class="row">
                           <div class="col-md-12">
                             <div class="aa-checkout-single-bill">
                               <input name="fullname" type="text" placeholder="Họ tên*">
                             </div>                             
                           </div>                            
                         </div>  
                         <div class="row">
                           <div class="col-md-6">
                             <div class="aa-checkout-single-bill">
                               <input type="email" placeholder="Email*">
                             </div>                             
                           </div>
                           <div class="col-md-6">
                             <div class="aa-checkout-single-bill">
                               <input type="tel" placeholder="Số điện thoại*">
                             </div>
                           </div>
                         </div> 
                         <div class="row">
                           <div class="col-md-12">
                             <div class="aa-checkout-single-bill">
                               <textarea placeholder="Địa chỉ*" cols="8" rows="3"></textarea>
                             </div>                             
                           </div>                            
                         </div>   
                         <div class="row">
                          <div class="col-md-12">
                            <div class="aa-checkout-single-bill">
                              <select>
                                <option value="0">Tỉnh/Thành phố</option>
                                <option value="1">Hà Nội</option>
                                <option value="2">Hồ Chí Minh</option>
                              </select>
                            </div>                             
                          </div>                            
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="aa-checkout-single-bill">
                             <select>
                               <option value="0">Quận/Huyện</option>
                               <option value="1">Ba Đình</option>
                               <option value="2">Thanh Xuân</option>
                             </select>
                            </div>                             
                          </div>
                          <div class="col-md-6">
                            <div class="aa-checkout-single-bill">
                             <select>
                               <option value="0">Phường/Xã</option>
                               <option value="1">Ba Đình</option>
                               <option value="2">Thanh Xuân</option>
                             </select>
                            </div>
                          </div>
                        </div> 
                          <div class="row">
                           <div class="col-md-12">
                             <div class="aa-checkout-single-bill">
                               <textarea placeholder="Ghi chú" cols="8" rows="3"></textarea>
                             </div>                             
                           </div>                            
                         </div>              
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="checkout-right">
                 <h4>Chi tiết đơn hàng</h4>
                 <div class="aa-order-summary-area">
                   <table class="table table-responsive">
                     <thead>
                       <tr>
                         <th>Sản phẩm</th>
                         <th>Giá</th>
                       </tr>
                     </thead>
                     <tbody>
                      @php
                        $sale = 0;
                        $total = 0;
                      @endphp
                       @foreach ($data as $item)
                        <tr>
                          <td><a href="{{ route('frontend.detailproduct', ['id'=>$item->product->id]) }}">{{ $item->product->product_name }}</a> <strong> x  {{ $item->quantity }}</strong></td>
                          <td>{{ number_format($item->product->price * $item->quantity) }} vnđ</td>
                          @php
                              $total = $total + $item->product->price * $item->quantity;
                          @endphp
                        </tr>
                       @endforeach
                     </tbody>
                     <tfoot>
                       <tr>
                         <th>Phụ phí</th>
                         <td>0</td>
                       </tr>
                        <tr>
                          @foreach ($data as $item)
                            @if ($item->product->sale_percent > 0)
                                @php
                                    $sale = $sale + (($item->product->price * $item->quantity * $item->product->sale_percent)/100)
                                @endphp
                            @endif
                          @endforeach
                         <th>Giảm giá</th>
                         <td>{{ number_format($sale) }} vnđ</td>
                       </tr>
                        <tr>
                         <th>Tổng</th>
                         <td>{{ number_format($total - $sale) }}vnđ</td>
                       </tr>
                     </tfoot>
                   </table>
                 </div>
                 <h4>Phương thức giao hàng</h4>
                 <div class="aa-payment-method">                    
                   <input type="radio" id="cashdelivery" name="optionsship"> Giao hàng tiêu chuẩn </label><br>
                   <input type="radio" id="cashdelivery" name="optionsshipx`"> Giao hàng tiết kiệm </label>
                 </div>
                 <br>
                 <h4>Phương thức thanh toán</h4>
                 <div class="aa-payment-method">                    
                   <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Thanh toán khi nhận hàng </label>
                   <label for="paypal"><input type="radio" id="paypal" name="optionsRadios"> <img style="width: 40px;margin: 4px 0px" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/icon-momo.svg" alt=""> Thanh toán bằng ví Momo </label>
                   <label for="paypal"><input type="radio" id="paypal" name="optionsRadios"> <img style="width: 40px;margin: 4px 0px" src="https://vnpayment.vnpay.vn/Resources/website/images/vnpayqr.png" alt=""> Thanh toán bằng ví VNPay </label>
                   <label for="paypal"><input type="radio" id="paypal" name="optionsRadios"> <img style="width: 40px;margin: 4px 0px" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/icon-zalopay.svg" alt=""> Thanh toán bằng ví ZaloPay </label>
                   {{--  <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">      --}}
                   <input type="submit" value="THANH TOÁN" class="aa-browse-btn">                
                 </div>
               </div>
             </div>
           </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Cart view section -->
@endsection