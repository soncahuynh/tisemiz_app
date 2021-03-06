<table>
	<tr>
		<td><a href="<?php echo Router::url('/admin/thongke/xuatexcel/1')?>" target="_blank"><button class="btn
		btn-success">Kết
					xuất
					Excel</button></a></td>
	</tr>
</table>
<?php
$this->Paginator->options(array(
							   'url' => array(
								   'plugin' => 'admin',
								   'controller' => 'thongke',
								   'action' => 'thongtincoban'
							   )
						  ));
?>
	<style>

		.pagination>.current>a, .pagination>.current>span, .pagination>.current>a:hover, .pagination>.current>span:hover, .pagination>.current>a:focus, .pagination>.current>span:focus {
			z-index: 2;
			color: #fff;
			background-color: #428bca;
			border-color: #428bca;
			cursor: default;
		}
		ul.pagination li.disabled{
			display: none;
		}
	</style>
	<!--<div class="main-header">
		<h2>Doanh nghiệp</h2>
		<em>Liệt kê danh sách doanh nghiệp</em>
	</div>-->

	<div class="main-content">
		<!-- JQUERY DATA TABLE -->
		<div class="widget widget-table">
			<div class="widget-header">
				<h3><i class="fa fa-table"></i> Danh sách doanh nghiệp</h3>
			</div>
			<div class="col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info"> <?php
					echo $this->Paginator->counter(array(
														'format' => __('Trang {:page} trong số {:pages} trang,
                            hiển thị {:current} dòng trong tổng số
                            {:count}
                            , bắt đầu {:start}, kết thúc {:end}')
												   ));
					?></div></div>
			<div class="widget-content ui-jqgrid-hbox">

				</div>
				<script type="text/javascript">
					$(function() {
						var limit = <?php echo $limit ?>;
						$('#DataTables_Table_DoanhNghiep_length').val(limit);
						$('#search_filter').keyup(function() {
							var val = $(this).val().toLowerCase();
							$('#jqGridDn tbody tr').each(function() {
								var has = 0;
								$(this).find('td').each(function() {
									if ($(this).text().toLowerCase().indexOf(val) > -1) {
										has = 1;
									}
								});
								if (has == 0) {
									$(this).hide();
								} else {
									$(this).show();
								}
							});
						});
						$('#DataTables_Table_DoanhNghiep_length').change(function() {
							var number = $(this).val();
							window.location.href = "<?php echo FULL_BASE_URL; ?>/admin/doanhnghiep/lietke/?number=" + number;
						});
					});
				</script>
				<table id="jqGridDn" class="table table-sorting table-striped table-hover datatable ui-jqgrid-htable" cellpadding="0" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th class="sorting">STT</th>
						<th class="sorting"><?php echo $this->Paginator->sort('colTen', __('Tên DN')); ?></th>
						<!--<th class="sorting"><?php // echo $this->Paginator->sort('colTenTAnh',__('Tên Tiếng Anh')); ?></th>-->
						<th class="sorting"><?php echo $this->Paginator->sort('colDiaChi', __('Địa chỉ')); ?></th>
						<th class="sorting"><?php echo $this->Paginator->sort('colDienThoai', __('Điện thoai')); ?></th>
						<!--<th class="sorting"><?php // echo $this->Paginator->sort('colFax',__('Số Fax'));  ?></th>-->
						<th class="sorting"><?php echo $this->Paginator->sort('colEmail', __('Email')); ?></th>
						<th class="sorting"><?php echo $this->Paginator->sort('colSoTKhoan', __('Số tài khoản')); ?></th>
						<th class="sorting"><?php echo $this->Paginator->sort('colNamHopDong', __('Năm HD')); ?></th>
						<!--                        <th class="sorting">--><?php //echo $this->Paginator->sort('colGiayPhepKD',__('Giấy phép KD'));  ?><!--</th>-->
						<!--                        <th class="sorting">--><?php //echo $this->Paginator->sort('colLoaiHinhDN',__('Loại hình DN'));  ?><!--</th>-->
						<!--<th class="sorting"><?php // echo $this->Paginator->sort('colLinhVucHD',__('Lĩnh Vực HD'));  ?></th>-->
						<th class="sorting"><?php echo $this->Paginator->sort('colSanpham', __('Sản phẩm')); ?></th>
						<!--                        <th>--><?php //echo $this->Paginator->sort('colQuocGia',__('Quốc gia'));  ?><!--</th>-->
						<th class="actions"><?php echo __('Chức năng'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php $stt=($this->Paginator->param('page')-1)*$this->Paginator->param('limit')+1;?>
					<?php foreach ($data as $doanhNghiep): ?>
						<tr>
							<td><?php echo $stt; ?>&nbsp;</td>
							<td><?php echo h($doanhNghiep['DoanhNghiep']['colTen']); ?>&nbsp;</td>
							<!--<td><?php // echo h($doanhNghiep['DoanhNghiep']['colTenTAnh']);  ?>&nbsp;</td>-->
							<td><?php echo h($doanhNghiep['DoanhNghiep']['colDiaChi']); ?>&nbsp;</td>
							<td><?php echo h($doanhNghiep['DoanhNghiep']['colDienThoai']); ?>&nbsp;</td>
							<!--<td><?php // echo h($doanhNghiep['DoanhNghiep']['colFax']);  ?>&nbsp;</td>-->
							<td><?php echo h($doanhNghiep['DoanhNghiep']['colEmail']); ?>&nbsp;</td>
							<td><?php echo h($doanhNghiep['DoanhNghiep']['colSoTKhoan']); ?>&nbsp;</td>
							<td><?php echo date('Y', strtotime(h($doanhNghiep['DoanhNghiep']['colNamHopDong']))); ?>&nbsp;</td>
							<!--                            <td>--><?php //echo h($doanhNghiep['DoanhNghiep']['colGiayPhepKD']);  ?><!--&nbsp;</td>-->
							<!--                            <td>--><?php //echo h($doanhNghiep['DoanhNghiep']['colLoaiHinhDN']);  ?><!--&nbsp;</td>-->
							<!--<td><?php // echo h($doanhNghiep['DoanhNghiep']['colLinhVucHD']);  ?>&nbsp;</td>-->
							<td><?php echo h($doanhNghiep['DoanhNghiep']['colSanpham']); ?>&nbsp;</td>
							<!--                            <td>--><?php //echo h($doanhNghiep['DoanhNghiep']['colQuocGia']);  ?><!--&nbsp;</td>-->
							<td class="actions">
								<?php echo $this->Html->link(__('Sửa'), array('plugin' => 'admin', 'controller' => 'doanhnghiep', 'action' => 'edit', $doanhNghiep['DoanhNghiep']['colMa'])); ?>
								<?php echo $this->Form->postLink(__('Xóa'), array('plugin' => 'admin', 'controller' => 'doanhnghiep','action' => 'delete', $doanhNghiep['DoanhNghiep']['colMa']), null, __('Are you sure you want to delete # %s?', $doanhNghiep['DoanhNghiep']['colMa'])); ?>
							</td>
						</tr>
						<?php ++$stt;?>
					<?php endforeach; ?>

					</tbody>
				</table>

				<div class="col-md-6">
					<div class="dataTables_paginate paging_bootstrap">
						<ul class="pagination">
							<?php
							echo $this->Paginator->prev('←', array('class' => 'prev', 'tag' => 'li'), null, array('class' => 'prev disabled', 'tag' => 'li'));
							echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a'));
							echo $this->Paginator->next('→', array('class' => 'next', 'tag' => 'li'), null, array('class' => 'next disabled', 'tag' => 'li'));
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END JQUERY DATA TABLE -->

		<!-- JQGRID TABLE -->
		<!--        <div class="widget widget-table">-->
		<!--            <div class="widget-header">-->
		<!--                <h3><i class="fa fa-table"></i> Bảng có thể chỉnh sửa</h3>-->
		<!--                <em>- chỉnh sửa dòng, điều chỉnh, thêm, sửa, xóa, tìm kiếm, reload</em>-->
		<!--            </div>-->
		<!--            <div class="widget-content">-->
		<!--                <div id="jqgrid-wrapper">-->
		<!--                    <table id="jqgrid" class="table table-striped table-hover">-->
		<!--                        <tr>-->
		<!--                            <td></td>-->
		<!--                        </tr>-->
		<!--                    </table>-->
		<!--                    <div id="jqgrid-pager"></div>-->
		<!--                </div>-->
		<!--            </div>-->
		<!--        </div>-->
		<!-- JQGRID TABLE -->

	</div>
	<!-- /main-content -->
<?php
echo $this->Html->script(array(
							  '/assets/js/jqgrid/jquery.jqGrid.min',
							  '/assets/js/jqgrid/i18n/grid.locale-en',
							  '/assets/js/jqgrid/jquery.jqGrid.fluid',
							  '/assets/js/bootstrap-datepicker',
							  '/assets/js/king-table.min'
						 ));
?>