﻿  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
    <title><?php echo $this->lang->line("sales") . " " . $inv->reference_no; ?></title>
    <link href="<?php //echo $assets ?>styles/style.css" rel="stylesheet">
      <link rel="shortcut icon" href="<?= $assets ?>images/icon.png"/>
        <link rel="stylesheet" href="<?= $assets ?>styles/theme.css" type="text/css"/>
    <style type="text/css">
        html, body {
            height: 100%;
            background: #FFF;
        }

        body:before, body:after {
            display: none !important;
        }
        p{
            font-size:11px !important;
        font-weight:bold !important;
        }
        .well{
            /*border:1px solid black !important;*/
        }
        #wrap{
            max-width: 900px;
            margin: 10px auto !important;
            padding: 10px;
        }
        .table th {
            text-align: center;
            padding: 1px !important;
            font-size: 10px !important;
           font-weight:bold !important;
           white-space: nowrap;
           border: 1px solid #CCCCCC !important;
           background-color: yellow;
        }
        td {
           font-weight:bold !important;
            /*text-align: center;*/
            /*padding: 2px;*/
            font-size: 10px !important;  
                  }

        .table td {
            padding: 2px !important;
            font-weight:bold !important;
            border:1px solid #CCCCCC !important;
        }
        .boldtable td{
            font-weight:bold !important;
            font-weight: bold !important;
            font-size: 12px !important;
            /*text-align: center !important;*/
        }

        .break-after {
            /*height: 100px !important;*/
            display: block;
            page-break-after: always;
            position: relative;
        }

        .break {
            /*display: block;*/
            page-break-after: always;
            /*height: 100px !important;*/
        }

        .break-before {
            display: block;
            page-break-before: always;
            /*height: 100px !important;*/
            position: relative;
        }
        /*.break*/
        html, body, .main, .tabs, .tabbed-content { float: none; }
        table.boldtabletr td{
            font-size:15px !important;
        }
		table.boldtable tr td{
			text-align:center;
		}
    </style>
    <script type="text/javascript">
    var tableToExcel = (function() {
          var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
          return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
          }
        })()
</script> 
</head>

