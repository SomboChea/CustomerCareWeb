@extends('layouts.content')
@section('title', 'Reports')
@section('block-content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card mb-3">
    			<div class="card-header">
    				<h3><i class="fa fa-table"></i> Customer ID: #245</h3>
    			</div>
    			<div class="card-body">

    				<div class="container">
    					<div class="row">
    						<div class="col-md-12">
    							<div class="invoice-title text-center mb-3">
    								<h2>Invoice Code: #29290</h2>
    								<strong>Date:</strong> April 7, 2018
    							</div>
    							<hr>
    							{{-- <div class="row">
    								<div class="col-md-6">
    									<h5>Billed To:</h5>
    									<address>
    										John Smith<br>
    										1234 Main<br>
    										Apt. 4B<br>
    										Springfield, ST 54321
    									</address>
    								</div>
    								<div class="col-md-6 float-right text-right">
    									<h5>Shipped To:</h5><br>
    									<address>
    										Jane Smith<br>
    										1234 Main<br>
    										Apt. 4B<br>
    										Springfield, ST 54321
    									</address>
    								</div>
    							</div> --}}
    							<div class="row">
    								<div class="col-md-6">
    									<h5>Payment Method:</h5>
    									<address>
    										Visa ending **** 4242<br>
    										jsmith@email.com
    									</address>
    								</div>
    								<div class="col-md-6 float-right text-right">
    									<h5>Order Date:</h5>
    									<address>
    										April 7, 2018<br><br>
    									</address>
    								</div>
    							</div>
    						</div>
    					</div>

    					<div class="row">
    						<div class="col-md-12">
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<h3 class="panel-title"><strong>Order summary</strong></h3>
    								</div>
    								<div class="panel-body">
    									<div class="table-responsive">
    										<table class="table table-condensed">
    											<thead>
    												<tr>
    													<td><strong>Item</strong></td>
    													<td class="text-center"><strong>Price</strong></td>
    													<td class="text-center"><strong>Quantity</strong></td>
    													<td class="text-right"><strong>Totals</strong></td>
    												</tr>
    											</thead>
    											<tbody>
    												<!-- foreach ($order->lineItems as $line) or some such thing here -->
    												<tr>
    													<td>Lebens 1</td>
    													<td class="text-center">$10.99</td>
    													<td class="text-center">1</td>
    													<td class="text-right">$10.99</td>
    												</tr>
    												<tr>
    													<td>Lebens 2</td>
    													<td class="text-center">$20.00</td>
    													<td class="text-center">3</td>
    													<td class="text-right">$60.00</td>
    												</tr>
    												<tr>
    													<td>Lebens Mom</td>
    													<td class="text-center">$600.00</td>
    													<td class="text-center">1</td>
    													<td class="text-right">$600.00</td>
    												</tr>
    												<tr>
    													<td class="thick-line"></td>
    													<td class="thick-line"></td>
    													<td class="thick-line text-center"><strong>Subtotal</strong></td>
    													<td class="thick-line text-right">$670.99</td>
    												</tr>
    												<tr>
    													<td class="no-line"></td>
    													<td class="no-line"></td>
    													<td class="no-line text-center"><strong>Shipping</strong></td>
    													<td class="no-line text-right">Free</td>
    												</tr>
    												<tr>
    													<td class="no-line"></td>
    													<td class="no-line"></td>
    													<td class="no-line text-center"><strong>Total</strong></td>
    													<td class="no-line text-right">$685.99</td>
    												</tr>
    											</tbody>
    										</table>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>

    			</div><!-- end card body -->

    		</div><!-- end card-->

  	</div><!-- end col-->
</div><!-- end row-->
@endsection()
