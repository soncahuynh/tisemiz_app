<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>He thong quan ly chat thai nguy hai</title>
        <meta name="description" content="Tisemiz ứng dụng quản lý môi trường tại các khu công nghiệp, góp phần bảo vệ môi trường sống tại Việt nam">
            <meta name="author" content="huynhsonca@gmail.com">
                <?php echo $this->fetch('meta'); ?>
                <?php echo $this->fetch('css'); ?>
                <?php echo $this->Html->script(array('CheckValid', 'jquery.min')); ?>
                <?php echo $this->fetch('script'); ?>
                <style type="text/css">
                    /* Default CSS Stylesheet for a new Web Application project */
                    html,body								{height:100%;}
                    body									{text-align:center; margin:9px; font-size:100%;font-family:Times New Roman,arial,helvetica,sans-serif;}
                    img										{border:0;}
                    div,ul,li,p,h1,h2,h3,h4,h5,form,label,blockquote	{margin:0; padding:0;}
                    a										{color:#505050;}
                    a:hover									{color:#C60000;}

                    .floatBox							{margin:0 auto;}
                    .floatBox							{display:inline-block;}
                    *html .floatBox						{height:1%;}
                    .floatBox 							{display:block;}

                    .fl									{float:left;}
                    .fr									{float:right;}
                    .hide								{display:none;}
                    .block								{display:block;}
                    .bold								{font-weight:bold;}
                    .italic								{font-style:italic;}
                    .normal								{font-weight:normal;}
                    .clear								{clear:both;}
                    .center								{text-align:center;}
                    .red								{color:#C60000;}
                    .redbold td							{color:#C60000; font-weight:bold;}
                    .darkgrey							{color:#505050;}
                    .black								{color:black;}
                    html>body .h3title					{height:1.08em; font-size:110%;}
                    .titlestar							{position:relative; top:1px; margin-right:4px;}
                    .al									{text-align:left;}
                    .adColumn							{margin:10px 0 0 11px;}
                    .ads								{margin:10px 0 0 11px; display:block;}
                    .bordertop							{border-top:1px solid white;}
                    .borderright						{border-right:1px solid white;}
                    .borderleft							{border-left:1px solid white;}
                    .borderbot							{border-bottom:1px solid white;}
                    .paddingr							{padding-right:10px;}
                    .pager								{float:right; text-align:right; width:187px; font-size:70%; font-weight:bold; display:inline;}
                    .pagerSpan							{position:relative; top:-1px;}
                    .pagerSpan a						{text-decoration:none; color:black;}
                    .pagerSpan a.pagerCurrent			{text-decoration:none; color:#9F9F9F;}
                    .spacergap							{margin:0 8px 0 7px; position:relative; top:2px;}
                    .backNext							{float:right; width:100px;}
                    .areaLeft							{width:330px; float:left; border-right:1px solid white;}
                    .areaRight							{width:331px; float:left;}
                    .Label{margin:0; font-family: Arial; font-size: 12px; color: #74614c; text-decoration: none;}
                    .INPUT {	BORDER-RIGHT: #cccccc 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #cccccc 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 0px; BORDER-LEFT: #cccccc 1px solid; color: #000080;; PADDING-TOP: 2px; BORDER-BOTTOM: #cccccc 1px solid; HEIGHT: 19px; BACKGROUND-COLOR: #ffffff;font-size: 12px;font-family: 'arial';}

                    A.link14
                    {
                        font: bold 10px Times New Roman,Tahoma;
                        color: #2A8E9D;
                        text-decoration: none;
                    }
                    A.link14:visited
                    {
                        font: bold 10px Times New Roman,Tahoma;
                        color: #2A8E9D;
                        text-decoration: none;
                    }
                    A.link14:hover
                    {
                        font: bold 12px Times New Roman,Tahoma;
                        color: #339933;
                        text-decoration: underline;
                    }

                    td.link15
                    {
                        font: bold 13px Times New Roman,Tahoma;
                        color: #6a6a6a;
                        text-decoration: none;
                    }
                    A.link15
                    {
                        font: bold 13px Times New Roman,Tahoma;
                        color: #6a6a6a;
                        text-decoration: none;
                    }
                    A.link15:visited
                    {
                        font: bold 13px Times New Roman,Tahoma;
                        color: #6a6a6a;
                        text-decoration: none;
                    }
                    A.link15:hover
                    {
                        font: bold 13px Times New Roman,Tahoma;
                        color: #2a8e9d;
                        text-decoration: none;
                    }

                    .textboxnew {
                        font-family: 'Arial';
                        font-size: 12px;
                        color: #4B6F77;
                        background-color: #F8F8F8;
                        border: 1px solid #B4B4B4;
                        padding: 2px;
                        margin-top: 3px;
                        margin-bottom: 3px;
                        height: 18px;
                    }

                    A:link.page {
                        COLOR: #ffffff; TEXT-DECORATION: none
                    }
                    A:visited.page {
                        COLOR: #ffffff; TEXT-DECORATION: none
                    }
                    A:active.page {
                        COLOR: #ffffff; TEXT-DECORATION: none
                    }
                    A:hover.page {
                        COLOR: #000000; TEXT-DECORATION: none
                    }


                    /*TD {
                            color: #464646; font-size: 9pt; font-family: Arial,times new roman,Verdana,Palatino linotype,Tahoma; list-style-type: lower-alpha
                    }*/
                    /* Data table */
                    .tbldata thead th{border-top-color:#FFF;border-bottom-color:#C1C1C1;border-right-color:#C1C1C1;background-color:#E6E6E6;} 
                    .tbldata thead th.sortcol{background-color:#C1C1C1;}
                    .tbldata tbody td{border-bottom-color:#E6E6E6;}
                    .tbldata tr.selected td {background-color:#d7bed5;}
                    .tbldata thead th.iconheader{border-right-width:0;border-right-style:none;}
                    .msgold td{ border-width:1px 0; background-color:#f6f6f6; border-right-color:#faecf8; }
                    .Other       { font-family: 'Arial'; font-size: 9pt; color: #666; text-decoration: none }
                    .othernews_nut {
                        font-family: Arial;
                        font-size: 16px;
                        color: #D30000;
                        text-decoration: none;
                    }
                    .othernews_date {
                        font-family: Arial;
                        font-size: 9pt;
                        color: #666;
                        text-decoration: none;
                        font-style: italic;
                    }
                    .text_titlenote {
                        color: #F45187;
                        font-weight: bold;
                        font-family: Verdana, Arial;
                        font-size: 13px;
                    }
                    .text_note {
                        color: #000000;
                        font-family: Verdana, Arial;
                        font-size: 11px;
                    }
                    .text_note_b {
                        color: #006600;
                        font-weight: bold;
                        font-family: Verdana, Arial;
                        font-size: 11px;
                    }

                    .textbox
                    {
                        font-size: 12px;
                        font-family: 'arial';
                        color: #000080;
                        border-style: solid;
                        border-width:1px;
                        border-color:#6D90B0;
                    }
                    .b_title{
                        font-family:Verdana;
                        font-size:11px;
                        letter-spacing:-1px;
                        font-weight:bold;
                        color:#ffffff;
                        text-align:center;
                    }
                    .btline{
                        border-bottom:1px solid #ECECEC;
                        word-break:break-all;
                        height:30px;
                        color:#666666;
                    }
                    .ColumnFONT
                    {
                        font-weight:bold;
                    }
                    table.grid th  {
                        font-size :8pt;
                        font: "Verdana";
                        background:#C0EBD2; /*#E0EEEE;  #CAE8EA;*/
                        color: #104E8F;
                        font-weight: bold;
                        white-space: nowrap;
                        border: 1px solid #C1CDCD;
                        padding: 5px;
                    }
                    table.grid , table.grid td
                    {
                        font-size :9pt;
                        FONT-FAMILY: 'Arial';
                        BORDER-COLLaPSE: collapse ;
                        /*border: #C1CDCD 1px solid;*/
                        border: #CCC 1px solid;
                        padding:3px 3px 3px 3px;

                    }
                    table.tdgrid th{
                        font-size :10pt;
                        FONT-FAMILY: 'Arial';
                        BORDER-COLLaPSE: collapse ;
                        /*border: #C1CDCD 1px solid;*/
                        border: #000 1px solid;
                        padding:1px 3px 1px 3px;
                        background:#93cfd0;
                        color: #104E8B;
                        font-weight: bold;  
                        white-space: nowrap;

                    }
                    table.tdgrid ,table.tdgrid td{
                        font-size :10pt;
                        FONT-FAMILY: 'Arial';
                        BORDER-COLLaPSE: collapse ;
                        /*border: #C1CDCD 1px solid;*/
                        border: #000 1px solid;
                        padding:1px 3px 1px 3px;

                    }
                    .typeinput
                    {
                        PADDING-RIGHT: 0px;
                        BORDER-TOP: #ffffff 1px solid;
                        PADDING-LEFT: 0px;
                        FONT-SIZE: 10pt;
                        PADDING-BOTTOM: 0px;
                        BORDER-LEFT: #ffffff 1px solid;
                        /*WIDTH: 162px; */
                        COLOR: #0033cc; 
                        PADDING-TOP: 0px; 
                        BORDER-BOTTOM: 1px dotted;
                        FONT-FAMILY: Arial;
                        HEIGHT: 20px
                    }
                    .reportCaption
                    {
                        font-family:Times New Roman;
                        Font-Size:14pt;
                        font-weight:bold;
                    }
                    .reportSubCaption
                    {
                        font-family:Times New Roman;
                        Font-Size:12;
                        font-weight:bold;
                        color:#666666;
                        font-style:italic;
                    }
                    .DataTD {
                        BORDER-RIGHT: #B7B7B7 1px solid; BORDER-TOP: #B7B7B7 1px solid; 
                        BORDER-LEFT: #A59E8C 0px solid; BORDER-BOTTOM: #A59E8C 0px solid; 
                        PADDING-RIGHT: 5px; PADDING-LEFT: 5px; padding-top: 2px; padding-bottom: 2px;
                        FONT-SIZE: 8pt; COLOR: #000000; 
                        FONT-FAMILY: Tahoma, Arial, Verdana, Helvetica; BACKGROUND-COLOR: #ffffff
                    }
                    /*.DataFONT {
                            FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Arial, Tahoma, Verdana, Helvetica;
                            padding-right: 2px;
                    }*/
                    /*.DataFONT A:link, .DataFONT A:visited, .DataFONT A:hover{
                            FONT-SIZE: 12pt; font-weight:bold; COLOR: #14426b; FONT-FAMILY: Arial, Tahoma, Verdana, Helvetica
                    }*/
                    .rptHeaderList
                    {
                        font-weight: bold;
                        font-size: 10pt;
                        color: #be3131;
                        font-family: Arial;
                    }
                    .rptItemText
                    {
                        font-weight: bold;font-size: 9pt;font-family: Arial;color: black;
                    }
                    .rptItemNumber
                    {
                        font-weight: bold;
                        font-size: 9pt;
                        color: seagreen;
                        font-family: Arial;
                    }
                    .rptItemTextSummary
                    {
                        font-weight: bold;
                        font-size: 9pt;
                        color: purple;
                        font-family: Arial;
                    }
                    .rptItemNumberSummary
                    {
                        font-weight: bold;
                        font-size: 9pt;
                        color: purple;
                        font-family: Arial;
                    }

                    body
                    {
                        font-family: Times New Roman;
                        font-size: 13pt;
                    }
                    table
                    {
                        border-collapse: collaspe;
                        border: 1px solid #fff;
                        border-bottom: 1px solid #fff;
                        border-right: 1px solid #fff;
                        border-left: 1px solid #fff;
                    }
                    table.grid, table.grid td
                    {
                        font-size: 13pt;
                        font-family: 'Times New Roman';
                        border-collapse: collapse; /*border: #C1CDCD 1px solid;*/
                        border: #000 1px solid;
                        padding: 1px 3px 1px 3px;
                    }
                    table.grid th
                    {
                        font-size: 13pt;
                        font-family: 'Times New Roman';
                        border-collapse: collapse; /*border: #C1CDCD 1px solid;*/
                        border: #000 1px solid;
                        padding: 1px 3px 1px 3px;
                        background: #fff;
                        color: #000; /*font-weight: bold; */
                        white-space: nowrap;
                        font-weight: normal;
                    }
                    td
                    {
                        border-collapse: collapse;
                        border-bottom: 1px solid #fff;
                        border-right: 1px solid #fff;
                        border-left: 1px solid #fff;
                    }
                    .normal
                    {
                        border-collapse: collapse;
                        border: 1px solid #fff;
                        border-bottom: 1px solid #fff;
                    }
                    .normalnt
                    {
                        border-collapse: collapse;
                        border-bottom: 1px solid #fff;
                        border-right: 1px solid #fff;
                        border-left: 1px solid #fff;
                    }

                </style>
                </head>
                <body>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
                </body>
                </html>