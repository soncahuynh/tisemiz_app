<?php

//Router::connect('/admin/doanhnghiep/lietke/*',array('plugin'=>'Admin','controller'=>'DoanhNghieps','action'=>'lietke'));
Router::connect('/bando', array('plugin' => 'Front', 'controller' => 'Map', 'action' => 'index'));
Router::connect('/admin/dashboards', array('plugin' => 'Admin', 'controller' => 'Dashboards', 'action' => 'billboard'));
Router::connect('/admin/doimatkhau', array('plugin' => 'Admin', 'controller' => 'User',
										   'action' => 'changepassword'));
Router::connect('/admin/doanhnghiep/lietke', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'lietke'));
Router::connect('/admin/doanhnghiep/lietke/*', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'lietke'));
Router::connect('/admin/doanhnghiep/themmoi', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themmoi'));
Router::connect('/admin/doanhnghiep/themmoi/step2', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step2Hoatdongsanxuat'));
Router::connect('/admin/doanhnghiep/themmoi/step2/:tab', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step2Hoatdongsanxuat'), array('pass' => array('tab')));
Router::connect('/admin/doanhnghiep/themmoi/step3', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step3Xathai'));
Router::connect('/admin/doanhnghiep/themmoi/step3/:tab', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
														   'action' => 'step3Xathai'),array('pass' => array('tab')));
Router::connect('/admin/doanhnghiep/themmoi/step4', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step4Giamsatdinhky'));
Router::connect('/admin/doanhnghiep/themmoi/step4/:tab', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
														   'action' => 'step4Giamsatdinhky'),array('pass'=>array('tab')
																							 ));
Router::connect('/admin/doanhnghiep/themmoi/step5', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step5Hoatdongbaovemoitruong'));
Router::connect('/admin/doanhnghiep/themmoi/step6', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
														  'action' => 'step6Quantractudong'));
Router::connect('/admin/doanhnghiep/themmoi/step7', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
														  'action' => 'step7Kiennghi'));
Router::connect('/admin/doanhnghiep/themmoi/step8', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
														  'action' => 'step8Hoantat'));
Router::connect('/admin/doanhnghiep/edit/:id', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'edit'), array('pass' => array('id')));
Router::connect('/admin/doanhnghiep/delete/:id', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'delete'), array('pass' => array('id')));
Router::connect('/admin/doanhnghiep/themsanpham', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themsanpham'));
Router::connect('/admin/doanhnghiep/themdiennuoc', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themdiennuoc'));
Router::connect('/admin/doanhnghiep/themnguyenlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnguyenlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnhienlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnhienlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnuocngamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnuocngamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnuocthainhamay', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnuocthainhamay'));
Router::connect('/admin/doanhnghiep/thembienphapxulynuocthaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulynuocthaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulykhithaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulykhithaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulyonrungdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulyonrungdoanhnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulyracthaisinhhoat', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulyracthaisinhhoat'));
Router::connect('/admin/doanhnghiep/thembienphapxulychatthaicongnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulychatthaicongnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulychatthainguyhai', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulychatthainguyhai'));
Router::connect('/admin/doanhnghiep/xoadanhmucs', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhmucs'));
Router::connect('/admin/doanhnghiep/xoasanphams', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoasanphams'));
Router::connect('/admin/doanhnghiep/xoanguyenlieus', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoanguyenlieus'));
Router::connect('/admin/doanhnghiep/xoanguonthainuocthais', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoanguonthainuocthais'));
Router::connect('/admin/doanhnghiep/xoadanhsachsanphamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachsanphamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnguyenlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnguyenlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachdiennuocdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachdiennuocdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnuocngamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnuocngamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnhienlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnhienlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnuocthainhamay', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnuocthainhamay'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulynuocthaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulynuocthaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulykhithaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulykhithaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulyonrungdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulyonrungdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulyracthaisinhhoat', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulyracthaisinhhoat'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulychatthaicongnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulychatthaicongnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulychatthainguyhai', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulychatthainguyhai'));
Router::connect('/admin/doanhnghiep/xoadanhsachvitrido', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachvitrido'));
Router::connect('/admin/doanhnghiep/xoadanhsachketquagiamsatkhithai', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachketquagiamsatkhithai'));
Router::connect('/admin/doanhnghiep/xoadanhsachketquagiamsatdorung', array('plugin' => 'Admin',
																	  'controller' => 'DoanhNghieps',
																	  'action' => 'xoadanhsachketquagiamsatdorung'));
Router::connect('/admin/doanhnghiep/xoadanhsachketquagiamsatnuocthai', array('plugin' => 'Admin',
																		  'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachketquagiamsatnuocthai'));
Router::connect('/admin/commonfunction/chucnang/type/:type', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'chucnang'), array('pass' => array('type'), 'type' => '[0-9]{1,3}'));
Router::connect('/admin/commonfunction/chucnang/type/:type/id_dn/:colMa', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'chucnang'), array('pass' => array('type','colMa'), 'type' => '[0-9]{1,3}'));
Router::connect('/admin/commonfunction/capnhat/type/:type/id/:id', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'capnhat'), array('pass' => array('type', 'id'), 'type' => '[0-9]{1,3}', 'id' => '[0-9]{1,11}'));
Router::connect('/admin/doanhnghiep/xoacoso', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoacoso'));
Router::connect('/admin/doanhnghiep/getinfo', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'getinfo'));
Router::connect('/admin/commonfunction/chucnangxoa', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'chucnangxoa'));
Router::connect('/admin/commonfunction/load', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
													'action' => 'loadData'));
Router::connect('/admin/commonfunction/update/:type', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps',
													'action' => 'updateData'),array('pass'=>array('type')));
//Router::connect('/',array('plugin'=>'Front','controller'=>'News','action'=>'view'),'home','home');
Router::connect('/', array('plugin' => 'Front', 'controller' => 'Home', 'action' => 'index'));
Router::connect('/dodownload', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'dodownload'));
Router::connect('/lienhe', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'lienhe'));
Router::connect('/vanbanphapquy', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'view'));
Router::connect('/vanbanphapquy/*', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'view'));
Router::connect('/chitiet/vanbanphapquy/:id', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'chitiet'),array('pass'=>array('id')));
//Router::connect('/tintuc/xem',array('plugin'=>'Front','controller'=>'News','action'=>'view'));
//Router::connect('/admin/baocao/dulieugiamsatmoitruong',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'dulieugiamsatmoitruong'));
// Router::connect('/admin/baocao/xemchitiet/:id',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'xemchitiet'),array('pass'=>array('id')));
// 
//-------------------------------------ThongTinChung------------------------------------------------//
Router::connect('/admin/thongtinchung/chatthai',array('plugin' => 'Admin', 'controller' => 'ThongTinChung', 'action' => 'chatthai'));
Router::connect('/admin/thongtinchung/additem',array('plugin' => 'Admin', 'controller' => 'ThongTinChung', 'action' => 'additem'));
Router::connect('/admin/thongtinchung/vanbanphapquy',array('plugin' => 'Admin', 'controller' => 'ThongTinChung', 'action' => 'vanbanphapquy'));
Router::connect('/admin/thongtinchung/danhsachvanbanphapquy',array('plugin' => 'Admin', 'controller' => 'ThongTinChung', 'action' => 'danhsachvanbanphapquy'));
Router::connect('/admin/thongtinchung/chinhsuavanbanphapquy/:id',array('plugin' => 'Admin', 'controller' => 'ThongTinChung', 'action' => 'chinhsuavanbanphapquy'),array('pass'=>array('id')));
//-------------------------------------EndThongTinChung------------------------------------------------//

Router::connect('/admin/baocao/update/:id',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'update'),array('pass'=>array('id'),'id'=>'[1-9]?[0-9]{1,11}'));
Router::connect('/admin/baocao/danhsachbaocaochatthainguyhai',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'danhsachbaocaochatthainguyhai'));
Router::connect('/admin/baocao/baocaochatthainguyhai/timkiem',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep0'));
Router::connect('/admin/baocao/baocaochatthainguyhai/timkiem/*',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep0'));
Router::connect('/admin/baocao/baocaochatthainguyhai/dangkyctnh/:colMa',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'dangkyctnh'),array('pass'=>array('colMa')));
Router::connect('/admin/baocao/baocaochatthainguyhai/step1',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhai'));
Router::connect('/admin/baocao/baocaochatthainguyhai/step2',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep2'));
Router::connect('/admin/baocao/baocaochatthainguyhai/step3',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep3'));
Router::connect('/admin/baocao/baocaochatthainguyhai/step3/:colMa',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep3'),array('pass'=>array('colMa')));
Router::connect('/admin/baocao/baocaochatthainguyhai/step4',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep4'));
Router::connect('/admin/baocao/baocaochatthainguyhai/step5',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep5'));
Router::connect('/admin/baocao/chatthainguyhaiphatsinh',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'chatthainguyhaiphatsinh'));
Router::connect('/admin/baocao/chatthainguyhaitonluu',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'chatthainguyhaitonluu'));
Router::connect('/admin/baocao/themchatthainguyhai',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'themchatthainguyhai'));
Router::connect('/admin/baocao/review',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'review'));
Router::connect('/admin/baocao/ketxuatword',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'ketxuatword'));
//-----------------------------------------Thong Ke -------------------------------//
Router::connect('/admin/thongke/baocaochatthainguyhai',array('plugin'=>'Admin','controller'=>'Baocao',
															   'action'=>'danhsachbaocaochatthainguyhai'));
Router::connect('/admin/thongke/baocaogiamsatmoitruong',array('plugin'=>'Admin','controller'=>'Baocao',
															   'action'=>'danhsachbaocaogiamsatmoitruong'));
Router::connect('/admin/thongke/thongtincoban',array('plugin'=>'Admin','controller'=>'Thongke',
													 'action'=>'thongtincoban'));
Router::connect('/admin/thongke/thongtincoban/*',array('plugin'=>'Admin','controller'=>'Thongke',
													 'action'=>'thongtincoban'));
Router::connect('/admin/thongke/xuatexcel/:type',array('plugin'=>'Admin','controller'=>'Thongke',
													 'action'=>'xuatexcel'),array('pass'=>array('type')));

//-----------------------------------------End Thong ke --------------------------//
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
