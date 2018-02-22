<!DOCTYPE html>
<html>
<head>
	<title>Awds</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets_1/vendor/bootstrap/css/bootstrap.css'?>">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4>Produk</h4>
			<div class="row">
			<?php foreach ($ProdVMachine1 as $row) : ?>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h4><?php echo $row->PACK_NAME;?></h4>
							<div class="row">
								<div class="col-md-7">
									<h4><?php echo 'Rp '.number_format($row->PACK_PRICE);?></h4>
								</div>
								<div class="col-md-5">
									<input type="number" name="quantity" id="<?php echo $row->PACK_ID;?>" value="1" class="quantity form-control">
								</div>
							</div>
							<button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->PACK_ID;?>" data-produknama="<?php echo $row->PACK_NAME;?>" data-produkharga="<?php echo $row->PACK_PRICE;?>">Add To Cart</button>
						</div>
					</div>
				</div>
			<?php endforeach;?>
				
			</div>

		</div>
		<div class="col-md-4">
			<h4>Shopping Cart</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Produk</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Subtotal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="detail_cart">

				</tbody>
				
			</table>
		</div>
	</div>
</div>

<script src="<?php echo base_url();?>assets_1/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets_1/vendor/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id    = $(this).data("produkid");
			var produk_nama  = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var quantity     = $('#' + produk_id).val();
			$.ajax({
				url : "<?php echo base_url();?>C_coba/add_to_cart",
				method : "POST",
				data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>C_coba/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>C_coba/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>
</body>
</html>