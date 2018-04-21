<?php $this->load->view('admin/book/header');?>
<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="product/add.html" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url("admin");?>/images/icons/dark/add.png" class="titleIcon" />
						<h6>Thêm mới Sản phẩm</h6>
					</div>
					
					<div class="tab_container">
					     <div id='tab1' class="tab_content pd0">
					         <div class="formRow">



					         	
	<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
	<div class="formRight">
		<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" /></span>
		<span name="name_autocheck" class="autocheck"></span>
		<div name="name_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
	<div class="formRight">
		<div class="left"><input type="file"  id="image" name="image" style="color: blue;" ></div>
		<div name="image_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>


<!-- Price -->
<div class="formRow">
	<label class="formLeft" for="param_price">
		Giá :
		<span class="req">*</span>
	</label>
	<div class="formRight">
		<span class="oneTwo">
			<input name="price"  style='width:100px' id="param_price" class="format_number" _autocheck="true" type="text" />
			<img class='tipS' title='Giá bán sử dụng để giao dịch' style='margin-bottom:-8px'  src='<?php echo public_url("admin");?>/crown/images/icons/notifications/information.png'/>
		</span>
		<span name="price_autocheck" class="autocheck"></span>
		<div name="price_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- Price -->

<div class="formRow">
	<label class="formLeft" for="param_warranty">
		Tác giả:
	</label>
	<div class="formRight">
		<span class="oneFour"><input name="warranty" id="param_warranty"  type="text" /></span>
		<span name="warranty_autocheck" class="autocheck"></span>
		<div name="warranty_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label class="formLeft" for="param_cat">Thể loại:<span class="req">*</span></label>
	<div class="formRight">
		<select name="cat" _autocheck="true" id='param_cat' class="left">
			<option value="">Lựa chọn danh mục</option>
						      <!-- kiem tra danh muc co danh muc con hay khong -->
			               			                    <option value="18">
					                Truyện dài					            </option>
			               			                    <option value="17">
					                Tiểu thuyết				            </option>
			               			                    <option value="16">
					                Trinh thám					            </option>
			               			                    <option value="15">
					                Truyện tranh					            </option>
			               			                    <option value="14">
					                Kĩ năng sống					            </option>
			               			                    <option value="13">
					                Ngôn tình					            </option>
			       
						      <!-- kiem tra danh muc co danh muc con hay khong -->
			      			            
					</select>
		<span name="cat_autocheck" class="autocheck"></span>
		<div name="cat_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>


<!-- warranty -->
<div class="formRow">
	<label class="formLeft" for="param_cat">Năm phát hành:<span class="req">*</span></label>
	<div class="formRight">
		<select name="cat" _autocheck="true" id='param_cat' class="left">
			<option value="">Lựa chọn thời gian</option>
						      <!-- kiem tra danh muc co danh muc con hay khong -->

						      <?php for($i= 1990; $i<=2018; $i++):?>
			               			<option value="<?php echo $i;?>"><?php echo $i;?></option>
					            <?php endfor; ?>
			       
						      <!-- kiem tra danh muc co danh muc con hay khong -->
			      			            
					</select>
		<span name="cat_autocheck" class="autocheck"></span>
		<div name="cat_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="formRow">
	<label class="formLeft">Nội dung:</label>
	<div class="formRight">
		<textarea name="content" id="param_content" class="editor"></textarea>
		<div name="content_error" class="clear error"></div>
	</div>
	<div class="clear"></div>
</div>
						      <div class="formRow hide"></div>
						 </div>
						
					<!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" value="Thêm mới" class="redB" />
	           			<input type="reset" value="Hủy bỏ" class="basic" />
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>