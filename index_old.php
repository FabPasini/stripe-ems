<?php
// Use HTTP Strict Transport Security to force client to use secure connections only
$use_hsts = true;

// iis sets HTTPS to 'off' for non-SSL requests
if ($use_hsts && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
} elseif ($use_hsts) {
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], true, 301);
    // we are in cleartext at the moment, prevent further execution and output
    die();
}
?>
<!DOCTYPE html>
<html lang="en-US" itemscope itemtype="http://schema.org/WebPage">
<head>
	<script type="text/javascript">var DOCS_timing={}; DOCS_timing['sl']=new Date().getTime();
	</script>
	<script>function _DumpException(e) {throw e;}
	</script>
	<script>_docs_flag_initialData={"docs-sup":"","docs-esb":false,"docs-ecci":false,"docs-eea":false,"docs-esi":false,"ilcm":{"eui":"AHKXmL39jPK3OhOa22CoPogHAyaxcjAbnA_vSsfFs4qD5UbpYsC77FacyYilqJmNW_J9dnYccusY","je":1,"sstu":1557699091506000,"si":"CJPLkKiBl-ICFQWTNwody4kP_Q","gsc":null,"ei":[14100858,14100894,14100730,5703841,14100810,14100874,14101014,14100982,14100646,14100043,14100770,14100246,14100934,14100854,14100898,14100031,14100892,14100170,14100064,14100538,14100558,14100278,14100049],"crc":0,"cvi":[]},"docs-ccdil":false,"docs-eil":true,"docs-eoi":false,"info_params":{},"docs-spfe":true,"docs-jern":"view"}; _docs_flag_cek= null ;
	</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<link rel="icon" href="https://lh3.googleusercontent.com/kmea9KsuszxyKZEN2tEnnt41kvlQl-CQ3jAyPwQi3l8Q2dj2xhDkFjWxNAM2gNfvKxWf-sYb_MJTnJE2-S4iCrXC1cOHbEQS"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Dona o Diventa Socio - EMS - Energia e Mobilita Sostenibile"/>
	<meta itemprop="url" property="og:url" content="https://pay.energiaemobilitasostenibile.org/"/>
	<meta itemprop="thumbnailUrl" content="https://ssl.gstatic.com/atari/images/atari-logo.svg"/>
	<meta itemprop="image" content="https://ssl.gstatic.com/atari/images/atari-logo.svg"/>
	<meta name="KEYWORDS" content="socio, member, association, associazione studentesca, ems, mobilita sostenibile, energia rinnovabile, auto elettriche, pompe di calore, pannelli solari, pannelli fotovoltaici, dona ems, diventa socio ems">
	<meta name="DESCRIPTION" content="Supporta studenti appassionati di auto elettriche ed energie rinnovabili, o diventa socio e partecipa al cambiamento!">
	<link href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CBitter%3A400%2C700" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Google+Sans:400,500|Roboto:300,400,500,700|Source+Code+Pro:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.gstatic.com/_/atari/_/ss/k=atari.vw.rNvoK1_kqE8.L.W.O/d=1/rs=AGEqA5kZbeSgRMKE8UmL2UJ_QhKO_Y1JLA"/>
	<title itemprop="name">Dona o Diventa Socio - EMS - Energia e Mobilita Sostenibile
		</title>
		<style jsname="ptDGoc">.ImnMyf{background-color: rgba(255,255,255,1); color: rgba(33,33,33,1);}.Vs12Bd{background-color: rgba(240,240,240,1); color: rgba(33,33,33,1);}.S5d9Rd{background-color: rgba(58,58,58,1); color: rgba(255,255,255,1);}.O13XJf{height: 340px;}.O13XJf .IFuOkc{background-image: url(https://ssl.gstatic.com/atari/images/vision-header.jpg);}.O13XJf .IFuOkc:before{background-color: rgba(31,31,31,1); opacity: 0.5; display: block;}.O13XJf .zfr3Q{color: rgba(255,255,255,1);}.O13XJf .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter;}@media only screen and (max-width: 479px){.O13XJf{height: 250px;}}.SBrW1{height: 430px; padding-bottom: 120px; padding-top: 120px;}@media only screen and (min-width: 1280px){.yMcSQd .SBrW1{padding-bottom: 120px; padding-top: 176px;}}@media only screen and (min-width: 768px) and (max-width: 1279px){.Ly6Unf .SBrW1{padding-bottom: 120px; padding-top: 176px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .SBrW1{padding-bottom: 120px; padding-top: 176px;}}@media only screen and (max-width: 479px){.Ly6Unf .SBrW1{padding-bottom: 120px; padding-top: 176px;}}.WVklg{height: 100vh;}.Wew9ke{fill: rgba(255,255,255,1);}.ZXW7w{color: rgba(255,255,255,1); opacity: 0.26;}.fOU46b .TlfmSc{color: rgba(255,255,255,1);}.fOU46b .KJll8d{background-color: rgba(255,255,255,1);}.fOU46b .Mz8gvb{color: rgba(255,255,255,1);}.fOU46b .iWs3gf{color: rgba(255,255,255,1);}.fOU46b .G8QRnc .iWs3gf{color: rgba(255,255,255,1);}.fOU46b .aCIEDd .iWs3gf{color: rgba(255,255,255,1);}@media only screen and (min-width: 1280px){.b2Iqye.fOU46b .G8QRnc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 1280px){.b2Iqye.fOU46b .aCIEDd .iWs3gf{color: rgba(0,0,0,1);}}@media only screen and (min-width: 1280px){.XeSM4.b2Iqye.fOU46b .LBrwzc .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.KuNac.b2Iqye.fOU46b .GBy4H .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 1280px){.fOU46b .XeSM4 .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.fOU46b .KuNac .iWs3gf{color: rgba(33,33,33,1);}}.fOU46b .YTv4We{color: rgba(255,255,255,1);}.fOU46b .YTv4We.chg4Jd:focus:before{border-color: rgba(255,255,255,1); display: block;}.fOU46b .zDUgLc{opacity: 1;}.fOU46b .LBrwzc .zDUgLc{border-bottom-style: none;}.iWs3gf{color: rgba(255,255,255,1);}.wgxiMe{background-color: rgba(39,120,72,1);}.JzO0Vc{background-color: rgba(39,120,72,1);}.M63kCb{background-color: rgba(255,255,255,1);}.zfr3Q{font-family: Bitter; color: rgba(33,33,33,1); font-size: 15px; line-height: 1.6; padding-top: 15px;}.dhtgD{text-decoration: underline;}.dhtgD:hover{opacity: 0.7;}.dhtgD:active{opacity: 0.7;}.yaqOZd .duRjpb:first-child{padding-top: 13px;}.yaqOZd .duRjpb:last-child{padding-bottom: 13px;}.duRjpb{font-family: Montserrat; font-size: 45px; line-height: 1.2; font-weight: 700; color: rgba(39,120,72,1); padding-top: 30px; padding-top: 13px; padding-bottom: 13px; border-bottom-color: rgba(240,240,240,1); border-top-color: rgba(240,240,240,1); border-bottom-style: solid; border-top-style: solid; border-bottom-width: 5px; border-top-width: 5px;}.JYVBee{font-family: Bitter; font-size: 28px; line-height: 1.25; font-weight: 700; padding-top: 25px; color: rgba(33,33,33,1);}.OmQG5e{font-family: Bitter; font-size: 20px; line-height: 1.25; padding-top: 20px; font-weight: 700; color: rgba(39,120,72,1);}.duRjpb .OUGEr{color: rgba(39,120,72,1);}.JYVBee .OUGEr{color: rgba(33,33,33,1);}.OmQG5e .OUGEr{color: rgba(39,120,72,1);}.TMjjoe{font-family: Montserrat; font-size: 12px; line-height: 1.2; padding-top: 0px;}.n8H08c{padding-left: 20px; padding-top: 8px;}.TYR86d{padding-top: 0px; margin-top: 6px; margin-bottom: 6px;}.Zjiec{font-family: Montserrat; font-weight: 400; font-size: 26px; color: rgba(255,255,255,1); line-height: 1.75; margin-top: 48px; margin-left: 48px; margin-bottom: 62px; margin-right: 32px;}.XMyrgf{margin-top: 48px; margin-left: 48px; margin-bottom: 0px; margin-right: 32px;}.PsKE7e{font-family: Bitter; font-weight: 400; font-size: 16px; color: rgba(255,255,255,1);}.IKA38e{border-left-width: 8px; border-left-style: solid; border-left-color: transparent;}.lhZOrc{color: 0.6; border-left-color: rgba(255,255,255,1); font-weight: 700;}.rysYnb .mohMlc{padding-left: 24px;}.Mz8gvb{color: rgba(255,255,255,1);}.LBrwzc .PsKE7e{color: rgba(33,33,33,1);}.LBrwzc .eBSUbc{color: rgba(33,33,33,1);}.LBrwzc .TlfmSc{color: rgba(33,33,33,1);}.LBrwzc .KJll8d{background-color: rgba(33,33,33,1);}.LBrwzc .ZXW7w{color: rgba(0,0,0,1); opacity: 0.26;}.LBrwzc .Hnbbrb{color: rgba(33,33,33,1);}.LBrwzc .YTv4We{color: rgba(33,33,33,1);}.LBrwzc .YTv4We.chg4Jd:focus:before{border-color: rgba(33,33,33,1); display: block;}.LBrwzc .Mz8gvb{color: rgba(33,33,33,1);}.LBrwzc .iWs3gf{color: rgba(33,33,33,1);}.LBrwzc .wgxiMe{background-color: rgba(255,255,255,1);}.LBrwzc .lhZOrc{border-left-color: rgba(39,120,72,1);}.LBrwzc .qV4dIc{color: rgba(33,33,33,1);}.LBrwzc .M9vuGd{color: rgba(33,33,33,1); border-bottom-color: rgba(39,120,72,1);}.LBrwzc .Mz8gvb{color: rgba(33,33,33,1);}.LBrwzc .Zjiec{color: rgba(33,33,33,1);}.LBrwzc .zDUgLc{border-bottom-color: rgba(204,204,204,1); border-bottom-width: 1px; border-bottom-style: solid;}.GBy4H .PsKE7e{color: rgba(255,255,255,1);}.GBy4H .eBSUbc{color: rgba(255,255,255,1);}.GBy4H .TlfmSc{color: rgba(255,255,255,1);}.GBy4H .ZXW7w{color: rgba(255,255,255,1); opacity: 0.26;}.GBy4H .Hnbbrb{color: rgba(255,255,255,1);}.GBy4H .YTv4We{color: rgba(255,255,255,1);}.GBy4H .Mz8gvb{color: rgba(255,255,255,1);}.GBy4H .iWs3gf{color: rgba(255,255,255,1);}.GBy4H .wgxiMe{background-color: rgba(0,0,0,1);}.GBy4H .qV4dIc{color: rgba(255,255,255,1);}.GBy4H .M9vuGd{color: rgba(255,255,255,1); border-bottom-color: rgba(255,255,255,1);}.GBy4H .Mz8gvb{color: rgba(255,255,255,1);}.GBy4H .Zjiec{color: rgba(255,255,255,1);}.Hnbbrb{color: rgba(255,255,255,1); font-size: 18px; margin-bottom: 32px; font-weight: 400;}.TlfmSc{font-family: Montserrat; font-weight: 400; font-size: 20px; color: rgba(255,255,255,1); line-height: 1.33;}.jgXgSe{font-family: Bitter; font-weight: 400; font-size: 16px; color: rgba(255,255,255,1); line-height: 28px;}.u5fiyc{line-height: 28px;}.IKA38e{padding-left: 28px; margin-top: 20px;}.hDrhEe{font-family: Bitter; font-weight: 400;}.iwQgFb{height: 2px; margin-top: 8px; background-color: rgba(0,0,0,0.150000006);}.ySLm4c{font-family: Bitter;}.QmpIrf{background-color: rgba(39,120,72,1); border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: Bitter;}.qeLZfd .yaqOZd{background-color: rgba(240,240,240,1);}.qeLZfd .iwQgFb{background-color: rgba(39,120,72,1);}.qeLZfd .zfr3Q{color: rgba(33,33,33,1);}.qeLZfd .duRjpb{border-bottom-color: rgba(255,255,255,1); border-top-color: rgba(255,255,255,1); color: rgba(39,120,72,1);}.qeLZfd .JYVBee{color: rgba(33,33,33,1);}.qeLZfd .OmQG5e{color: rgba(39,120,72,1);}.qeLZfd .duRjpb .OUGEr{color: rgba(39,120,72,1);}.qeLZfd .JYVBee .OUGEr{color: rgba(33,33,33,1);}.qeLZfd .OmQG5e .OUGEr{color: rgba(39,120,72,1);}.lQAHbd .yaqOZd{background-color: rgba(58,58,58,1);}.lQAHbd .iwQgFb{background-color: rgba(39,120,72,1);}.lQAHbd .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter;}.lQAHbd .zfr3Q{color: rgba(255,255,255,1);}.lQAHbd .duRjpb{color: rgba(255,255,255,1); border-top-color: rgba(48,48,48,1); border-bottom-color: rgba(48,48,48,1);}.lQAHbd .JYVBee{color: rgba(255,255,255,1);}.lQAHbd .OmQG5e{color: rgba(255,255,255,1);}.lQAHbd .OUGEr{color: rgba(255,255,255,1);}.LB7kq{padding-bottom: 56px; padding-top: 56px;}@media only screen and (max-width: 479px){.LB7kq{padding-bottom: 28px; padding-top: 28px;}}@media only screen and (min-width: 1280px){.yMcSQd .LB7kq{padding-bottom: 56px; padding-top: 112px;}}@media only screen and (min-width: 1280px){.yMcSQd .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.yMcSQd .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 1280px){.yMcSQd .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.KuNac.yMcSQd .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 768px) and (max-width: 1279px){.Ly6Unf .LB7kq{padding-bottom: 56px; padding-top: 112px;}}@media only screen and (min-width: 768px) and (max-width: 1279px){.Ly6Unf .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 768px) and (max-width: 1279px){.Ly6Unf .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 768px) and (max-width: 1279px){.Ly6Unf .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .LB7kq{padding-bottom: 56px; padding-top: 112px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (max-width: 479px){.Ly6Unf .LB7kq{padding-bottom: 28px; padding-top: 84px;}}@media only screen and (max-width: 479px){.Ly6Unf .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (max-width: 479px){.Ly6Unf .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (max-width: 479px){.Ly6Unf .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .gk8rDe{padding-top: 84px; padding-bottom: 28px;}}@media only screen and (max-width: 479px){.Ly6Unf .gk8rDe{padding-top: 56px; padding-bottom: 0px;}}.LB7kq .duRjpb{font-size: 78px; line-height: 1.06; font-weight: 700; padding-top: 35px; width: auto; border-bottom-style: none; border-top-style: none;}@media only screen and (max-width: 479px){.LB7kq .duRjpb{font-size: 50px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.LB7kq .duRjpb{font-size: 65px;}}.cJgDec .zfr3Q{color: rgba(255,255,255,1); border-bottom-color: rgba(255,255,255,1); border-top-color: rgba(255,255,255,1);}.cJgDec .zfr3Q .OUGEr{color: rgba(255,255,255,1);}.cJgDec .IFuOkc:before{background-color: rgba(33,33,33,1); opacity: 0.5; display: block;}.cJgDec .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter;}.tpmmCb .zfr3Q{color: rgba(15,15,15,1); border-bottom-color: rgba(15,15,15,1); border-top-color: rgba(15,15,15,1);}.tpmmCb .zfr3Q .OUGEr{color: rgba(15,15,15,1);}.tpmmCb .IFuOkc:before{background-color: rgba(255,255,255,1); display: block;}.tpmmCb .Wew9ke{fill: rgba(15,15,15,1);}.tpmmCb .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter;}.gk8rDe .duRjpb{font-size: 54px;}.gk8rDe .QmpIrf{background-color: rgba(39,120,72,1); border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: Bitter;}@media only screen and (max-width: 479px){.gk8rDe .duRjpb{font-size: 36px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe .duRjpb{font-size: 46px;}}.zDUgLc{background-color: rgba(39,120,72,1); opacity: 1;}.qV4dIc{border-bottom-color: rgba(255,255,255,0); border-bottom-style: solid; border-bottom-width: 8px; padding-top: 14px; padding-bottom: 6px; padding-left: 2px; padding-right: 2px; margin-left: 10px; margin-right: 10px;}.M9vuGd{border-bottom-color: rgba(255,255,255,1);}.eWDljc{background-color: rgba(39,120,72,1); padding-bottom: 28px;}.PsKE7e:hover{opacity: 0.6;}.eBSUbc{color: rgba(255,255,255,1); background-color: rgba(39,120,72,1);}.BFDQOb:hover{opacity: 0.6;}.QcmuFb{padding-left: 20px;}.vDPrib{padding-left: 40px;}.TBDXjd{padding-left: 60px;}.bYeK8e{padding-left: 80px;}.CuqSDe{padding-left: 100px;}.Havqpe{padding-left: 120px;}.JvDrRe{padding-left: 140px;}.o5lrIf{padding-left: 160px;}.yOJW7c{padding-left: 180px;}.rB8cye{padding-left: 200px;}.RuayVd{padding-right: 20px;}.YzcKX{padding-right: 40px;}.reTV0b{padding-right: 60px;}.vSYeUc{padding-right: 80px;}.PxtZIe{padding-right: 100px;}.ahQMed{padding-right: 120px;}.rzhcXb{padding-right: 140px;}.PBhj0b{padding-right: 160px;}.TlN46c{padding-right: 180px;}.GEdNnc{padding-right: 200px;}.TYR86d>.n8H08c{margin-top: 6px;}@media only screen and (max-width: 479px){.duRjpb{font-size: 32px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.duRjpb{font-size: 39px;}}@media only screen and (max-width: 479px){.JYVBee{font-size: 22px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.JYVBee{font-size: 25px;}}@media only screen and (max-width: 479px){.OmQG5e{font-size: 18px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.OmQG5e{font-size: 19px;}}@media only screen and (max-width: 479px){.TMjjoe{font-size: 12px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TMjjoe{font-size: 12px;}}@media only screen and (max-width: 479px){.Zjiec{font-size: 21px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Zjiec{font-size: 24px;}}@media only screen and (max-width: 479px){.PsKE7e{font-size: 16px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.PsKE7e{font-size: 16px;}}@media only screen and (max-width: 479px){.Hnbbrb{font-size: 17px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Hnbbrb{font-size: 17px;}}@media only screen and (max-width: 479px){.TlfmSc{font-size: 18px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TlfmSc{font-size: 19px;}}@media only screen and (max-width: 479px){.jgXgSe{font-size: 16px;}}@media only screen and (min-width: 480px) and (max-width: 767px){.jgXgSe{font-size: 16px;}}section[id="h.p_4mgEs87nabww"] .IFuOkc:before{opacity: 0.5;}
			textarea,
			input.text,
			input[type="text"],
			input[type="button"],
			input[type="submit"],
			.input-checkbox {
			-webkit-appearance: none;
			border-radius: 0;
}
		</style>
		<script type="text/javascript">_at_config = [null,null,"897606708560-a63d8ia0t9dhtpdt4i3djab2m42see7o.apps.googleusercontent.com",null,null,"v2",null,null,null,null,null,null,null,"https://content.googleapis.com","SITES_%s",null,null,null,0,null,0,null,null,"https://accounts.google.com/ServiceLogin?passive\u003d1209600\u0026continue\u003dhttps://sites.google.com/energiaemobilitasostenibile.org/www/diventa-socio\u0026followup\u003dhttps://sites.google.com/energiaemobilitasostenibile.org/www/diventa-socio",["AHKXmL39jPK3OhOa22CoPogHAyaxcjAbnA_vSsfFs4qD5UbpYsC77FacyYilqJmNW_J9dnYccusY",1,"CJPLkKiBl-ICFQWTNwody4kP_Q",1557699091506000,[14100858,14100894,14100730,5703841,14100810,14100874,14101014,14100982,14100646,14100043,14100770,14100246,14100934,14100854,14100898,14100031,14100892,14100170,14100064,14100538,14100558,14100278,14100049]
]
,null,null,null,null,0,null,null,null,null,null,"atari_2019.18-Tue-0400_RC00",null,null,null,"https://drive.google.com",null,null,null,null,null,null,1,1,null,0,1,null,null,null,null,null,null,null,null,null,null,null,null,1,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,"v2internal","https://docs.google.com",null,null,null,null,null,null,"https://sites.google.com/new/",null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,1,"",null,null,"/_/sharing/share",null,null,null,null,null,null,null,null,null,5,null,null,"https://accounts.google.com/o/oauth2/auth","https://accounts.google.com/o/oauth2/postmessageRelay",1,null,null,null,78,"https://sites.google.com/new/?usp\u003dviewer_footer",1,null,null,null,0,null,null,null,null,"Chrome",74,null,null,null,null,null,[]
,null,null,null,null,null,null,null,null,null,0,null,1,null,null,null,null,null,0,null,null,null,null,null,null,0,null,null,null,null,0,null,null,null,null,null,null,"https://www.gstatic.com/atari/embeds/9057752e66777b61f2bc467178e07ddd/intermediate-frame-minified.html",1,null,"v2beta",null,null,null,null,null,null,4,"https://accounts.google.com/o/oauth2/iframe",null,null,null,null,null,null,"https://1157597584-atari-embeds.googleusercontent.com/embeds/065883df11f1dd87f25eeed983994478/inner-frame-minified.html",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,1557699091507,null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,"245920766",null,0,null,1000,null,null,null,null,null,null,null,0,null,1,null,1,null,"https://ssl.gstatic.com/docs/common/cleardot.gif",null,null,0,null,null,null,0,null,null,0,null,null,0,0,0,1,0,0,0,0,null,0,0,0,0,0]
; window.globals = {"enableAnalytics":true,"webPropertyId":"UA-133305011-1","showDebug":false,"hashedSiteId":"4417b13a768e200cba2a671f684184d78c20b5738b29fea67a0eb5b42da54b21","normalizedPath":"energiaemobilitasostenibile.org/www/diventa-socio","pageTitle":"Diventa Socio"}; function gapiLoaded() {if (globals.gapiLoaded == undefined) {globals.gapiLoaded = true;} else {globals.gapiLoaded();}}window.messages = []; window.addEventListener && window.addEventListener('message', function(e) {if (window.messages && e.data && e.data.magic == 'SHIC') {window.messages.push(e);}});
</script>
<script src="https://apis.google.com/js/client.js?onload=gapiLoaded">
</script>
<script type="text/javascript">document.createElement('content');(function(){var b=function(){this.c=""};b.prototype.toString=function(){return"SafeScript{"+this.c+"}"};b.prototype.a=function(a){this.c=a};(new b).a("");var c=function(){this.g=""};c.prototype.toString=function(){return"SafeStyle{"+this.g+"}"};c.prototype.a=function(a){this.g=a};(new c).a("");var d=function(){this.f=""};d.prototype.toString=function(){return"SafeStyleSheet{"+this.f+"}"};d.prototype.a=function(a){this.f=a};(new d).a("");var e=function(){this.b=""};e.prototype.toString=function(){return"SafeHtml{"+this.b+"}"};e.prototype.a=function(a){this.b=a};(new e).a("<!DOCTYPE html>");(new e).a("");(new e).a("<br>");/*
 Copyright (c) Microsoft Corporation. All rights reserved.
 Licensed under the Apache License, Version 2.0 (the "License"); you may not use
 this file except in compliance with the License. You may obtain a copy of the
 License at http://www.apache.org/licenses/LICENSE-2.0

 THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
 WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
 MERCHANTABLITY OR NON-INFRINGEMENT.

 See the Apache Version 2.0 License for specific language governing permissions
 and limitations under the License.
 */
}).call(this);
</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;a.setAttribute('nonce',m.nonce||m.getAttribute('nonce'));m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-133305011-1', 'auto'); ga('send', 'pageview');
</script>
</head>
<body dir="ltr" itemscope itemtype="http://schema.org/WebPage" id="yDmH0d" css="yDmH0d">
	<div jscontroller="Hx9eX" jsmodel="IJW3u" jsaction="rcuQ6b:WYd;GvneHb:og1FDd;Eh702:uAM5ec;JEsNGe:dj7Cne;">
		<div jscontroller="BJWyPe" jsaction="rcuQ6b:WYd;l6SCDc:Pg9eo;CtzCwf:mHeCvf;nRwK4c:FFYy5e;J3QHMe:HI1Mdd;">
			<div jscontroller="Op4wY" data-sitename="www" data-domain="energiaemobilitasostenibile.org" data-universe="1" jsmodel="QZt7fd" jsaction="aClwfc:cZFEp;NdKkrb:VsGN3;uGd7cb:UADL7b;mAY7if:HI9w0;KUFDvc:Y8aXB;oVnJLd:xDkBfb;JIbuQc:SPXMTb(uxAMZ);" jsname="G0jgYd">
				<div jsname="gYwusb" class="Bhgyqc">
				</div>
				<div jscontroller="Ebbogc" jsname="XeeWQc" role="banner" jsaction="keydown:uiKYid(OH0EC);rcuQ6b:WYd;mAY7if:ufqpf;JIbuQc:XfTnxb(lfEfFf),AlTiYc(GeGHKb),AlTiYc(m1xNUe),zZlNMe(pZn8Oc);YqO5N:ELcyfe;">
					<div jsname="bF1uUb" class="BuY5Fd" jsaction="click:xVuwSc;">
					</div>
					<div jsname="MVsrn" class="TbNlJb ">
						<div role="button" class="U26fgb mUbCce fKz7Od h3nfre" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="GeGHKb" aria-label="Back to site" aria-disabled="false" tabindex="0" data-tooltip="Back to site"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
							<div class="VTBa7b MbhUzd" jsname="ksKsZd">
							</div>
							<content jsslot class="xjKiLb">
								<span class="Ce1Y1c" style="top: -12px">
									<svg class="V4YR2c" viewBox="0 0 24 24" focusable="false">
										<path d="M0 0h24v24H0z" fill="none"/>
										<path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
									</svg>
								</span>
							</content>
						</div>
						<div class="rFrNMe b7AJhc zKHdkd" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow jsname="OH0EC" aria-expanded="true">
							<div class="aCsJod oJeWuf">
								<div class="aXBtI I0VJ4d Wic03c">
									<content jsslot class="A37UZe qgcB3c iHd5yb">
										<div role="button" class="U26fgb mUbCce fKz7Od i3PoXe" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="lfEfFf" aria-label="Search" aria-disabled="false" tabindex="0" data-tooltip="Search"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
											<div class="VTBa7b MbhUzd" jsname="ksKsZd">
											</div>
											<content jsslot class="xjKiLb">
												<span class="Ce1Y1c" style="top: -12px">
													<svg class="HSFYNb" viewBox="0 0 24 24" focusable="false">
														<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
														<path d="M0 0h24v24H0z" fill="none"/>
													</svg>
												</span>
											</content>
										</div>
										<div class="EmVfjc SKShhf" data-loadingmessage="Loading..." jscontroller="qAKInc" jsaction="animationend:kWijWc;dyRcpb:dyRcpb" jsname="aZ2wEe">
											<div class="Cg7hO" aria-live="assertive" jsname="vyyg5">
											</div>
											<div jsname="Hxlbvc" class="xu46lf">
												<div class="ir3uv uWlRce co39ub">
													<div class="xq3j6 ERcjC">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="HBnAAc">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="xq3j6 dj3yTd">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
												</div>
												<div class="ir3uv GFoASc Cn087">
													<div class="xq3j6 ERcjC">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="HBnAAc">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="xq3j6 dj3yTd">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
												</div>
												<div class="ir3uv WpeOqd hfsr6b">
													<div class="xq3j6 ERcjC">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="HBnAAc">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="xq3j6 dj3yTd">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
												</div>
												<div class="ir3uv rHV3jf EjXFBf">
													<div class="xq3j6 ERcjC">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="HBnAAc">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
													<div class="xq3j6 dj3yTd">
														<div class="X6jHbb GOJTSe">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="button" class="U26fgb mUbCce fKz7Od JyJRXe" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="m1xNUe" aria-label="Back to site" aria-disabled="false" tabindex="0" data-tooltip="Back to site"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
											<div class="VTBa7b MbhUzd" jsname="ksKsZd">
												
											</div>
											<content jsslot class="xjKiLb">
												<span class="Ce1Y1c" style="top: -12px">
													<svg class="V4YR2c" viewBox="0 0 24 24" focusable="false">
														<path d="M0 0h24v24H0z" fill="none"/>
														<path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
													</svg>
												</span>
											</content>
										</div>
									</content>
									<div class="Xb9hP">
										<input type="search" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Search this site" value="" autofocus role="combobox"  data-initial-value=""/>
										<div jsname="LwH6nd" class="ndJi5d snByac" aria-hidden="true">Search this site
										</div>
									</div>
									<content jsslot class="A37UZe sxyYjd MQL3Ob">
										<div role="button" class="U26fgb mUbCce fKz7Od Kk06A" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="pZn8Oc" aria-label="Clear search" aria-disabled="false" tabindex="0" data-tooltip="Clear search"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
											<div class="VTBa7b MbhUzd" jsname="ksKsZd">
												
											</div>
											<content jsslot class="xjKiLb">
												<span class="Ce1Y1c" style="top: -12px">
													<svg class="fAUEUd" viewBox="0 0 24 24" focusable="false">
														<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
															
														</path>
														<path d="M0 0h24v24H0z" fill="none">
															
														</path>
													</svg>
												</span>
											</content>
										</div>
									</content>
									<div class="i9lrp mIZh1c">
										
									</div>
									<div jsname="XmnwAc" class="OabDMe cXrdqd">
										
									</div>
								</div>
							</div>
							<div class="LXRPh">
								<div jsname="ty6ygf" class="ovnfwe Is7Fhb">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div jsname="tiN4bf">
				<div class="M63kCb">
					
				</div>
				<div class="fktJzd AKpWA vS6Uxe fOU46b G9Qloe XeSM4" jsname="UzWXSb" jscontroller="XgXj8d" jsaction="SgWCLc: Ffcznf;rcuQ6b:WYd;">
					<header id="atIdViewHeader">
						<div class="BbxBP LBrwzc K5Zlne" jscontroller="TD9gz" jsaction="rcuQ6b:JdcaS;oVnJLd:JdcaS;xn5xWc:ywL4Jf;jNQQzc:ywL4Jf; keydown:Hq2uPe; wheel:Ut4Ahc;" data-top-navigation="true">
							<div class="DXsoRd YTv4We" style="background-color:rgb(255, 255, 255);" role="button" tabindex="0" jsaction="click:LUvzV" jsname="z4Tpl" id="s9iPrd" aria-haspopup="true" aria-controls="yuynLe" aria-expanded="false">
								<svg class="wFCWne" viewBox="0 0 24 24" stroke="currentColor" jsname="B1n9ub" focusable="false">
									<g transform="translate(12,12)">
										<path class="hlJH0" d="M-9 -5 L9 -5" fill="none" stroke-width="2"/>
										<path class="HBu6N" d="M-9 0 L9 0" fill="none" stroke-width="2"/>
										<path class="cLAGQe" d="M-9 5 L9 5" fill="none" stroke-width="2"/>
									</g>
								</svg>
							</div>
							<nav class="JzO0Vc" style="background-color:rgb(255, 255, 255);" jsname="ihoMLd" role="navigation" id="yuynLe" jsaction="transitionend:UD2r5">
								<a class="XMyrgf">
									<img src="https://drive.google.com/uc?id=1erzslRiku0Vu45pMz3YgQyhf7P0JYMai" href ="https://www.energiaemobilitasostenibile.org/" class="r9CsCb" role="img" aria-label="EMS Associazione di Promozione Sociale Energia e Mobilità Sostenibile">
								</a>
								<div class="Hnbbrb">Menu
								</div>
								<ul class="jYxBte Fpy8Db" role="navigation">
									<li jsname="ibnC6b" nav-level="1">
										<div class="PsKE7e r8s4j-R6PoUb IKA38e baH5ib">
											<div>
												<a class="aJHbb dk90Ob hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="0" href="https://www.energiaemobilitasostenibile.org/home" data-url="https://www.energiaemobilitasostenibile.org/home" data-type="1" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Home
												</a>
											</div>
										</div>
									</li>
									<li jsname="ibnC6b" nav-level="1">
										<div class="PsKE7e r8s4j-R6PoUb IKA38e baH5ib">
											<div>
												<a class="aJHbb dk90Ob hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.google.com/url?q=https%3A%2F%2Fmedium.com%2Funivems&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGp2DSBtWRxXX2lg4j64-cg1B-8Kg" data-url="https://www.google.com/url?q=https%3A%2F%2Fmedium.com%2Funivems&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGp2DSBtWRxXX2lg4j64-cg1B-8Kg" data-type="2" target="_blank" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Blog Eventi
												</a>
											</div>
										</div>
									</li>
									<li jsname="ibnC6b" nav-level="1">
										<div class="PsKE7e r8s4j-R6PoUb IKA38e baH5ib">
											<div>
												<a class="aJHbb dk90Ob hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/it" data-url="https://www.energiaemobilitasostenibile.org/it" data-type="2" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Language
												</a>
											</div>
										</div>
									</li>
									<li jsname="ibnC6b" nav-level="1">
										<div class="PsKE7e r8s4j-R6PoUb IKA38e baH5ib">
											<div>
												<a class="aJHbb dk90Ob hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/ems-trieste" data-url="https://www.energiaemobilitasostenibile.org/ems-trieste" data-type="1" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">EMS Trieste
												</a>
											</div>
										</div>
									</li>
									<li jsname="ibnC6b" nav-level="1">
										<div class="PsKE7e r8s4j-R6PoUb IKA38e baH5ib">
											<div>
												<a class="aJHbb dk90Ob hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/dona-il-5x1000" data-url="https://www.energiaemobilitasostenibile.org/dona-il-5x1000" data-type="1" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Dona il 5x1000
												</a>
											</div>
										</div>
									</li>
								</ul>
							</nav>
							<div class="VLoccc K5Zlne QDWEj" style="background-color:rgb(255, 255, 255);" jsname="rtFGi">
								<div class="Pvc6xe">
									<div jsname="I8J07e" class="TlfmSc">
										<a class="GAuSPc" jsname="jIujaf">
											<img src="https://drive.google.com/uc?id=1erzslRiku0Vu45pMz3YgQyhf7P0JYMai" href ="https://www.energiaemobilitasostenibile.org/" class="lzy1Td" role="img" aria-label="EMS Associazione di Promozione Sociale Energia e Mobilità Sostenibile" jsname="SwcDWb">
										</a>&nbsp;
									</div>
									<nav class="plFg0c" jscontroller="VkUb1d" jsaction="rcuQ6b:rcuQ6b;oVnJLd:CfS0pe;" id="WDxLfe" style="visibility: hidden;">
										<ul jsname="waIgnc" class="K1Ci7d oXBWEc jYxBte">
											<li jsname="ibnC6b" nav-level="1" class="VsJjtf">
												<div class="PsKE7e qV4dIc Qrrb5">
													<div>
														<a class="aJHbb dk90Ob jgXgSe HlqNPb" jsname="QwLHlb" role="link" tabindex="0" href="https://www.energiaemobilitasostenibile.org/home" data-url="https://www.energiaemobilitasostenibile.org/home" data-type="1" title="Home" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Home
														</a>
													</div>
												</div>
												<div class="rgLkl">
													
												</div>
											</li>
											<li jsname="ibnC6b" nav-level="1" class="VsJjtf">
												<div class="PsKE7e qV4dIc Qrrb5">
													<div>
														<a class="aJHbb dk90Ob jgXgSe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.google.com/url?q=https%3A%2F%2Fmedium.com%2Funivems&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGp2DSBtWRxXX2lg4j64-cg1B-8Kg" data-url="https://www.google.com/url?q=https%3A%2F%2Fmedium.com%2Funivems&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGp2DSBtWRxXX2lg4j64-cg1B-8Kg" data-type="2" target="_blank" title="Blog Eventi" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Blog Eventi
														</a>
													</div>
												</div>
												<div class="rgLkl">
													
												</div>
											</li>
											<li jsname="ibnC6b" nav-level="1" class="VsJjtf">
												<div class="PsKE7e qV4dIc Qrrb5">
													<div>
														<a class="aJHbb dk90Ob jgXgSe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/it" data-url="https://www.energiaemobilitasostenibile.org/it" data-type="2" title="Language" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Language
														</a>
													</div>
												</div>
												<div class="rgLkl">
													
												</div>
											</li>
											<li jsname="ibnC6b" nav-level="1" class="VsJjtf">
												<div class="PsKE7e qV4dIc Qrrb5">
													<div>
														<a class="aJHbb dk90Ob jgXgSe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/ems-trieste" data-url="https://www.energiaemobilitasostenibile.org/ems-trieste" data-type="1" title="EMS Trieste" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">EMS Trieste
														</a>
													</div>
												</div>
												<div class="rgLkl">
													
												</div>
											</li>
											<li jsname="ibnC6b" nav-level="1" class="VsJjtf">
												<div class="PsKE7e qV4dIc Qrrb5">
													<div>
														<a class="aJHbb dk90Ob jgXgSe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/dona-il-5x1000" data-url="https://www.energiaemobilitasostenibile.org/dona-il-5x1000" data-type="1" title="Dona il 5x1000" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">Dona il 5x1000
														</a>
													</div>
												</div>
												<div class="rgLkl">
													
												</div>
											</li>
											<li jsname="ibnC6b" nav-level="1" class="VsJjtf ZmrVpf oXBWEc" more-menu-item jsaction="mouseenter:Vx8Jlb; mouseleave:ysDRUd">
												<div class="PsKE7e qV4dIc Qrrb5">
													<div>
														<a class="aJHbb dk90Ob jgXgSe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" aria-expanded="false" aria-haspopup="true" title="More" jsaction="keydown:mPuKz; click:vHQTA;" data-level="1">More
														</a>
														<div class="mBHtvb u5fiyc" role="presentation" title="Expand/Collapse" jsaction="click:oESVTe" jsname="ix0Hvc">
															<svg class="dvmRw" viewBox="0 0 24 24" stroke="currentColor" jsname="HIH2V" focusable="false">
																<g transform="translate(9.7,12) rotate(45)">
																	<path class="K4B8Y" d="M-4.2 0 L4.2 0" stroke-width="2"/>
																</g>
																<g transform="translate(14.3,12) rotate(-45)">
																	<path class="MrYMx" d="M-4.2 0 L4.2 0" stroke-width="2"/>
																</g>
															</svg>
														</div>
													</div>
												</div>
												<div class="oGuwee eWDljc RPRy1e Mkt3Tc" style="background-color:rgb(255, 255, 255); display:none;" jsname="QXE97" jsaction="transitionend:SJBdh" role="group">
													<ul class="VcS63b">
														<li jsname="ibnC6b" nav-level="2" class="ijMPi ZmrVpf" in-more-item>
															<div class="PsKE7e IKA38e">
																<div>
																	<a class="aJHbb hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/home" data-url="https://www.energiaemobilitasostenibile.org/home" data-type="1" title="Home" jsaction="keydown:mPuKz; click:vHQTA;" data-in-more-submenu="true" data-level="2">Home
																	</a>
																</div>
															</div>
														</li>
														<li jsname="ibnC6b" nav-level="2" class="ijMPi ZmrVpf" in-more-item>
															<div class="PsKE7e IKA38e">
																<div>
																	<a class="aJHbb hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.google.com/url?q=https%3A%2F%2Fmedium.com%2Funivems&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGp2DSBtWRxXX2lg4j64-cg1B-8Kg" data-url="https://www.google.com/url?q=https%3A%2F%2Fmedium.com%2Funivems&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGp2DSBtWRxXX2lg4j64-cg1B-8Kg" data-type="2" target="_blank" title="Blog Eventi" jsaction="keydown:mPuKz; click:vHQTA;" data-in-more-submenu="true" data-level="2">Blog Eventi
																	</a>
																</div>
															</div>
														</li>
														<li jsname="ibnC6b" nav-level="2" class="ijMPi ZmrVpf" in-more-item>
															<div class="PsKE7e IKA38e">
																<div>
																	<a class="aJHbb hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/it" data-url="https://www.energiaemobilitasostenibile.org/it" data-type="2" title="Language" jsaction="keydown:mPuKz; click:vHQTA;" data-in-more-submenu="true" data-level="2">Language
																	</a>
																</div>
															</div>
														</li>
														<li jsname="ibnC6b" nav-level="2" class="ijMPi ZmrVpf" in-more-item>
															<div class="PsKE7e IKA38e">
																<div>
																	<a class="aJHbb hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/ems-trieste" data-url="https://www.energiaemobilitasostenibile.org/ems-trieste" data-type="1" title="EMS Trieste" jsaction="keydown:mPuKz; click:vHQTA;" data-in-more-submenu="true" data-level="2">EMS Trieste
																	</a>
																</div>
															</div>
														</li>
														<li jsname="ibnC6b" nav-level="2" class="ijMPi ZmrVpf" in-more-item>
															<div class="PsKE7e IKA38e">
																<div>
																	<a class="aJHbb hDrhEe HlqNPb" jsname="QwLHlb" role="link" tabindex="-1" href="https://www.energiaemobilitasostenibile.org/dona-il-5x1000" data-url="https://www.energiaemobilitasostenibile.org/dona-il-5x1000" data-type="1" title="Dona il 5x1000" jsaction="keydown:mPuKz; click:vHQTA;" data-in-more-submenu="true" data-level="2">Dona il 5x1000
																	</a>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</nav>
									<div jscontroller="jUZbMd" class="RBEWZc" jsname="h04Zod" jsaction="rcuQ6b:WYd;JIbuQc:AT95Ub;xn5xWc:HgE5D;jNQQzc:HgE5D;oVnJLd:JdcaS;" data-side-navigation="false">
										<div role="button" class="U26fgb mUbCce fKz7Od Wdnjke" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="R9oOZd" aria-label="Open search bar" aria-disabled="false" tabindex="0" data-tooltip="Open search bar" aria-expanded="false"  data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
											<div class="VTBa7b MbhUzd" jsname="ksKsZd">
												
											</div>
											<content jsslot class="xjKiLb">
												<span class="Ce1Y1c" style="top: -12px">
													<svg class="HSFYNb iWs3gf" viewBox="0 0 24 24" focusable="false">
														<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
														<path d="M0 0h24v24H0z" fill="none"/>
													</svg>
												</span>
											</content>
										</div>
									</div>
								</div>
								<div jsname="mADGA" class="zDUgLc" style="background-color:rgb(255, 255, 255);">
									
								</div>
							</div>
							<div class="TxnWlb" jsname="BDdyze" jsaction="click:LUvzV">
								
							</div>
						</div>
					</header>
					<div role="main" class="UtePc RCETm" dir="ltr">
						<section id="h.p_4mgEs87nabww" class="yaqOZd LB7kq cJgDec nyKByd O13XJf SBrW1" style="">
							<div class="Nu95r">
								<div class="yaqOZd IFuOkc" style="background-size: cover; background-position: center center; background-image: url(https://drive.google.com/uc?id=1GglttvKmRpxjsnih4Dpi4xHoxcb7p_DY);" jsname="LQX2Vd"></div>
							</div>
							<div class="mYVXT">
								<div class="LS81yb VICjCf" tabindex="-1">
									<div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc yYI8W ">
										<div class="JNdkSc-SmKAyb">
											<div class="oKdM2c">
												<div id="h.p_qZKAc6aRabw2" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc GNzUNc"><div class="jXK9ad-SmKAyb"><div class="tyJCtd mGzaTb baZpAe lkHyyc"><h1 id="h.p_h_rIVlmrabw9" class="zfr3Q duRjpb" style="text-align: center;">Dona o Diventa Socio</h1></div></div></div>
											</div>
											<div class="oKdM2c">
												<div id="h.p_bb0ZfT96aloR" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 wHaque GNzUNc"><div class="jXK9ad-SmKAyb"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_UCMVRPuoaloa" class="zfr3Q" style="text-align: center;">EMS - Energia e Mobilità Sostenibile APS</p></div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section id="h.p_E6N-VOFRf2yF" class="yaqOZd" style="">
							<div class="yaqOZd IFuOkc"></div><div class="mYVXT">
								<div class="LS81yb VICjCf" tabindex="-1">
									<div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
										<div class="JNdkSc-SmKAyb">
											<div class="oKdM2c"><div id="h.p_m7dUBC8kf2x4" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc"><div class="jXK9ad-SmKAyb"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_uZkxYfkzf2yB" class="zfr3Q">Per realizzare i progetti in programma EMS ha bisogno del Vostro supporto!</p><p id="h.p_wG8Pgd52Jy7P" class="zfr3Q">Ogni piccolo contributo facilita il nostro lavoro per dare vita al progetto <a class="dhtgD" href="https://www.energiaemobilitasostenibile.org/it/mwacademy"><strong>MegaWatt Academy</strong></a> e permetterci di portare conoscenza sugli argomenti di Energia e Mobilità Sostenibile negli Atenei Italiani.</p></div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						


						<section id="h.p_twOuT_itN480" class="yaqOZd WxWicb" style="">
							<div class="yaqOZd IFuOkc"></div><div class="mYVXT">
								<div class="LS81yb VICjCf" tabindex="-1">
									<div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc"><div class="JNdkSc-SmKAyb">
										<div class="oKdM2c"><div id="h.p_wTMgm1aqN484" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque"><div class="jXK9ad-SmKAyb"><div class="tyJCtd baZpAe"><div class="iwQgFb" role="presentation">

	<!-- Load Stripe.js on your website. -->
	<script src="https://js.stripe.com/v3"></script>

	<!-- Quota Associativa -->
	<button
	style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
	id="checkout-button-plan_F3BniqoWKkEScc"
	role="link"
	>
	Paga Quota Associativa Annuale (15€)
</button>

<div id="error-message"></div>

<script>
	var stripe = Stripe('pk_live_JGqQsMsj90FCfe9rmpGoJwmk002dwohNL9');

	var checkoutButton = document.getElementById('checkout-button-plan_F3BniqoWKkEScc');
	checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
    	items: [{plan: 'plan_F3BniqoWKkEScc', quantity: 1}],

      // Note that it is not guaranteed your customers will be redirected to this
      // URL *100%* of the time, it's possible that they could e.g. close the
      // tab between form submission and the redirect.
      successUrl: window.location.protocol + '//www.energiaemobilitasostenibile.org/success',
      cancelUrl: window.location.protocol + '//www.energiaemobilitasostenibile.org/canceled',
    })
    .then(function (result) {
    	if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
</script>




</div></div></div></div></div></div></div></div></div>

	<section id="h.p_hTnpKAClqd6i" class="yaqOZd" style=""><div class="yaqOZd IFuOkc"></div><div class="mYVXT"><div class="LS81yb VICjCf" tabindex="-1"><div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc"><div class="JNdkSc-SmKAyb"><div class="oKdM2c"><div id="h.p_XecJTCZYqd6E" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc"><div class="jXK9ad-SmKAyb"><div class="tyJCtd mGzaTb baZpAe"><p id="h.p_ykOL9h3cqd6a" class="zfr3Q"><br></p><p id="h.p_518zqtQ_qfNe" class="zfr3Q"><br></p><p id="h.p_bEAUq4yDqfP0" class="zfr3Q"><br></p><p id="h.p_R_WTy7ICqfSa" class="zfr3Q"><br></p><p id="h.p_rXMnNx54qfVD" class="zfr3Q"><br></p><p id="h.p_T2KdCj0VqfWx" class="zfr3Q"><br></p><p id="h.p_J84CEvCmqfZB" class="zfr3Q"><br></p><p id="h.p_r6cJlZoyqfbZ" class="zfr3Q"><br></p></div></div></div></div></div></div></div></div></section>


<div class="yaqOZd IFuOkc"></div><div class="mYVXT"><div class="LS81yb VICjCf" tabindex="-1"><div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc"><div class="JNdkSc-SmKAyb"><div class="oKdM2c"><div id="h.p_wTMgm1aqN484" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque"><div class="jXK9ad-SmKAyb"><div class="tyJCtd baZpAe"><div class="iwQgFb" role="presentation">
	<?php 

	$PLAN_ID = array 
	(   'single'   => 'sku_F3bNWSHnyfX71d'   ,
		'monthly'  => 'plan_F3qcyeIhHvgEMb'   ,
		'annually' => 'plan_F3qcK1A3GmLldP'
	);

	if(!(array_key_exists('quantity',$_REQUEST) && array_key_exists('frequency',$_REQUEST)))
	{
		$quantity = 10;
		$frequency = "single";
	}
	else
	{
		$quantity = $_REQUEST['quantity'];
		$frequency = $_REQUEST['frequency'];
	}
	$plan = $PLAN_ID[$frequency];



	?>   
	
	<!-- Load Stripe.js on your website. -->
	<script src="https://js.stripe.com/v3"></script>

	<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
	<button
	style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
	id="checkout-button-<?php echo $plan ?>"
	role="link"
	>
	Dona <?php echo $quantity ?>€ a EMS
	<?php
	if ($frequency == 'single') echo '';
	else
		if ($frequency == 'monthly') echo 'Mensilmente';
	else echo 'Annualmente';
	?>
</button>


<form method="get">
	<b>Seleziona quanto vuoi donare: </b>

	<input style='width: 5em;' type='number' name='quantity' min='10' value='<?php echo $quantity ?>'>
	Euro<br>
	<b>Frequenza con cui vuoi donare: </b>
	<select name="frequency">
		<option value="single" <?php if($frequency == "single") echo ' selected' ?> >Singola</option>
		<option value="monthly" <?php if($frequency == "monthly") echo ' selected' ?> >Mensile</option>
		<option value="annually" <?php if($frequency == "annually") echo ' selected' ?> >Annuale</option>
	</select><br>
	<button type='submit' >Aggiorna il pulsante donazione</button>
</form> 


<div id="error-message"></div>

<script>
	var quantity = <?php echo $quantity ?>;
	var plan = "<?php echo $plan ?>";
	var stripe = Stripe('pk_live_JGqQsMsj90FCfe9rmpGoJwmk002dwohNL9');

	var checkoutButton = document.getElementById('checkout-button-' + plan);
	checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
    	items: [{<?php if($frequency == 'single') echo 'sku'; else echo 'plan'; ?>: plan, quantity: quantity}],

      // Note that it is not guaranteed your customers will be redirected to this
      // URL *100%* of the time, it's possible that they could e.g. close the
      // tab between form submission and the redirect.
      successUrl: window.location.protocol + '//www.energiaemobilitasostenibile.org/success',
      cancelUrl: window.location.protocol + '//www.energiaemobilitasostenibile.org/canceled',
    })
    .then(function (result) {
    	if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
</script>


</div></div></div></div></div></div></div></div></div></section>



						<section id="h.p_rVK9BM1-nhtS" class="yaqOZd" style="">
							<div class="yaqOZd IFuOkc">
								
							</div>
							<div class="mYVXT">
								<div class="LS81yb VICjCf" tabindex="-1">
									<div class="hJDwNd-AhqUyc-II5mzb JNdkSc L6cTce-purZT L6cTce-pSzOP">
										<div class="JNdkSc-SmKAyb">
											
										</div>
									</div>
									<div class="hJDwNd-AhqUyc-II5mzb purZT-AhqUyc-II5mzb pSzOP-AhqUyc-II5mzb JNdkSc">
										<div class="JNdkSc-SmKAyb">
											<div class="oKdM2c">
												<div id="h.p_OXn3dbXdoAn4" class="hJDwNd-AhqUyc-II5mzb jXK9ad D2fZ2 OjCsFc wHaque">
													<div class="jXK9ad-SmKAyb">
														<div class="tyJCtd baZpAe">
															<div role="presentation" class="U26fgb IQ7i7e QmpIrf" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow aria-label="Gruppo Telegram" aria-disabled="false" data-tooltip="Gruppo Telegram"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
																<a class="FKF6mc TpQm9d QmpIrf" href="http://www.google.com/url?q=http%3A%2F%2Ft.me%2FUnivEMS&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNHJ6-G3lVlm9Ycfo23rJOnaOKPUdQ" target="_blank" aria-label="Gruppo Telegram">
																	<content jsslot>
																		<div class="IGvtUd QihKse" jsname="HHHCce">
																			<p>Gruppo Telegram
																			</p>
																		</div>
																	</content>
																	<div class="ruL1Hb" jsname="ksKsZd">
																		
																	</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>


</div><div class="Xpil1b"></div>


<footer aria-hidden="false">


	<section id="h.s_y6Kc_wdfQHkg" class="yaqOZd" style=""><div class="yaqOZd IFuOkc"></div><div class="mYVXT"><div class="LS81yb VICjCf" tabindex="-1"><div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc"><div class="JNdkSc-SmKAyb"><div class="oKdM2c"><div id="h.s_W5U_7-h8QHka" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc"><div class="jXK9ad-SmKAyb"><div class="tyJCtd mGzaTb baZpAe"><small id="h.s_1Jz89UuYQHkd" class="zfr3Q TMjjoe" style="display: block;"><a class="dhtgD" href="https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fenergiaemobilitasostenibile.org%2Fwww%2Fdona-il-5x1000&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNHJY4lkJV0LGLmcDmBdTACckfNf0g" target="_blank"><strong>Dona il tuo 5x1000!</strong></a><strong> </strong>Inserisci il nostro Codice Fiscale nella dichiarazione dei redditi:  <strong>921 944 303 41</strong></small><small id="h.s_RaEjGKpcQaTZ" class="zfr3Q TMjjoe" style="display: block;"><br></small><small id="h.s_KDAnh4iOQadk" class="zfr3Q TMjjoe" style="display: block;">Mail di contatto: <a class="dhtgD" href="mailto:info@energiaemobilitasostenibile.org" target="_blank">info@energiaemobilitasostenibile.org</a></small></div></div></div></div></div></div></div></div></section></footer>

<footer class="BCtCv" jscontroller="HSKGsf" jsaction="rcuQ6b:WYd;" data-create-site-url="https://sites.google.com/new/?usp=viewer_footer"><div class="uByue"><div class="yYF4Mc"><div><div class="qmpcfe">Made with the new Google&nbsp;Sites<span class="uabEyd">, an effortless way to create beautiful&nbsp;sites.</span></div><div class="qIzFn"><div class="tT6kpe"><button class="f8sasc" jsaction="click:ksR11e;">Create a site</button></div><div class="CvWMXb" role="button" tabindex="0" jscontroller="WF0Kbf" data-abuse-proto="%.@.null,null,&quot;https://sites.google.com/energiaemobilitasostenibile.org/www/diventa-socio&quot;,null,null,[]
	,[]
	]
	" jsaction="rcuQ6b:npT2md;click:dQ6O0c;"><span class="DLHR6">Report abuse</span></div></div></div></div></div></footer></div></div><script type="text/javascript">DOCS_timing['cov']=new Date().getTime();</script><script src="https://www.gstatic.com/_/atari/_/js/k=atari.vw.en_US.1oz6QPkZqg0.O/d=1/rs=AGEqA5n-Vm8xy-jlVXeWPrF0ZUlOhd4NOA/m=view"></script></div></div>





</body></html>
