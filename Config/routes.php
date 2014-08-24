<?php

//Router::connect('/admin/doanhnghiep/lietke/*',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/bando', array('plugin' => 'Front', 'controller' => 'Map', 'action' => 'index'));
Router::connect('/admin/dashboards', array('plugin' => 'Admin', 'controller' => 'Dashboards', 'action' => 'billboard'));
Router::connect('/admin/doanhnghiep/lietke', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'lietke'));
Router::connect('/admin/doanhnghiep/lietke/*', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'lietke'));
Router::connect('/admin/doanhnghiep/themmoi', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'themmoi'));
Router::connect('/admin/doanhnghiep/themmoi/step2', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'step2Hoatdongsanxuat'));
Router::connect('/admin/doanhnghiep/themmoi/step2/:tab', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'step2Hoatdongsanxuat'),array('pass'=>array('tab')));
Router::connect('/admin/doanhnghiep/themmoi/step3', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'step3Xathai'));
Router::connect('/admin/doanhnghiep/themmoi/step4', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'step4Hoatdongbaovemoitruong'));
Router::connect('/admin/doanhnghiep/themmoi/step5', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'step5Kiennghi'));
Router::connect('/admin/doanhnghiep/themmoi/step6', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'step6Hoantat'));
Router::connect('/admin/doanhnghiep/themsanpham', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'themsanpham'));
Router::connect('/admin/doanhnghiep/themdiennuoc', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'themdiennuoc'));
Router::connect('/admin/doanhnghiep/themnguyenlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'themnguyenlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnhienlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'themnhienlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnuocngamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'themnuocngamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhmucs', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoadanhmucs'));
Router::connect('/admin/doanhnghiep/xoasanphams', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoasanphams'));
Router::connect('/admin/doanhnghiep/xoanguyenlieus', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoanguyenlieus'));
Router::connect('/admin/doanhnghiep/xoadanhsachsanphamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoadanhsachsanphamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnguyenlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoadanhsachnguyenlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachdiennuocdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoadanhsachdiennuocdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnuocngamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoadanhsachnuocngamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnhienlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'xoadanhsachnhienlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/chucnang/type/:type', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'chucnang'), array('pass' => array('type'), 'type' => '[0-9]'));
Router::connect('/admin/doanhnghiep/capnhat/type/:type/id/:id', array('plugin' => 'Admin', 'controller' => 'Doanhnghieps', 'action' => 'capnhat'), array('pass' => array('type', 'id'), 'type' => '[0-9]', 'id' => '[0-9]{1,11}'));
//Router::connect('/',array('plugin'=>'Front','controller'=>'News','action'=>'view'),'home','home');
Router::connect('/', array('plugin' => 'Front', 'controller' => 'Home', 'action' => 'index'));
Router::connect('/news', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'view'));
//Router::connect('/tintuc/xem',array('plugin'=>'Front','controller'=>'News','action'=>'view'));
//Router::connect('/admin/baocao/dulieugiamsatmoitruong',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'dulieugiamsatmoitruong'));
// Router::connect('/admin/baocao/xemchitiet/:id',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'xemchitiet'),array('pass'=>array('id')));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