<body style="background-color:white;">
<div id="wrap">
    <div class="row" id="xls_export">
        
        <div style="width:100%; margin:10px auto !important;">
            <div class="clearfix"></div>
            
                <div class="col-xs-12 pull-center" style="min-width:100%; min-height:3px; margin-top:-30px !important;">
                    <img style="max-width:350px !important; margin-left:40px !important; text-align:center !important;" src="<?php echo base_url();?>/assets/uploads/logos/<?= $biller->logo ?>">
                </div>
            <div class="col-xs-12 pull-right">
                     <table class='boldtable pull-right'>
                                <!-- <tr >
                                    <td style="font-size:18px !important;"><label style="font-weight:bold !important;"></label><br>
                                    
                                    </td>
                                </tr> -->
								
                                <tr>
                                    <td style="padding-bottom: 0px;" align="left"><?= $biller->address ?></td>
                                </tr>
                                <tr style="color: blue !important">
                                    <td style="padding-bottom: 0px;" align="left"><?= $biller->phone ?></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 0px;" align="left"><?= $biller->email ?></td>
                                </tr>
                                <!--tr>
                                   <td align="left"><i class="fa fa-user"></i></td>
                                    <td style="padding-bottom: 0px;" align="left"><?= ($this->db->where('id',$inv->created_by)->get('users')->row()->username) ?></td>
                                </tr-->
                              
                                
                            </table>
                </div>
            <div class="clearfix"></div>
          

            <div id="table-responsive">
            <div class="padding10">
                    <div class="col-xs-6 pull-right" style="margin-top: 0px !important; padding:5px;padding-right:0px;">
                    <p style="font-size: 16px;font-weight: bold; height: 5px;"></p>

                     <div class="well well-sm" style="margin-bottom:0px;">
                        <div class="col-xs-12 text-right" style="padding-left:0px; padding-right:0px;">
                        <table class='boldtable'>
                                <tr>
                                    <td  align="left">វិក្កយបត្រ​ </td>
                                    <td  width="10"></td>
                                    <td  align="left"><?= $inv->reference_no; ?> </td>
                                </tr>
                                <tr align="left">
                                    <td>ថ្ងៃទី​</td>
                                    <td width="10"></td>
                                    <td align="left"><?= $inv->date;?></td>
                                </tr>
                              
                               
                               <!--  <tr>
                                    <td colspan="3" rowspan="2" align="center" style="padding-bottom: 15px;">
                                                <?php $br = $this->sma->save_barcode($inv->reference_no, 'code39', 40, false); ?>
                                    <img src="<?= base_url() ?>assets/uploads/barcode<?= $this->session->userdata('user_id') ?>.png"
                                         alt="<?= $inv->reference_no ?>"/>
                                    <?php $this->sma->qrcode('link', urlencode(site_url('sales/view/' . $inv->id)), 2); ?>
                                    <img src="<?= base_url() ?>assets/uploads/qrcode<?= $this->session->userdata('user_id') ?>.png"
                                         alt="<?= $inv->reference_no ?>"/>
                                    </td>
                                </tr> -->
                                
                            </table>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    <div><br></div>
                    <div class="col-xs-6 pull-left" style="padding-top:5px !important;">
                        
                        <div class="well well-sm" style="margin-bottom:0px !important;">
                            <div class="col-xs-12 text-right"  style="padding-left:0px; padding-right:0px;">
                                <table class='boldtable'>
                                    <tr >
                                        <td align="left">លក់ជួន </td>
                                        <td width="10"></td>
                                        <td align="left"><?=  $customer->name; ?></td>
                                    </tr>
                                </table>
                            </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
                <table class="table table-hover table-striped" style="margin-top:10px;border-top:2px solid #ddd !important;">
                    <thead>
                    <tr>
                        <th><?= 'ល.រ';//lang("no"); ?></th>
                        <th style="width:180px;"><?= 'បរិយាយមុខទំនិញ';//lang("description"); ?></th>
                        <th><?= 'ចំនួន';//lang("quantity"); ?></th>
                       <!--  <th><?= 'ឯកតា';//lang("unit"); ?></th> -->
                        <th><?= 'ថ្លៃឯកតា';//lang("unit_price"); ?></th>
                        <th><?php echo 'បញ្ចុះតំលៃ' ?></th>
                        <th colspan="1"><?= 'តម្លៃសរុប';//lang("subtotal"); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $r = 1;
                        
                        $t_u=0;
                        $t_b=0;
                    foreach ($rows as $row):
                        $subtotal_usd = 0;
                        $subtotal_bth = 0;
                        if($r==21){
                            echo '<tr class="break"></tr>';
                            echo '<tr class="break-after"></tr>';
                            echo '<tr class="break-before"></tr>';
                        }


                        ?>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                            <td style="vertical-align:middle;">
                                <?= $row->product_name ?>
                            </td>
                            <td style="width: 50px; text-align:center; vertical-align:middle;"><?= $row->quantity;?></td>
                            <?php
                               
                                $price = 0;
                                $cur = '';
                                $subtotal_usd = $row->quantity * $row->unit_price;
                                $dis = $row->discount.$cur;
                                $ds = strpos($row->discount,'%');
                                if ($ds) {
                                    $dis = $row->discount;
                                }
                                // echo $row->quantity;
                            ?>
                            <?php if(($inv->total_tax_usd!=0 || $inv->total_tax_b!=0) && $biller->id==4) {?>
                                <td style="text-align:right; width:100px;"><?= $this->sma->formatMoney(($row->real_unit_price/1.1)).$cur; ?></td>
                            <?php }else{ ?>
                                <td style="text-align:right; width:100px;"><?= $this->sma->formatMoney($row->real_unit_price).$cur; ?></td>
                                <?php } ?>
                           <td style="text-align:center; width:100px;"><?php echo $dis!=0 ? $dis : ''; ?></td>
                            <?php if(($inv->total_tax_usd!=0 || $inv->total_tax_b!=0) && $biller->id==4) {

                            ?>
                            <?php }else{ ?>
                            <td style="text-align:right; width:120px;"><?= $this->sma->formatMoney($subtotal_usd);?></td>

                                <?php } ?>
                        </tr>
                        <?php
                        $r++;
                        if(($inv->total_tax_usd!=0 || $inv->total_tax_b!=0) && $biller->id==4) {
                            $t_u+=$subtotal_usd;
                            //$t_b+=$subtotal_bth;
                        }else{
                            $t_u+=$subtotal_usd;
                            //$t_b+=$subtotal_bth;
                        }

                    endforeach;
                    ?>
            <?php
                for($j=$r;$j<=12;$j++){
                    echo "<tr>
                        <td style='text-align:center !important'>$j</td>

                        <td></td>

                        <td></td>

                        <td></td>
						<td></td>

                        <td></td> </tr>";
                }
            ?>
                    
                    <?php
                        $col = 4;
                        if ($Settings->product_serial) {
                            $col++;
                        }
                        if ($Settings->product_discount && $inv->product_discount != 0) {
                            $col++;
                        }
                        if ($Settings->tax1) {
                            $col++;
                        }
                        if ($Settings->product_discount && $inv->product_discount != 0 && $Settings->tax1) {
                            $tcol = $col - 2;
                        } elseif ($Settings->product_discount && $inv->product_discount != 0) {
                            $tcol = $col - 1;
                        } elseif ($Settings->tax1) {
                            $tcol = $col - 1;
                        } else {
                            $tcol = $col;
                        }
                         $col=5;
                        ?>
                        <?php if ($inv->grand_total != $inv->total) { ?>
                            <tr>
                                
                                <td colspan="5"
                                    style="text-align:right; padding-right:10px;font-weight:bold;"><?= lang("ប្រាក់សរុប"); ?>
                                    
                                </td>
                             
                                <td style="text-align:right; padding-right:10px;"><?= $this->sma->formatMoney($inv->total); ?>($)</td>
                            </tr>
                        <?php } ?>
                           <!--  <tr>
                                <td colspan="5"  
                                 style="text-align:right; padding-right:10px;font-weight:bold;"><?= lang("បញ្ចុះតំលៃ"); ?>>
                                    
                                </td>
                                <td style="text-align:right; padding-right:10px;"><?= $this->sma->formatMoney($inv->product_discount); ?>($)</td>
                            </tr> -->
                        <?php if ($return_sale && $return_sale->surcharge != 0) {
                            echo '<tr><td colspan="' . $col . '" style="text-align:right; padding-right:10px;font-weight:bold;">' . lang("return_surcharge") . ' (' . $default_currency->code . ')</td><td style="text-align:right; padding-right:10px;">' . $this->sma->formatMoney($return_sale->surcharge) . '</td></tr>';
                        }
                        ?>
                        <!-- <?php 
                            if (condition) {
                                # code...
                            }
                         ?> -->
                        <?php if ($inv->order_discount != 0) {
                            if (strpos($inv->order_discount_id,"%")) {
                                $disc_percent= "($inv->order_discount_id)";
                            }else{
                                $disc_percent='';
                            }

                            echo '<tr><td colspan="' . $col . '" style="text-align:right; padding-right:10px;font-weight:bold;">' . lang("បញ្ចុះតំលៃ") .$disc_percent. '</td><td style="text-align:right; padding-right:10px;">' . $this->sma->formatMoney($inv->total_discount) . '($)</td></tr>';
                        }
                        ?>
                        <?php if ($Settings->tax2 && ($inv->total_tax_usd != 0 || $inv->total_tax_b!=0) && $biller->id==4){
                            echo '<tr><td colspan="' . $col . '" style="text-align:right; padding-right:10px;font-weight:bold;">' . lang("តំលៃអារក").'</td><td style="text-align:right; padding-right:10px;">' . $this->sma->formatMoney((($t_u/1.1)*0.1)) . '($)</td></tr>';
                        }
                        ?>
                        <?php if ($inv->shipping != 0) {
                            echo '<tr><td colspan="' . $col . '" style="text-align:right; padding-right:10px;;">' . lang("shipping") . ' (' . $default_currency->code . ')</td><td style="text-align:right; padding-right:10px;">' . $this->sma->formatMoney($inv->shipping) . '</td></tr>';
                        }
                        ?>
                        <tr>
                            <td colspan="3" rowspan="4">
                                <!-- <div style="width: 60%;float: left;font-weight: initial;">
                                ថ្ងៃទី <?phho date('d',strtotime($inv->date)) ?> ខែ <?php echo date('m',strtotime($inv->date)) ?> ឆ្នាំ <?php echo date('Y',strtotime($inv->date)) ?>
                                </div> -->
                                <div style="float:right;"><span>Exchange Rate:&nbsp;&nbsp;R</span><?= $inv->exchange_rate?></div>
                            </td>
                            <td>
                            <label class="pull-left">
                                <?php if($inv->total_tax_usd!=0 || $inv->total_tax_b!=0) {?>
                                    <?= lang("សរុបរួមអាករ"); ?>
                                <?php }else{ ?>
                                    <?= lang("ប្រាក់សរុប"); ?>
                                <?php } ?>
                                
                            </label>
                            </td>
                            <?php
                                $gu = $inv->total;
                                $paid=$inv->paid;
                               
                                $total_balance=$tot_cash->balance;
                                $grand_balance = $total_balance;
                                
                            ?>
                            
                            <td style="text-align:right; padding-right:10px; font-weight:bold;"><?= $this->sma->formatMoney($inv->grand_total); ?>($)</td>
                            <td style="text-align:right;font-weight:bold;">R <?= $this->sma->formatMoney($inv->grand_total*$inv->exchange_rate); ?></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="pull-left">
                                    <?= lang("ប្រាក់បង់"); ?>
                                </label>
                            </td>
                           
                            <td style="text-align:right; padding-right:10px; font-weight:bold;">$ <?= $paid_amount=$this->sma->formatMoney($payments[0]->pos_paid == 0 ? $payments[0]->amount : $payments[0]->pos_paid) . ($payments[0]->return_id ? ' (' . lang('returned') . ')' : '') ; ?>($)</td>
                            <td style="text-align:right;font-weight:bold;">R <?= $this->sma->formatMoney($paid_amount*$inv->exchange_rate); ?></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="pull-left">
                                    <?= lang("ប្រាក់អាប់"); ?>
                                </label>
                            </td>
                           <!-- <?= $remail=$paid_amount-$inv->grand_total?> -->
                            <td style="text-align:right; padding-right:10px; font-weight:bold;"><?= $this->sma->formatMoney($paid_amount-$inv->grand_total); ?>($)</td>
                            <td style="text-align:right;font-weight:bold;">R<?= $this->sma->formatMoney($remail*$inv->exchange_rate); ?></td>
                        </tr>

                    </tbody>
                </table>
              
           
            <div class="col-md-12 text-center">
                <label style="font-size:15px !important;">សូមអគុណ ! សូមអញ្ជើញមកពិសាម្តងទៀត</label>
            </div>
        </div>
    </div>
    <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">
        <hr>
        <?php if ($message) { ?>
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <?= is_array($message) ? print_r($message, true) : $message; ?>
        </div>
    <?php } ?>

        <?php if ($pos_settings->java_applet) { ?>
            <span class="col-xs-12"><a class="btn btn-block btn-primary" onClick="printReceipt()"><?= lang("print"); ?></a></span>
            <span class="col-xs-12"><a class="btn btn-block btn-info" type="button" onClick="openCashDrawer()">Open Cash
                    Drawer</a></span>
            <div style="clear:both;"></div>
        <?php } else { ?>
            <span class="pull-right col-xs-12">
            <a href="javascript:window.print()" id="web_print" class="btn btn-block btn-primary"
               onClick="window.print();return false;"><?= lang("web_print"); ?></a>
        </span>
        <span class="pull-right col-xs-12 hide">
            <a href="javascript:void(0)" id="web_print" class="btn btn-block btn-primary export_inv"
              ><?= lang("Export"); ?></a>
        </span>
        <?php } ?>
        <span class="pull-left col-xs-12"><a class="btn btn-block btn-success" href="#" id="email"><?= lang("email"); ?></a></span>

        <span class="col-xs-12">
            <a class="btn btn-block btn-warning" id="back_to_sale" href="<?php echo site_url('pos/') ?>">Back To Sale</a>
        </span>
        <?php if (!$pos_settings->java_applet) { ?>
            <div style="clear:both;"></div>
            <div class="col-xs-12" style="background:#F5F5F5; padding:10px;">
                <p style="font-weight:bold;">Please don't forget to disble the header and footer in browser print
                    settings.</p>

                <p style="text-transform: capitalize;"><strong>FF:</strong> File &gt; Print Setup &gt; Margin &amp;
                    Header/Footer Make all --blank--</p>

                <p style="text-transform: capitalize;"><strong>chrome:</strong> Menu &gt; Print &gt; Disable Header/Footer
                    in Option &amp; Set Margins to None</p></div>
        <?php } ?>
        <div style="clear:both;"></div>

    </div>
    <script type="text/javascript" src="<?= $assets ?>pos/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".export_inv").on("click", function(e){
                    //  var export_data = $("#table-responsive").html();
                    // export_data +='<style type="text/css">'+
                    //                 'td,th,h5,h6,h2,h3,p,h1,div,span,label{'+
                    //                     'font-family: Cambria;'+
                    //                 '}'+
                    //                 'th{'+
                    //                     'font-size: 11px;'+
                    //                     'font-weight: bold;'+
                    //                 '}'+
                    //                 'td{'+
                    //                     'font-size: 11px;'+
                    //                 '}'+
                    //             '</style>';
                    //     window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
                    //     e.preventDefault();
                     tableToExcel('xls_export', 'test.xls')
            });
        })
        // var tableToExcel = (function() {
        //   var uri = 'data:application/vnd.ms-excel;base64,'
        //     , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
        //     , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
        //     , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
        //   return function(table, name) {
        //     if (!table.nodeType) table = document.getElementById(table)
        //     var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
        //     window.location.href = uri + base64(format(template, ctx))
        //   }
        // })()
        $(window).load(function () {
            window.print();
            $('#back_to_sale').click(function (e) {
                // bootbox.confirm(lang.r_u_sure, function (result) {
                    // if (result) {
                        if (localStorage.getItem('slitems')) {
                            localStorage.removeItem('slitems');
                        }
                        if (localStorage.getItem('sldiscount')) {
                            localStorage.removeItem('sldiscount');
                        }
                        if (localStorage.getItem('sltax2')) {
                            localStorage.removeItem('sltax2');
                        }
                        if (localStorage.getItem('slshipping')) {
                            localStorage.removeItem('slshipping');
                        }
                        if (localStorage.getItem('slref')) {
                            localStorage.removeItem('slref');
                        }
                        if (localStorage.getItem('slwarehouse')) {
                            localStorage.removeItem('slwarehouse');
                        }
                        if (localStorage.getItem('slnote')) {
                            localStorage.removeItem('slnote');
                        }
                        if (localStorage.getItem('slinnote')) {
                            localStorage.removeItem('slinnote');
                        }
                        if (localStorage.getItem('slcustomer')) {
                            localStorage.removeItem('slcustomer');
                        }
                        if (localStorage.getItem('slcurrency')) {
                            localStorage.removeItem('slcurrency');
                        }
                        if (localStorage.getItem('sldate')) {
                            localStorage.removeItem('sldate');
                        }
                        if (localStorage.getItem('slstatus')) {
                            localStorage.removeItem('slstatus');
                        }
                        if (localStorage.getItem('slbiller')) {
                            localStorage.removeItem('slbiller');
                        }
                        if (localStorage.getItem('gift_card_no')) {
                            localStorage.removeItem('gift_card_no');
                        }
                        location.href="<?= site_url('welcome'); ?>";
                        // $('#modal-loading').show();
                        // location.reload();
                    // }
                });
        });
    </script>
</div>
</body>
</html>