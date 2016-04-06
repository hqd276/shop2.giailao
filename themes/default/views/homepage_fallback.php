<div class="row">
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php \CI::Banners()->show_collection(1)?>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>Parici, Specialist of French travel gifts and souvenirs of France!</h3>
Parici online store will give you the oportunity to spend all your trip in visiting and enjoying your stay in France. You won’t worry anymore about finding the right gift for all your friends and family or packing it all in your heavy luggages… Just have a look at our wide range of souvenirs and after picking the ones you like up, we will deliver them directly to your country in a very short time.
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<?php $products = \CI::Products()->getProducts(null,6);?>

				<?php if(count($products) == 0):?>

				    <h2 style="margin:50px 0px; text-align:center; line-height:30px;">
				        <?php echo lang('no_products');?>
				    </h2>

				<?php else:?>

				    <div class="row">
				    <?php foreach($products as $product):?>
				        <div class="col-sm-4 col-xs-6">
				            <?php
				            $photo  = theme_img('no_picture.png');

				            if(!empty($product->images[0]))
				            {
				                $primary    = $product->images[0];
				                foreach($product->images as $photo)
				                {
				                    if(isset($photo['primary']))
				                    {
				                        $primary    = $photo;
				                    }
				                }

				                $photo  = base_url('uploads/images/medium/'.$primary['filename']);
				            }
				            ?>
				            <div onclick="window.location = '<?php echo site_url('/product/'.$product->slug); ?>'" class="categoryItem" >
				                <?php if((bool)$product->track_stock && $product->quantity < 1 && config_item('inventory_enabled')):?>
				                    <div class="categoryItemNote yellow"><?php echo lang('out_of_stock');?></div>
				                <?php elseif($product->saleprice > 0):?>
				                    <div class="categoryItemNote red"><?php echo lang('on_sale');?></div>
				                <?php endif;?>
				                
				                <div class="previewImg"><img src="<?php echo $photo;?>"></div>

				                <div class="categoryItemDetails">
				                    <?php echo $product->name;?>
				                </div>

				                <?php if(!$product->is_giftcard): //do not display this if the product is a giftcard?>
				                <div class="categoryItemHover">
				                    <div class="look">
				                        <?php echo ( $product->saleprice>0?format_currency($product->saleprice):format_currency($product->price) );?>
				                    </div>
				                </div>
				                <?php endif;?>

				            </div>
				        </div>
				    <?php endforeach;?>
				    </div>

				<?php endif;?>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading">
			    <h3 class="panel-title">New product</h3>
			</div>
			<div class="panel-body">
				<?php $products = \CI::Products()->getProducts(null,1,0,'id','DESC');?>

				<?php if(count($products) == 0):?>

				    <h2 style="margin:50px 0px; text-align:center; line-height:30px;">
				        <?php echo lang('no_products');?>
				    </h2>

				<?php else:?>

				    <div class="row">
				    <?php foreach($products as $product):?>
				        <div class="col-sm-12">
				            <?php
				            $photo  = theme_img('no_picture.png');

				            if(!empty($product->images[0]))
				            {
				                $primary    = $product->images[0];
				                foreach($product->images as $photo)
				                {
				                    if(isset($photo['primary']))
				                    {
				                        $primary    = $photo;
				                    }
				                }

				                $photo  = base_url('uploads/images/medium/'.$primary['filename']);
				            }
				            ?>
				            <div onclick="window.location = '<?php echo site_url('/product/'.$product->slug); ?>'" class="categoryItem" >
				                <?php if((bool)$product->track_stock && $product->quantity < 1 && config_item('inventory_enabled')):?>
				                    <div class="categoryItemNote yellow"><?php echo lang('out_of_stock');?></div>
				                <?php elseif($product->saleprice > 0):?>
				                    <div class="categoryItemNote red"><?php echo lang('on_sale');?></div>
				                <?php endif;?>
				                
				                <div class="previewImg"><img src="<?php echo $photo;?>"></div>

				                <div class="categoryItemDetails">
				                    <?php echo $product->name;?>
				                </div>

				                <?php if(!$product->is_giftcard): //do not display this if the product is a giftcard?>
				                <div class="categoryItemHover">
				                    <div class="look">
				                        <?php echo ( $product->saleprice>0?format_currency($product->saleprice):format_currency($product->price) );?>
				                    </div>
				                </div>
				                <?php endif;?>

				            </div>
				        </div>
				    <?php endforeach;?>
				    </div>

				<?php endif;?>
			</div>
			<div class="panel-footer text-center">
				<a href="#">All new products</a>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
			    <h3 class="panel-title">Our shop in Paris</h3>
			</div>
			<div class="panel-body">
				<p>Parici - 52 rue mouffetard 75005 Paris, FRANCE - Siret : 398805457 00015</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
			    <h3 class="panel-title">Newsletter</h3>
			</div>
			<div class="panel-body">
				<p class="text-center">WANT TO GET
				COUPON CODES AND SPECIAL OFFERS ?
				Simply enter your details below, it is free and easy !
				</p>
			</div>
		</div>
	</div>
</div>