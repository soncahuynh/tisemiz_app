<table>
    <tr>
        <td>
            <div class="nav-steps">
                <ul id="steps">
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi'); ?>"><li class="active">1</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step2'); ?>"><li class="active">2</li></a>
                    <li class="active">3</li>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step4'); ?>"><li>4</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step5'); ?>"><li>5</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step6'); ?>"><li>6</li></a>
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step7'); ?>"><li>7</li></a>
					<li>8</li>
                </ul>
            </div>
        </td>
    </tr>
</table>
<div class="main-content">

    <!--form_main-->
    <div class="tabbable" id="tabs-9834">
        <ul class="nav nav-tabs">
            <li class="tab1">
                <a href="#panel-1" data-toggle="tab">Thông tin doanh nghiệp</a>
            </li>
            <li class="tab2">
                <a href="#panel-2" data-toggle="tab">Hoạt động sản xuất</a>
            </li>
            <li class="tab3 active">
                <a href="#panel-3" data-toggle="tab">HĐ Xả thải</a>
            </li>
            <li class="tab4">
                <a href="#panel-4" data-toggle="tab">Giám sát định kỳ</a>
            </li>
            <li class="tab5">
                <a href="#panel-5" data-toggle="tab">Hoạt động bảo vệ MT</a>
            </li>
            <li class="tab6">
                <a href="#panel-6" data-toggle="tab">Quan trắc tự động</a>
            </li>
			<li class="tab7">
                <a href="#panel-7" data-toggle="tab">Kiến nghị</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="panel-1">

            </div>
            <div class="tab-pane" id="panel-2">

            </div>
            <div class="tab-pane active" id="panel-3">
                <br>
                <div class="tabtable" id="tabs-9836">
                    <ul class="nav nav-tabs">
                        <li class="active canclick">
                            <a href="#panel-nuocthai" data-toggle="tab">Nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-kiemsoatnuocthai" data-toggle="tab">Kiểm soát nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-khithai" data-toggle="tab">Khí thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-tiengonrung" data-toggle="tab">Tiếng ồn và rung</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-racsinhhoat" data-toggle="tab">Rác sinh hoạt</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-chatthaicongnghiep" data-toggle="tab">Chất thải công nghiệp</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-chatthainguyhai" data-toggle="tab">Chất thải nguy hại</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane<?php if(!$activetab) echo ' active'?>" id="panel-nuocthai">
                            <!-- form thong tin nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nuocthainhamay'); ?>
                            <!-- end form thong tin nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-kiemsoatnuocthai">
                            <!-- form xu ly nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulynuocthaidoanhnghiep'); ?>
                            <!-- end form xu ly nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-khithai">
                            <!-- form xu ly khi thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulykhithaidoanhnghiep'); ?>
                            <!-- end form xu ly khi thai doanh nhgiep-->
                        </div>
                        <div class="tab-pane" id="panel-tiengonrung">
                            <!--tiengonrung-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulytiengonrung'); ?>
                            <!--/tiengonrung-->
                        </div>
                        <div class="tab-pane" id="panel-racsinhhoat">
                            <!--racsinhhoat-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_racthaisinhhoat'); ?>
                            <!--/racsinhhoat-->
                        </div>
                        <div class="tab-pane" id="panel-chatthaicongnghiep">
                            <!--chatthaicongnghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_chatthairancongnghiep'); ?>
                            <!--/chatthaicongnghiep-->
                        </div>
                        <div class="tab-pane" id="panel-chatthainguyhai">
                            <!--chatthainguyhai-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_chatthainguyhai'); ?>
                            <!--/chatthainguyhai-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="panel-4">

            </div>
            <div class="tab-pane" id="panel-5">

            </div>
            <div class="tab-pane" id="panel-6">

            </div>
			<div class="tab-pane" id="panel-7">

            </div>
        </div>
    </div>
    <!--form_main-->
</div>
<!-- /main-content -->
<script type="text/javascript">
    $(function() {
		$('.table').tooltip();
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active') && !$(this).hasClass('canclick')) {
                alert('Vui lòng nhập thông tin hoạt động xả thải');
                return false;
            }
        });
		<?php if(isset($activetab) && $activetab=='kiemsoatnuocthai'):?>
		$('#panel-kiemsoatnuocthai').addClass('active');
		$('a[href="#panel-kiemsoatnuocthai"]').parent('li').addClass('active');
		$('a[href="#panel-kiemsoatnuocthai"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='khithai'):?>
		$('#panel-khithai').addClass('active');
		$('a[href="#panel-khithai"]').parent('li').addClass('active');
		$('a[href="#panel-khithai"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='tiengonrung'):?>
		$('#panel-tiengonrung').addClass('active');
		$('a[href="#panel-tiengonrung"]').parent('li').addClass('active');
		$('a[href="#panel-tiengonrung"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='racsinhhoat'):?>
		$('#panel-racsinhhoat').addClass('active');
		$('a[href="#panel-racsinhhoat"]').parent('li').addClass('active');
		$('a[href="#panel-racsinhhoat"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='chatthaicongnghiep'):?>
		$('#panel-chatthaicongnghiep').addClass('active');
		$('a[href="#panel-chatthaicongnghiep"]').parent('li').addClass('active');
		$('a[href="#panel-chatthaicongnghiep"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='chatthainguyhai'):?>
		$('#panel-chatthainguyhai').addClass('active');
		$('a[href="#panel-chatthainguyhai"]').parent('li').addClass('active');
		$('a[href="#panel-chatthainguyhai"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='nuocthainhamay'):?>
		$('#panel-nuocthai').addClass('active');
		$('a[href="#panel-nuocthai"]').parent('li').addClass('active');
		<?php endif;?>
    });
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>